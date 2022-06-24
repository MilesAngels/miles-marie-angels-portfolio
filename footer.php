<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package miles-marie-angels-portfolio
 */

?>

<footer id="colophon" class="site-footer">
        <section class="footer-column">
            <div class="footer-container">
                <h3>ABOUT</h3>
            <?php
                wp_nav_menu(array(
                    'menu' => 'Nav Menu',
                    'theme_location' => 'footer-menu1',
                    'menu_class' => 'footer-menu',
                    'menu_id' => 'footer-id'
                ))
            ?>
            </div><!-- .site-info -->
            <div class="footer-container">
                <h3>PROJECTS</h3>
                <?php
                    wp_nav_menu(array(
                        'menu' => 'Nav Menu',
                        'theme_location' => 'footer-menu2',
                        'menu_class' => 'footer-menu',
                        'menu_id' => 'footer-id'
                    ))
                ?>
            </div>
            <div class="footer-container">
                <h3>ART</h3>
                <?php
                    wp_nav_menu(array(
                        'menu' => 'Nav Menu',
                        'theme_location' => 'footer-menu3',
                        'menu_class' => 'footer-menu',
                        'menu_id' => 'footer-id'
                    ))
                ?>
            </div>
            <div class="footer-container">
                <h3>CONTACT</h3>
                <?php
                    wp_nav_menu(array(
                        'menu' => 'Nav Menu',
                        'theme_location' => 'footer-menu4',
                        'menu_class' => 'footer-menu',
                        'menu_id' => 'footer-id'
                    ))
                ?>
            </div>
        </section>
        <div class="copyright">
            <p>&copy; Miles Marie Angels</p>
        </div>
	</footer><!-- #colophon -->
</div><!-- #page -->


<?php wp_footer(); ?>
</body>
</html>
