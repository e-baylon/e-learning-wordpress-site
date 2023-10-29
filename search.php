<?php
/***
* Template part for displaying serach results
* @link https://developer.wordpress.org/theme/basics/template-hierarchy/
*
* @package elearning_ebaylon3
* @since 1.0.0
*/
?>

<?php get_header();?>



<main class="search-container">


<div>
<?php
$s=get_search_query();
$args = array(
                's' =>$s
            );
    // The Query
$the_query = new WP_Query( $args );
if ( $the_query->have_posts() ) {
        _e("<h2 class=\"front-page-title\">Search Results for: ".get_query_var('s')."</h2>");
        while ( $the_query->have_posts() ) {
           $the_query->the_post();
                 ?>
                    <div class="result-container">
                        <div><?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?></div>
                        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                        <p><?php echo the_excerpt(); ?></p>

                    </div>
                    
                 <?php
        }
    }else{
?>
        <div class="alert alert-info">
          <h1 class="front-page-title">Sorry, but no search items matched your search criteria. :(</h1>
        </div>
<?php } ?>
</div>


</main>

<?php get_footer();?>