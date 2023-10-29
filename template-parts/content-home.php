<?php
/***
* Template part for displaying content in the home.php
* @link https://developer.wordpress.org/theme/basics/template-hierarchy/
*
* @package elearning_ebaylon3
* @since 1.0.0
*/
?>

<article <?php post_class();?> id="post-<?php the_ID();?>" >
        <!-- entry header -->
        <header>
        <!-- get the page title -->	
        <h2><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h1>
        <?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

        <p>by <?php the_author(); ?></p>
        <p>Published on: <?php echo get_the_date(); ?></p>

        </header>
        <!-- if you had an image it will display using wordpress's largest default thumbnail sizing (settings in the admin - you can see the sizes) -->
        <div class="entry-content">
        <!-- display page or post content -->
        <?php
        the_category();
        the_excerpt(); // displays all of the content within the editor in pages in the dashboard


        ?>
        <!-- other things you could put in here would be: pagination (more used for blog posts), custom posts, anything you need for site. -->
        </div>
        <footer class="entry-footer">
        <!--adds a link to edit your content -->
        <?php edit_post_link( __('Edit','themenamehere'), '<span class="edit-link">', '</span>' ); ?>
        </footer>
</article>


