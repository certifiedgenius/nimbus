<!-- The Hero below the nav -->
<div
            class="
            w-full
            h-screen
            bg-center
            bg-no-repeat
            bg-cover"
            style="background-image: url('/wp-content/themes/mugeerastartingtemplate/assets/images/greece.jpg')">


                <div class="w-full h-screen bg-opacity-50 bg-black flex justify-center items-center relative">

                    <div class="mx-4 text-center text-white">

                        <h1 class="font-bold text-6xl mb-4"> <?php the_title(); ?> </h1>
                        <p class="font-bold text-3xl mb-12">
                            <?php
                                if ( have_posts() ) {
                                    while( have_posts() ) {
                                        the_post();
                                        the_content();
                                    }
                                }

                            ?></p>
                    </div>


                    <div class="absolute bottom-14">
                        <a
                            href="https://nimbus.test/kontakt/"
                            class="
                            border-2
                            border-white
                            rounded-md
                            font-bold
                            text-white
                            px-4
                            py-3
                            transition
                            duration-300
                            ease-in-out
                            hover:bg-yellow-500
                            hover:text-white mr-6">
                            Kontakta oss
                        </a>

                    </div>
                </div>
        </div>