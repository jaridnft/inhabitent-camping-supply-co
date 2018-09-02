<?php
/**
 * The template for displaying custom taxonomy
 * 
 * Template Name: Taxonomy
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

<div id="primary" class="tax-content-area">
    <main id="main" class="tax-site-main" role="main">

        <header class="tax-page-header">
            <h1><?php single_term_title(); ?></h1>
			<?php echo term_description( null, $taxonomy ) ?>
        </header><!-- .page-header -->

        <div class="tax-grid-container">
			<?php if ( have_posts() ) : ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'template-parts/content', 'taxonomy' ); ?>

				<?php endwhile; // End of the loop. ?>

			<?php else : ?>

				<?php get_template_part( 'template-parts/content', 'none' ); ?>

			<?php endif; ?>
        </div>

    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
