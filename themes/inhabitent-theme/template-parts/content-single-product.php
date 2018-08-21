<?php
/**
 * Template part for displaying single products.
 *
 * @package Inhabitent_Theme
 */

?>

<div class="product-single-item">
	<?php if ( has_post_thumbnail() ) : ?>
	
		<div class="product-single-image">
    
      <a href="<?php echo esc_url( get_permalink() )?>"><?php the_post_thumbnail( 'large' ); ?></a>
      
		</div><!-- .product-thumbnail-container -->
	<?php endif; ?>

	<div class="product-single-content">

		<h1><?php the_title(); ?></h1>
    <p class="product-single-price"><?php echo CFS()->get( 'price' ); ?></p>
    <p><?php the_content() ?></p>
		
		<div class="social-buttons">
			<button type="button" class="black-btn"><i class="fab fa-facebook"></i>Like</button>
			<button type="button" class="black-btn"><i class="fab fa-twitter"></i>Tweet</button>
			<button type="button" class="black-btn"><i class="fab fa-pinterest"></i>Pin</button>
		</div>

	</div><!-- .entry-content -->
</div> <!-- #post-## -->
