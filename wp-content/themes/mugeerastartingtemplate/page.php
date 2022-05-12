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




				<!-- Main content of the page goes under here-->
				<section class="md:container md:mx-auto body-font">
						<div class="container relative items-center w-full py-6 mx-auto md:px-12 lg:px-24 max-w-full">


							<?php
								comments_template();
							?>


						</div>
				</section>




<?php get_footer(); ?>