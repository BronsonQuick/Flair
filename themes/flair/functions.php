<?php
/**
 * _s functions and definitions
 *
 * @package Flair Theme
 */

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
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

	/**
	 * Add our TinyMCE Editor Styles
	 */
	add_editor_style();

	/**
	 * Optionally add Foundation utilities
	 */
	//add_theme_support( 'foundation-interchange' );
	//add_theme_support( 'foundation-top-bar' );
	//add_theme_support( 'foundation-magellan' );
	add_theme_support( 'foundation-orbit' );


}
endif; // flair_setup
add_action( 'after_setup_theme', 'flair_setup' );

/**
 * Register widgetized area and update sidebar with default widgets
 */
function flair_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'flair' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'flair_widgets_init' );

/**
 * Enqueue scripts and styles
 */
function flair_scripts() {
	wp_enqueue_style( 'flair-style', get_stylesheet_uri() );

	wp_enqueue_style( 'foundation-style', get_stylesheet_directory_uri() . '/css/style.css', array(), '1.0' );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/modernizr.js', array(), '2.7.1' );
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'foundation', get_template_directory_uri() . '/js/foundation.min.js', array( 'jquery' ), '5.1.1', true );
	wp_enqueue_script( 'app', get_template_directory_uri() . '/js/app.js', array( 'foundation' ), '1.0', true );

}
add_action( 'wp_enqueue_scripts', 'flair_scripts' );

/* Let's add the includes. Unused includes will be deleted during setup  */
foreach ( glob( get_template_directory() . '/inc/*.php' ) as $filename ) {
	require_once $filename;
}