<?php
/**
 * Template part for displaying single posts.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="single-entry-header">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
		<?php endif; ?>

		<?php the_title( '<h1 class="single-entry-title">', '</h1>' ); ?>

		<div class="single-entry-meta">
			<?php red_starter_posted_on(); ?> / <?php red_starter_comment_count(); ?> / <?php red_starter_posted_by(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="single-entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	
	<footer class="single-entry-footer">
		<?php red_starter_entry_footer(); ?>
		<div class="social-buttons">
			<button type="button" class="black-btn"><i class="fab fa-facebook"></i>Like</button>
			<button type="button" class="black-btn"><i class="fab fa-twitter"></i>Tweet</button>
			<button type="button" class="black-btn"><i class="fab fa-pinterest"></i>Pin</button>
		</div>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
