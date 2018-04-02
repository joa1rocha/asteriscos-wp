<?php
/**
 * Asteriscos functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Asteriscos
 */

/**
 * Asteriscos only works in WordPress 4.7 or later.
 */

@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );

if ( version_compare( $GLOBALS['wp_version'], '4.7-alpha', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
	return;
}

function add_theme_scripts() {
    enqueue_styles();
    enqueue_scripts();
}

function enqueue_styles() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.css', array());
	wp_enqueue_style( 'asteriscos', get_template_directory_uri() . '/assets/css/asteriscos.css', array());
	wp_enqueue_style( 'noscript', get_template_directory_uri() . '/assets/css/noscript.css', array());

}

function enqueue_scripts() {
	wp_enqueue_script( 'jquery-min', get_template_directory_uri() . '/assets/js/jquery.min.js', array('jquery'));
	wp_enqueue_script( 'jquery-scrollex-min', get_template_directory_uri() . '/assets/js/jquery.scrollex.min.js', array('jquery'));
	wp_enqueue_script( 'jquery-scrolly-min', get_template_directory_uri() . '/assets/js/jquery.scrolly.min.js', array('jquery'));
	wp_enqueue_script( 'skel-min', get_template_directory_uri() . '/assets/js/skel.min.js', array('jquery'));
	wp_enqueue_script( 'util', get_template_directory_uri() . '/assets/js/util.js', array('jquery'));
	wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'));
	wp_enqueue_script( 'asteriscos', get_template_directory_uri() . '/assets/js/asteriscos.js', array('jquery'));
}

add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

function asteriscos_add_woocommerce_support() {
	add_theme_support( 'woocommerce', array(
		'thumbnail_image_width' => 150,
		'single_image_width'    => 300,

//		'product_grid'          => array(
//			'default_rows'    => 3,
//			'min_rows'        => 2,
//			'max_rows'        => 8,
//			'default_columns' => 4,
//			'min_columns'     => 2,
//			'max_columns'     => 5,
//		),
	) );
}
add_action( 'after_setup_theme', 'asteriscos_add_woocommerce_support' );

add_theme_support( 'custom-header' );
function asteriscos_custom_header_setup() {
	$defaults = array(
		// Default Header Image to display
		'default-image' => get_template_directory_uri() . '/wp-content/uploads/2018/02/Prancheta-7-8.png',
		// Display the header text along with the image
		'header-text' => true,
		// Header text color default
		'default-text-color' => '000',
		// Header image width (in pixels)
//		'width' => 1000,
		// Header image height (in pixels)
//		'height' => 198,
		// Header image random rotation default
//		'random-default' => false,
		// Enable upload of image file in admin
//		'uploads' => false,
		// function to be called in theme head section
//		'wp-head-callback' => 'wphead_cb',
		//  function to be called in preview page head section
//		'admin-head-callback' => 'adminhead_cb',
		// function to produce preview markup in the admin screen
//		'admin-preview-callback' => 'adminpreview_cb',
	);
}
add_action( 'after_setup_theme', 'asteriscos_custom_header_setup' );
