<?php 
	get_header();
	?>

	<div id="primary" class="full-width">
		<main id="main" class="site-main" role="main">
			<?php
			while ( have_posts() ) : the_post();
				?>
				<div class="main-content">
					 <main class="text-center content-text">
					 	<?php the_content(); ?>
					 </main>
				</div>
			<?php
			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php 
	get_footer();
?>