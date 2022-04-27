<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport"
		      content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title><?php wp_title( '|', true, 'right' ); ?></title>
        <meta name="description" content="">
        <meta name="author" content="">

        <meta property="og:title" content="">
        <meta property="og:type" content="">
        <meta property="og:url" content="">
        <meta property="og:description" content="">
        <meta property="og:image" content="">

        <!-- CSS _e() -->



        <!--<link rel="icon" href="/favicon.ico">
        <link rel="icon" href="/favicon.svg" type="image/svg+xml">
        <link rel="apple-touch-icon" href="/apple-touch-icon.png"> -->

		<?php wp_head(); ?>
	</head>


    <body <?php body_class(); ?>>


        <header>
            <div><!-- Logo --></div>
	        <?php wp_nav_menu( [
                'theme_location' => 'primary',
                'container' => 'nav',
                'depth' => 1,
            ] ); ?>
        </header>
        
<?php
if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php if( is_sticky() ) : ?>

        <div style="background-color: indianred; color:#fff; padding: 20px; position: fixed;">
            <?php the_title(); ?>
        </div>


<?php endif; endwhile; endif; rewind_posts(); ?>