<?php

// product (custom post) list page structure

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

		<div class="products-container">
			<?php if ( have_posts() ) : ?>

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php
						get_template_part( 'template-parts/content', 'product' );
					?>

				<?php endwhile; ?>

			<?php else : ?>

				<?php get_template_part( 'template-parts/content', 'none' ); ?>

			<?php endif; ?>
		</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>