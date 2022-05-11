<!doctype html>
<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport"content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta property="og:title" content="">
        <meta property="og:type" content="">
        <meta property="og:url" content="">
        <meta property="og:description" content="">
        <meta property="og:image" content="">


		<title><?php wp_title( '|', true, 'right' ); ?></title>




        <!--<link rel="icon" href="/favicon.ico">
        <link rel="icon" href="/favicon.svg" type="image/svg+xml">
        <link rel="apple-touch-icon" href="/apple-touch-icon.png"> -->

		<?php wp_head(); ?>
	</head>

    <body <?php body_class(); ?> >


        <!--  nav bar  -->
        <section class="md:container md:mx-auto">

            <div class="container">


                <header class="flex justify-between text-black py-4 px-8">

                    <!-- Dynamic Website name -->
                    <a href=" <?php _e( esc_url ( home_url( '/' ) )); ?> " class="text-lg font-bold"> <?php _e( get_bloginfo( 'name' ) ); ?> </a>

                        <?php wp_nav_menu([
                            'theme_location'    =>  'primary',
                            'container'         =>  'nav',
                            'depth'             =>   1,
                            'items_wrap'        =>  '<ul class="flex flex-row items-center align-middle gap-4"> %3$s </ul>',
                            'menu_class'        =>  'flex flex-row items-center align-middle gap-4',
                        ]); ?>


                    <!-- Make this CTA button link dynamic -->
                    <a href="kontakt/" class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0">Kontakta oss

                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                    </a>

                </header>
            </div>
        </section>
