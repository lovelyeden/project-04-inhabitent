<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header();?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<!-- banner section -->
		<section class="front-page-hero">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/inhabitent-logo-full.svg" alt="Inhabitent Logo">
		</section>

		<!-- shop section -->
		<section class="shop-container">
			<h2 class="shop">Shop Stuff</h2>
		<?php
$terms = get_terms(array('taxonomy' => 'product-type', 'hide_empty' => 0)
);
?>
			<div class="product-terms">
			<?php
foreach ($terms as $term):
?>
				<div class ="product-term">
					<img src="<?php echo get_template_directory_uri() . '/assets/images/product-type-icons/' . $term->slug . '.svg' ?>" />
					<p><?php echo $term->description; ?></p>
					<p>
						<a class="link" href="<?php echo get_term_link($term); ?>">
						<?php echo $term->name ?> Stuff
						</a>
					</p>
				</div><!--end of product terms-->
<?php
endforeach;
?>
				</div><!--end of product term-->
		</section>

		<!--Journal Section-->
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
							<?php if (has_post_thumbnail()) {?>
								<div class="thumbnail-wrapper">
								<?php the_post_thumbnail('large');?>
								</div>

								<?php }?>
								<div class="post-text">
								<div class="fp-post-meta">
								<?php echo get_the_date(); ?>
								<?php echo get_comments_number(); ?>
								</div>

								<!-- Post title -->
								<a href="<?php echo get_the_permalink(); ?>"><h3><?php the_title();?></h3></a>
								<a class="read-more-btn" href="<?php echo get_the_permalink(); ?>">Read Entry</a>
								</div>
								</li>
								<?php endforeach;

wp_reset_postdata();?>
</ul>
				</div><!-- #end of journal-container -->
			</section><!-- #end of fp-journal -->

	<section class="adventure-section">
		<h2>Latest Adventures</h2>
		<div class="adventure-container">
			<div class="item1">
				
			</div>

			<div class="item2">
				<p>2</p>
			</div>

			<div class="item3">
				<p>3</p>
			</div>

			<div class="item4">
				<p>4</p>
			</div>

		</div><!--adventure-container-->
	</section>





	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer();?>


