<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="journal-entry-header">
		<?php the_title( '<h1 class="journal-entry-title">', '</h1>' ); ?>
		<a href="<?php the_permalink();?>"><?php the_post_thumbnail('home'); ?></a>
		<h2><?php the_date(); echo " / "; echo get_comments_number(); echo " comments"; echo " / by "; the_author(); ?></h2>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_excerpt(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->


