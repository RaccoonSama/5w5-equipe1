<?php
/**
 * Template part for displaying page content in futur
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package 3Daccord
 */
$the_query = new WP_Query(array(
    'category_name' => 'proj-etudiant1',
    'post_status' => 'publish',
    'posts_per_page' => 5,
     'orderby' => 'date',
     'order'   => 'ASC'
));

?>

<article class="vie" >  
    <div class="vie-haut" id="vie-scroll">
    <?php
if ($the_query->have_posts()) : ?>
    <div class="vie-wrapper" > 
    <?php
        while ($the_query->have_posts()) : $the_query->the_post(); ?>
        <div class="vie-wrap">
            <div class="vie-img-wrap">
            <div class="vie-img"><?php the_post_thumbnail();?></div>
            </div>

            <div class="vie-content"><h1><?php  the_title();?></h1><?php the_content();?></div>
         </div>
            <?php
        endwhile; 
        wp_reset_postdata(); 
        ?> 
</div>
        <?php 
    endif; ?>
    </div> 

    <div class="vie-bas">

    </div>
    <div class="progress-bar">
        <div class="progress-point" id="scrollPoint"></div>
    </div>
</article>
<div class="fleche">
    <div class="fleche-gauche fleches" id="<-"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24.23 30.11"><g id="Calque_2" data-name="Calque 2"><g id="Maquette_Accueil_Mobile"><g id="Header"><path d="M22.16,30.11a2.56,2.56,0,0,0,1.52-.47,1.23,1.23,0,0,0-.11-2.12L9.36,15.06,23.57,2.6A1.23,1.23,0,0,0,23.68.48,2.68,2.68,0,0,0,20.74.4L.66,13.92A1.34,1.34,0,0,0,0,15,1.51,1.51,0,0,0,.66,16.2L20.74,29.71A2.56,2.56,0,0,0,22.16,30.11Z"/></g></g></g></svg></div>
    <div class="fleche-droite fleches" id="->"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24.23 30.11"><g id="Calque_2" data-name="Calque 2"><g id="Maquette_Accueil_Mobile"><g id="Header"><path d="M2.08,30.11a2.54,2.54,0,0,1-1.52-.47,1.23,1.23,0,0,1,.1-2.12L14.87,15.06.66,2.6A1.23,1.23,0,0,1,.56.48,2.67,2.67,0,0,1,3.49.4L23.57,13.92A1.34,1.34,0,0,1,24.23,15a1.51,1.51,0,0,1-.66,1.19L3.49,29.71A2.55,2.55,0,0,1,2.08,30.11Z"/></g></g></g></svg></div>
</div>
