



    <?php
        //Get only the approved comments
        $args = array(
            'status' => 'approve'
        );

        // The comment Query
        $comments_query = new WP_Comment_Query;
        $comments = $comments_query->query( $args );
    ?>



<!-- Main content of the page goes under here-->
<section class="md:container md:mx-auto body-font">
    <div class="container relative items-center w-full py-6 mx-auto md:px-12 lg:px-24 max-w-full">




        <div class="antialiased mx-auto max-w-screen-sm">
            <h3 class="mb-4 text-lg font-semibold text-gray-900">Comments sarah</h3>

            <div class="space-y-4">

                <div class="flex">
                <div class="flex-shrink-0 mr-3">


                    <!-- the author profile picture -->
                    <?php _e(get_avatar($size = '50', $class = 'mt-2 rounded-full w-8 h-8 sm:w-10 sm:h-10')); ?>
                </div>


                <div class="flex-1 border rounded-lg px-4 py-2 sm:px-6 sm:py-4 leading-relaxed">
                    <strong> <?php the_author(); ?> </strong> <span class="text-xs text-gray-400"> <?php the_time(); ?> </span>


                    <p class="text-sm">
                        <?php
                            // Comment Loop
                            if ( $comments ) {
                                foreach ( $comments as $comment ) {
                                    echo '<p>' . $comment->comment_content . '</p>';
                                    }
                            } else {
                                echo 'No comments found.';
                            }
                        ?>
                    </p>


                    <div class="mt-4 flex items-center">

                        <div class="text-sm text-gray-500 font-semibold">
                            <?php comments_number(); ?>
                        </div>
                    </div>


                </div>
                </div>






    </div>
</section>