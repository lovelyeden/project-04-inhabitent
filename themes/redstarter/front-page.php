<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header();?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<section class="front-page-hero">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/inhabitent-logo-full.svg" alt="Inhabitent Logo">
		</section>

		<section class="shop-container">
			<h2>Shop Stuff</h2>
		</section>

		<section class="fp-journal">
			<div class="journal-container">
				<h2>Inhabitent Journal</h2>
				<ul>
			<?php $args = array('post_type' => 'post', 'posts_per_page' => 3, 'order' => 'ASC');
			$journal_posts = get_posts($args); // returns an array of posts
			?>
			<?php foreach ($journal_posts as $post): setup_postdata($post);?>
				<li>
				<!-- Post thumbnail -->
                <?php if ( has_post_thumbnail() ) { ?>
                    <div class="thumbnail-wrapper">
                    	<?php the_post_thumbnail( 'large' ); ?>
                    </div>
				<?php } ?>

				<div class="post-text">	
					<div class="fp-post-meta">
                    	<?php echo get_the_date(); ?> 
                   		<?php echo get_comments_number(); ?> 
                    </div>
				
				<!-- Post title -->
                    <a href="<?php  echo get_the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
                    <a class="read-more-btn" href="<?php echo get_the_permalink(); ?>">Read Entry</a>
				</div>

				</li>
			<?php endforeach;

wp_reset_postdata();?>
</ul>
				</div><!-- #end of journal-container -->
			</section><!-- #end of fp-journal -->
	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer();?>
