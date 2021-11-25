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
           
            <div class="metier-content"><h2><?php the_title();?></h2></div>
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
        <h1 class="emploi-titre">Entreprises en multimédia</h1>
    <?php
        while ($the_query2->have_posts()) : $the_query2->the_post(); ?>
        <li class="emploi-wrap">
           
            <div class="empoi-content"><h2><?php the_title();?></h2></div>
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
<?php
if ($the_query->have_posts()) : 
    while ($the_query->have_posts()) : $the_query->the_post();?>
<div  class="group-lightbox conteneur-light-box <?php the_title();?>">
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
    endif;
        ?>