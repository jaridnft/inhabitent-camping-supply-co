<?php
/**
 * The template for displaying the footer
 * 
 * Template Name: Footer
 *
 * @package Inhabitent_Theme
 */

?>

</div><!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="footer-blocks">
        <div class="footer-block-item">
            <div class="contact">
                <h3>Contact Info</h3>
                <p><i class="fa fa-envelope"></i><a href='mailto:info@inhabitent.com'>info@inhabitent.com</a></p>
                <p><i class="fa fa-phone"></i><a href='tel:5553434567891'>778-456-7891</a></p>
                <p>
                    <span><i class="fab fa-facebook-square"></i></span>
                    <span><i class="fab fa-twitter-square"></i></span>
                    <span><i class="fab fa-google-plus-square"></i></span>
                </p>
            </div>
        </div>

        <div class="footer-block-item">
            <div class="business-hours">
                <h3>Business Hours</h3>
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
        </div>

        <div class="footer-block-item">
            <div class="text-logo">
                <a href="<?php echo home_url(); ?>"><img alt="Inhabitent text logo"
                                                         src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logos/inhabitent-logo-text.svg"></a>
            </div>
        </div>
    </div>
    <div class="site-info">
        <a href=#>Copyright &copy; <?php echo date( "Y" ); ?> Inhabitent</a>
    </div><!-- .site-info -->

</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
