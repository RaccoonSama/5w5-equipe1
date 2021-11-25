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
if (is_page(8)) {
	get_header('parcours');
} else  {
	get_header();
}

?>

	<main id="primary" class="site-main">

		<?php
<<<<<<< HEAD

=======
>>>>>>> 07fe07ef7869766c5754e4c53c220923cc358b16
		
		get_template_part('/template-parts/content', $pageTitleCut);
	



		?>

	</main><!-- #main -->

<?php
get_footer();
