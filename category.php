<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Floral
 */

get_header(); ?>
<div class="category-name">
	<h3><?php single_cat_title(); ?></h3>
</div>
<div id="primary" class="content-area">
<main id="main" class="site-main" role="main">
<div class="cat-card-container">
<div class="cat-cards">
<?php 
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 
		?>
<article class="card-category">
		  <?php
							 $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'post-thumbnail');
					  ?>
		<div class="card-image" style="background-image: url(<?php echo $featured_img_url; ?>);">
		     <div class="flex-content">
			   <h3>
				  <?php the_title(); ?>
				</h3>
			</div>
		</div>
		<ul class="profile-social-links">
				<li class="face">
				  <a href="https://instagram.com/kantorpweglin">
					<i class="fa fa-facebook" aria-hidden="true"></i>
				  </a>
				</li>
				<li class="twit">
				  <a href="https://twitter.com/kantorpweglin">
					<i class="fab fa-twitter"></i>
				  </a>
				</li>
				<li class="insta">
				  <a href="https://instagram.com/kantorpweglin">
					<i class="fa fa-instagram" aria-hidden="true"></i>
				  </a>
				</li>
			</ul>
    <!-- end figure-->
  </article>

<?php
	} // end while
} // end if
?>

</div>
</div>
</main>
</div>
<?php 
	get_footer();
 ?>