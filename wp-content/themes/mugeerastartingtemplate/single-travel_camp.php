<?php get_header(); ?>










<section class="md:container md:mx-auto body-font">
	<div class="container relative items-center w-full py-6 mx-auto md:px-12 lg:px-24 max-w-full">






		<!-- The logic to show each post etc.. -->
		<?php
			if ( have_posts() ) :while ( have_posts() ) : the_post();
		?>


				<article
					<?php post_class(); ?> id="post-<?php the_ID(); ?>">

					<a href="<?php the_permalink(); ?>"><h2> <?php the_title(); ?> </h2></a>

					<?php get_template_part( slug: 'template-parts/content', name: 'thumbnail' ); ?>

					<?php the_content(); ?>
				</article>



				<!-- The logic for the pagination -->
				<?php
					endwhile;

					if ( is_single() ) :
						previous_post_link();
						next_post_link();
					endif;
					else :
					_e( 'Sorry, no posts matched your criteria.', 'textdomain' );
					endif;
				?>

	</div>
</section>


<?php get_footer(); ?>