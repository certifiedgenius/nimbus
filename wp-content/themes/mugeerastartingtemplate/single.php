<?php get_header(); ?>




			<!-- The Hero below the nav | The component "section hero" section -->
			<?php get_template_part( slug: 'template-parts/section', name: 'hero' ); ?>



			<!-- hero card under the big hero hero | The component "section Hero Card" -->
			<?php get_template_part( slug: 'template-parts/section', name: 'herocard' ); ?>



			<!-- Trip Details Section & Travel tips gallery | The component "section Travel Gallery" -->
			<?php get_template_part( slug: 'template-parts/section', name: 'travelgallery' ); ?>



			<!-- Reviews Section | The component "section Reviews" -->
			<?php get_template_part( slug: 'template-parts/section', name: 'reviews' ); ?>




			<!-- Latest Updates/News Section | The component "section latest Updates" -->
			<?php get_template_part( slug: 'template-parts/section', name: 'latestupdates' ); ?>




			<!-- Newsletter Section | The component "Newsletter Section" -->
			<?php get_template_part( slug: 'template-parts/section', name: 'newsletter' ); ?>




								<?php
									if ( have_posts() ) {
										while( have_posts() ) {
											the_post();

											// Content | The component "Content content"
											get_template_part( slug: 'template-parts/content', name: 'content' );
										}
									}
								?>


						<article
							<?php post_class(); ?> id="post-<?php the_ID(); ?>">


							<a href="<?php the_permalink(); ?>">
								<h2> <?php the_title(); ?> </h2>
							</a>


							<!-- The component for the single page -->



							<?php the_content(); ?>
						</article>




<?php get_footer(); ?>