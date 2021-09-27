<?php get_header();



$the_query = new WP_Query(array(
    'category_name' => 'categorie',
    'post_status' => 'publish',
    'posts_per_page' => 2,
));


 if ($the_query->have_posts()) : 
     while ($the_query->have_posts()) : $the_query->the_post(); ?>
        
       <?php the_post_thumbnail()?>
       <div class="titre-section-accueil"><?php the_title(); ?></div>
         <div class="content-section-accueil"><?php the_content(); ?></div>
<?php
     endwhile; 
     wp_reset_postdata(); 

 else : ?>
    <p><?php __('No category'); ?></p>
<?php endif; ?>