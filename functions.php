<?php
/**
 * Flair functions and definitions
 *
 * @package Flair Theme
 */

define( 'FOUNDATION_VERSION', '5.3.0' );

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'flair_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which runs
	 * before the init hook. The init hook is too late for some features, such as indicating
	 * support post thumbnails.
	 */
	function flair_setup() {

	/**
	 * Make theme available for translation
	 * Translations can be filed in the /languages/ directory
	 * If you're building a theme based on _s, use a find and replace
	 * to change 'flair' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'flair', get_template_directory() . '/languages' );

	/**
	 * Add default posts and comments RSS feed links to head
	 */
	add_theme_support( 'automatic-feed-links' );

	/**
	 * Enable support for Post Thumbnails on posts and pages
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	/**
	 * This theme uses wp_nav_menu() in one location.
	 */
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'flair' ),
	) );

	/**
	 * Enable support for Post Formats
	 */
	# add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

	/**
	 * Add our TinyMCE Editor Styles
	 */
	add_editor_style( 'assets/css/editor-style.css' );

	// Enable support for HTML5 markup.
	add_theme_support( 'html5', array(
		'comment-list',
		'search-form',
		'comment-form',
		'gallery',
		'caption',
		'widgets',
	) );

	/**
	 * Optionally add Foundation utilities
	 */
	# add_theme_support( 'foundation-interchange' );
	# add_theme_support( 'foundation-top-bar' );
	# add_theme_support( 'foundation-sticky-top-bar' );
	# add_theme_support( 'foundation-magellan' );
	# add_theme_support( 'foundation-orbit' );
	# add_theme_support( 'foundation-clearing' );
	# add_theme_support( 'foundation-abide' );
	# add_theme_support( 'foundation-reveal' );
	# add_theme_support( 'foundation-alert' );
	# add_theme_support( 'foundation-tooltip' );
	# add_theme_support( 'foundation-joyride' );
	# add_theme_support( 'foundation-equalizer' );
	# add_theme_support( 'foundation-accordion' );
	# add_theme_support( 'foundation-tabs' );
	# add_theme_support( 'off-canvas' );

}
endif; // flair_setup
add_action( 'after_setup_theme', 'flair_setup' );

/**
 * Register widgetized area and update sidebar with default widgets
 */
function flair_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Blog Widget Area', 'flair' ),
		'id'            => 'blog-widget-area',
		'description'   => __( 'The blog widget area which is located on the left or right hand side of the blog posts and archives', 'flair' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s side-nav">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h5 class="widget-title">',
		'after_title'   => '</h5>',
	) );

	register_sidebar( array(
		'name'          => __( 'Page Widget Area', 'flair' ),
		'id'            => 'page-widget-area',
		'description'   => __( 'The page widget area which is located on the left or right hand side of the pages', 'flair' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s side-nav">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h5 class="widget-title">',
		'after_title'   => '</h5>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Widget Area', 'flair' ),
		'id'            => 'footer-widget-area',
		'description'   => __( 'The footer widget area which is located at the bottom of the site', 'flair' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s side-nav">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h5 class="widget-title">',
		'after_title'   => '</h5>',
	) );
}
add_action( 'widgets_init', 'flair_widgets_init' );

/**
 * Enqueue scripts and styles
 */
function flair_scripts() {
	wp_enqueue_style( 'flair-style', get_stylesheet_uri() );

	wp_enqueue_style( 'foundation-style', get_stylesheet_directory_uri() . '/assets/css/style.css', array(), '1.0' );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/assets/js/modernizr.js', array(), '2.7.1' );
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'foundation', get_template_directory_uri() . '/assets/js/foundation.min.js', array( 'jquery' ), FOUNDATION_VERSION, true );
	wp_enqueue_script( 'app', get_template_directory_uri() . '/assets/js/app.js', array( 'foundation' ), '1.0', true );

}
add_action( 'wp_enqueue_scripts', 'flair_scripts' );

/* Let's add the includes. Unused includes will be deleted during setup  */
foreach ( glob( get_template_directory() . '/inc/*.php' ) as $filename ) {
	require_once $filename;
}
