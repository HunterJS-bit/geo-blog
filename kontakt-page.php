<?php /* Template Name: Kontakt */ ?>
<?php get_header(); ?>
<?php 
$url = wp_get_attachment_url( get_post_thumbnail_id($the_post->ID), 'full' );
		?>
	<section class="hero" style="background-image: url(<?php echo $url ?>);">
	
		
			<div class="hero-content">
				<h3>Kontakt</h3>
					<hr>
			</div>			
  	</section>
<div class="contact-section">

	<h3 class="subtitle fancy"><span>Kontaktirajte nas</span></h3>
  <p class="contact-info">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
	<?php echo do_shortcode( '[contact-form-7 id="107" title="Контакт форма 1"]' ); ?>

</div>
<?php get_footer(); ?>