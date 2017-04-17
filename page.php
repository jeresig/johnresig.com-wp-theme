<?php get_header(); ?>

	<?php if (have_posts()) : ?>
	
		<?php $post = $posts[0]; // Thanks Kubrick for this code ?>
  	<?php while (have_posts()) : the_post(); ?>
		
				<div class="postentry">
<?php if((is_category() || is_archive()) && is_category(4)) {
     the_excerpt();
if ( ! in_category(4) ): ?>
<strong><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php _e('Permanent link to'); ?> <?php the_title(); ?>">Read More...</a></strong>
				<?php the_meta(); ?>
<?php
endif;
 } else {
     the_content();
 } ?> 

				</div>

		<?php endwhile; ?>

	<?php else : ?>

		<h2><?php _e('Not Found'); ?></h2>

		<p><?php _e('Sorry, but the page you requested cannot be found.'); ?></p>
		
		<h3><?php _e('Search'); ?></h3>
		
		<?php include (TEMPLATEPATH . '/searchform.php'); ?>

	<?php endif; ?>

<?php get_footer(); ?>
