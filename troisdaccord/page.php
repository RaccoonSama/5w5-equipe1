<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package 3Daccord
 */
$pageTitle = the_title('','',false);
$pageTitleCut = strtolower(substr($pageTitle,0,4)) ;

get_header();
?>

	<main id="primary" class="site-main">

		<?php
<<<<<<< HEAD

=======
echo  $pageTitleCut;
>>>>>>> 861c34840ee912d00165f31544a7c826d1308ea1
		
		get_template_part('/template-parts/content', $pageTitleCut);
	



		?>

	</main><!-- #main -->

<?php
get_footer();
