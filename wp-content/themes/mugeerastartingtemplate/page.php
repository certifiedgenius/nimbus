<?php get_header(); ?>



			<!-- The Hero below the nav | The component "section hero" section -->
			<?php get_template_part( slug: 'template-parts/section', name: 'hero' ); ?>




			<!-- Main loop to check for all my post -->
			<?php if ( have_posts() )
				: while ( have_posts() ) : the_post(); ?>




								<!-- The component "content-page.php" to be added in page.php -->
								<?php get_template_part( slug: 'template-parts/content', name: 'page' ); ?>


				<?php
					endwhile;

					else :
						_e( 'Sorry, no posts matched your criteria.', 'textdomain' );
					endif;
				?>



								<!-- Leave a comment | comments.php template -->
								<?php comments_template(); ?>


								<!-- Comment Section | content-comments.php -->
								<?php get_template_part( slug: 'template-parts/content', name: 'comments' ); ?>




<?php get_footer(); ?>