<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header();?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<section class="home-logo">	
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/inhabitent-logo-full.svg" alt="Inhabitent Logo">
			</section>
			<section class="shop-stuff">
				<h2>Shop Stuff</h2>
			</section>
			<section class="inhabitent-journal">
						<h2>Inhabitent Journal</h2>
			</section>
			<section class="latest-adventures">
						<h2>Latest Adventure</h2>
			</section>
			<?php while (have_posts()): the_post();?>

					<?php get_template_part('template-parts/content', 'page');?>

				<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar();?>
<?php get_footer();?>
