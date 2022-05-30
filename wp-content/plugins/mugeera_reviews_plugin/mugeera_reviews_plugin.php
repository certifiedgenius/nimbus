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
    echo 'Your IP & Mac Address have been recorded and the authorities have been notified.';
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


        add_action('wp_ajax_submit_reviews', 'submit_reviews');
        add_action('wp_ajax_nopriv_submit_reviews', 'submit_reviews');
    }


    public function submit_reviews() :void {
        if ( ! wp_verify_nonce( $_POST['reviews_form_nonce'], "submit_reviews") )
            exit ("Whiff whiff whiff" . var_dump($_POST));


        $post_id = wp_insert_post([
            'post_type'    => 'reviews',
            'post_title'   => $_POST['reviews_title'],
            'post_content' => $_POST['reviews_content'],
            'post_status'  => 'pending',
            'post_author'  =>  get_current_user_id() ?: 0,

            'meta_input'    => [
                'reviewer' => $_POST['reviewer_name'],
                'post_id' => $_POST['reviews_post_id']
            ],
        ]);

        if ( ! is_wp_error($post_id) ) {
            $response = [
                'status' => 'success',
                'message' => 'Review was successful.',
            ];
        } else {
            $response = [
                'status' => 'failed',
                'message' => 'there was an error.',
            ];
        };


        wp_send_json( $response );
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
    } // func load shortcode end
} // class end
new simpleReviewsForm;