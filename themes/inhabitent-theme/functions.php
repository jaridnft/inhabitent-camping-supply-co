<?php
/**
 * RED Starter Theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package inhabitent_Theme
 */

if ( ! function_exists( 'inhabitent_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function inhabitent_setup() {
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// Enable support for Post Thumbnails on posts and pages.
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html( 'Primary Menu' ),
	) );

	// Switch search form, comment form, and comments to output valid HTML5.
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

}
endif; // inhabitent_setup
add_action( 'after_setup_theme', 'inhabitent_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * @global int $content_width
 */
function inhabitent_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'inhabitent_content_width', 640 );
}
add_action( 'after_setup_theme', 'inhabitent_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function inhabitent_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html( 'Sidebar' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'inhabitent_widgets_init' );

/* *
 * The following changes the login logo of wp-admin 
 */ 

function inhabitent_login_logo() {
	echo '<style type="text/css">                                                                   
	body.login div#login h1 a { background-image:url('.get_stylesheet_directory_uri().'/images/logos/inhabitent-logo-text-dark.svg) !important; 
		background-size: 300px 53px !important;
		width: 320px;
		margin: 0;
	} 
	#loginform {
		margin-top: 0;
	}
	</style>';
}
add_action('login_head', 'inhabitent_login_logo');

/**
 * The following changes the logo url 
 */

function inhabitent_login_url( $url ) {
	// TODO: fix URL
		return get_bloginfo( get_bloginfo( 'wpurl' ) );
}
add_filter( 'login_headerurl', 'inhabitent_login_url' );

/**
 * Filter the stylesheet_uri to output the minified CSS file.
 */
function inhabitent_minified_css( $stylesheet_uri, $stylesheet_dir_uri ) {
	if ( file_exists( get_template_directory() . '/build/css/style.min.css' ) ) {
		$stylesheet_uri = $stylesheet_dir_uri . '/build/css/style.min.css';
	}

	return $stylesheet_uri;
}
add_filter( 'stylesheet_uri', 'inhabitent_minified_css', 10, 2 );

/**
 * Enqueue scripts and styles.
 */

function inhabitent_scripts() {
	wp_enqueue_style( 'inhabitent-style', get_stylesheet_uri() );

	wp_enqueue_script( 'inhabitent-skip-link-focus-fix', get_template_directory_uri() . '/build/js/skip-link-focus-fix.min.js', array(), '20130115', true );

	wp_enqueue_script( 'hero-header', get_template_directory_uri() . '/build/js/hero-header.min.js', array( 'jquery' ), '1.0.0', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'inhabitent_scripts' );

/**
 * Custom template tags for this theme.
 */

require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */

require get_template_directory() . '/inc/extras.php';

/**
* Remove "Editor" links from sub-menus  
*/

function inhabitent_remove_submenus() {
	remove_submenu_page( 'themes.php', 'theme-editor.php' );
	remove_submenu_page( 'plugins.php', 'plugin-editor.php' );
}
add_action( 'admin_menu', 'inhabitent_remove_submenus', 110 );


