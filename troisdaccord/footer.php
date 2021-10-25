<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package 3Daccord
 */
$the_query = new WP_Query(array(
    'category_name' => 'footer',
    'post_status' => 'publish',
    'posts_per_page' => 3,
));

$the_query2 = new WP_Query(array(
    'category_name' => 'footer-2',
    'post_status' => 'publish',
    'posts_per_page' => 5,
));

?>
     
	<footer id="colophon" class="site-footer 
     <?php 
     if (home_url() != home_url($wp->request)) {
         ?>
         not-home
         <?php
     }
     ?>">
	<?php if ($the_query->have_posts()) : 
     while ($the_query->have_posts()) : $the_query->the_post(); ?>
        <div class="section-footer-wrapper">
         <div class="content-section-footer"><?php the_content(); ?></div>
         </div>
    <?php
     endwhile; 
     wp_reset_postdata(); 
	endif;
?>
 <div class="section-footer-wrapper2">
<?php if ($the_query2->have_posts()) : 
     while ($the_query2->have_posts()) : $the_query2->the_post(); ?>
       
         <div class="content-section-footer2"><div class="border-dot"></div><?php the_content(); ?></div>
         
    <?php
     endwhile; 
     wp_reset_postdata(); 
	endif;
?>
</div>

     <div class="footer-wave"><img src="<?php echo get_bloginfo('template_url')?>/media/wave-footer.svg" alt="wave-footer"></div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
