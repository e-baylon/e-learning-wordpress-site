<?php
/**
 * The template for displaying archive pages
 * 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * 
 * @package elearning_ebaylon3
 * 
 * 
 *  */


 get_header();

 ?>



<h2 class="archive-title">Posts in the <?php the_archive_title();?></h2>



<?php

if ( have_posts() ) :
        while ( have_posts() ) : the_post();

        get_template_part( 'template-parts/content', 'home' );

    endwhile;
  
    endif;

    ?>


<?php get_footer() ?>