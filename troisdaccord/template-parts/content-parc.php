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
$the_query2 = new WP_Query(array(
    'category_name' => 'cours-text-session-1',
    'post_status' => 'publish',
    'posts_per_page' => 4,
     'orderby' => 'date',
     'order'   => 'ASC'
));

$args = array(
    'slug'                     => 'cours',
    'orderby'                  => 'name',
    'order'                    => 'ASC',
    'hide_empty'               => false,
    'taxonomy'                 => 'category'
    ); 
?>

<article>
    <div class="parcours-container-full" id="cours-vertical">
    
      
<?php


$term_id = 14; // use get_queried_object()->term_id; to get the current term id
$taxonomy_name = 'category'; // use use get_queried_object()->taxonomy; to get the current taxonomy name
$countchildren =(get_term_children( $term_id, $taxonomy_name ));

foreach ($countchildren as $key => $child) {
    $noClass = $key + 1;
    ?>
<div class="session-<?=$noClass;?> sessions">
    <?php

    if ($the_query->have_posts()) : ?>
    <div class="sigle-cours<?=$noClass;?>"> 
    <?php
        while ($the_query->have_posts()) : $the_query->the_post(); ?>

         <div class="cours-session-<?=$noClass;?>"><?php the_content(); ?></div>

            <?php
        endwhile; 
        wp_reset_postdata(); 
        ?> 
</div>
        <?php 
    endif; 

if ($the_query2->have_posts()) : 
    ?>
    <div class="text-cours<?=$noClass;?>"> 
    <?php
        while ($the_query2->have_posts()) : $the_query2->the_post(); ?>
            
         <div class="text-session-<?=$noClass;?>">
        <h1> <?php the_title(); ?></h1>
         <?php the_content(); ?>
        </div>

            <?php
        endwhile; 
        wp_reset_postdata(); 
        ?> 
        </div>
                <?php 
    endif; ?>


</div>
    <?php
    $the_query = new WP_Query(array(
        'category_name' => 'session-' . $noClass+1,
        'post_status' => 'publish',
        'posts_per_page' => 4,
         'orderby' => 'date',
         'order'   => 'ASC'
    ));
    $the_query2 = new WP_Query(array(
        'category_name' => 'cours-text-session-' . $noClass+1,
        'post_status' => 'publish',
        'posts_per_page' => 4,
         'orderby' => 'date',
         'order'   => 'ASC'
    ));

}
?> 


        
       

    </div>
    <div class="progress-bar">
        <div class="progress-point" id="scrollPoint"></div>
    </div>
    
</article>
<div class="cours-ate">
        <div class="ate-wrap">
            <div class="ate-text">Stage en avance ? - ></div>
            <div class="logo"> ?</div>
        </div>
    </div>