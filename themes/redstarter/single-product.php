<?php
/**
 * The template for displaying all single product.
 *
 * @package RED_Starter_Theme
 */

get_header();?>

		<main id="main" class="single-product" role="main">
		<div class="single-product-container">
		<?php while (have_posts()): the_post();?>

						<div class="image-container">
						<?php if (has_post_thumbnail()): ?>
						<?php the_post_thumbnail('large');?>
						<?php endif;?>
				</div><!-- end of image-container -->


				<div class="entry-content">
				<?php the_title('<h1 class="entry-title">', '</h1>');?>

				<p class="price"><?php echo CFS()->get('product_price'); ?><p>
				<?php the_content();?>

				<div class="social-media">
			<p>
			<span><a><i class="fab fa-facebook-f"></i>Like</a></span>
			<span><a><i class="fab fa-twitter"></i>Tweet</a></span>
			<span><a><i class="fab fa-pinterest-p"></i>Pin</a></span>
			</p>
				<div>
				</div><!-- .entry-content -->



<?php endwhile; // End of the loop. ?>

</div><!--single-product-container  -->
</main><!-- #main -->


<?php get_footer();?>
