<?php
/*
* Template Name: About Page
*
*/

get_header(); ?>

<div class="about-content-area">

  <?php while ( have_posts() ) : the_post(); ?>
  
    <?php get_template_part( 'template-parts/content', 'notitle' ); ?>

  <?php endwhile; ?>
  
</div>

<?php get_footer(); ?>