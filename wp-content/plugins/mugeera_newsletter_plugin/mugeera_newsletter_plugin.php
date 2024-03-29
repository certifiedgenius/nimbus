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
        array('jquery'),
        1,
        'true'
    );
}



add_action("wp_ajax_handle_newsletter", "handle_newsletter");
add_action("wp_ajax_nopriv_handle_newsletter", "handle_newsletter");

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
    $output .= $api_key ?? '';
    $output .= '" />';

    echo $output;
}


function load_shortcode($atts = [], $content = null)
{
 // add some shortcode right here.
}


// Mikko Whiteboard
function handle_newsletter()
{
    if ( ! wp_verify_nonce( $_POST['nonce'], 'wcm_newsletter_nonce' )) {
        wp_send_json(['message' => $_POST]);
        die();
    }
    
    $email = $_POST['email'];

    $args = [

        'headers' => [
            'Content-Type' => 'application/json',
            'Authorization' => 'Token ' . get_option('newsletter_setting_name'),
            'date' => the_date(),


        ],

        'body' => json_encode([
            'email' => $email, // add your e-mail you want to send with here.
        ], JSON_THROW_ON_ERROR )
    ];


    $newContactUrl = 'https://api.getanewsletter.com/v3/contacts/';


    $response = wp_remote_post($newContactUrl, $args);

    $json = json_decode(wp_remote_retrieve_body( $response ));

    wp_send_json([
        'message' => 'Allt gick bra',
    ]);
}


function newsletter_form()
{
    include plugin_dir_path(__FILE__) . 'admin/newsletter_form.php';
}
add_shortcode('newsletter_formen', 'newsletter_form');