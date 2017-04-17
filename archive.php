<?php get_header(); ?>

	<?php if (have_posts()) : ?>
	
		<?php $post = $posts[0]; // Thanks Kubrick for this code ?>
		
  	<?php while (have_posts()) : the_post(); ?>
		
			<div class="post">
<h3 id="post-<?php the_ID(); ?>"><b><a href="<?php if ( in_category(4) ) {
  echo get_post_meta($id, 'url', true);
} else {
  the_permalink();
} ?>" rel="bookmark" title="<?php _e('Permanent link to'); ?> <?php the_title(); ?>"><?php the_title(); ?></a></b></h3>
			
<?php if(true || (is_category() || is_archive()) && is_category(4)) {
     the_excerpt();
if ( false && ! in_category(4) ): ?>
<small><strong><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php _e('Permanent link to'); ?> <?php the_title(); ?>">Read More...</a></strong></small>
<?php
endif;
 } else {
     the_content();
 } ?> 

                <p><small><a href="<?php the_permalink() ?>"><?php comments_number('Comment', '1 Comment', '% Comments', 'number')?></a> &#183;
		<strong>Posted:</strong> <?php the_time('F jS, Y'); ?>
<?php if ( 0 && have_tags() ) { ?>
                &#183; <strong>Tags:</strong> <?php the_tags(", ", true); ?>
<?php } ?>
                <?php edit_post_link(__('Edit'), ' &#183; ', ''); ?>
                </small></p>
</div><br/>
				
		<?php endwhile; ?>

		<?php posts_nav_link(' &#183; ', __('Next entries &raquo;'), __('&laquo; Previous entries')); ?>
		
	<?php else : ?>

		<h2><?php _e('Not Found'); ?></h2>

		<p><?php _e('Sorry, but the page you requested cannot be found.'); ?></p>
		
		<h3><?php _e('Search'); ?></h3>
		
		<?php include (TEMPLATEPATH . '/searchform.php'); ?>

	<?php endif; ?>

<?php get_footer(); ?>
