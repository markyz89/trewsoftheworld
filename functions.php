<?php

// Scripts
function wp_trews_world_scripts() {
	wp_enqueue_style('style', get_stylesheet_uri() );
	wp_enqueue_style('styles', get_template_directory_uri() . '/css/style.css' );
}

add_action('wp_enqueue_scripts', 'wp_trews_world_scripts');

// Navigation
register_nav_menus(array(
	'main_menu' => __('Main Menu', 'trewsoftheworld')
));

// Featured Images

add_theme_support( 'post-thumbnails' );

add_image_size( 'big-story-thumb', 285, 190, true); 