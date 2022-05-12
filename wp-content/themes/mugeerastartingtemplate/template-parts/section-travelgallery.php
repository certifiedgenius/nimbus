<!-- Trip Details Section -->
<h1 class="py-12 text-5xl font-bold mb-1 mt-12">Resedetaljer</h1>

<div class="p-6">
    <p class="mx-auto text-base leading-relaxed text-gray-500">Flyg tur och retur inkl. hotelltransfer.</p>
</div>


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

<!-- Travel tips gallery -->
<div class="h-1/5 overflow-hidden flex justify-center items-center">
    <div class="2xl:mx-auto 2xl:container lg:px-20 lg:py-16 md:py-12 md:px-6 py-9 px-4 w-96 sm:w-auto">

        <div class="lg:flex items-stretch md:mt-12 mt-8">
        <div class="lg:w-1/2">
            <div class="sm:flex items-center justify-between xl:gap-x-8 gap-x-6">
            <div class="sm:w-1/2 relative">
                <div>
                <p class="p-6 text-xs font-medium leading-3 text-white absolute top-0 right-0"> 17 Juni 2022 </p>
                <div class="absolute bottom-0 left-0 p-6">
                    <h2 class="text-xl font-semibold 5 text-white"> <?php the_title(); ?> </h2>
                    <p class="text-base leading-4 text-white mt-2">Dive into minimalism</p>
                    <a href="javascript:void(0)" class="focus:outline-none focus:underline flex items-center mt-4 cursor-pointer text-white hover:text-gray-200 hover:underline">
                    <p class="pr-2 text-sm font-medium leading-none">Läs mer</p>
                    <svg class="fill-stroke" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.75 12.5L10.25 8L5.75 3.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    </a>
                </div>
                </div>
                <img src="/wp-content/themes/mugeerastartingtemplate/assets/images/greeceoz.jpg" class="w-full" alt="chair" />
            </div>


            <div class="sm:w-1/2 sm:mt-0 mt-4 relative">
                <div>
                <p class="p-6 text-xs font-medium leading-3 text-white absolute top-0 right-0">12 Juni 2022</p>
                <div class="absolute bottom-0 left-0 p-6">
                    <h2 class="text-xl font-semibold 5 text-white">The Decorated Ways</h2>
                    <p class="text-base leading-4 text-white mt-2">Dive into minimalism</p>
                    <a href="javascript:void(0)" class="focus:outline-none focus:underline flex items-center mt-4 cursor-pointer text-white hover:text-gray-200 hover:underline">
                    <p class="pr-2 text-sm font-medium leading-none">Läs mer</p>
                    <svg class="fill-stroke" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.75 12.5L10.25 8L5.75 3.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    </a>
                </div>
                </div>
                <img src="/wp-content/themes/mugeerastartingtemplate/assets/images/venice.jpg" class="w-full" alt="wall design" />
            </div>
            </div>


            <div class="relative">
            <div>
                <p class="md:p-10 p-6 text-xs font-medium leading-3 text-white absolute top-0 right-0">23 December 2022</p>
                <div class="absolute bottom-0 left-0 md:p-10 p-6">
                <h2 class="text-xl font-semibold 5 text-white">The Decorated Ways</h2>
                <p class="text-base leading-4 text-white mt-2">Dive into minimalism</p>
                <a href="javascript:void(0)" class="focus:outline-none focus:underline flex items-center mt-4 cursor-pointer text-white hover:text-gray-200 hover:underline">
                    <p class="pr-2 text-sm font-medium leading-none">Läs mer</p>
                    <svg class="fill-stroke" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.75 12.5L10.25 8L5.75 3.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </a>
                </div>
            </div>
            <img src="/wp-content/themes/mugeerastartingtemplate/assets/images/china.jpg" alt="sitting place" class="w-full mt-8 md:mt-6 hidden sm:block" />
            <img class="w-full mt-4 sm:hidden" src="https://i.ibb.co/6XYbN7f/Rectangle-29.png" alt="sitting place" />
            </div>
        </div>


        <div class="lg:w-1/2 xl:ml-8 lg:ml-4 lg:mt-0 md:mt-6 mt-4 lg:flex flex-col justify-between">
            <div class="relative">
            <div>
                <p class="md:p-10 p-6 text-xs font-medium leading-3 text-white absolute top-0 right-0">3 Augusti 2022</p>
                <div class="absolute bottom-0 left-0 md:p-10 p-6">
                <h2 class="text-xl font-semibold 5 text-white">The Decorated Ways</h2>
                <p class="text-base leading-4 text-white mt-2">Dive into minimalism</p>
                <a href="javascript:void(0)" class="focus:outline-none focus:underline flex items-center mt-4 cursor-pointer text-white hover:text-gray-200 hover:underline">
                    <p class="pr-2 text-sm font-medium leading-none">Läs mer</p>
                    <svg class="fill-stroke" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.75 12.5L10.25 8L5.75 3.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </a>
                </div>
            </div>
            <img src="/wp-content/themes/mugeerastartingtemplate/assets/images/greece.jpg" alt="sitting place" class="w-full sm:block hidden" />
            <img class="w-full sm:hidden" src="https://i.ibb.co/dpXStJk/Rectangle-29.png" alt="sitting place" />
            </div>


            <div class="sm:flex items-center justify-between xl:gap-x-8 gap-x-6 md:mt-6 mt-4">
            <div class="relative w-full">
                <div>
                <p class="p-6 text-xs font-medium leading-3 text-white absolute top-0 right-0">13 November 2022</p>
                <div class="absolute bottom-0 left-0 p-6">
                    <h2 class="text-xl font-semibold 5 text-white">The Decorated Ways</h2>
                    <p class="text-base leading-4 text-white mt-2">Dive into minimalism</p>
                    <a href="javascript:void(0)" class="focus:outline-none focus:underline flex items-center mt-4 cursor-pointer text-white hover:text-gray-200 hover:underline">
                    <p class="pr-2 text-sm font-medium leading-none">Läs mer</p>
                    <svg class="fill-stroke" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.75 12.5L10.25 8L5.75 3.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    </a>
                </div>
                </div>
                <img src="/wp-content/themes/mugeerastartingtemplate/assets/images/barcelonaspain.jpg" class="w-full" alt="chair" />
            </div>


            <div class="relative w-full sm:mt-0 mt-4">
                <div>
                <p class="p-6 text-xs font-medium leading-3 text-white absolute top-0 right-0">4 September 2022</p>
                <div class="absolute bottom-0 left-0 p-6">
                    <h2 class="text-xl font-semibold 5 text-white">The Decorated Ways</h2>
                    <p class="text-base leading-4 text-white mt-2">Dive into minimalism</p>
                    <a href="javascript:void(0)" class="focus:outline-none focus:underline flex items-center mt-4 cursor-pointer text-white hover:text-gray-200 hover:underline">
                    <p class="pr-2 text-sm font-medium leading-none">Läs mer</p>
                    <svg class="fill-stroke" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.75 12.5L10.25 8L5.75 3.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    </a>
                </div>
                </div>
                <img src="/wp-content/themes/mugeerastartingtemplate/assets/images/biarritzfrance.jpg" class="w-full" alt="wall design" />
            </div>


            </div>
        </div>
        </div>
    </div>
</div>

</div>

<?php wp_reset_query(); ?>
<?php endwhile; endif; ?>