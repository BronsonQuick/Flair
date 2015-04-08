<?php
/**
 * Implement Custom Header functionality for Flair
 *
 * @since Flair 1.0
 */

/**
 * Set up the WordPress core custom header settings.
 *
 * @package Flair Theme
 *
 * @uses flair_header_style()
 * @uses flair_admin_header_style()
 * @uses flair_admin_header_image()
 */
function flair_custom_header_setup() {
	/**
	 * Filter Flair custom-header support arguments.
	 *
	 * @since Flair 1.0
	 *
	 * @param array $args {
	 *     An array of custom-header support arguments.
	 *
	 *     @type bool   $header_text            Whether to display custom header text. Default false.
	 *     @type int    $width                  Width in pixels of the custom header image. Default 1260.
	 *     @type int    $height                 Height in pixels of the custom header image. Default 240.
	 *     @type bool   $flex_height            Whether to allow flexible-height header images. Default true.
	 *     @type string $admin_head_callback    Callback function used to style the image displayed in
	 *                                          the Appearance > Header screen.
	 *     @type string $admin_preview_callback Callback function used to create the custom header markup in
	 *                                          the Appearance > Header screen.
	 * }
	 */
	add_theme_support( 'custom-header', apply_filters( 'flair_custom_header_args', array(
		'default-text-color'     => 'fff',
		'width'                  => 115,
		'height'                 => 21,
		'flex-height'            => true,
		'header-text'            => false,
		'default-image'          => get_template_directory_uri() . '/assets/images/logo.png',
		'wp-head-callback'       => 'flair_header_style',
		'admin-head-callback'    => 'flair_admin_header_style',
		'admin-preview-callback' => 'flair_admin_header_image',
	) ) );
}
add_action( 'after_setup_theme', 'flair_custom_header_setup' );

if ( ! function_exists( 'flair_header_style' ) ) :
	/**
	 * Styles the header image and text displayed on the blog
	 *
	 * @see flair_custom_header_setup().
	 *
	 */
	function flair_header_style() {
		$text_color = get_header_textcolor();

		// If no custom color for text is set, let's bail.
		if ( display_header_text() && get_theme_support( 'custom-header', 'default-text-color' ) === $text_color ) {
			return;
		}

		// If we get this far, we have custom styles.
		?>
		<style type="text/css" id="flair-header-css">
		<?php
			// Has the text been hidden?
			if ( ! display_header_text() ) :
		?>
			.site-title,
			.site-description {
				clip: rect(1px 1px 1px 1px); /* IE7 */
				clip: rect(1px, 1px, 1px, 1px);
				position: absolute;
			}
		<?php
			// If the user has set a custom color for the text, use that.
			elseif ( get_theme_support( 'custom-header', 'default-text-color' ) != $text_color ) :
		?>
			.site-title a {
				color: #<?php echo esc_attr( $text_color ); ?>;
			}
		<?php endif; ?>
		</style>
		<?php
	}
endif; // flair_header_style


if ( ! function_exists( 'flair_admin_header_style' ) ) :
	/**
	 * Style the header image displayed on the Appearance > Header screen.
	 *
	 * @see flair_custom_header_setup()
	 *
	 * @since Flair 1.0
	 */
	function flair_admin_header_style() {
	?>
		<style type="text/css" id="Flair-admin-header-css">
		.appearance_page_custom-header #headimg {
			background-color: #fff;
			border: none;
			max-width: 1260px;
			min-height: 48px;
		}
		#headimg h1 {
			display: none
		}
		#headimg h1 a {
			display: none;
		}
		#headimg img {
			vertical-align: middle;
		}
		</style>
	<?php
	}
endif; // flair_admin_header_style

if ( ! function_exists( 'flair_admin_header_image' ) ) :
	/**
	 * Create the custom header image markup displayed on the Appearance > Header screen.
	 *
	 * @see flair_custom_header_setup()
	 *
	 * @since Flair 1.0
	 */
	function flair_admin_header_image() {
	?>
		<div id="headimg">
			<?php if ( get_header_image() ) : ?>
			<img src="<?php header_image(); ?>" alt="">
			<?php endif; ?>
			<h1 class="displaying-header-text"><a id="name"<?php echo sprintf( ' style="color:#%s;"', get_header_textcolor() ); ?> onclick="return false;" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
		</div>
	<?php
}
endif; // flair_admin_header_image
