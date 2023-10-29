<?php
/**
 * The template for displaying all pages by default. Please note that this is the WordPress construct of pages and that other 'pages' on your WordPress site mau use a different template.
 * 
 * @link https://developer.wordpress.org/themes/template-files-section/page-template-files/
 * 
 * 
 * * @package elearning_ebaylon3
 * 

 *  */ 

 ?>

<?php get_header();?>
        <main class="pages-container">


    <?php

    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
        // what is being displayed, and this will come from our template part
        get_template_part('template-parts/content', 'page');
    endwhile;

    endif;
  

    ?>

<div id="blog-sidebar" class="widget-area">
        <?php dynamic_sidebar('Blog sidebar'); ?>
    </div>


</main>

    <?php get_footer();?>