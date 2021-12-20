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


?>
<article class="proj">  
    <?php
if ($the_query->have_posts()) : ?>
    <div class="proj-wrapper" id="scrollingprojets"> 
    <?php
        while ($the_query->have_posts()) : $the_query->the_post(); ?>
        <div class="proj-wrap metier-wrap">
            <div class="proj-content"><?php the_post_thumbnail();?><h1><?php  the_title();?></h1><?php the_content();?></div>
            
</div>
            <?php
        endwhile; 
        wp_reset_postdata(); 
        ?> 
</div>
        <?php 
    endif; ?>
    <div class="progress-bar">
        <div class="progress-point" id="scrollPoint"></div>
    </div>
        </div>

</article>
<?php
if ($the_query->have_posts()) : 
    while ($the_query->have_posts()) : $the_query->the_post(); ?>
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