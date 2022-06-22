<!-- "Utvalda" featured content section 1 -->
<section class="md:container md:mx-auto">
	<div class="container relative items-center w-full py-12 mx-auto md:px-12 lg:px-24 max-w-full">

        <h1 class="py-12 text-5xl font-bold mb-1 mt-12">Utvalda Resor</h1>

        <div class="grid w-full grid-cols-1 gap-6 mx-auto lg:grid-cols-3">



<?php
    $natr = new WP_Query ([
            'post_type' => 'travel_matches',
            'posts_per_page' => '3'

    ])
?>


<?php
    if ( $natr->have_posts() ) :
            while( $natr->have_posts() ) : $natr->the_post();
?>


            <div class="p-6">
                <img class="object-cover object-center w-full mb-8 lg:h-48 md:h-36 rounded-xl" src="/wp-content/themes/mugeerastartingtemplate/assets/images/austria.jpg" alt="blog">

                <h1 class="mx-auto mb-8 text-2xl font-semibold leading-none tracking-tighter text-neutral-600 lg:text-3xl"> <?php the_title(); ?> </h1>
                <p class="mx-auto text-base leading-relaxed text-gray-500"> <?php the_excerpt(); ?> </p>

                <div class="mt-4">
                    <a href=" <?php the_permalink(); ?> " class="inline-flex items-center mt-4 font-semibold text-blue-600 lg:mb-0 hover:text-neutral-600" title="Läs mer"> Läs mer » </a>
                </div>
            </div>




    <?php wp_reset_query(); ?>
    <?php endwhile; endif; ?>


    </div>

</div>
</section>




<!-- "Utvalda" featured content section 2 -->
<section class="md:container md:mx-auto">
	<div class="container relative items-center w-full py-12 mx-auto md:px-12 lg:px-24 max-w-full">

        <h1 class="py-12 text-5xl font-bold mb-1 mt-12">Utvalda Resor</h1>

        <div class="grid w-full grid-cols-1 gap-6 mx-auto lg:grid-cols-3">




<?php
    $travel = new WP_Query ([
            'post_type' => 'travel_soccer',
            'posts_per_page' => '3'

    ])
?>


<?php
    if ( $travel->have_posts() ) :
            while( $travel->have_posts() ) : $travel->the_post();
?>


            <div class="p-6">
                <img class="object-cover object-center w-full mb-8 lg:h-48 md:h-36 rounded-xl" src="/wp-content/themes/mugeerastartingtemplate/assets/images/austria.jpg" alt="blog">

                <h1 class="mx-auto mb-8 text-2xl font-semibold leading-none tracking-tighter text-neutral-600 lg:text-3xl"> <?php the_title(); ?> </h1>
                <p class="mx-auto text-base leading-relaxed text-gray-500"> <?php the_excerpt(); ?> </p>

                <div class="mt-4">
                    <a href=" <?php the_permalink(); ?> " class="inline-flex items-center mt-4 font-semibold text-blue-600 lg:mb-0 hover:text-neutral-600" title="Läs mer"> Läs mer » </a>
                </div>
            </div>




    <?php wp_reset_query(); ?>
    <?php endwhile; endif; ?>


        </div>

    </div>
</section>