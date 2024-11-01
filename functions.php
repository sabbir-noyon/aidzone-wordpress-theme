<?php

if ( ! function_exists( 'aidzone_setup' ) ) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     *
     * @since Twenty Fifteen 1.0
     */
    function aidzone_setup() {
    
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on aidzone, use a find and replace
         * to change 'aidzone' to the name of your theme in all the template files
         */
        load_theme_textdomain( 'aidzone', get_template_directory() . '/languages' );
    
        // Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );
    
        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded  tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support( 'title-tag' );
    
        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * See: https://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
         */
        add_theme_support( 'post-thumbnails' );
    
        // This theme uses wp_nav_menu() in two locations.
        register_nav_menus( array(
            'main-menu' => __( 'Main Menu', 'aidzone' ),
        ) );
    
        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support( 'html5', array(
            'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
        ) );
    
        /*
         * Enable support for Post Formats.
         *
         * See: https://codex.wordpress.org/Post_Formats
         */
        add_theme_support( 'post-formats', array(
           'video', 'quote', 'gallery', 'audio'
        ) );
    
        remove_theme_support( 'widgets-block-editor' );

    }
    endif; 
    
// aidzone_setup
add_action( 'after_setup_theme', 'aidzone_setup' );


/**
 * Add a sidebar.
 */
function aidzone_widget_list() {

	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'textdomain' ),
		'id'            => 'blog-sidebar',
		'description'   => __( 'Widgets in this area will be shown on blog sidebar', 'textdomain' ),
		'before_widget' => '<div id="%1$s" class="sidebar-widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="sidebar-widget-title mb-20">',
		'after_title'   => '</h3>',
	) );


	register_sidebar( array(
		'name'          => __( 'Footer WIdget 1', 'textdomain' ),
		'id'            => 'footer-widget-1',
		'description'   => __( 'Widgets in this area will be shown on footer', 'textdomain' ),
		'before_widget' => '<div id="%1$s" class="tp-footer-widget footer-col-4-1 %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="tp-footer-widget-title">',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer WIdget 2', 'textdomain' ),
		'id'            => 'footer-widget-2',
		'description'   => __( 'Widgets in this area will be shown on footer', 'textdomain' ),
		'before_widget' => '<div id="%1$s" class="tp-footer-widget footer-col-4-2 %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="tp-footer-widget-title">',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer WIdget 3', 'textdomain' ),
		'id'            => 'footer-widget-3',
		'description'   => __( 'Widgets in this area will be shown on footer', 'textdomain' ),
		'before_widget' => '<div id="%1$s" class="tp-footer-widget footer-col-4-3 %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="tp-footer-widget-title">',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer WIdget 4', 'textdomain' ),
		'id'            => 'footer-widget-4',
		'description'   => __( 'Widgets in this area will be shown on footer', 'textdomain' ),
		'before_widget' => '<div id="%1$s" class="tp-footer-widget footer-col-4-4 %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="tp-footer-widget-title">',
		'after_title'   => '</h4>',
	) );



}
add_action( 'widgets_init', 'aidzone_widget_list' );




include_once('inc/aidzone-scripts.php');
include_once('inc/template-function.php');
include_once('inc/sidebar-recent-post.php');
if ( class_exists( 'Kirki' ) ) {
    include_once('inc/aidzone-kirki.php');
}

include_once('inc/nav-walker.php');



/**
 * Generate custom search form
 *
 * @param string $form Form HTML.
 * @return string Modified form HTML.
 */
function aidzone_search_form( $form ) {
	$form = '<div class="sidebar-widget-content">
    <div class="sidebar-search">
        <form action="' . home_url( '/' ) . '" method="get">
            <div class="sidebar-search-input">
            <input type="text" name="s" value="' . get_search_query() . '" placeholder="' . __( 'Search for:','aidzone' ) . '">
            <button type="submit">
                <i class="flaticon-search"></i>
            </button>
            </div>
        </form>
    </div>
</div>';

	return $form;
}
add_filter( 'get_search_form', 'aidzone_search_form' );