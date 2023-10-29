<?php
/**
 * The template for displaying archive pages - for categories
 * 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * 
 * @package ebaylon3_elearning
 * 
 * 
 *  */


 get_header();

 ?>



<h2 class="archive-title"><?php the_archive_title();?></h2>



<?php

if ( have_posts() ) :
        while ( have_posts() ) : the_post();

        get_template_part( 'template-parts/content', 'home' );

    endwhile;
  
    endif;

    ?>


<?php get_footer() ?>