<?php

/**
 * Load child theme style
 */
add_action( 'wp_enqueue_scripts', 'twentytwentyone_child_enqueue_styles' );
function twentytwentyone_child_enqueue_styles() {
	wp_enqueue_style(
		'twentytwentyone-child-style',
		get_stylesheet_uri(),
		array( 'twenty-twenty-one-style' ),
		wp_get_theme()->get( '1.0.0' )
	);
}

/**
 * Add a custom body class for this theme
 */
add_filter( 'body_class', 'twentytwentyone_child_body_class' );
function twentytwentyone_child_body_class( $classes ) {
	$classes[] = 'learn-wordpress';

	return $classes;
}