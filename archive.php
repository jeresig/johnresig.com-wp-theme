<?php get_header(); ?>

<h2><?php wp_title('') ?></h2><br/>

<?php if (have_posts()) : ?>
    <?php $post = $posts[0]; // Thanks Kubrick for this code ?>

    <?php while (have_posts()) : the_post(); ?>
        <div class="post">
            <h3 id="post-<?php the_ID(); ?>">
                <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php _e('Permanent link to'); ?> <?php the_title(); ?>">
                    <?php the_title(); ?>
                </a>
            </h3>

            <?php the_excerpt(); ?> 

            <p><small>
                <a href="<?php the_permalink() ?>"><?php comments_number('Comment', '1 Comment', '% Comments', 'number')?></a> &#183;
                <strong>Posted:</strong> <?php the_time('F jS, Y'); ?>
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
