<?php // Do not delete these lines
	if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

        if (!empty($post->post_password)) { // if there's a password
            if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
				?>
				
				<p><?php _e("This post is password protected. Enter the password to view comments."); ?><p>
				
				<?php
				return;
            }
        }

		/* This variable is for alternating comment background, thanks Kubrick */
		$oddcomment = 'alt';
?>

<!-- You can start editing here. -->

<?php if ($comments) : // 'open' == $post-> comment_status && ?>

	<h4 id="comments">
	<?php comments_number(__('No Comments'), __('1 Comment'), __('% Comments')); ?>
	<?php if ( !comments_open() ) : ?>
	<a href="#postcomment" title="<?php _e('Jump to the comments form'); ?>" id="showcomment" onclick="document.getElementById('commentlist').style.display='block';">(Show Comments)</a>
	<?php endif; ?>
	</h4>

	<ol id="commentlist" style="<?php echo comments_open() ? "" : "display:none;"; ?>">

	<?php foreach ($comments as $comment) : ?>

		<li class="<?php echo $oddcomment; ?> <?php echo (get_comment_author_email() == 'jeresig@gmail.com' ? 'author' : ''); ?>" id="comment-<?php comment_ID() ?>">
		
		<h3 class="commenttitle"><b><?php comment_author_link() ?></b>
	
		<small><small>
			(<?php comment_date('F j, Y') ?> 
			at <a href="#comment-<?php comment_ID() ?>" title="<?php _e('Permanent link to this comment'); ?>"><?php comment_time() ?></a>)
			<?php edit_comment_link(__("Edit"), ' &#183; ', "<a href='javascript:void(0);' onclick='javascript:var xhr=new XMLHttpRequest(); xhr.open(\"GET\", \"http://ejohn.org/wp-admin/post.php?action=deletecomment&noredir=true&p=" . $post->ID . "&comment=" . $comment->comment_ID . "\", false); xhr.send(null);'>Delete</a>"); ?>
		</small></small>
		</h3>
		
		<div class="comment-text"><?php comment_text() ?></div>
		
		</li>

		<?php 
			if ('alt' == $oddcomment) $oddcomment = '';
			else $oddcomment = 'alt';
		?>

	<?php endforeach; /* end for each comment */ ?>

	</ol>
	
	<!--<p class="small">
	<?php comments_rss_link(__('<abbr title="Really Simple Syndication">RSS</abbr> feed for comments on this post')); ?>
	<?php if ( pings_open() ) : ?>
	&#183; <a href="<?php trackback_url() ?>" rel="trackback"><?php _e('TrackBack <abbr title="Uniform Resource Identifier">URI</abbr>'); ?></a>
	<?php endif; ?>
	</p>-->

<?php else : // this is displayed if there are no comments so far ?>

	<?php if ('open' == $post-> comment_status) : ?> 
		<?php /* No comments yet */ ?>
		
	<?php else : // comments are closed ?>
		
	<?php endif; ?>
	
<?php endif; ?>

<?php if ('open' == $post-> comment_status) : ?>

	<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
	
	<h4 id="postcomment"><?php _e('Leave a Comment'); ?></h4>
		<p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php the_permalink(); ?>">logged in</a> to post a comment.</p>
	
	<?php else : ?>
	
		<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
		<h4 id="postcomment"><?php _e('Leave a Comment'); ?></h4>
		
		<?php if ( $user_ID ) : ?>
		
		<p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="<?php _e('Log out of this account') ?>">Logout &raquo;</a></p>

		<?php else : ?>
	
		<p>
		<input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="30" tabindex="1" />
		<label for="author">Name <?php if ($req) _e('(required)'); ?></label>
		</p>
		
		<p>
		<input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="30" tabindex="2" />
		<label for="email">E-mail (<?php if ($req) _e('required, '); ?>never displayed)</label>
		</p>
		
		<p>
		<input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="30" tabindex="3" />
		<label for="url"><abbr title="Uniform Resource Identifier">URI</abbr></label>
		</p>

		<?php endif; ?>

	<p>
	<textarea name="comment" id="comment" cols="70" rows="10" tabindex="4"></textarea>
	</p>

	<p><small><b>Note:</b> Wrap all of your code blocks in &lt;code>...&lt;/code> and replace &lt; and &gt; with &amp;lt; and &amp;gt;, respectively.</small></p>

	<p>
	<input name="submit" type="submit" id="submit" tabindex="5" value="Submit Comment" />
	<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
	</p>

	<?php do_action('comment_form', $post->ID); ?>

	</form>

	<?php endif; // If registration required and not logged in ?>

<?php else : // comments are closed ?>

<br/><hr/>
<p><b>Comments are closed.</b><br/>
Comments are automatically turned off two weeks after the original post. If you have a question
concerning the content of this post, please feel free to <a href="http://ejohn.org/about/">contact me</a>.</p>
<hr/>

<?php endif; // if you delete this the sky will fall on your head ?>
