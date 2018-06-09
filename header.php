<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Floral
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="google-site-verification" content="gcnr2mdXgqdtmgnk3TtIVwvRL426LXod8wW6BLPHqJY" />
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'floral-lite' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="logo-placeholder">
			<img src="<?php bloginfo('template_url'); ?>/images/markov-logo.png">
		</div>
		<div class="header-content">
			<div class="header-content__container container">
				<nav id="site-navigation" class="main-navigation" role="navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'floral-lite' ); ?></button>
					<?php wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id' => 'primary-menu',
					) ); ?>
				</nav><!-- #site-navigation -->
				<div class="mobile-right">
					<div class="mobile-logo-placeholder">
						<img src="<?php bloginfo('template_url'); ?>/images/markov-logo.png">
					</div>
				</div>
				<div class="header-search">
					<button class="header-search__click">
						<i class="fa fa-search"></i>
						<span class="screen-reader-text"><?php esc_attr_e( 'Open Search Popup', 'floral-lite' ); ?></span>
					</button>
					<div class="header-search__wrapper">
						<?php get_search_form(); ?>
						<button class="header-search__click header-search__close">
							<i class="fa fa-close"></i>
							<span class="screen-reader-text"><?php esc_attr_e( 'Close Search Popup', 'floral-lite' ); ?></span>
						</button>
					</div>
				</div><!-- .header-search -->
			</div>
		</div><!-- .header-content -->
	</header>  <!-- #masthead -->
	<div id="content" class="site-content">
