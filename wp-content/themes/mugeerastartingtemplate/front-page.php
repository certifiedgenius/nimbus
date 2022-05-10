<?php get_header() ;?>


		<!-- search bar under the nav | The component "section hero" -->
		<?php get_template_part( slug: 'template-parts/section', name: 'searchbar' ); ?>




		<!-- The Hero below the nav | The component "section hero" -->
		<?php get_template_part( slug: 'template-parts/section', name: 'hero' ); ?>




		<!-- 3 Buttons for the diff categories after hero" | The component "section btn categories-->
		<?php get_template_part( slug: 'template-parts/section', name: 'btncategories' ); ?>




		<!-- "Utvalda" featured content section 1 & 2 | The component "section featured content -->
		<?php get_template_part( slug: 'template-parts/section', name: 'featuredcontent' ); ?>




		<!-- Travel Spotlight Video Section | The component "section Spotlight video -->
		<?php get_template_part( slug: 'template-parts/section', name: 'spotlightvideo' ); ?>




		<!-- Newsletter Section | The component "section newsletter -->
		<?php get_template_part( slug: 'template-parts/section', name: 'newsletter' ); ?>




		<!-- Landing Page Utvalda Solutions section at the bottom | The component "section featured solutions -->
		<?php get_template_part( slug: 'template-parts/section', name: 'featuredsolutions' ); ?>


<?php get_footer(); ?>