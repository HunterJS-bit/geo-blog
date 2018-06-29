<?php get_header(); ?>




	<?php 
$args = array(
	'posts_per_page' => 6,
	'post_status' => 'publish',
	'orderby'          => 'date',
	'post_type'        => 'post'
);
$query = new WP_query ( $args );
if ( $query->have_posts() ) { ?>
<section class="new-posts full-width">
		<?php 
			$c = 0;	 
			while ( $query->have_posts() ) : 
				$query->the_post();
				if ( $c == 0 ) {
					?>	
				<section id="banner">
				<h2><?php the_title();?></h2>
				<p>Magna feugiat lorem dolor egestas</p>
				<a href="#" class="button big special">Procitaj Tekstss</a></li>
				
			</section>
					<?php
				} else {
					?>
		
<div class="frontpage-container">
	<!-- PREVIOUS IMPLEMENTATION -->
				<article class="blog-container">
				
			</article>
			<?php 
				}
				$c++;
		?>
		<?php endwhile; ?>
  		<?php wp_reset_postdata(); ?>


</section>
 <?php } 	?>


<!-- Popular Posts -->







  <h3 class="main-heading">
	Popularno
	</h3>
	
		<?php 
$args = array(
	'orderby' => 'comment_count',
	'posts_per_page' => 5,
);
$query = new WP_query ( $args );
if ( $query->have_posts() ) { ?>
	<section class="popular-posts full-width">
		<?php 
			while ( $query->have_posts() ) : 
							
							 $query->the_post();
							 ?>
		<article class="post">
			<?php  $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'post-thumbnail');
				?>
			<!-- <a href="" class="" style="background-image: url(<?php echo $featured_img_url; ?>)">
			</a> -->
			<?php
			 echo $featured_img_url; 
			?>
			<div class="post-image">
				<div class="image-container" style="background-image: url('https://picsum.photos/200/300')">
				</div>
			</div>
			<div class="post-container">
				<div class="post-author">
					Nikola trific
				</div>
				<div class = "post-content">
					<div class="post-header">
						<time class="post__time">Jan 22 2017</time>
						<h3 class="post_title"><?php the_title(); ?></h3>
						<p class="post_text"> <?php the_excerpt(); ?> </p>
					</div>
					<!-- <h4>
						<?php the_title(); ?>
					</h4>
					<p>
						<?php the_excerpt(); ?>
					</p>
					<a href="<?php the_permalink(); ?>"  class="read-more"> Procitajte Vise </a> -->
				</div>

				
			</div>
		</article>
	
	<?php 
							 	endwhile;
							} ?>
		</section>
</div>
<section id="mc_embed_signup">

</section>

<section id="four" class="contact-section">
	<header class="contact-header">
		<h3>Kontaktirajte nas</h3>
		<p>Donec faucibus, neque ac porttitor porta, sem augue viverra lorem, at tempor eros libero nec augue. Duis eget eleifend.</p>
	</header>
	<div class="contactform-7">
		<?php echo do_shortcode( '[contact-form-7 id="1459" title="Contact form 1"]' ); ?>
	</div>
</section>
<?php get_footer(); ?>