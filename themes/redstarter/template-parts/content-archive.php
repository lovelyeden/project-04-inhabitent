<?php
/**
 * Template part for product
 *
 * @package RED_Starter_Theme
 */

?>
<section class="thumbnails">
<div class="container">
	<div class="img-wrap">
	<a href="<?php echo get_the_permalink(); ?>">
		<?php if (has_post_thumbnail()): ?>
			<?php the_post_thumbnail('large');?>
		<?php endif;?>
	</a>
</div>

	<div class=".thumb-text">
		<p>
		<?php the_title();?>.......
		<?php echo CFS()->get('product_price'); ?>
</p>
	</div>
</div>
</section>


 