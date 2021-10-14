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
    'posts_per_page' => 4,
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
    <div class="parcours-container-full">
    <div class="class-session-1">
        <div class="icon-session-1">
<?php


$term_id = 14; // use get_queried_object()->term_id; to get the current term id
$taxonomy_name = 'category'; // use use get_queried_object()->taxonomy; to get the current taxonomy name
$countchildren =(get_term_children( $term_id, $taxonomy_name ));
print_r($countchildren);

foreach ($countchildren as $key => $child) {
    $noClass = $key + 1;
    ?>
    <div class="session-<?=$noClass;?>">aaaaaaaaaaaa</div>
    <?php
}

// $ArrayChild = get_categories( $args);
// $obj = $ArrayChild[0];
// //print_r($ArrayChild[2]);
//    foreach ($ArrayChild as $key => $childA) {
//         print_r($childA);
        
//    }
  


?>
        </div>
        <?php
    // if ($the_query->have_posts()) : 
    //     while ($the_query->have_posts()) : $the_query->the_post(); ?>

         <div class="content-section-accueil"><?php //the_content(); ?></div>

            <?php
    //     endwhile; 
    //     wp_reset_postdata(); 
    // endif; ?>
</div>
    </div>
</article>