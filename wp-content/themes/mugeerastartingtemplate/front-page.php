<?php get_header() ;?>


		<!-- search bar under the nav | The component Search Bar section -->
		<?php get_template_part( slug: 'template-parts/section', name: 'searchbar' ); ?>




		<!-- The Hero below the nav | The component "section hero" section -->
		<?php get_template_part( slug: 'template-parts/section', name: 'hero' ); ?>




		<!-- 3 Buttons for the diff categories after hero" | The component "3 button categories section -->
		<?php get_template_part( slug: 'template-parts/section', name: 'btncategories' ); ?>




		<!-- "Utvalda" featured content section 1 & 2 | The component "featured content section -->
		<?php get_template_part( slug: 'template-parts/section', name: 'featuredcontent' ); ?>




		<!-- Travel Spotlight Video Section | The component "Spotlight video section -->
		<?php get_template_part( slug: 'template-parts/section', name: 'spotlightvideo' ); ?>




		<!-- Newsletter Section | The component "newsletter section -->
		<?php get_template_part( slug: 'template-parts/section', name: 'newsletter' ); ?>




		<!-- Landing Page Utvalda Solutions section at the bottom | The component "featured solutions section -->
		<?php get_template_part( slug: 'template-parts/section', name: 'featuredsolutions' ); ?>

<?php // echo do_shortcode('[reviews_form]') ?>
<?php get_footer(); ?>