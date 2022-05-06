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
        <header class="flex justify-between text-black py-4 px-8">

            <a href="#" class="text-lg font-bold">nimbus</a>

                <?php wp_nav_menu([
                    'theme_location' => 'primary',
                    'container' => 'nav',
                    'depth' => 1,
                    'menu_class' => 'flex flex-row items-center align-middle gap-4',
                ]); ?>


            <button href="#" class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0">CTA
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                </svg>
            </button>

        </header>