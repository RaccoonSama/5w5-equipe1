<?php
/**
 * Template part for displaying page content in futur
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package 3Daccord
 */
$the_query = new WP_Query(array(
    'category_name' => 'professeurs',
    'post_status' => 'publish',
    'posts_per_page' => 16,
     'orderby' => 'date',
     'order'   => 'ASC'
));

?>

<article class="prof">  
    <div class="prof-haut">
    <?php
if ($the_query->have_posts()) : ?>
    <div class="prof-wrapper"> 
    <?php
        while ($the_query->have_posts()) : $the_query->the_post(); ?>
        <div class="prof-wrap">
            <div class="prof-img"><?php the_post_thumbnail();?></div>
            <div class="prof-content"><h1><?php  the_title();?></h1><?php the_content();?></div>
         </div>
            <?php
        endwhile; 
        wp_reset_postdata(); 
        ?> 
</div>
        <?php 
    endif; ?>
    </div> 

    <div class="prof-row">
    <?php
    if ($the_query->have_posts()) : ?>
    <?php
        while ($the_query->have_posts()) : $the_query->the_post(); ?>  
            <div class="prof-img-bas"><?php the_post_thumbnail();?></div>
            <?php
        endwhile; 
        wp_reset_postdata(); 
        ?> 

        <?php 
    endif; ?>
    </div>
 
</article>
