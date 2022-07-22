<?php
/**
 * miles-marie-angels-portfolio functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package miles-marie-angels-portfolio
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
function miles_marie_angels_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on miles-marie-angels-portfolio, use a find and replace
		* to change 'miles-marie-angels' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'miles-marie-angels', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'miles-marie-angels' ),
		)
	);

	//Register extra footer menu
	register_nav_menu('footer-menu1', 'Footer Menu 1');
	register_nav_menu('footer-menu2', 'Footer Menu 2');
	register_nav_menu('footer-menu3', 'Footer Menu 3');
	register_nav_menu('footer-menu4', 'Footer Menu 4');

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
			'miles_marie_angels_custom_background_args',
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
add_action( 'after_setup_theme', 'miles_marie_angels_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function miles_marie_angels_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'miles_marie_angels_content_width', 640 );
}
add_action( 'after_setup_theme', 'miles_marie_angels_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function miles_marie_angels_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'miles-marie-angels' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'miles-marie-angels' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'miles_marie_angels_widgets_init' );

function miles_marie_angels_footer_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Widget Area', 'miles-marie-angels' ),
			'id'            => 'footer-widget-area',
			'description'   => esc_html__( 'Add widgets here.', 'miles-marie-angels' ),
			'before_widget' => '<section>',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="footerTitle">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'miles_marie_angels_footer_widgets_init' );


/**
 * Enqueue scripts and styles.
 */
function miles_marie_angels_scripts() {
	wp_enqueue_style( 'miles-marie-angels-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'miles-marie-angels-style', 'rtl', 'replace' );

	//adding google fonts
	wp_enqueue_style('Montserrat', 'https://fonts.googleapis.com/css2?family=Montserrat&display=swap');
	wp_enqueue_style('Niconne', 'https://fonts.googleapis.com/css2?family=Niconne&display=swap');
	wp_enqueue_style('Beau_Rivage', 'https://fonts.googleapis.com/css2?family=Beau+Rivage&display=swap');
	wp_enqueue_style('Mr_Dafoe', 'https://fonts.googleapis.com/css2?family=Mr+Dafoe&display=swap');

	wp_enqueue_script( 'miles-marie-angels-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'miles-marie-angels-preloader', get_template_directory_uri() . '/js/preloader.js', array(), _S_VERSION, true);
	wp_enqueue_script( 'miles-marie-angels-navigation', get_template_directory_uri() . '/js/timeline.js', array(), _S_VERSION, true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'miles_marie_angels_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

