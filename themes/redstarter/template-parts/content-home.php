<?php
/**
 * Template part for journal content;
 *
 * @package RED_Starter_Theme
 */

?>
<article class="journal-section">
<div class="journal-thumbnail">
    <?php if (has_post_thumbnail()): ?>
	<?php the_post_thumbnail('large');?>
    <?php endif;?>
    
		<?php the_title(sprintf('<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>');?>

        <?php if ('post' === get_post_type()): ?>
        
		<div class="entry-meta">
			<?php red_starter_posted_on();?> / <?php comments_number('0 Comments', '1 Comment', '% Comments');?> / <?php red_starter_posted_by();?>
        </div><!-- .entry-meta -->
 

        <?php endif;?>
        
</div>

	<div class="entry-content">
		<?php the_excerpt();?>
    </div>
           <a class="read-more-btn" href="<?php echo get_the_permalink(); ?>">Read More &#x2192;</a>
</article>