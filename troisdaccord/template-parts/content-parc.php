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
    'posts_per_page' => 7,
     'orderby' => 'date',
     'order'   => 'ASC'
));
$the_query2 = new WP_Query(array(
    'category_name' => 'cours-text-session-1',
    'post_status' => 'publish',
    'posts_per_page' => 7,
     'orderby' => 'date',
     'order'   => 'ASC'
));
$the_queryATE = new WP_Query(array(
    'category_name' => 'ATE',
    'post_status' => 'publish',
    'posts_per_page' => 1,
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

         <div class="cours-session-<?=$noClass;?> bouton-cours"><?php the_content(); ?></div>

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
        'posts_per_page' => 7,
         'orderby' => 'date',
         'order'   => 'ASC'
    ));
    $the_query2 = new WP_Query(array(
        'category_name' => 'cours-text-session-' . $noClass+1,
        'post_status' => 'publish',
        'posts_per_page' => 7,
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
            <div class="logo">Stage en avance ?</div>
        </div>
    </div>
    <?php

if ($the_queryATE->have_posts()) : 
    while ($the_queryATE->have_posts()) : $the_queryATE->the_post(); ?>
    <div class="group-lightbox conteneur-light-box <?php the_title();?>">
    <div class="light-box">
        <h1>
            <div class="texte-titre"><?php the_title();?></div>
        </h1>
        <p class="contenu-lightbox"><?php the_content();?></p>
        <div class="barres">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 578.22 573.21"><defs><style>.cls-1{fill:#ecece0;}</style></defs><g id="Calque_2" data-name="Calque 2"><g id="Maquette_Lightbox"><g id="Barres"><polygon class="cls-1" points="578.02 0 0 573.21 68.81 573.21 578.16 69.6 578.02 0"/><polygon class="cls-1" points="578.09 151.29 152.9 573.21 224.71 573.21 578.22 220.88 578.09 151.29"/><polygon class="cls-1" points="578.09 301.74 300.92 573.21 372.73 573.21 578.22 371.33 578.09 301.74"/></g></g></g></svg>
        </div>
        <div class="bouton-fermer">
            <h2>X</h2>
        </div>
    </div>
</div>
<?php
        endwhile; 
        wp_reset_postdata(); 
    endif; ?>