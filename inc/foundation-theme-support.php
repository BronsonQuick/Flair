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

	if ( current_theme_supports( 'foundation-top-bar' ) ) {
		add_action( 'wp_enqueue_scripts',  'flair_enqueue_top_bar', 11 );
	}

	if ( current_theme_supports( 'foundation-sticky-top-bar' ) ) {
		add_action( 'wp_enqueue_scripts',  'flair_enqueue_sticky_top_bar', 11 );
		add_filter( 'post_class', 'flair_rename_sticky_post_class' );
	}

	if ( current_theme_supports( 'foundation-magellan' ) ) {
		add_action( 'wp_enqueue_scripts',  'flair_enqueue_magellan', 11 );
	}

	if ( current_theme_supports( 'foundation-orbit' ) ) {
		add_action( 'wp_enqueue_scripts',  'flair_enqueue_orbit', 11 );
	}

	if ( current_theme_supports( 'foundation-clearing' ) ) {
		add_action( 'wp_enqueue_scripts',  'flair_enqueue_clearing', 11 );
	}

	if ( current_theme_supports( 'foundation-abide' ) ) {
		add_action( 'wp_enqueue_scripts',  'flair_enqueue_abide', 11 );
	}

	if ( current_theme_supports( 'foundation-reveal' ) ) {
		add_action( 'wp_enqueue_scripts',  'flair_enqueue_reveal', 11 );
	}

	if ( current_theme_supports( 'foundation-alert' ) ) {
		add_action( 'wp_enqueue_scripts',  'flair_enqueue_alert', 11 );
	}

	if ( current_theme_supports( 'foundation-tooltip' ) ) {
		add_action( 'wp_enqueue_scripts',  'flair_enqueue_tooltip', 11 );
	}

	if ( current_theme_supports( 'foundation-joyride' ) ) {
		add_action( 'wp_enqueue_scripts',  'flair_enqueue_joyride', 11 );
	}

	if ( current_theme_supports( 'foundation-equalizer' ) ) {
		add_action( 'wp_enqueue_scripts',  'flair_enqueue_equalizer', 11 );
	}

	if ( current_theme_supports( 'foundation-accordion' ) ) {
		add_action( 'wp_enqueue_scripts',  'flair_enqueue_accordion', 11 );
	}

	if ( current_theme_supports( 'foundation-tabs' ) ) {
		add_action( 'wp_enqueue_scripts',  'flair_enqueue_tabs', 11 );
	}

	if ( current_theme_supports( 'foundation-off-canvas' ) ) {
		add_action( 'wp_enqueue_scripts',  'flair_off_canvas', 11 );
	}

}

add_action( 'init', 'flair_check_theme_support' );

/**
 * Enqueue Foundations Interchange
 *
 * http://foundation.zurb.com/docs/components/interchange.html
 */

function flair_enqueue_interchange() {
	wp_enqueue_script( 'interchange', get_template_directory_uri() . '/assets/js/foundation/foundation.interchange.js', array( 'jquery', 'foundation' ), FOUNDATION_VERSION, true );
}

/**
 * Enqueue Foundations Top Bar
 *
 * http://foundation.zurb.com/docs/components/topbar.html
 */

function flair_enqueue_top_bar() {
	wp_enqueue_script( 'top-bar', get_template_directory_uri() . '/assets/js/foundation/foundation.topbar.js', array( 'jquery', 'foundation' ), FOUNDATION_VERSION, true );
}

/**
 * Enqueue Foundations Top Bar as Sticky Bar need it too
 *
 * http://foundation.zurb.com/docs/components/topbar.html
 */

function flair_enqueue_sticky_top_bar() {
	wp_enqueue_script( 'top-bar', get_template_directory_uri() . '/assets/js/foundation/foundation.topbar.js', array( 'jquery', 'foundation' ), FOUNDATION_VERSION, true );
}

/**
 * Enqueue Foundations Magellan
 *
 * http://foundation.zurb.com/docs/components/magellan.html
 */

function flair_enqueue_magellan() {
	wp_enqueue_script( 'magellan', get_template_directory_uri() . '/assets/js/foundation/foundation.magellan.js', array( 'jquery', 'foundation' ), FOUNDATION_VERSION, true );
}

/**
 * Enqueue Foundations Orbit
 *
 * http://foundation.zurb.com/docs/components/orbit.html
 */

function flair_enqueue_orbit() {
	wp_enqueue_script( 'orbit', get_template_directory_uri() . '/assets/js/foundation/foundation.orbit.js', array( 'jquery', 'foundation' ), FOUNDATION_VERSION, true );
}

/**
 * Enqueue Foundations Clearing
 *
 * http://foundation.zurb.com/docs/components/clearing.html
 */

function flair_enqueue_clearing() {
	wp_enqueue_script( 'clearing', get_template_directory_uri() . '/assets/js/foundation/foundation.clearing.js', array( 'jquery', 'foundation' ), FOUNDATION_VERSION, true );
}

/**
 * Enqueue Foundations Abide
 *
 * http://foundation.zurb.com/docs/components/abide.html
 */

function flair_enqueue_abide() {
	wp_enqueue_script( 'abide', get_template_directory_uri() . '/assets/js/foundation/foundation.abide.js', array( 'jquery', 'foundation' ), FOUNDATION_VERSION, true );
}

/**
 * Enqueue Foundations Reveal
 *
 * http://foundation.zurb.com/docs/components/reveal.html
 */

function flair_enqueue_reveal() {
	wp_enqueue_script( 'reveal', get_template_directory_uri() . '/assets/js/foundation/foundation.reveal.js', array( 'jquery', 'foundation' ), FOUNDATION_VERSION, true );
}

/**
 * Enqueue Foundations Alert
 *
 * http://foundation.zurb.com/docs/components/alert_boxes.html
 */

function flair_enqueue_alert() {
	wp_enqueue_script( 'alert', get_template_directory_uri() . '/assets/js/foundation/foundation.alert.js', array( 'jquery', 'foundation' ), FOUNDATION_VERSION, true );
}

/**
 * Enqueue Foundations Tooltip
 *
 * http://foundation.zurb.com/docs/components/tooltips.html
 */

function flair_enqueue_tooltip() {
	wp_enqueue_script( 'tooltip', get_template_directory_uri() . '/assets/js/foundation/foundation.tooltip.js', array( 'jquery', 'foundation' ), FOUNDATION_VERSION, true );
}

/**
 * Enqueue Foundations Joyride
 *
 * http://foundation.zurb.com/docs/components/joyride.html
 */

function flair_enqueue_joyride() {
	wp_enqueue_script( 'joyride', get_template_directory_uri() . '/assets/js/foundation/foundation.joyride.js', array( 'jquery', 'foundation' ), FOUNDATION_VERSION, true );
}

/**
 * Enqueue Foundations Equalizer
 *
 * http://foundation.zurb.com/docs/components/equalizer.html
 */

function flair_enqueue_equalizer() {
	wp_enqueue_script( 'equalizer', get_template_directory_uri() . '/assets/js/foundation/foundation.equalizer.js', array( 'jquery', 'foundation' ), FOUNDATION_VERSION, true );
}

/**
 * Enqueue Foundations Accordion
 *
 * http://foundation.zurb.com/docs/components/accordion.html
 */

function flair_enqueue_accordion() {
	wp_enqueue_script( 'accordion', get_template_directory_uri() . '/assets/js/foundation/foundation.accordion.js', array( 'jquery', 'foundation' ), FOUNDATION_VERSION, true );
}

/**
 * Enqueue Foundations Tabs
 *
 * http://foundation.zurb.com/docs/components/tabs.html
 */

function flair_enqueue_tabs() {
	wp_enqueue_script( 'tabs', get_template_directory_uri() . '/assets/js/foundation/foundation.tab.js', array( 'jquery', 'foundation' ), FOUNDATION_VERSION, true );
}

/**
 * Enqueue Foundation Off Canvas Menus
 *
 * http://foundation.zurb.com/docs/components/offcanvas.html
 */

function flair_off_canvas() {
	wp_enqueue_script( 'offcanvas', get_template_directory_uri() . '/assets/js/foundation/foundation.offcanvas.js', array( 'jquery', 'foundation' ), FOUNDATION_VERSION, true );
}

/**
 * Add some default image sizes to assist with interchange images
 */

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
	$html .= '">';
	$html .= '<noscript>';
	$html .= "<img src='" . $default[0] . "' />";
	$html .= '</noscript>';

	return $html;
}