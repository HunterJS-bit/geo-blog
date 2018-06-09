<?php /* Template Name: Posts */ ?>
<?php get_header(); ?>



<div class="grid-wrap">
  <?php  $pages = $wp_query->max_num_pages; ?>
<?php $additional_loop = new WP_Query("post_type=post&paged=$paged&posts_per_page=3"); ?>

<?php while ($additional_loop->have_posts()) : $additional_loop->the_post(); ?>
 <!-- Show loop content... -->

      <div class="grid-item">
       		<p>
				<?php if ( has_post_thumbnail() ) : ?>
                        		<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'medium' ); ?></a>
				<?php endif; ?>
			</p>

			<!-- POST TITLE -->
			<h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

			<!-- POST METADATA -->
			<p class="author-text">Posted on <?php echo the_time('F jS, Y');?> by <?php the_author_posts_link(); ?> </p>            
			<!-- POST EXCERPT -->
			<?php the_excerpt(); ?>
      </div>
<?php endwhile; ?>
              
  </div>
  <?php pagination($additional_loop->max_num_pages); ?>  

<?php get_footer(); ?>