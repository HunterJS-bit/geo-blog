<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Floral
 */

?>

	</div><!-- #content -->
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="footer-container">
		
			<div class="footer-links">
				<ul>
					<li><h3>Info</h3></li>
					<li><a href="/o-nama">O NAMA</a></li>
					<li><a href="/kontakt">KONTAKT</a></li>
				</ul>
				<ul>
					<li><h3>Pratite nas </h3></li>
					<ul class="social-icons icon-circle icon-zoom list-unstyled list-inline"> 
							<li> <a href="#"><i class="fa fa-facebook"></i></a></li> 
							<li> <a href="#"><i class="fa fa-linkedin"></i></a></li> 
							<li> <a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li> <a href="#"><i class="fa fa-youtube"></i></a></li>
					</ul>
				</ul>
			</div>
		</div>
		<div class="disclamer">
				<p>Copyright © <?php echo date('Y'); ?> &nbsp;&nbsp; | &nbsp;&nbsp; Designed by Codeony, LLC</p>
		</div>

	</footer><!-- #colophon -->
</div><!-- #page -->

<nav class="mobile-navigation" role="navigation">
	<?php
	wp_nav_menu( array(
		'container_class' => 'mobile-menu',
		'menu_class'      => 'mobile-menu clearfix',
		'theme_location'  => 'menu-1',
		'items_wrap'      => '<ul>%3$s</ul>',
	) );
	?>
</nav>
<a href="#" class="scroll-to-top hidden"><i class="fa fa-angle-up"></i></a>

<?php wp_footer(); ?>

</body>
</html>
