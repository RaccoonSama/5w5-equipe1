<?php get_header();


$the_query = new WP_Query(array(
    'category_name' => 'resume',
    'post_status' => 'publish',
    'posts_per_page' => 2,
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
?>

<?php
 else : ?>
    <p><?php __('No category'); ?></p>
<?php endif; ?>
<!--  -->
<?php get_footer(); ?>