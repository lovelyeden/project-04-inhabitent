<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header();?>

<div class="product-section-head">
	<?php the_archive_title('<h1 class="shop-title">', '</h1>'); ?>
	<?php $terms = get_terms(array('taxonomy' => 'product-type', 'hide_empty' => 0));?>		

	<div class="product-terms">
<?php foreach ($terms as $term): ?>
		<div class ="product-term">
			<p>
				<a class="link" href="<?php echo get_term_link($term); ?>">
				<?php echo $term->name ?>
				</a>
			</p>
		</div><!--end of .product-term-->
			<?php endforeach;?>
		</div><!--end of .product-terms-->
	</div>


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
