<?php
/**
 * Check if the theme has support for any of the additional Foundation utilities
 */

function flair_check_theme_support(){
	if ( current_theme_supports( 'foundation-interchange' ) ) {
		add_filter( 'post_thumbnail_html', 'flair_responsive_img', 5, 5 );
	}
}

add_action( 'init', 'flair_check_theme_support' );

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

function flair_responsive_img( $html, $post_id, $post_thumbnail_id, $size, $attr ) {
	if ( is_front_page() ) {
		// Generate our image links
		$default = wp_get_attachment_image_src( $post_thumbnail_id, 'homepage-featured-image' );
		$large   = wp_get_attachment_image_src( $post_thumbnail_id, 'homepage-featured-image' );
	} else {
		$default = wp_get_attachment_image_src( $post_thumbnail_id, 'full' );
		$large   = wp_get_attachment_image_src( $post_thumbnail_id, 'responsive-retina' );
	}
	$small   = wp_get_attachment_image_src( $post_thumbnail_id, 'responsive-small' );
	$medium  = wp_get_attachment_image_src( $post_thumbnail_id, 'responsive-medium' );
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