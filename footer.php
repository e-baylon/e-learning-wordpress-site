<?php
/**
 * The template for displaying the footer
 * 
 * 
 * Contains the closing of the #content div 
 * 
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * 
 * @package elearning_ebaylon3
 * 
 *   
 * 
 */

 ?>


    <footer>

          <?php dynamic_sidebar( 'footer_widget' ); ?>
          <?php
      wp_nav_menu(
        array(
          'theme_location' => 'footer',
          'menu_id' => 'footer-menu',
        )
        );

      ?>
        <p>Copyright 2022 | For education purposes</p>
    </footer>

</div>

<!-- closing tag for site-content in the header  -->


<?php wp_footer(); ?>

</body>

</html>