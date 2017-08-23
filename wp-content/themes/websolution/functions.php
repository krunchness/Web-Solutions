<?php
/**
 * underscore functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package underscore
 */

if ( ! function_exists( 'underscore_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function underscore_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on underscore, use a find and replace
	 * to change 'underscore' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'underscore', get_template_directory() . '/languages' );

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
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary', 'underscore' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'underscore_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'underscore_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function underscore_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'underscore_content_width', 640 );
}
add_action( 'after_setup_theme', 'underscore_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function underscore_widgets_init() {

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Column One', 'underscore' ),
		'id'            => 'footer',
		'description'   => esc_html__( 'Add widgets here.', 'underscore' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Column Two', 'underscore' ),
		'id'            => 'footer-two',
		'description'   => esc_html__( 'Add widgets here.', 'underscore' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Column Three', 'underscore' ),
		'id'            => 'footer-three',
		'description'   => esc_html__( 'Add widgets here.', 'underscore' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Column Four', 'underscore' ),
		'id'            => 'footer-four',
		'description'   => esc_html__( 'Add widgets here.', 'underscore' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
}
add_action( 'widgets_init', 'underscore_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function underscore_scripts() {
	//styles
	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/inc/bootstrap/css/bootstrap.min.css');
	wp_enqueue_style( 'lightslider-style', get_template_directory_uri() . '/inc/lightslider/src/css/lightslider.css' , array(), null);
	wp_enqueue_style( 'hamburg-style', get_template_directory_uri() . '/css/hamburgers.min.css' , array(), null);
	wp_enqueue_style( 'carousel-style', get_template_directory_uri() . '/css/owl.carousel.min.css' , array(), null);
	wp_enqueue_style( 'carousel-two-style', get_template_directory_uri() . '/css/owl.theme.min.css' , array(), null);
	wp_enqueue_style( 'underscore-style', get_stylesheet_uri() );

	//Fonts
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/fonts/font-awesome/css/font-awesome.min.css' , array(), null);

	//scripts
	// wp_enqueue_script( 'website-JQuery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js' );
	wp_deregister_script( 'jquery' );
	wp_enqueue_script( 'jquery-external', get_template_directory_uri().'/js/jquery-3.2.1.min.js', array(), '3.2.1', false );

	wp_enqueue_script( 'underscore-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'myscript', get_template_directory_uri() . '/js/script.js', array(), '20151215', true );
	wp_enqueue_script( 'lightslider', get_template_directory_uri() . '/inc/lightslider/src/js/lightslider.js', array(), true );
	wp_enqueue_script( 'carousel-js', get_template_directory_uri() . '/js/owl.carousel.min.js', array(), true );
	wp_enqueue_script( 'underscore-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'underscore_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/admin/admin-init.php';

/* Mobile Detect */
require_once(__DIR__.'/inc/Mobile_Detect.php');

/* BFI Thumb */
require_once(__DIR__.'/inc/BFI_Thumb.php');

/**
 * Load All Custom Functions.
 */
require_once(__DIR__.'/custom-functions.php');

