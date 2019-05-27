<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header();?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if (have_posts()): ?>

	<header class="page-header">
		<?php
		the_archive_title('<h1 class="page-title">', '</h1>');
		the_archive_description('<div class="taxonomy-description">', '</div>');

		?>
		 <?php
		$terms = get_terms(array('taxonomy' => 'product-type', 'hide_empty' => 0));
		?>
		            <div class="product-terms">
		            <?php
		foreach ($terms as $term):
		?>
                <div class ="product-term">
                    <p>
                        <a class="link" href="<?php echo get_term_link($term); ?>">
                        <?php echo $term->name ?>
                        </a>
                    </p>
                </div><!--end of product term-->
			<?php endforeach;?>
            </div><!--end of product terms-->

	</header><!-- .page-header -->

			<?php /* Start the Loop */?>
			<div class="taxonomy-container">
			<?php while (have_posts()): the_post();?>

							<?php
    get_template_part('template-parts/content', 'taxonomy');
    ?>
			<?php endwhile;?>
		</div>

	
		
	

		<?php else: ?>
			<?php get_template_part('template-parts/content', 'taxonomy');?>
		<?php endif;?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer();?>
