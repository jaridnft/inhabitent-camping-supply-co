<?php
/**
 * The sidebar containing the main widget area
 * 
 * Template Name: Single-Adventure
 *
 * @package Inhabitent_Theme
 */

// @TODO: fix work around, couldn't enqueue script inside functions.php successfully
wp_enqueue_script( 'hero-header', get_template_directory_uri() . '/build/js/hero-header.min.js', array( 'jquery' ), '1.0.0', true );

get_header(); ?>

    <div class="adventure-page-container">
        <div class="adventure-header-image hero-image-header">
			<?php the_post_thumbnail( 'x-large' ); ?>
        </div>
        <main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header class="entry-header">
						<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                    </header><!-- .entry-header -->

                    <div class="entry-content">
                        <p class="author">By: <?php the_author() ?></p>
						<?php the_content(); ?>
                    </div><!-- .entry-content -->
                </article><!-- #post-## -->

			<?php endwhile; // End of the loop. ?>

            <div class="social-buttons">
                <button type="button" class="black-btn"><i class="fab fa-facebook"></i>Like</button>
                <button type="button" class="black-btn"><i class="fab fa-twitter"></i>Tweet</button>
                <button type="button" class="black-btn"><i class="fab fa-pinterest"></i>Pin</button>
            </div>

        </main><!-- #main -->
    </div><!-- #adventure-page-container -->

<?php get_footer();