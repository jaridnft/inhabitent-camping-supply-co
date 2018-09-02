<?php
/**
 * The main template file
 * 
 * Template Name: Index
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

<div id="primary" class="journal-content-area">
    <main id="main" class="journal-site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', '' ); ?>

		<?php endwhile; ?>

    </main><!-- #main -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
