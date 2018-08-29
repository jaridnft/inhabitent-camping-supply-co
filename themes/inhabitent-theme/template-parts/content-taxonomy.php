<?php
/**
 * Template part for displaying single products.
 *
 * @package Inhabitent_Theme
 */

?>

<div class="tax-grid-item">
    <div class="tax-thumbnail-container">
		<?php if ( has_post_thumbnail() ) : ?>

            <a href="<?php echo esc_url( get_permalink() ) ?>"><?php the_post_thumbnail( 'large' ); ?></a>

		<?php endif; ?>
    </div><!-- .product-thumbnail-container -->

    <div class="tax-entry-content">
		<?php the_title(); ?>
		<?php echo ' - ' . CFS()->get( 'price' ); ?>
    </div><!-- .entry-content -->

</div> <!-- #post-## -->
