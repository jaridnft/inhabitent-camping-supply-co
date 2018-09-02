<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package inhabitent_theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param  array $classes Classes for the body element.
 * @return array
 */

function inhabitent_body_classes( $classes )
{
    // Adds a class of group-blog to blogs with more than 1 published author.
    if (is_multi_author() ) {
        $classes[] = 'group-blog';
    }

    return $classes;
}
add_filter('body_class', 'inhabitent_body_classes');

/**
 * The following changes the login logo of wp-admin 
 */ 

function inhabitent_login_logo()
{
    echo '<style type="text/css">                                                                   
	body.login div#login h1 a { background-image:url('.get_stylesheet_directory_uri().'/assets/images/logos/inhabitent-logo-text-dark.svg) !important; 
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

function inhabitent_login_url( $url )
{
    return get_bloginfo(home_url());
}
add_filter('login_headerurl', 'inhabitent_login_url');
