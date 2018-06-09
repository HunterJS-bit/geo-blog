<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Floral
 */

?>

<article id="post-<?php the_ID(); ?>">

		<div class="author">
			<div class="author__content">
				<div class="avatar">
					<?php echo get_avatar( get_the_author_meta( 'ID' ), 60 ); ?>
				</div>
				<div class="info">
					<p class="objava">
							Autor :
						</p>
					<h4 class="author">
					  <?php the_author(); ?>
					</h4>
				</div>
			</div>
		</div>
	<div class="entry-content">
		<?php
		the_content();

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'floral-lite' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->
	<footer class="entry-footer">
		<?php floral_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
