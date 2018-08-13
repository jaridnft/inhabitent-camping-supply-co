<?php

// About page structure

get_header(); ?>

<div class="about-page">
  <?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'template-parts/content', 'page' ); ?>
	<?php endwhile; ?>
</div>

<?php get_footer(); ?>