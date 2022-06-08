<?php

/**
 * Plugin Name: Mugeera Newsletter Plugin
 * Plugin URI: https://example.com/plugins/the-basics/
 * Description: Plugin adds a newsletter function.
 * Version: 1.0.0
 * Requires at least: 5.9
 * Requires PHP: 7.4
 * Author: Mikko x Mugeera
 * Author URI: https://mugeera.com/
 * License: GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: mugeera_newsletter_plugin
 * Domain Path: /languages
 */


 // Plugin security, when they try to access your absolute URL path.
if( !defined('ABSPATH') )
{
    echo 'Your IP & Mac Address have been recorded and the authorities have been notified.';
    exit;
}


register_activation_hook( __FILE__, 'mugeera_newsletter_plugin_activated' );


// register_deactivation_hook(__FILE__, 'plugin_deactivated');


function mugeera_newsletter_plugin_activated() {
	flush_rewrite_rules();
}


// Add assets (js, css etc)
add_action('wp_enqueue_scripts', 'load_assets');

// Add shortcode
add_shortcode('newsletter', 'load_shortcode');


function load_assets()
{
    // CSS
    wp_enqueue_style(
        'simple-reviews-form',
        plugin_dir_url( __FILE__ ) . 'css/styles.css',
        array(),
        1,
        'all'
    );


    // Javascript
    wp_enqueue_script(
        'app',
        plugin_dir_url( __FILE__ ) . 'js/app.js',
        array(),
        1,
        'true'
    );
}


/**
 * Här skapar vi en ny meny i admin.
 */
add_action('admin_menu', 'newsletter_admin_menu');
function newsletter_admin_menu()
{
    add_menu_page(
        'Newsletter Menu',
        'Newsletter Settings',
        'manage_options',
        'newsletter_menu',
        'newsletter_admin_page',
        'dashicons-email-alt',
        25
    );
}



/*  View file code for menu page  */
function newsletter_admin_page()
{
    include plugin_dir_path(__FILE__) . 'admin/newsletter_admin_page.php';
}


/**
 * Lägg till settings på vår nya admin sida
 */
function newsletter_settings_init()
{
    register_setting('newsletter_menu', 'newsletter_setting_name');

    /* Create settings section */
    add_settings_section(
        'newsletter_main_settings',                    // id
        'API Settings',                               // title
        'newsletter_settings_sections_html',         // callback
        'newsletter_menu'                           // page
    );

    /* Create input for settings */
    add_settings_field(
        'newsletter_settings_field',       // id
        'API Nyckel',                     // title
        'newsletter_api_field_html',     // callback
        'newsletter_menu',              // page
        'newsletter_main_settings'     // section
    );
}
add_action('admin_init', 'newsletter_settings_init');


function newsletter_settings_sections_html()
{
    echo '<p>rad 128 Här kommer lite inställningar</p>';
}


function newsletter_api_field_html()
{
    $api_key = get_option('newsletter_setting_name');

    $output = '<input type="text" name="newsletter_setting_name" value="';
    $output .= $api_key ??
    $output .= '" />';

    echo $output;
}


function load_shortcode($atts = [], $content = null)
{
    ?>
        <!-- Landing Page Newsletter section -->
<section class="md:container md:mx-auto">
		<div class="container relative items-center w-full py-12 mx-auto mb-40 md:px-12 lg:px-24 max-w-full">

			<h1 class="flex justify-center items-center py-2 text-5xl font-bold mb-1 mt-5">Nyhetsbrev</h1>
				<p class="flex justify-center items-center py-3 mb-1 mt-5">Få uppdateringar kring spännande äventyr.</p>



				<!-- Container holding both of the forms -->
				<div class="container relative w-full py-12 mx-auto md:px-12 lg:px-24 grid place-items-center mt-11">


					<!-- Checkboxes -->
					<div id="container">
						<form action="<?php echo admin_url('admin-ajax.php') ?>" id="newsletter-form" class="flex justify-start gap-6 mb-6">

							<input type="checkbox" name="Sportresor" value="Sportresor">
							<label for="Sportresor">Sportresor</label><br>

							<input type="checkbox" name="Träningsläger" value="Träningsläger">
							<label for="Träningsläger">Träningsläger</label><br>

							<input type="checkbox" name="Cuper" value="Cuper">
							<label for="Cuper">Cuper</label><br><br>

					</div>



					<!-- E-mail input -->
					<div>
							<input
							action="handle_newsletter"
							method="#"
							type="email"
							name="email"
							class="rounded-l-lg p-4 border-t mr-0 border-b border-l text-gray-800 border-gray-200 bg-white"
							placeholder="Your E-mail"/>

							<input type="hidden" name="action" value=" <?php the_ID(); ?> ">

							<button type="submit" value="Subscribe" class="px-8 rounded-r-lg bg-yellow-400  text-gray-800 font-bold p-4 uppercase border-yellow-500 border-t border-b border-r hover:bg-yellow-600 transition duration-200"">Subscribe</button>

						</form>
					</div>


				</div>
			</div>
	</section>



	<!-- For the body section tag & div | that is in the hero component -->
	</div>
</section>



        <div id="container">

            <h1>Add an review</h1>
            <p>Please fill the form below.</p>

            <form id="reviews_form" action=" <?php echo admin_url('admin-ajax.php') ?> " method="$_POST">

            <?php wp_nonce_field('submit_reviews', 'reviews_form_nonce'); ?>

                <input name="reviewer_name" type="text" placeholder="Name">
                <input name="reviews_title" type="text" placeholder="Title">

                <textarea name="reviews_content" type="text" placeholder="Review"></textarea>

                <input type="hidden" name="reviews_post_id" value=" <?php the_ID(); ?> ">
                <input type="hidden" name="action" value="submit_reviews">

                <button class="" type="submit">Submit</button>
            </form>
        </div>
    <?php
}


// Mikko Whiteboard
function do_handle_ajax()
{
    $args = [
        'headers' => [
            'Content-Type' => 'application/json',
            'Authorization' => 'Token ' . get_option('newsletter_setting_name'),
            'date' => the_date(),


        ],
        'body' => json_encode([
            'email' => 'AmberTured@gmail.com', // add your e-mail you want to send with here.
        ], JSON_THROW_ON_ERROR )
    ];


    $url = 'https://api.getanewsletter.com/v3/lists/';


    $newContactUrl = 'https://api.getanewsletter.com/v3/contacts/';
    $response = wp_remote_post($newContactUrl, $args); // uncomment this to post

    json_decode (wp_get) //write more

    $args = [
        'headers' => [
            'Authorization' => 'Token ' . get_option('newsletter_setting_name'),

        ],
        //'body' => json_encode(['contact' => 'mugeera.mansoor@elev.medieinstitutet.se'])
    ];
    $newSubUrl = 'https://api.getanewsletter.com/v3/lists/um89hs6Y8l2aOC1rq/subscribers/';


    //$response = wp_remote_post( $url, $args );
}
add_action('wp_ajax_handle_newsletter', 'do_handle_ajax');