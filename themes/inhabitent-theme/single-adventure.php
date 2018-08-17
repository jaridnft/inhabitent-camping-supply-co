<?php

get_header(); ?>

  <div class="adventure-page-container">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	        <header class="entry-header">
		        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	        </header><!-- .entry-header -->

	        <div class="entry-content">
            <p class="author">By: <?php the_author() ?></p>
		        <?php the_content(); ?>
	        </div><!-- .entry-content -->
        </article><!-- #post-## -->
				
      <?php endwhile; // End of the loop. ?>
      
      <div class="social-buttons">
        <button type="button" class="black-btn"><i class="fab fa-facebook"></i>Like</button>
        <button type="button" class="black-btn"><i class="fab fa-twitter"></i>Tweet</button>
        <button type="button" class="black-btn"><i class="fab fa-pinterest"></i>Pin</button>
		  </div>

		</main><!-- #main -->
	</div><!-- #adventure-page-container -->

<?php get_footer();