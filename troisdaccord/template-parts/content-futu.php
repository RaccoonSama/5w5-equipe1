<?php
/**
 * Template part for displaying page content in futur
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package 3Daccord
 */
$the_query = new WP_Query(array(
    'category_name' => 'session-1',
    'post_status' => 'publish',
    'posts_per_page' => 4,
     'orderby' => 'date',
     'order'   => 'ASC'
));
?>

<article>   
   
</article>
