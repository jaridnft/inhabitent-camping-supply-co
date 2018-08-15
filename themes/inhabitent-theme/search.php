<?php
/**
 * The template for displaying search results pages.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

	<section id="primary" class="search-content-area">
		<main id="main" class="search-site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="search-page-header">
				<h1 class="search-page-title"><?php printf( esc_html( 'Search Results for: %s' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'search' ); ?>

			<?php endwhile; ?>

			<?php inhabitent_numbered_pagination(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
		<?php get_sidebar(); ?>
	</section><!-- #primary -->

<?php get_footer(); ?>
