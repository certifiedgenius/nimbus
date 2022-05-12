<!-- Main content of the page goes under here-->
<section class="md:container md:mx-auto body-font">
    <div class="container relative items-center w-full py-6 mx-auto md:px-12 lg:px-24 max-w-full">



<h1> Comments </h1>

    <?php
        if ( !have_comments() ) {
        echo "Leave a Comment";
        }
        else {
        echo get_comments_number() ."Comments";
        }
    ?>


    </div>
</section>