<?php

// https://github.com/twittem/wp-bootstrap-navwalker
require_once('wp_bootstrap_navwalker.php');

function myTheme_styles() {

	// Normalize
	wp_deregister_style('normalize');
	wp_register_style('normalize', get_stylesheet_directory_uri().'/vendor/css/normalize.min.css');
	wp_enqueue_style('normalize');

	// Bootstrap
	wp_deregister_style('bootstrap');
	wp_register_style('bootstrap', get_stylesheet_directory_uri().'/vendor/css/bootstrap.min.css');
	wp_enqueue_style('bootstrap');

	// Font Awesome
	wp_deregister_style('font-awesome');
	wp_register_style('font-awesome', get_stylesheet_directory_uri().'/vendor/css/font-awesome.min.css');
	wp_enqueue_style('font-awesome');

	// Main Style
	wp_deregister_style('style');
	wp_register_style('style', get_stylesheet_uri());
	wp_enqueue_style('style');
}


function myTheme_scripts() {
	// jQuery
   wp_deregister_script('jquery');
   wp_register_script('jquery', get_stylesheet_directory_uri().'/vendor/js/jquery-1.11.3.min.js');
   wp_enqueue_script('jquery');

   // Bootstrap
   wp_deregister_script('bootstrap');
   wp_register_script('bootstrap', get_stylesheet_directory_uri().'/vendor/js/bootstrap.min.js');
   wp_enqueue_script('bootstrap');
}

add_action('wp_enqueue_scripts', 'myTheme_styles');
add_action("wp_enqueue_scripts", "myTheme_scripts", 11);


// Navigation Menus
register_nav_menus(array(
	'primary' => ('Primary Menu'),
	'footer' => ('Footer Menu'),
));

?>