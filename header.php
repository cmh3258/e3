<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package e3
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="icon" href="images/favicon.png">

	<style>
	  	@import url("https://use.typekit.net/wlv7uhx.css");
	</style>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<div class="top-rect-border">
		<div class="inner-rect-border"></div>
	</div>

	<div class="container">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'e3' ); ?></a>

		<header id="masthead" class="site-header">
			<div class="site-branding">
				<?php the_custom_logo(); ?>
			</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'e3' ); ?></button>
				<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					) );
				?>
			</nav><!-- #site-navigation -->

		</header><!-- #masthead -->
		<hr class="header-hr">
	</div>

	<div id="content" class="site-content">
