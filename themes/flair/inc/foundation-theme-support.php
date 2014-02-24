<?php
/**
 * Check if the theme has support for any of the additional Foundation utilities
 */

function flair_check_theme_support() {
	if ( current_theme_supports( 'foundation-interchange' ) ) {
		add_filter( 'post_thumbnail_html', 'flair_interchange_post_thumbnail_html', 5, 5 );
		add_action( 'init', 'flair_interchange_sizes', 11 );
		add_action( 'wp_enqueue_scripts',  'flair_enqueue_interchange', 11 );
	}
}

add_action( 'init', 'flair_check_theme_support' );

/**
 * Enqueue interchange
 */

function flair_enqueue_interchange() {
	wp_enqueue_script( 'interchange', get_template_directory_uri() . '/js/foundation.interchange.js', array( 'jquery', 'foundation' ), '5.1.1', true );
}

function flair_interchange_sizes() {
	add_image_size( 'interchange-small', 480, 99999 );
	add_image_size( 'interchange-medium', 768, 99999 );
	add_image_size( 'interchange-large', 1024, 99999 );
	add_image_size( 'interchange-retina', 1920, 99999 );
}

/**
 * We need to filter our post thumbnails so we can output them in a format that Foundations Interchange needs.
 * We also need a fallback for no JavaScript
 *
 * @param $html
 * @param $post_id
 * @param $post_thumbnail_id
 * @param $size
 * @param $attr
 *
 * @return string
 */

function flair_interchange_post_thumbnail_html( $html, $post_id, $post_thumbnail_id, $size, $attr ) {
	$default = wp_get_attachment_image_src( $post_thumbnail_id, 'full' );
	$large   = wp_get_attachment_image_src( $post_thumbnail_id, 'interchange-retina' );
	$small   = wp_get_attachment_image_src( $post_thumbnail_id, 'interchange-small' );
	$medium  = wp_get_attachment_image_src( $post_thumbnail_id, 'interchange-medium' );
	// Create out image tag with our media queries in it
	$html = '<img data-interchange="['. $default[0]. ', (default)],';
	$html .= '[' .$small[0] .', (small)],';
	$html .= '['. $medium[0] .', (medium)],';
	$html .= '['. $large[0] .', (large)],';
	$html .= '['. $large[0] .', (retina)]';
	$html .='">';
	$html .= "<noscript>";
	$html .= "<img src='" . $default[0] . "' />";
	$html .= "</noscript>";

	return $html;
}