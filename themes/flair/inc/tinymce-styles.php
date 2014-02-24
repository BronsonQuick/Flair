<?php

/**
 * Add some Foundation 5 styles to TinyMCE
 *
 */
function sz_mce_buttons( $buttons ) {
	array_unshift( $buttons, 'styleselect' );
	return $buttons;
}
add_filter( 'mce_buttons_2', 'sz_mce_buttons' );

function sz_mce_before_init( $init_array ) {
	$init_array[ 'theme_advanced_styles' ] = "Two Columns=small-6 columns;Three Columns=small-12 medium-4 columns;Four Columns=small-6 medium-3 columns";
	return $init_array;
}
add_filter ( 'tiny_mce_before_init', 'sz_mce_before_init' );