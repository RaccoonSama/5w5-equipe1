<?php
/**
 * Template part for displaying page content in futur
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package 3Daccord
 */
// $the_query = new WP_Query(array(
//     'category_name' => 'proj-etudiant1',
//     'post_status' => 'publish',
//     'posts_per_page' => 4,
//      'orderby' => 'date',
//      'order'   => 'ASC'
// ));

?>

<article class="vie">  
    <div class="vie-haut">
    <?php
if ($the_query->have_posts()) : ?>
    <div class="vie-wrapper"> 
    <?php
        while ($the_query->have_posts()) : $the_query->the_post(); ?>
        <div class="vie-wrap">
            <div class="vie-img-wrap">
            <div class="vie-img"><?php the_post_thumbnail();?></div>
            <div class="vie-ombre"></div>
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
