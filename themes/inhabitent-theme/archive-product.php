<?php
/**
 * The template for displaying product list (shop tab).
 *
 * @package Inhabitent_Theme
 */



get_header(); ?>

	<div id="primary" class="product-content-area">
		<main id="main" class="product-site-main" role="main">
			<h1>Shop Stuff</h1>
			<ul><?php
				$terms = get_terms( array('taxonomy' => 'product_type') );
				foreach ( $terms as $term ) {
					$term_link = get_term_link( $term );
					
					// If there was an error, continue to the next term.
  				if ( is_wp_error( $term_link ) ) {
					continue;
					}
				echo '<li><a href="' . esc_url( $term_link ) . '">' . $term->name . '</a></li>';
				echo ' ';
				}?>
			</ul>

		<div class="products-grid-container">
			<?php		
				$args = array(
						'post_type' => 'product',
						'posts_per_page' => -1,
						'order' => 'ASC'				
				);

				$product_posts = get_posts( $args );
			?>

			<?php foreach ( $product_posts as $post ) : setup_postdata( $post ); ?>

				<?php get_template_part( 'template-parts/content', 'product' ); ?>

			<?php endforeach; ?>
		</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>