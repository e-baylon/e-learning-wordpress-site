<?php
/**
 * This is the template for displaying all single <posts>
 * 
 * 
 * @link https://developer.wordpress.org/themes/template-files-section/post-template-files/
 * 
 * 
 * 
 * @package elearning_ebaylon3
 * 
 * 
 * 
 *  */ 

?>
<?php get_header();?>
        <main>



    <?php

    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
        get_template_part('template-parts/content', 'single');
    endwhile;
    else :
        _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
    endif;
  

    ?>


</main>

    <?php get_footer();?>