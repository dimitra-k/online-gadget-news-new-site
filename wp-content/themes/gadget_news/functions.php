<?php
/**
 * gadget_news functions and definitions
 *
 * @package gadget_news
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'gadget_news_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function gadget_news_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on gadget_news, use a find and replace
	 * to change 'gadget_news' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'gadget_news', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	 add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'gadget_news' ),
	) );

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
	add_theme_support( 'custom-background', apply_filters( 'gadget_news_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // gadget_news_setup
add_action( 'after_setup_theme', 'gadget_news_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function gadget_news_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'gadget_news' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	
	// New Widget Areas
	register_sidebar(array(
	   'name' => __("Search Widget Area", CURRENT_THEME),
	   'id' => 'ads-widget-area-sidebar',
	   'description' => __("Search Widget Area", CURRENT_THEME),
	   'before_widget' => '<div id="%1$s">',
	   'after_widget' => '</div>',
	   'before_title' => '<h4>',
	   'after_title' => '</h4>',
	));
	register_sidebar(array(
	   'name' => __("Ad2 Widget Area", CURRENT_THEME),
	   'id' => 'ads-widget-area',
	   'description' => __("Ads Widget Area", CURRENT_THEME),
	   'before_widget' => '<div id="%1$s">',
	   'after_widget' => '</div>',
	   'before_title' => '<h4>',
	   'after_title' => '</h4>',
	));
	register_sidebar(array(
	   'name' => __("Ad3 Widget Area", CURRENT_THEME),
	   'id' => 'ad3-widget-area',
	   'description' => __("Ads Widget Area", CURRENT_THEME),
	   'before_widget' => '<div id="%1$s">',
	   'after_widget' => '</div>',
	   'before_title' => '<h4>',
	   'after_title' => '</h4>',
	));
	register_sidebar(array(
	   'name' => __("Ad4 Widget Area", CURRENT_THEME),
	   'id' => 'ad4-widget-area',
	   'description' => __("Ads Widget Area", CURRENT_THEME),
	   'before_widget' => '<div id="%1$s">',
	   'after_widget' => '</div>',
	   'before_title' => '<h4>',
	   'after_title' => '</h4>',
	));
	register_sidebar(array(
	   'name' => __("Ad5 Widget Area", CURRENT_THEME),
	   'id' => 'ad5-widget-area',
	   'description' => __("Ads Widget Area", CURRENT_THEME),
	   'before_widget' => '<div id="%1$s">',
	   'after_widget' => '</div>',
	   'before_title' => '<h4>',
	   'after_title' => '</h4>',
	));
	register_sidebar(array(
	   'name' => __("Ad6 Widget Area", CURRENT_THEME),
	   'id' => 'ad6-widget-area',
	   'description' => __("Ads Widget Area", CURRENT_THEME),
	   'before_widget' => '<div id="%1$s">',
	   'after_widget' => '</div>',
	   'before_title' => '<h4>',
	   'after_title' => '</h4>',
	));
	register_sidebar(array(
	   'name' => __("Ad7 Widget Area", CURRENT_THEME),
	   'id' => 'ad7-widget-area',
	   'description' => __("Ads Widget Area", CURRENT_THEME),
	   'before_widget' => '<div id="%1$s">',
	   'after_widget' => '</div>',
	   'before_title' => '<h4>',
	   'after_title' => '</h4>',
	));
	register_sidebar(array(
	   'name' => __("Ad8 Widget Area", CURRENT_THEME),
	   'id' => 'ad8-widget-area',
	   'description' => __("Ads Widget Area", CURRENT_THEME),
	   'before_widget' => '<div id="%1$s">',
	   'after_widget' => '</div>',
	   'before_title' => '<h4>',
	   'after_title' => '</h4>',
	));
}
add_action( 'widgets_init', 'gadget_news_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function gadget_news_scripts() {
	
	wp_enqueue_style ('bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css');
	
	wp_enqueue_style( 'gadget_news-style', get_stylesheet_uri() );
	
	wp_enqueue_style ('styles-css', get_template_directory_uri() . '/css/styles.css');
	
	wp_enqueue_style( 'gadget_news-style', get_stylesheet_uri() );
	
	 wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ));

	wp_enqueue_script( 'gadget_news-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'gadget_news-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'gadget_news_scripts' );

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

// Shorter version of the_excerpt

function exc_excerpt($limit) {
	$excerpt = explode(' ', get_the_excerpt(), $limit);
	if (count($excerpt)>=$limit) {
		array_pop($excerpt);
	$excerpt = implode(" ",$excerpt).'...';
	} else {
		$excerpt = implode(" ",$excerpt);
	} 
	$excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
	return $excerpt;
}

// function to display number of posts.
function getPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return '0 View';
    }
    return $count.' Views';
}
 
// function to count views.
function setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
 
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);