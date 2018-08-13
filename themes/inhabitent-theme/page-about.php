<?php

// About page structure

get_header(); ?>

  <div class="about-page-hero">
    <h1><?php the_title() ?></h1>
  </div>
  <?php while ( have_posts() ) : the_post(); ?>
    <?php get_template_part( 'template-parts/content', 'about' ); ?>
  <?php endwhile; ?>

<?php get_footer(); ?>