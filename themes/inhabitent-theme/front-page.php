<?php
/**
 * The template for displaying the front-page.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>
<div class="front-page-container">
    <div class="front-page-hero hero-image-header">
        <img class="main-logo" alt="Inhabitent primary logo"
             src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logos/inhabitent-logo-full.svg">
    </div>

    <h2>Shop Stuff</h2>
    <div class="front-page-shop-container">
		<?php
		$terms = get_terms( array( 'taxonomy' => 'product_type' ) );
		?>

		<?php foreach ( $terms as $term ) : setup_postdata( $term ); ?>

			<?php
			echo '<div class="front-page-shop-item">';
			echo '<img alt="' . 'icon for ' . $term->name . '" src="' . get_stylesheet_directory_uri() . '/assets/images/product-type-icons/' . $term->name . '.svg">';
			echo '<p>' . $term->description . '</p>';
			echo '<a href="' . get_term_link( $term ) . '">' . $term->name . ' Stuff' . '</a>
				</div>';
			?>

		<?php endforeach; ?>
    </div> <!-- end of front-page-shop-container -->

    <h2>Inhabitent Journal</h2>
    <div class="front-page-journal-container">
		<?php
		$journal_args = array(
			'posts_per_page' => 3
		);

		$journal_posts = get_posts( $journal_args );
		?>

		<?php foreach ( $journal_posts as $post ) : setup_postdata( $post ); ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php if ( has_post_thumbnail() ) : ?>

					<?php the_post_thumbnail( 'large' ); ?>

				<?php endif; ?>

				<?php if ( 'post' === get_post_type() ) : ?>

                    <div class="front-page-entry-meta">
                        <p><?php inhabitent_posted_on(); ?>
                            / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?></p>
						<?php the_title( sprintf( '<h3 class="front-page-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
                    </div><!-- .entry-meta -->
					<?php
					echo '<div class="journal-read-more-container"><a href="' . esc_url( get_permalink() ) . '">Read more &rarr;</a></div>';
					?>

				<?php endif; ?>

            </article><!-- #post-## -->

		<?php endforeach; ?>
    </div> <!-- end of front-page-journal-container -->

    <h2>Adventures</h2>
    <div class="front-page-adventure-container">
    <div class="adventure-grid-container">
		<?php
		$adventure_args = array(
			'posts_per_page' => 4,
			'post_type'      => 'adventure'
		);

		$adventure_posts = get_posts( $adventure_args );
		?>


		<?php foreach ( $adventure_posts as $post ) : setup_postdata( $post ); ?>


            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


				<?php if ( has_post_thumbnail() ) : ?>


					<?php the_post_thumbnail( 'large' ); ?>


				<?php endif; ?>


				<?php if ( 'adventure' === get_post_type() ) : ?>

					<?php the_title( sprintf( '<h3 class="front-page-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' );
					echo '<div class="adventure-read-more-container"><a href="' . esc_url( get_permalink() ) . '">Read more &rarr;</i></a></div>';
					?>


				<?php endif; ?>


            </article><!-- #post-## -->


		<?php endforeach; ?>


	</div><!-- end of adventure-grid-container -->
	<a class="more-adventures" href=#>More Adventures</a>
    </div> <!-- end of front-page-adventure-container -->

</div>

<?php get_footer(); ?>
