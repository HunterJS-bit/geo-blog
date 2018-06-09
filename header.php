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
		<?php 
		if(is_front_page()){
			
			?>
		
<?php 
$args = array(
	'posts_per_page' => 1
);
$query = new WP_query ( $args );
if ( $query->have_posts() ) { ?>
	<?php while ( $query->have_posts() ) : $query->the_post(); 
	$url = wp_get_attachment_url( get_post_thumbnail_id($the_post->ID), 'full' );
		?>
	<section class="hero" style="background-image: url(<?php echo $url ?>);">
	
		
			<div class="hero-content">
				<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					<hr>
			</div>
			<a href="" class="scroll-down"></a>
		
  
			
						
  
  		<?php endwhile; ?>
  
  		<?php wp_reset_postdata(); ?>
 
  	</section>
  
<?php } ?>
<?php 
		}else if(is_single()){
			 $featured_image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full'); 
		 $featured = $featured_image[0]; ?>
		<div class="hero" style="background-image: url(<?php echo $featured ?>);">
			<div class="post-date">
						<span class="entry-day"><?php echo get_the_date("j"); ?></span>
						<br>
						<span class="entry-mont"><?php echo get_the_date("M"); ?></span>
			</div>
			<div class="single-info">
<!-- 					<?php
			 				
			 			$category = get_the_category();
						$category_name = $category[0]->cat_name;	
			 				
					?>
					<p><i class="fa fa-tags" aria-hidden="true"></i><?php echo $category_name; ?></p> -->
					<h3><?php echo the_title(); ?></h3>
					
				
			</div>
		</div>
		<?php } ?>
	</header>  <!-- #masthead -->
	<div id="content" class="site-content container">
