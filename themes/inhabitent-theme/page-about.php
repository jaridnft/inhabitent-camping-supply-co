<?php
/*
* Template Name: About Page
*
* @package Inhabitent_Theme
*/

get_header(); ?>

<div class="about-content-area">

  <?php while ( have_posts() ) : the_post(); ?>
  
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <div class="entry-content">
        <?php the_content(); ?>
      </div><!-- .entry-content -->
    </article><!-- #post-## -->

  <?php endwhile; ?>
  
</div>

<?php get_footer(); ?>
