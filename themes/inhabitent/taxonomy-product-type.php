<?php
/**
 * The template for displaying archive pages.
 *
 * @package Inhabitent_Theme
 */

get_header();?>

	
<div class="product-section-head">
<?php the_archive_title('<h1 class="shop-title">', '</h1>'); 
the_archive_description('<div class="taxonomy-description">', '</div>');?>







		<?php if (have_posts()): ?>
		<div class="product-grid">
			<?php while (have_posts()): the_post();?>
				<?php get_template_part('template-parts/content', 'archive');?>
			<?php endwhile; ?>
		</div><!-- .product-grid -->


		<?php else: ?>
			<h2>No posts found</h2>
		<?php endif;?>


<?php get_footer();?>
