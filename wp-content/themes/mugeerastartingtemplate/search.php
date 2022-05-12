<?php get_header(); ?>




					<!-- search bar under the nav | The component Search Bar section -->
					<?php get_template_part( slug: 'template-parts/section', name: 'searchbar' ); ?>



	<!-- under search bar -->
	<h1 class="flex justify-center items-center py-2 text-5xl font-bold mb-1 mt-14">Sökresultat</h1>




		<?php
			if ( have_posts() ) :
				while ( have_posts() ) : the_post();
		?>



					<!-- article -->

						<!-- the search results | The component "search content" section -->
						<?php get_template_part( slug: 'template-parts/content', name: 'search' ); ?>


						

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




<?php get_footer(); ?>