<?php
/**
 * The sidebar containing the main widget area.s
 *
 * @package RED_Starter_Theme
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area" role="complementary">
	<div class="sidebar-contact">
		<h2>Contact Info</h2>
		<p><i class="fa fa-envelope"></i><a href='mailto:info@inhabitent.com'>info@inhabitent.com</a></p>
		<p><i class="fa fa-phone"></i><a href='tel:5553434567891'>778-456-7891</a></p>
		<p>
	
		</p>
	</div>
	<div class="sidebar-business-hours">
		<h2>Business Hours</h2>
		<p>
			<span class="day-of-week">Monday-Friday:</span>
				9am to 5pm
		</p>
		<p>
			<span class="day-of-week">Saturday:</span>
				10am to 2pm
		</p>
		<p>
			<span class="day-of-week">Sunday:</span>
				Closed
		</p>
	</div>
	<div class='archives'>
		<h2>Archives</h2>
		<?php $args = array(
			'type'            => 'monthly',
			'limit'           => '',
			'format'          => 'html', 
			'before'          => '',
			'after'           => '',
			'show_post_count' => false,
			'echo'            => 1,
			'order'           => 'DESC',
						'post_type'     => 'post'
	);
	wp_get_archives( $args ); ?>
	</div>
</div><!-- #secondary -->
