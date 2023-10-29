<?php
/**
 * The template for displaying the custom home page.
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


 <main class="articles-page">

 <h2 class="archive-title">Courses</h2>

 <section>

 <div class="articles-flex-container">
     <div>
 <?php

    if ( have_posts() ) :
        while ( have_posts() ) : the_post();

        get_template_part( 'template-parts/content', 'home' );

    endwhile;
  
    endif;
  

    ?>
</div>
<div id="blog-sidebar" class="widget-area">
        <?php dynamic_sidebar('Blog sidebar'); ?>
    </div>

</div>

 </section>


 </main>

 



    <?php get_footer();?>