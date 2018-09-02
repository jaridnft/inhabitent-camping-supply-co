<?php
/**
 * The template for displaying adventure list.
 *
 * @package Inhabitent_Theme
 */


get_header(); ?>

<div id="primary" class="adventure-content-area">
    <h1>Latest Adventures</h1>

    <div class="adventure-archive-grid-container">
		<?php
		$adventure_args = array(
			'posts_per_page' => 4,
			'post_type'      => 'adventure',
			'order'          => 'ASC'
		);

		$adventure_posts = get_posts( $adventure_args );
		?>


		<?php foreach ( $adventure_posts as $post ) : setup_postdata( $post ); ?>


            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


				<?php if ( has_post_thumbnail() ) : ?>


					<?php the_post_thumbnail( 'large' ); ?>


				<?php endif; ?>


				<?php if ( 'adventure' === get_post_type() ) : ?>

					<?php the_title( sprintf( '<h2 class="front-page-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
					echo '<div class="adventure-read-more-container"><a href="' . esc_url( get_permalink() ) . '">Read more &rarr;</i></a></div>';
					?>


				<?php endif; ?>


            </article><!-- #post-## -->


		<?php endforeach; ?>


    </div><!-- end of adventure-grid-container -->

</div><!-- #primary -->

<?php get_footer(); ?>
