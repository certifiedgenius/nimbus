<?php

get_header();

?>


	<h1>
		<?php
		echo get_bloginfo( 'name' ); ?>
	</h1>




<div class="container">


	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>




		<!-- WP content and Wp link pages -->

		<?php wp_link_pages(); ?>

            <article
			<?php post_class(); ?> id="post- <?php the_ID(); ?>">

                <a href=" <?php the_permalink(); ?>">

					<h2>
						<?php the_title(); ?>
					</h2>
				</a>


				<!-- include from the inc folder -->
				<!-- get_template_part('inc/section', 'content'); -->



                <div id="our-post-thumbnail">
					<?php the_post_thumbnail( 'wcm-gallery' ); ?>
                </div>



				<?php the_excerpt(); ?>



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
		?>



</div>





<?php
get_footer();
?>