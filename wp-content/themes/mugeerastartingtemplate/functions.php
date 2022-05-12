<?php

if ( ! function_exists( 'mugeera_theme_setup' ) ) {
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 *
	 * @return void
	 * @since Twenty Twenty-One 1.0
	 *
	 */
	function mugeera_theme_setup() {

		// Registrerar platser för våra fasta menyer. Visas i temat med wp_nav_menu()
		register_nav_menus(
			[
				'primary' => esc_html__( 'Main navigation', 'main_menu' ),
				'footer'  => esc_html__( 'Footer navigation', 'main_footer_menu' ),
			]
		);

		/**
		 * Add post-formats support.
		 */
		add_theme_support( 'post-formats', [
			'gallery',
			'image',
			'quote',
			'video',
		] );







		// Add theme support for Automatic Feed Links
		add_theme_support( 'automatic-feed-links' );


		// Add theme support for Featured Images
		add_theme_support( 'post-thumbnails' );


		// Add theme support for Custom Background
		$background_args = [
			'default-color'          => 'FFFFFF',
			'default-image'          => '',
			'default-repeat'         => '',
			'default-position-x'     => '',
			'wp-head-callback'       => '',
			'admin-head-callback'    => '',
			'admin-preview-callback' => '',
		];
		//add_theme_support( 'custom-background', $background_args );


		// Add theme support for Custom Header
		$header_args = [
			'default-image'      => '',
			'width'              => 0,
			'height'             => 0,
			'flex-width'         => true,
			'flex-height'        => true,
			'uploads'            => true,
			'random-default'     => false,
			'header-text'        => true,
			'default-text-color' => 'FFFFF',
			'video'              => true,
		];
		add_theme_support( 'custom-header', $header_args );


		// Add theme support for HTML5 Semantic Markup
		add_theme_support( 'html5', [ 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ] );


		// Add theme support for document Title tag
		add_theme_support( 'title-tag' );


		// Add theme support for Translation



		add_image_size( 'wcm-gallery', '500', '300', true );
	}
}




	//adds dynamic title tag support
	function jinn_theme_support() {
		add_theme_support('custom-logo');
	}
	add_action('after_setup_theme', 'jinn_theme_support');




add_action( 'after_setup_theme', 'mugeera_theme_setup' );

/**
 * Load in all of our styles & scripts.
 *
 * @return void
 *
 * Enqueue styles and scripts
 */
function add_theme_scripts() {
	// teachers code line.
	wp_enqueue_style( 'style', get_theme_file_uri( 'dist/index.css' ), );

    wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/index.css');


    wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/script.js');
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );




function social_link_classes( $classes, $item, $args ) {
	if ( 'footer' === $args->theme_location ) {
		$classes[] = "social-link";
	}

	return $classes;
}


add_filter( 'nav_menu_css_class', 'social_link_classes', 10, 4 );


/**
 * Registrera en Custom Post Type
 * https://developer.wordpress.org/plugins/post-types/
 *
 * Läs mer om funktionen register_post_type och dess argument nedan.
 * https://developer.wordpress.org/reference/functions/register_post_type/
 *
 */
// custom post type wcm_travel
function my_custom_wcm_travel_post_type() {
	register_post_type( 'wcm_travel', [
		'labels'      => [
			'name'          => __( 'wcm Travels' ),
			'singular_name' => __( 'wcm Travel'),
		],
		'public'      => true,
		'has_archive' => true,
		'supports'    => ['title', 'editor', 'thumbnail', 'custom-fields' ],
		'rewrite'     => ['slug' => 'travel'],
		'menu_icon'   => 'dashicons-airplane',
		'taxonomies'  => ['travel_age', 'travel_country', 'travel_sport_league', 'travel_sport_type', 'travel_type'],
		'description' => 'a custom post type made for wcm travels',
	] );
}
add_action( 'init', 'my_custom_wcm_travel_post_type', );



// travel_matches - Sportresor
function my_custom_travel_matches_post_type() {
	register_post_type( 'travel_matches', [
		'labels'      => [
			'name'          => __( 'Sportresor' ),
			'singular_name' => __( 'Sportresa'),
		],
		'public'      => true,
		'has_archive' => true,
		'supports'    => ['title', 'editor', 'thumbnail', 'custom-fields' ],
		'rewrite'     => ['slug' => 'sportresor'],
		'menu_icon'   => 'dashicons-airplane',
		'taxonomies'  => ['travel_sport_league', 'travel_type'],
		'description' => 'hes one of the smartest noddles in the ramen bowl',
	] );
}
add_action( 'init', 'my_custom_travel_matches_post_type', );





// travel_cup - Cuper
function my_custom_travel_cup_post_type() {
	register_post_type( 'travel_cup', [
		'labels'      => [
			'name'          => __( 'Cuper' ),
			'singular_name' => __( 'Cup'),
		],
		'public'      => true,
		'has_archive' => true,
		'supports'    => ['title', 'editor', 'thumbnail', 'custom-fields' ],
		'rewrite'     => ['slug' => 'cuper'],
		'menu_icon'   => 'dashicons-airplane',
		'taxonomies'  => ['travel_age', 'travel_country', 'travel_sport_type', 'travel_type'],
		'description' => 'hes one of the smartest noddles in the ramen bowl',
	] );
}
add_action( 'init', 'my_custom_travel_cup_post_type', );




// travel_camp - Träningsresor
function my_custom_travel_camp_post_type() {
	register_post_type( 'travel_camp', [
		'labels'      => [
			'name'          => __( 'Traningsresor' ),
			'singular_name' => __( 'Traningsresa'),
		],
		'public'      => true,
		'has_archive' => true,
		'supports'    => ['title', 'editor', 'thumbnail', 'custom-fields' ],
		'rewrite'     => ['slug' => 'traningsresor'],
		'menu_icon'   => 'dashicons-hammer',
		'taxonomies'  => ['travel_age', 'travel_country', 'travel_sport_type', 'travel_type'],
		'description' => 'hes one of the smartest noddles in the ramen bowl',
	] );
}
add_action( 'init', 'my_custom_travel_camp_post_type', );




// travel_soccer - Fotbollsresor
function my_custom_travel_soccer_post_type() {
	register_post_type( 'travel_soccer', [
		'labels'      => [
			'name'          => __( 'Fotbollsresor' ),
			'singular_name' => __( 'Fotbollsresa'),
		],
		'public'      => true,
		'has_archive' => true,
		'supports'    => ['title', 'editor', 'thumbnail', 'custom-fields' ],
		'rewrite'     => ['slug' => 'fotbollsresor'],
		'menu_icon'   => 'dashicons-airplane',
		'taxonomies'  => ['travel_country', 'travel_sport_league', 'travel_sport_type'],
		'description' => 'hes one of the smartest noddles in the ramen bowl',
	] );
}
add_action( 'init', 'my_custom_travel_soccer_post_type', );




// netr_team
function my_custom_netr_team_post_type() {
	register_post_type( 'netr_team', [
		'labels'      => [
			'name'          => __( 'netrs team' ),
			'singular_name' => __( 'netr team'),
		],
		'public'      => true,
		'has_archive' => true,
		'supports'    => ['title', 'editor', 'thumbnail', 'custom-fields' ],
		'rewrite'     => ['slug' => 'netrteam'],
		'menu_icon'   => 'dashicons-airplane',
		'taxonomies'  => ['travel_country', 'travel_sport_league', 'travel_sport_type'],
		'description' => 'hes one of the smartest noddles in the ramen bowl',
	] );
}
add_action( 'init', 'my_custom_netr_team_post_type', );


/**
 * Registrera Custom Taxonomies
 * https://developer.wordpress.org/plugins/taxonomies/
 *
 * Mer information kring funktionen register_taxonomy
 * https://developer.wordpress.org/reference/functions/register_taxonomy/
 */
// travel_age Taxonomies
function my_custom_taxonomy_for_travel_age() {
	$labels = [
		'name'              => _x( 'Travelers Age', 'taxonomy general name', 'wcmtheme' ),
		'singular_name'     => _x( 'Travel Age', 'taxonomy singular name','wcmtheme' ),
		// Läs på om och lägg till fler vi behov!
	];
	$args   = [
		'public'      		=> true,
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'travels' ),
	];
	register_taxonomy( 'travel_age', ['wcm_travel, travel_camp, travel_cup, page'], $args ); // to what post type do you want to connect this taxonomy to?
}
add_action( 'init', 'my_custom_taxonomy_for_travel_age',4 );





// travel_country Taxonomies
function my_custom_taxonomy_for_travel_country() {
	$labels = [
		'name'              => _x( 'Travel Countries', 'taxonomy general name', 'wcmtheme' ),
		'singular_name'     => _x( 'Travel Country', 'taxonomy singular name','wcmtheme' ),
		// Läs på om och lägg till fler vi behov!
	];
	$args   = [
		'public'      		=> true,
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'travels' ),
	];
	register_taxonomy( 'travel_country', ['wcm_travel, travel_camp, travel_cup, travel_soccer, page'], $args ); // to what post type do you want to connect this taxonomy to?
}
add_action( 'init', 'my_custom_taxonomy_for_travel_country',4 );





// travel_sport_league Taxonomies
function my_custom_taxonomy_for_travel_sport_league() {
	$labels = [
		'name'              => _x( 'Sport League Travels', 'taxonomy general name', 'wcmtheme' ),
		'singular_name'     => _x( 'Travel Sport League', 'taxonomy singular name','wcmtheme' ),
		// Läs på om och lägg till fler vi behov!
	];
	$args   = [
		'public'      		=> true,
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'travels' ),
	];
	register_taxonomy( 'travel_sport_league', ['wcm_travel, travel_soccer,travel_matches, page'], $args ); // to what post type do you want to connect this taxonomy to?
}
add_action( 'init', 'my_custom_taxonomy_for_travel_sport_league',4 );





// travel_sport_type Taxonomies
function my_custom_taxonomy_for_travel_sport_type() {
	$labels = [
		'name'              => _x( 'Travel Sport Types', 'taxonomy general name', 'wcmtheme' ),
		'singular_name'     => _x( 'Sport Type Travel', 'taxonomy singular name','wcmtheme' ),
		// Läs på om och lägg till fler vi behov!
	];
	$args   = [
		'public'      		=> true,
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'travels' ),
	];
	register_taxonomy( 'travel_sport_type', ['wcm_travel, travel_camp, travel_cup, travel_soccer, page'], $args ); // to what post type do you want to connect this taxonomy to?
}
add_action( 'init', 'my_custom_taxonomy_for_travel_sport_type',4 );





// travel_type Taxonomies
function my_custom_taxonomy_for_travel_type() {
	$labels = [
		'name'              => _x( 'Travel Types', 'taxonomy general name', 'wcmtheme' ),
		'singular_name'     => _x( 'Travel Type', 'taxonomy singular name','wcmtheme' ),
		// Läs på om och lägg till fler vi behov!
	];
	$args   = [
		'public'      		=> true,
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'travels-types' ),
	];
	register_taxonomy( 'travel_type', ['wcm_travel, travel_camp, travel_cup, travel_matches, page'], $args ); // to what post type do you want to connect this taxonomy to?
}
add_action( 'init', 'my_custom_taxonomy_for_travel_type',4 );

/**
 * Custom Meta Boxes
 *
 * För att jobba med custom innehåll, "formulär fält", på olika post types.
 *
 * Läs och förstår hur de fungerar. Testa gärna att lägga till något manuellt.
 * https://developer.wordpress.org/plugins/metadata/
 *
 * Advanced Custom Fields är ett plugin som vanligen användas för att skapa sådana här meta-fält.
 * https://www.advancedcustomfields.com/
 */
