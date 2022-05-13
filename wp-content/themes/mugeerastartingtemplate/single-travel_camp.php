<?php get_header();?>



                <!-- The Hero below the nav | The component "section hero" -->
		<?php get_template_part( slug: 'template-parts/section', name: 'hero' ); ?>




    <!-- Main content of the page goes under here-->
    <section class="md:container md:mx-auto body-font">
	<div class="container relative items-center w-full py-6 mx-auto md:px-12 lg:px-24 max-w-full">


                <!-- hero card under the big hero hero | The component "section Hero Card" -->
		<?php get_template_part( slug: 'template-parts/section', name: 'herocard' ); ?>




                <!-- Trip Details Section & Travel tips gallery | The component "section Travel Gallery" -->
                <?php get_template_part( slug: 'template-parts/section', name: 'travelgallery' ); ?>


                <?php
    $sportresor = new WP_Query ([
        'post_type' => 'travel_matches',
        'posts_per_page' => '1'
    ])
?>

<?php
    if ( $sportresor->have_posts() ) :
        while( $sportresor->have_posts() ) : $sportresor->the_post();
?>

<?php the_content(); ?>

<?php wp_reset_query(); ?>
<?php endwhile; endif; ?>
                <!-- Reviews Section | The component "section Reviews" -->
                <!-- Reviews Section | name: 'travel' -->
                <!-- Reviews Section | get_post_type, to check what post type it is, featured travel camp, create a new template part file for every variation, you could also have one specific for every template -->
                <?php get_template_part( slug: 'template-parts/section', name: 'reviews' ); ?>




                <!-- Latest Updates/News Section | The component "section latest Updates" -->
                <?php get_template_part( slug: 'template-parts/section', name: 'latestupdates' ); ?>




                <!-- Newsletter Section -->
                <?php get_template_part( slug: 'template-parts/section', name: 'newsletter' ); ?>


        </div>
        </section>




    <?php get_footer(); ?>