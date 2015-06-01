<?php
/**
 * Umex functions and definitions
 *
 * @package Umex
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'umex_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function umex_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Umex, use a find and replace
	 * to change 'umex' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'umex', get_template_directory() . '/languages' );

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
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'umex' ),
	) );

	/*
	* Добавляем ещё два меню
	* В хедере - меню с контактной страницей
	* И в футере - типа карта сайта
	*/
	/**register_nav_menus( array(
		'contact' => __( 'Страница контактов', 'umex' ),
	) );

	register_nav_menus( array(
		'allelements' => __( 'Меню всех страниц', 'umex' ),
	) );*/
	
	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'umex_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // umex_setup
add_action( 'after_setup_theme', 'umex_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function umex_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'umex' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'umex_widgets_init' );

/**--- Prima+ ---*/
/**--- Header slider ---*/
function umex_slider_widgets_init() {

    register_sidebar( array(
        'name' => __( 'Слайдер в шапке', 'umex' ),
        'id' => 'headerslider',
        'description' => __( 'Виджет для слайдера в шапке', 'umex' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
    ) );
}

add_action( 'widgets_init', 'umex_slider_widgets_init' );

/**--- FooterInfo 1 ---*/
function umex_footerinfo1_widgets_init() {

    register_sidebar( array(
        'name' => __( 'Широкий виджет в футере', 'umex' ),
        'id' => 'footerinfo1',
        'description' => __( 'Виджет с информацией в футере', 'umex' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
    ) );
}

add_action( 'widgets_init', 'umex_footerinfo1_widgets_init' );

/**--- FooterInfo 2 ---*/
function umex_footerinfo2_widgets_init() {

    register_sidebar( array(
        'name' => __( 'Узкий виджет в футере 2', 'umex' ),
        'id' => 'footerinfo2',
        'description' => __( 'Узкий виджет 2 с информацией в футере', 'umex' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
    ) );
}

add_action( 'widgets_init', 'umex_footerinfo2_widgets_init' );

/**--- FooterInfo 3 ---*/
function umex_footerinfo3_widgets_init() {

    register_sidebar( array(
        'name' => __( 'Узкий виджет в футере 3', 'umex' ),
        'id' => 'footerinfo3',
        'description' => __( 'Узкий виджет 3 с информацией в футере', 'umex' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
    ) );
}

add_action( 'widgets_init', 'umex_footerinfo3_widgets_init' );

/**--- Font Awesome ---*/
add_action( 'wp_enqueue_scripts', 'enqueue_font_awesome' );
function enqueue_font_awesome() {
	wp_enqueue_style( 'font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' );
}

/**--- Prima- ---*/

/**
 * Enqueue scripts and styles.
 */
function umex_scripts() {
	wp_enqueue_style( 'umex-style', get_stylesheet_uri() );

	wp_enqueue_script( 'umex-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'umex-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'umex_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

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
 * Allow .svg
 */
function additional_mime_types( $mimes ) {
	$mimes['svg'] = 'image/svg+xml';

	return $mimes;
}
add_filter( 'upload_mimes', 'additional_mime_types' );
