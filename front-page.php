<?php get_header(); ?>


<div class="frontpage-container">
	
<h3 class="main-heading">
	Najnovije
	</h3>

	<?php 
$args = array(
	'posts_per_page' => 5,
	'offset' => 1
);
$query = new WP_query ( $args );
if ( $query->have_posts() ) { ?>

	<section class="new-posts full-width">
		 
		<?php 
			$c = 0;	 
			while ( $query->have_posts() ) : 
							 $c++;
							
							 $query->the_post();
							  $class = ($c == 1) ? 'page-post featured' : 'page-post';
				?>
              <article class="blog-container">
				  <a href="<?php the_permalink(); ?>">
					  <?php
							 $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'post-thumbnail');
					  ?>
					  <div class="blog-header" >
						  <div class = "blog-cover" style="background-image: url(<?php echo $featured_img_url; ?>)">
							 
						  </div>
					  </div>
					  <div class="blog-body">
						  <h3>
							  <a href="<?php the_permalink(); ?>"> <?php the_title();?></a>		  
						  </h3>
						  <div class ="blog-summary">
					
								 <?php the_excerpt(); ?>
							
						  </div>
						  <div class ="blog-tags">
							
							  <ul>
								<?php
							 			$categories = get_the_category();
										$separator = ' ';
										$output = '';
										if ( ! empty( $categories ) ) {
											foreach( $categories as $category ) {
												$output .= '<li><a href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' . esc_attr( 													sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ) . '">' . esc_html( $category->name ) . '</a></li>' . $separator;
														}
														echo trim( $output, $separator );
													}
								  ?>
							  </ul>
						  </div>
						  <div class="blog-footer">
							  <ul>
								  <li class="publish-date"><?php echo 'Pre ' .human_time_diff( get_the_time('U'), current_time('timestamp') ) ; ?></li>
							 	<li class="comments">
									<a href="<?php comments_link(); ?>">
										Ostavite komentar <i class="fa fa-comment-o" aria-hidden="true"></i>
									</a>
								  </li>
							  </ul>
						  </div>
					  </div> 	
				</a>

			</article>
		
  
		
						
  
  		<?php endwhile; ?>
  
  		<?php wp_reset_postdata(); ?>

 
  	</section>
  <h3 class="main-heading">
	Popularno
	</h3>
<?php } 
	?>
	
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
		<article class="popular-container">
			<?php  $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'post-thumbnail');
				?>
			<a href="" class="card-image" style="background-image: url(<?php echo $featured_img_url; ?>)">
			</a>
			<div class="card-content">
				<div class = "card-header">
					<h4>
						<?php the_title(); ?>
					</h4>
					<p>
						<?php the_excerpt(); ?>
					</p>
					<a href="<?php the_permalink(); ?>"  class="read-more"> Procitajte Vise </a>
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