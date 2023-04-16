<?php

// Include styles
function sefhi_styles()
{
	// get version number from CSS file so we can easily cache and update it
	$theme = wp_get_theme();
	$version = $theme->get( 'Version' );
	
	wp_enqueue_style( 'style', get_stylesheet_uri(), array(), $version );
	// wp_enqueue_script( 'code', get_template_directory_uri() . '/js/code.js', array('jquery'), '1.0', true );
	wp_enqueue_script( 'code', get_template_directory_uri() . '/js/code.js', array(), filemtime( get_template_directory() . '/js/code.js' ), true,
);
}
add_action('wp_enqueue_scripts', 'sefhi_styles');

// Theme support
function crown_setup()
{
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'audio',
	) );

	// Add theme support for Custom Logo.
	add_theme_support( 'custom-logo', array(
		'width'       => 250,
		'height'      => 250,
		'flex-width'  => true,
	) );

	// Navigation menus
	register_nav_menus(array(
		'main' => __('Main menu'),
		'footer' => __('Footer menu')
	));

	// Support for featured images
	add_theme_support('post-thumbnails');

	// Support for post formats
	add_theme_support('post-formats');
}
add_action('after_setup_theme', 'crown_setup');

// Custom length for the excerpt
function custom_excerpt_length( $length )
{
    return 30;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

// Custom excerpt text
function new_excerpt_more( $more )
{
	return '...';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );

?>