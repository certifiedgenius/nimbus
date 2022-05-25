<?php

/**
 * Plugin Name: Mugeera Reviews Plugin
 * Plugin URI: https://mugeera.com/
 * Description: Add a customer reviews section to your wordpress site plugin.
 * Version: 1.0.0
 * Requires at least: 5.9
 * Requires PHP: 7.4
 * Author: Mugeera M.
 * Author URI: https://mugeera.com/
 * License:
 * License URI:
 * Text Domain: mugeera-reviews-plugin
 * Domain Path: /languages
 */


// Plugin security, get this when they try to access your absolute URL path.
if( !defined('ABSPATH') )
{
    echo 'get yo ugly ass out of here, before i whoop your mums Wi-Fi.';
    exit;
}


// to start the plugin
register_activation_hook(__FILE__, 'plugin_activated');




// register_deactivation_hook(__FILE__, 'plugin_deactivated');




function plugin_activated()
{
     // Create custom post types
    flush_rewrite_rules();
}




class simpleReviewsForm {

    public function __construct()
    {

        // Create custom post type
        function reviews() {
            register_post_type( 'wcm_reviews', [
                'labels'      => [
                    'name'          => ( 'Reviews Setting' ),
                    'singular_name' => ( 'Reviews Setting' ),

                ],
                'public'      => true,
                'has_archive' => true,
                'supports'    => ['title', 'editor', 'author', 'thumbnail', 'excerpt'],
                'rewrite'     => ['slug' => 'reviews'],
                'menu_icon'   => 'dashicons-testimonial',
                'description' => 'Create a CPT for called reviews.',

                array(
                    'post_title'   => 'Test',
                    'post_content' => 'Test',
                    'post_status'  => 'publish',
                    'post_author'  =>  1,
                    'post_type'    => 'reviews',
                    'meta_input'    => [
                        'reviewer' => 'reviews',
                        'post_id' => ''
                    ]
                    ),
                    'supports' => [
                        'custom-fields' => "",
                    ]

            ]);
        }
        add_action( 'init', 'reviews', );



        // Add assets (js, css etc)
        add_action('wp_enqueue_scripts', array($this, 'load_assets'));

        // Add shortcode
        add_shortcode('reviews-form', array($this, 'load_shortcode')); // loads code on line 119
    }


    public function load_assets()
    {
        // CSS
        wp_enqueue_style(
            'simple-reviews-form',
            plugin_dir_url( __FILE__ ) . 'css/simple-reviews-form.css',
            array(),
            1,
            'all'
        );


        // Javascript
        wp_enqueue_script(
            'simple-reviews-form',
            plugin_dir_url( __FILE__ ) . 'js/simple-reviews-form.js',
            array(),
            1,
            'true'
        );
    } // func load assets end


    public function load_shortcode($atts = [], $content = null)
    {
        ?>
            <div>

                <h1>Add an review</h1>
                <p>Please fill the form below.</p>

                <form action="">

                    <input name="name" type="text" placeholder="Name">
                    <input name="email" type="email" placeholder="e-mail">

                    <textarea name="message" type="text" placeholder="Message"></textarea>

                    <button class="" type="submit">Submit</button>
                </form>
            </div>
     <?php
    } // func load shortcode end




    public function handle_reviews_form($data)
    {
        echo "this is working.";
    }


} // class end
new simpleReviewsForm;