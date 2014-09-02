<?php

/**
 * Add some Foundation 5 styles to TinyMCE
 *
 */
function flair_mce_buttons( $buttons ) {
	array_unshift( $buttons, 'styleselect' );
	return $buttons;
}
add_filter( 'mce_buttons_2', 'flair_mce_buttons' );

function flair_mce_before_init( $init_array ) {
	// Add back some more of styles we want to see in TinyMCE
	$init_array['preview_styles'] = 'font-family font-size font-weight font-style text-decoration text-transform color background-color padding';

	if ( version_compare( $GLOBALS['wp_version'], '3.8', '<' ) ) {
		$init_array['theme_advanced_styles'] = 'One Half Column=small-6 columns;One Third Column=small-12 medium-4 columns;One Quarter Column=small-6 medium-3 columns';
	} else {
		$style_formats = array(
			// Each array child is a format with it's own settings
			array(
				'title'    => 'One Half Column',
				'wrapper'  => true,
				'block'    => 'div',
				'classes'  => 'small-6 columns',
			),
			array(
				'title'   => 'One Third Column',
				'wrapper'  => true,
				'block'    => 'div',
				'classes' => 'small-12 medium-4 columns',
			),
			array(
				'title'    => 'One Quarter Column',
				'wrapper'  => true,
				'block'    => 'div',
				'classes'  => 'small-6 medium-3 columns',
			),
		);
		// Insert the array, json encoded, into 'style_formats'
		$init_array['style_formats'] = json_encode( $style_formats );
	}
	return $init_array;
}
add_filter( 'tiny_mce_before_init', 'flair_mce_before_init' );