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
// global $post;
// $post_slug = $post->post_name;
// $the_query = new WP_Query(array(
	
// 	'name' => $post_slug,
//     'post_status' => 'publish',
//     'posts_per_page' => 1,
//      'orderby' => 'date',
//      'order'   => 'ASC',
// 	 'post_type' => 'post'
// ));

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
			
		
				?>
				<div class="header-wrapper">
				<h1 class="site-title other"><?php the_title(); ?></h1>
				<img src="<?php echo get_bloginfo('template_url')?>/media/triangle-header.svg" alt="logo-triangle" class="header-triangle">
				<img src="<?php echo get_bloginfo('template_url')?>/media/grille.svg" alt="logo-triangle" class="header-grid">


				</div>
			
			 
		</div><!-- .site-branding -->

		<div id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'troisdaccord' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</div><!-- #site-navigation -->
	</header><!-- #masthead -->
