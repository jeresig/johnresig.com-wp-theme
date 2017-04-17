<?php get_header(); ?>

<?php if (have_posts()) : ?>

	<?php $post = $posts[0]; ?>

	<?php while (have_posts()) : the_post(); ?>
	
	<div class="postentry">
		<?php
			if ((is_category() || is_archive()) && is_category(4)) {
				the_excerpt();
				if (!in_category(4)) {
		?>
		<strong><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php _e('Permanent link to'); ?> <?php the_title(); ?>">Read More...</a></strong>
		<?php
					the_meta();
				}
			} else {
				the_content();
			}
		?>
	</div>

	<p>
		<small>
			<strong>Posted:</strong> <?php the_time('F jS, Y'); ?>
			<?php edit_post_link(__('Edit'), ' &#183; ', ''); ?>
		</small>
	</p>
	<hr/>
    <strong><a href="/subscribe/">Subscribe for email updates</a></strong>
	<?php comments_template(); ?>

	<?php endwhile; ?>

	<?php posts_nav_link(' &#183; ', __('Next entries &raquo;'), __('&laquo; Previous entries')); ?>
	
<?php else : ?>

	<h2><?php _e('Not Found'); ?></h2>

	<p><?php _e('Sorry, but the page you requested cannot be found.'); ?></p>

<?php endif; ?>

<?php get_footer(); ?>
