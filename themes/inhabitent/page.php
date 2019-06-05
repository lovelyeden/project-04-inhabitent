<?php
/**
 * The template for displaying all pages.
 *
 * @package Inhabitent_Theme
 */

get_header();?>

	<div id="primary" class="content-area">
		<?php while (have_posts()): the_post();?>
			<?php get_template_part('template-parts/content', 'page');?>
		<?php endwhile; // End of the loop. ?>
	</div><!-- #primary -->

<?php get_sidebar();?>
<?php get_footer();?>
