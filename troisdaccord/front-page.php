<?php get_header();


$the_query = new WP_Query(array(
    'category_name' => 'resume',
    'post_status' => 'publish',
    'posts_per_page' => 5,
     'orderby' => 'date',
     'order'   => 'ASC'
));

$the_query2 = new WP_Query(array(
    'category_name' => 'lightbox-accueil',
    'post_status' => 'publish',
    'posts_per_page' => 1,
     'orderby' => 'date',
     'order'   => 'ASC'
));

 if ($the_query->have_posts()) : 
     while ($the_query->have_posts()) : $the_query->the_post(); ?>
        <div class="section-accueil-wrapper">

        <div class="txt-btn-accueil">
         <div class="content-section-accueil"><?php the_content(); ?></div>
         <div class="btn-placer"><button class="btn-section"><a href="<?php get_template_directory_uri() . the_title();?>">Section <?php the_title(); ?> </a> </button></div>
         </div>
         </div>
    <?php
     endwhile; 
     wp_reset_postdata(); 
    endif;
     if ($the_query2->have_posts()) : 
        while ($the_query2->have_posts()) : $the_query2->the_post(); 
?>
    <div class="group-lightbox conteneur-light-box <?php the_title();?>">
    <div class="light-box">
        <h1>
    <div class="texte-titre"><?php the_title();?></div>
        </h1>
        <p class="contenu-lightbox"><?php the_post_thumbnail();?></p>
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
  
<?php  ?>
<!--  -->
<?php get_footer(); ?>