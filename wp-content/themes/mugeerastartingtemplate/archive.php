<?php get_header(); ?>


<section class="md:container md:mx-auto body-font">
	<div class="container relative items-center w-full py-6 mx-auto md:px-12 lg:px-24 max-w-full">

            <?php if( have_posts() ): while( have_posts() ): the_post();?>



                    <!-- Check to see if the post has a thumbnail -->
                    <?php if(has_post_thumbnail()):?>

                        <!-- The thumbnail & alt tag -->
                        <img src="<?php the_post_thumbnail_url('blog-small');?>" alt="<?php the_title();?>" class="img-fluid mb-3 img-thumbnail mr-4">

                    <?php endif;?>


                        <div class="blog-content">


                            <!-- title for the Blog post -->
                            <h3 class="font-bold mb-5"><?php the_title();?></h3>


                            <!-- excerpt for the blog post -->
                            <?php the_excerpt();?>


                            <!-- Read more permalink -->
                            <div class="mb-12 mt-3">
                                <a
                                    href="<?php the_permalink();?>"
                                    class="inline-flex items-center mt-4 font-semibold text-blue-600 lg:mb-0 hover:text-neutral-600"
                                    title="Läs mer"> Läs mer »
                                </a>
                            </div>

                        </div>


                <?php endwhile; endif;?>


                <!-- Pagination -->
                <?php previous_posts_link();?>
	            <?php next_posts_link();?>

    </div>
</section>
<?php get_footer(); ?>