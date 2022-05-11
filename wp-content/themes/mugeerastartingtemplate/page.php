<?php get_header(); ?>




			<!-- The Hero below the nav | The component "section hero" section -->
			<?php get_template_part( slug: 'template-parts/section', name: 'hero' ); ?>




		<!-- Main loop to check for all my post -->
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>



					<article
						<?php post_class(); ?> id="post-<?php the_ID(); ?>">


						<!-- Title Link -->
						<a href="<?php the_permalink(); ?>">
							<h2> <?php the_title(); ?> </h2>
						</a>





						<!-- The component "content-page.php" to be added in page.php -->
						<?php get_template_part( slug: 'template-parts/content', name: 'page' ); ?>




						<div id="our-post-thumbnail">
							<?php the_post_thumbnail( 'wcm-gallery' ); ?>
						</div>


						<?php the_excerpt(); ?>
					</article>

			<?php
				endwhile;

				else :
					_e( 'Sorry, no posts matched your criteria.', 'textdomain' );
				endif;
			?>
	</div>






<?php get_footer(); ?>