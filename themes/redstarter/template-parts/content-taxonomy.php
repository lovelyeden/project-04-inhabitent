<?php
/**
 * Template part for displaying posts.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID();?>" <?php post_class();?>>
<div class="entry-header">
<a href="<?php echo get_the_permalink(); ?>">
		<?php if (has_post_thumbnail()): ?>
			<?php the_post_thumbnail('large');?>
		<?php endif;?>
		</a>
</div><!-- .entry-header -->

	<div class="entry-content">
	<?php the_title();?>...........
		<?php echo CFS()->get('product_price'); ?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->

