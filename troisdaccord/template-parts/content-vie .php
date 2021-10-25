<?php
/**
 * Template part for displaying page content in futur
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package 3Daccord
 */
$the_query = new WP_Query(array(
    'category_name' => 'proj-etudiant',
    'post_status' => 'publish',
    'posts_per_page' => 4,
     'orderby' => 'date',
     'order'   => 'ASC'
));
?>

<article>   
    <?php
if ($the_query->have_posts()) : ?>
    <div class="vie-wrapper"> 
    <?php
        while ($the_query->have_posts()) : $the_query->the_post(); ?>
        <div class="vie-wrap">
            <div class="vie-img"><?php the_post_thumbnail();?>
        <div class="vie-ombre"></div></div>
            <div class="vie-content"><?php the_content();?></div>
         </div>
            <?php
        endwhile; 
        wp_reset_postdata(); 
        ?> 
</div>
        <?php 
    endif; ?>
</article>
