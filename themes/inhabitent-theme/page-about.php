<?php

// About page structure

get_header(); ?>

  <div class="about-page-hero">
    <h1>About</h1>
  </div>
  <?php while ( have_posts() ) : the_post(); ?>
    <?php get_template_part( 'template-parts/content', 'page' ); ?>
  <?php endwhile; ?>

<?php get_footer(); ?>