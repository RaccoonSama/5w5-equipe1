<?php
/**
 * Template part for displaying page content in futur
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package 3Daccord
 */
$the_query = new WP_Query(array(
    'category_name' => 'proj-carou',
    'post_status' => 'publish',
    'posts_per_page' => 18,
     'orderby' => 'date',
     'order'   => 'ASC'
));
$the_query2 = new WP_Query(array(
    'category_name' => 'projet-grid',
    'post_status' => 'publish',
    'posts_per_page' => 18,
     'orderby' => 'date',
     'order'   => 'ASC'
));
$the_query3 = new WP_Query(array(
    'category_name' => 'proj-carou2',
    'post_status' => 'publish',
    'posts_per_page' => 18,
     'orderby' => 'date',
     'order'   => 'ASC'
));
// code pour younes
$the_query3 = new WP_Query(array(
    'category_name' => 'proj-carou2',
    'post_status' => 'publish',
    'posts_per_page' => 18,
     'orderby' => 'date',
     'order'   => 'ASC'
));
//

?>
<article class="proj">  
    <?php
if ($the_query->have_posts()) : ?>
    <div class="proj-wrapper" id="scrollingprojets"> 
    <?php
        while ($the_query->have_posts()) : $the_query->the_post(); ?>
        <div class="proj-wrap">
            <div class="proj-content"><?php the_post_thumbnail();?><h1><?php  the_title();?></h1><?php the_content();?><div class="shadow"></div></div>
            
</div>
            <?php
        endwhile; 
        wp_reset_postdata(); 
        ?> 
</div>
        <?php 
    endif; ?>
    </div> 

    <div class="proj-grid">
    <?php
    if ($the_query2->have_posts()) : ?>
    <?php
        while ($the_query2->have_posts()) : $the_query2->the_post(); ?>  
            <div class="proj-img-grid"><?php the_post_thumbnail();?></div>
            <?php
        endwhile; 
        wp_reset_postdata(); 
        ?> 

        <?php 
    endif; ?>
    </div>
    <div class="progress-bar">
        <div class="progress-point" id="scrollPoint"></div>
    </div>
    <div class="proj-carou2">
    <?php
if ($the_query3->have_posts()) : ?>
    <div class="proj-wrapper"> 
    <?php
        while ($the_query3->have_posts()) : $the_query3->the_post(); ?>
        <div class="proj-wrap">
            <div class="proj-img"><?php the_post_thumbnail();?></div>
            <div class="proj-content"><h1><?php  the_title();?></h1><?php the_content();?></div>
         </div>
            <?php
        endwhile; 
        wp_reset_postdata(); 
        ?> 
</div>
        <?php 
    endif; ?>
    </div> 
</article>

