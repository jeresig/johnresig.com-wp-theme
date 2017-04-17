<?php get_header(); ?>

	<?php if (have_posts()) : ?>
	
		<?php $post = $posts[0]; ?>

  	<?php while (have_posts()) : the_post(); ?>
		
				<div class="postentry">

<?php if(is_single('48')) {?>
<h2>How to browse Anonymously:</h2>

<ol>
<li>Step 1: Download and Install the <b>Firefox Web Browser</b> by <b>clicking the image</b> below. It's just like Internet Explorer, but blocks all ads and makes it easier to get to the sites that you love, like MySpace.<br/>
<script type="text/javascript">google_ad_client = 'pub-6858917945513828';google_ad_width = 468;google_ad_height = 60;google_ad_format = "468x60_as_rimg";google_cpa_choice = "CAAQj6eVzgEaCIxA5niBniDSKOm293M";</script>
<script type="text/javascript" src="http://pagead2.googlesyndication.com/pagead/show_ads.js"></script></li>
<li>Step 2: Download an install the <a href="http://jgillick.nettripper.com/switchproxy/">SwitchProxy Extension</a> for Firefox. It's super easy and fast!</li>
<li>Step 3: Add <a href="http://ejohn.org/apps/anon/">this Anonymous Proxy List</a> to SwtichProxy.</li>
</ol>

<h2>Congratulations! You can now browse all the sites that you love, anonymously!</h2>
<br/><br/><hr/>
<h2>How it Works: (Technical)</h2>
<?php } ?>

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

		<p><small><strong>Posted:</strong> <?php the_time('F jS, Y'); ?>
<?php if ( 0 && have_tags() ) { ?>
		&#183; <strong>Tags:</strong> <?php the_tags(", ", true); ?>
<?php } ?>
		<?php edit_post_link(__('Edit'), ' &#183; ', ''); ?>
		</small>
		<!--&#183; <a href="<?php the_permalink() ?>" class="retweet" title="<?php the_title(); ?>"></a>-->
		</p>
				<!--
				<?php trackback_rdf(); ?>
				-->
				<hr/>
                <strong><a href="/subscribe/">Subscribe for email updates</a></strong>
                                <!--<form action="http://jquery.us1.list-manage1.com/subscribe/post?u=9d97dbe5f30bdee8c85a45e9e&amp;id=7257ed4444" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>   
                                        <p><label for="mce-EMAIL">Subscribe for email updates:</label>
                                        <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
                                        <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></p>
                                </form>-->
		<!--<p><small>If you particularly enjoy my work, I appreciate donations <a href="https://www.gittip.com/jeresig">given with Gittip</a>.</small></p>-->
<?php comments_template(); ?>

		<!--<script src="http://feeds.feedburner.com/~s/JohnResig?i=<?php the_permalink() ?>" type="text/javascript" charset="utf-8"></script>-->
		<!--<img src="http://ejohn.org/apps/rss/?from=single&amp;id=<?php the_ID() ?>" style="width:0px;height:0px;"/>-->

		<?php endwhile; ?>

		<?php posts_nav_link(' &#183; ', __('Next entries &raquo;'), __('&laquo; Previous entries')); ?>
		
	<?php else : ?>

		<h2><?php _e('Not Found'); ?></h2>

		<p><?php _e('Sorry, but the page you requested cannot be found.'); ?></p>

	<?php endif; ?>

<?php get_footer(); ?>
