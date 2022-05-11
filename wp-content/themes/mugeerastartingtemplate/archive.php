<?php get_header(); ?>


<section class="md:container md:mx-auto body-font">
	<div class="container relative items-center w-full py-6 mx-auto md:px-12 lg:px-24 max-w-full">

            <?php if( have_posts() ): while( have_posts() ): the_post();?>

                    <?php if(has_post_thumbnail()):?>

                        <img src="<?php the_post_thumbnail_url('blog-small');?>" alt="<?php the_title();?>" class="img-fluid mb-3 img-thumbnail mr-4">

                    <?php endif;?>


                        <div class="blog-content">

                            <h3><?php the_title();?></h3>
                            <?php the_excerpt();?>


                            <div class="mt-4">
                                <a href="<?php the_permalink();?>" class="inline-flex items-center mt-4 font-semibold text-blue-600 lg:mb-0 hover:text-neutral-600" title="Läs mer"> Läs mer » </a>
                            </div>


                            <?php previous_posts_link();?>
	                        <?php next_posts_link();?>
                        </div>





                <?php endwhile; endif;?>

    </div>
</section>
<?php get_footer(); ?>