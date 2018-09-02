<?php
/**
 * The header for the Inhabitent theme
 * 
 * Template Name: Header
 *
 * @package Inhabitent_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:image"
          content="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/inhabitent-logo-full.svg"/>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicon.ico"/>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
    <a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>

    <header id="masthead" class="site-header" role="banner">

        <div class="site-branding">
            <h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"
                                                         rel="home"><?php bloginfo( 'name' ); ?></a></h1>
            <a href="<?php echo home_url(); ?>">
                <div class="img-div"></div>
            </a>
        </div><!-- .site-branding -->

        <nav id="site-navigation" class="main-navigation" role="navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>

            <i class="fas fa-search"></i>
			<?php get_search_form(); ?>
        </nav><!-- #site-navigation -->

    </header><!-- #masthead -->

    <div id="content" class="site-content">
