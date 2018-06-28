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
	<div id="mc_embed_signup">
<form action="https://geostrateg.us17.list-manage.com/subscribe/post?u=78781b299582580f3da5858eb&amp;id=bd3b36e8e3" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">
	<label id="newsletter-label" for="mce-EMAIL">Prijavite se na naš newsletter </label>
    <div class="subscribe-container">
		<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Vasa Email adresa" required>
    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_78781b299582580f3da5858eb_bd3b36e8e3" tabindex="-1" value=""></div>
    <div class="clear"><input type="submit" value="POSALJI" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
    </div>
	</div>
</form>
</div>
<?php get_footer(); ?>