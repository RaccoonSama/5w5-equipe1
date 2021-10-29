<?php
/**
 * Template part for displaying page content in futur
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package 3Daccord
 */
$the_query = new WP_Query(array(
    'category_name' => 'metier',
    'post_status' => 'publish',
    'posts_per_page' => 10,
     'orderby' => 'date',
     'order'   => 'ASC'
));
$the_query2 = new WP_Query(array(
    'category_name' => 'employeur',
    'post_status' => 'publish',
    'posts_per_page' => 10,
     'orderby' => 'date',
     'order'   => 'ASC'
));
?>

<article class="futur"> 
    <div class="metier">
    <?php
if ($the_query->have_posts()) : ?>
    <div class="metier-wrapper"> 
    <?php
        while ($the_query->have_posts()) : $the_query->the_post(); ?>
        <div class="metier-wrap">
           
            <div class="metier-content"><h1><?php the_title();?></h1></div>
         </div>
            <?php
        endwhile; 
        wp_reset_postdata(); 
        ?> 
</div>
        <?php 
    endif; ?>
    </div> 
    <div class="employeur">
    <?php
if ($the_query2->have_posts()) : ?>
    <ul class="emploi-wrapper"> 
    <?php
        while ($the_query->have_posts()) : $the_query->the_post(); ?>
        <li class="emploi-wrap">
           
            <div class="empoi-content"><h1><?php the_title();?></h1></div>
</li>
            <?php
        endwhile; 
        wp_reset_postdata(); 
        ?> 
</ul>
        <?php 
    endif; ?>
    </div> 

</article>
