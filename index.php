<?php get_header(); ?>

	<?php if (have_posts()) : ?>
	
		<?php $post = $posts[0]; // Thanks Kubrick for this code ?>
		
  	<?php while (have_posts()) : the_post(); ?>
		
			<div class="post">
<h2 id="post-<?php the_ID(); ?>"><a href="<?php if ( in_category(4) ) {
  echo get_post_meta($id, 'url', true);
} else {
  the_permalink();
} ?>" rel="bookmark" title="<?php _e('Permanent link to'); ?> <?php the_title(); ?>"><?php the_title(); ?></a></h3>
			
<p class="postmeta"><?php the_time('F jS, Y'); ?> <?php edit_post_link(__('Edit'), ' &#183; ', ''); ?></p>

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

<?php if ( 0 && have_tags() ) { ?>
		<p><strong>Tags:</strong> <?php the_tags(", ", true); ?></p>
<?php } ?>
			
				<p class="postfeedback">
				<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php _e('Permanent link to'); ?> <?php the_title(); ?>" class="permalink"><?php comments_number('Comment', '1 Comment', '% Comments', 'number')?> on '<?php the_title(); ?>'</a>
				
				</p>
				
				<!--
<?php comments_popup_link(__('Comment'), __('1 Comment '), __('% Comments '), 'commentslink', __('Comment')); ?>
				<?php trackback_rdf(); ?>
				-->
			<img src="http://ejohn.org/apps/rss/?from=multi&id=<?php the_ID() ?>" style="width:0px;height:0px;"/>
			<script src="http://feeds.feedburner.com/~s/JohnResig?i=<?php the_permalink() ?>" type="text/javascript" charset="utf-8"></script>
</div>
				
		<?php endwhile; ?>

		<?php posts_nav_link(' &#183; ', __('Next entries &raquo;'), __('&laquo; Previous entries')); ?>
		
	<?php else : ?>

		<h2><?php _e('Not Found'); ?></h2>

		<p><?php _e('Sorry, but the page you requested cannot be found.'); ?></p>
		
		<h3><?php _e('Search'); ?></h3>
		
		<?php include (TEMPLATEPATH . '/searchform.php'); ?>

	<?php endif; ?>

<?php get_footer(); ?>
