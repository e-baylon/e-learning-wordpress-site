<?php
/**
 * The header for our theme
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 * 
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * 
 * @package elearning_ebaylon3
 * 
 *   
 * 
 */

 ?>

 <!DOCTYPE html>
 <html <?php language_attributes(); ?>>
 <head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

   <?php wp_head();?>

 </head>
 <body <?php body_class(); ?>>
  <!-- <header> -->

  <header>
  <div class="logo-container">
  <?php if ( ! has_custom_logo() ) { ?>
 <?php if ( is_front_page() && is_home() ) : ?>
 <!-- //if your page is set to front-page or blog display the site title (appearance > customize) -->
 <a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" itemprop="url"><?php bloginfo( 'name' );
?></a>
 <?php else : ?>
 <!-- //if your page is not set to front-page or blog display the site title (appearance > customize) -->
 <a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" itemprop="url"><?php bloginfo( 'name' );
?></a>
 <?php endif; ?>
 <!-- //otherwise display the custom logo. -->
 <?php } else {
 the_custom_logo();
 }?>
</div>
    
   <nav class="main-menu">

   <input type="checkbox" id="hamburger-menu-checkbox">
<label for="hamburger-menu-checkbox">
  <span></span>
</label>
    <?php
      wp_nav_menu(
        array(
          'theme_location' => 'main-menu',
          'menu_id' => 'primary-menu',
        )
        );

      ?>
</nav>
    </header>
    <div id="alert-sidebar" class="widget-area">
        <?php dynamic_sidebar('Alert sidebar'); ?>
    </div>
<div id="content" class="site-content">
 