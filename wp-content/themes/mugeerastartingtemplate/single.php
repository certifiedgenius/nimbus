<?php get_header(); ?>




<div class="">



	<?php if ( have_posts() ) :while ( have_posts() ) : the_post(); ?>


            <article
				<?php post_class(); ?> id="post-<?php the_ID(); ?>">


				<a href="<?php the_permalink(); ?>">
					<h2> <?php the_title(); ?> </h2>
				</a>


				<!-- The component for the single page -->
				


				<?php the_content(); ?>
			</article>



			<?php
			endwhile;

			if ( is_single() ) :
				previous_post_link();
				next_post_link();
			endif;
		else :
			_e( 'Sorry, no posts matched your criteria.', 'textdomain' );
		endif;

		wp_reset_query();
		?>

</div>


<?php get_footer(); ?>