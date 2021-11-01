<?php get_header();


$the_query = new WP_Query(array(
    'category_name' => 'categorie',
    'post_status' => 'publish',
    'posts_per_page' => 2,
     'orderby' => 'date',
     'order'   => 'ASC'
));


 if ($the_query->have_posts()) : 
     while ($the_query->have_posts()) : $the_query->the_post(); ?>
        <div class="section-accueil-wrapper">
        <?php the_post_thumbnail()?>
        <div class="txt-btn-accueil">
         <div class="content-section-accueil"><?php the_content(); ?></div>
         <div class="btn-placer"><button class="btn-section">Section <?php the_title(); ?> </button></div>
         </div>
         </div>
    <?php
     endwhile; 
     wp_reset_postdata(); 
?>
<div class="bg-section1"><img src="<?php echo get_bloginfo('template_url')?>/media/img-section.svg" alt=""></div>
<div class="bg-section2"><img src="<?php echo get_bloginfo('template_url')?>/media/cube.svg" alt="demi-cube"></div>
<?php
 else : ?>
    <p><?php __('No category'); ?></p>
<?php endif; ?>
<!--  -->
<?php get_footer(); ?>