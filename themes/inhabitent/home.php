<?php
/**
 * The main template file.
 *
 * @package Inhabitent_Theme
 */

get_header();?>

	
		<main id="main" class="site-main" role="main">
	
		<?php if (have_posts()): ?>

			<?php if (is_home() && !is_front_page()): ?>
			
			<?php endif;?>

			<?php /* Start the Loop */?>
			<?php while (have_posts()): the_post();?>

								<?php get_template_part('template-parts/content', 'home');?>

							<?php endwhile;?>

		<?php else: ?>
			<?php get_template_part('template-parts/content', 'none');?>
		<?php endif;?>

		</main><!-- #main -->


<?php get_sidebar();?>
<?php get_footer();?>
