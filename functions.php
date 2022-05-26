<?php
/**
 * cybervalue functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package cybervalue
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function cybervalue_setup() {

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
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'cybervalue' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'cybervalue_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'cybervalue_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function cybervalue_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'cybervalue_content_width', 640 );
}
add_action( 'after_setup_theme', 'cybervalue_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function cybervalue_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'cybervalue' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'cybervalue' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'cybervalue_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function cybervalue_scripts() {
	wp_enqueue_style( 'cybervalue-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'cybervalue-style', 'rtl', 'replace' );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'cybervalue_scripts' );


function cybervalue_script_enqueue() {
	wp_enqueue_script('jqueryjs', get_template_directory_uri() . '/assets/js/lib/jquery-3.6.0.min.js', array(), '1.0.0', true);
	wp_enqueue_script('heightlinejs', get_template_directory_uri() . '/assets/js/lib/jquery.heightLine.js', array(), '1.0.0', true);
	wp_enqueue_script('commonjs', get_template_directory_uri() . '/assets/js/common.js', array(), '1.0.0', true);
	wp_enqueue_script('slickjs', get_template_directory_uri() . '/assets/js/lib/slick.min.js', array(), '1.0.0', true);
}

add_action( 'wp_enqueue_scripts', 'cybervalue_script_enqueue');

function cybervalue_theme_setup() {
	add_theme_support( 'menus' );

	register_nav_menu('primary', 'Primary Header Navigation');
	register_nav_menu('secondary', 'Footer Navigation');
}

add_action('after_setup_theme', 'cybervalue_theme_setup');

function template_uri() {
	return get_template_directory_uri();
}
add_shortcode("template_uri", "template_uri");
