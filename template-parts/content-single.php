<?php
/***
* Template part for displaying content in the single.php
* @link https://developer.wordpress.org/theme/basics/template-hierarchy/
*
* @package elearning_ebaylon3
* @since 1.0.0
*/
?>



<article class=" <?php post_class();?>">

<header>
<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
<p>by <?php the_author(); ?></p>
</header>



<span class="cat">Categories: <?php the_category(); ?></span>

<p>Published on: <?php the_date(); ?></p>

<div class="entry-content">
<?php the_content(); ?>
</div>




<?php

$prev_post = get_adjacent_post(false, '', true);
if(!empty($prev_post)) {
echo '<div class="post-links"><a href="' . get_permalink($prev_post->ID) . '" title="' . $prev_post->post_title . '">' . 'Previous Article: ' . $prev_post->post_title . '</a></div>'; }

$next_post = get_adjacent_post(false, '', false);
if(!empty($next_post)) {
echo '<div><a href="' . get_permalink($next_post->ID) . '" title="' . $next_post->post_title . '">' .'Next Article: ' . $next_post->post_title . '</a></div>'; }

?>

</article>






