<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package 3Daccord
 */


?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="sass/style.css">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'troisdaccord' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			
			if ( is_front_page() && is_home() ) :
				?>
				<div class="header-wrapper">
				<img src="<?php echo get_bloginfo('template_url')?>/media/logo-tim.svg" alt="logo-tim" class="header-pic">
				<h1 class="site-title">Techniques <br> D’intégration <br> Multimédia </h1>
				<img src="<?php echo get_bloginfo('template_url')?>/media/triangle-header.svg" alt="logo-triangle" class="header-triangle">
				<img src="<?php echo get_bloginfo('template_url')?>/media/grille.svg" alt="logo-triangle" class="header-grid">


				</div>
				<?php 
			else :
				// if ($the_query->have_posts()) :
				// 	while ($the_query->have_posts()) : $the_query->the_post(); 
				
					?>
				
				
				<!-- <div class="header-not-main">
					<div class="title">
						<h1><?php// wp_title("");?></h1>
					</div>
					<div class="img-subtitle"> 
					<?php // the_content();?>
					</div>
				</div> -->
				<?php
				//  endwhile; 
				//  wp_reset_postdata(); 
				// endif;
			endif;
			
			// if ( $troisdaccord_description || is_customize_preview() ) :
			// 	?>
			 	<!-- <p class="site-description"><?php //echo $troisdaccord_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p> -->
			 <?php //endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'troisdaccord' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
