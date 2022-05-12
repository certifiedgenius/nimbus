<!-- Main content of the page goes under here-->
<section class="md:container md:mx-auto body-font">
		<div class="container relative items-center w-full py-6 mx-auto md:px-12 lg:px-24 max-w-full">




            <article <?php post_class('border w-2/4 mx-auto border-gray-400 rounded-lg md:p-4 bg-white sm:py-3 py-4 px-2 m-10'); ?> id="post-<?php the_ID(112962); ?>">

                <div role="presentation">
                    <div>
                        <div class="m-2">
                        <div class="flex items-center">

                            <div class="mr-2">
                                <a href="<?php the_permalink(); ?>">
                                    <?php _e(get_avatar(get_the_author_meta('first_name', 'last_name'), $size = '50')); ?> <!-- the author profile picture -->
                                </a>
                            </div>

                            <div>
                                <p>
                                    <a href="<?php the_permalink(); ?>" class="text text-gray-700 text-sm hover:text-blue-600"> <?php the_author(); ?> </a>
                                </p>
                                    <a href="<?php the_permalink(); ?>" class="hover:text-blue-600">
                                        <span> <?php the_date() ?> </span>
                                    </a>
                            </div>

                        </div>
                        </div>


                        <div class="pl-12 md:pl-10 xs:pl-10">


                        <!-- the title link -->
                        <a href="<?php the_permalink(); ?>">
                            <h2 class="text-2xl font-bold mb-2 hover:text-blue-600 leading-7">
                                <?php the_title(); ?>
                            </h2>
                        </a>



                        <!-- category tags -->
                        <div class="mb-2">

                            <a href="" class="text-sm text-gray-600 p-1 hover:text-blue-600">
                                <?php the_taxonomies('<span class="text-opacity-50">', '</span><span class="text-opacity-50">', '</span>'); ?>
                            </a>

                            <a href="" class="text-sm text-gray-600 p-1 hover:text-black">
                                <?php the_tags('<span class="text-opacity-50">', '</span><span class="text-opacity-50">', '</span>'); ?>
                            </a>
                        </div>




                        <!-- the excerpt -->
                        <div class="mb-1 leading-6">
                            <?php the_excerpt(); ?>
                        </div>


                        

                        <div class="flex justify-between items-center">
                            <div class="flex">


                                <!-- comments -->
                                <a href="<?php the_permalink(); ?>" class="py-1 pl-1 pr-2 text-gray-600 text-sm rounded hover:bg-gray-100 hover:text-black">
                                    <svg class="inline fill-current" width="24" height="24" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10.5 5h3a6 6 0 110 12v2.625c-3.75-1.5-9-3.75-9-8.625a6 6 0 016-6zM12 15.5h1.5a4.501 4.501 0 001.722-8.657A4.5 4.5 0 0013.5 6.5h-3A4.5 4.5 0 006 11c0 2.707 1.846 4.475 6 6.36V15.5z"></path>
                                    </svg>
                                    <span class="hidden md:inline"> <?php comments_number(); ?> </span>
                                </a>
                            </div>


                            <!-- reading time -->
                            <div class="flex items-center">
                                <small class="mr-2 text-gray-600">8 min read</small>
                                <button type="button" class="bg-gray-400 rounded text-sm px-3 py-2 text-current hover:text-black hover:bg-gray-500">
                                <span>Save</span>
                                </button>
                            </div>


                        </div>
                        </div>
                    </div>
                </div>
            </article>




    </div>
</section>