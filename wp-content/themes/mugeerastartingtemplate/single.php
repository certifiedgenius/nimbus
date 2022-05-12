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
										while( have_posts() ) { // Determines whether current WordPress query has posts to loop over.
											the_post(); // Iterate the post index in the loop.
										}
									}
								?>


						<!-- this is the olka content near the footer that's leaking -->
						<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">




							<a href="<?php the_permalink(); ?>"> <!-- displays the permalink for the current post -->


								<h2> <?php the_title(); ?> </h2> <!-- display or retrieve the current post title -->
							</a>





							<?php the_content(); ?>
						</article>




<?php get_footer(); ?>