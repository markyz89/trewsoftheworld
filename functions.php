<?php

// Scripts
function wp_trews_world_scripts() {
	// wp_register_style( 'bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css' );
 //    wp_register_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'));
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js' );

	wp_enqueue_style('style', get_stylesheet_uri(), NULL, microtime() );
	wp_enqueue_style('styles', get_template_directory_uri() . '/css/style.css',  NULL, microtime() );
}

add_action('wp_enqueue_scripts', 'wp_trews_world_scripts');

// Navigation
register_nav_menus(array(
	'main_menu' => __('Main Menu', 'trewsoftheworld'),
	'footer_menu' => __('Footer Menu', 'trewsoftheworld')
));

// Featured Images

add_theme_support( 'post-thumbnails' );

add_image_size( 'big-story-thumb', 285, 190, true);
add_image_size( 'small-story-thumb', 100, 120, true);
add_image_size( 'category-main', 620, 410, true);
add_image_size( 'category-side', 150, 95, true);
add_image_size( 'megamenu-images', 50, 50, true);
add_image_size( 'footer_images', 180, 120, true);

// Sidebar

function trews_widget_setup() {
	register_sidebar(array(
		'name' => 'Sidebar of Shame',
		'id' => 'sidebar_of_shame',
		'class' => 'shame',
		'description' => 'Main page sidebar consisting of little other than celebrity body parts',
		// below copied direct from WP codex
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget'  => '</li>',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>'

	));

	register_sidebar(array(
		'name' => 'Sidebar Two',
		'id' => 'sidebar2',
		'class' => 'shame',
		'description' => 'Bottom of page sidebar',
		// below copied direct from WP codex
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget'  => '</li>',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>'

	));
}

add_action('widgets_init','trews_widget_setup');

// Include Walker file

require get_template_directory() . '/inc/walkernav.php';