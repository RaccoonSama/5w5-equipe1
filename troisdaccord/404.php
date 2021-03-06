<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package 3Daccord
 */

get_header();
?>

	<main id="primary" class="site-main">
		<section class="error-404 not-found">
			<header class="page-header">
			<!--	<h1 class="page-title"><?php // esc_html_e( 'Oops! That page can&rsquo;t be found.', 'troisdaccord' ); ?></h1> -->
			</header><!-- .page-header -->

			<!-- <div class="page-content">
				<p><?php //esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'troisdaccord' ); ?></p>
-->

				<div class="cube-container"> 
<div id="cube">
  <figure class="face front">Cette page n'est pas disponible</figure>
  <figure class="face back"></figure>
  <figure class="face left"></figure>
  <figure class="face right">Erreur 404</figure>
  <figure class="face top">:(</figure>
  <figure class="face bottom"></figure>
</div>
</div>
<div id = "cercle"></div>
<div id = "cercle1"></div>
<div id = "cercle2"></div>
<div id = "cercle3"></div>
					<?php
					//get_search_form();

					//the_widget( 'WP_Widget_Recent_Posts' );
					?>

					<!-- <div class="widget widget_categories">
						<h2 class="widget-title"><?php //esc_html_e( 'Most Used Categories', 'troisdaccord' ); ?></h2>
						<ul>
						//	<?php
						//	wp_list_categories(
						//		array(
						//			'orderby'    => 'count',
						//			'order'      => 'DESC',
						//			'show_count' => 1,
						//			'title_li'   => '',
						//			'number'     => 10,
						//		)
						//	);
							?>
						</ul>
					</div> .widget -->

					<?php
					/* translators: %1$s: smiley */
					// $troisdaccord_archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'troisdaccord' ), convert_smilies( ':)' ) ) . '</p>';
					//the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$troisdaccord_archive_content" );

					the_widget( 'WP_Widget_Tag_Cloud' );
					?>

			</div><!-- .page-content -->
		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php

