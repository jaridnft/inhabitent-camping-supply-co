<?php
/**
 * The template for displaying the front-page.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>
  <div class="front-page-container">
    <div class="front-page-hero">
      <img class="main-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logos/inhabitent-logo-full.svg"></img>
    </div>

    <h2>Shop Stuff</h2>
    <div class="front-page-shop-container">
      <?php
        $terms = get_terms( array('taxonomy' => 'product_type') );
      ?>

      <?php foreach ( $terms as $term ) : setup_postdata( $term ); ?>
      
        <?php 
          echo '<div class="front-page-shop-item">';
          echo '<img src="' . get_stylesheet_directory_uri() . '/images/product-type-icons/' . $term->name . '.svg">';
          echo '<p>' . $term->description . '</p>';
          echo '<a href="' . get_permalink() . 'product-type/' . strtolower($term->name)  . '">' . $term->name . ' Stuff' . '</a>
          </div>'; 
        ?>

      <?php endforeach; ?>
    </div> <!-- end of front-page-shop-container -->

    <h2>Inhabitent Journal</h2>
    <div class="front-page-journal-container">
        <?php		
          $args = array(
              'posts_per_page' => 3			
          );

          $product_posts = get_posts( $args );
        ?>

        <?php foreach ( $product_posts as $post ) : setup_postdata( $post ); ?>

          <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

              <?php if ( has_post_thumbnail() ) : ?>

                <?php the_post_thumbnail( 'large' ); ?>

              <?php endif; ?>

              <?php if ( 'post' === get_post_type() ) : ?>
              
              <div class="front-page-entry-meta">
                <p><?php inhabitent_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?></p>
                <?php the_title( sprintf( '<h3 class="front-page-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
                </div><!-- .entry-meta -->
                <?php 
                  echo '<div class="read-more-container"><a href="'. esc_url( get_permalink() ) . '">Read more &rarr;</i></a></div>';
                ?>

              <?php endif; ?>

          </article><!-- #post-## -->

        <?php endforeach; ?>
      </div> <!-- end of front-page-journal-container -->
    </div>

<?php get_footer(); ?>
