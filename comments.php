<?php // Do not delete these lines
	if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');
        if (!empty($post->post_password)) { // if there's a password
            if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
				?>
				<p class="nocomments"><?php _e("This post is password protected. Enter the password to view comments."); ?><p>
				<?php
				return;
            }
        }
		/* This variable is for alternating comment background */
		$oddcomment = 'alt';
?>
<!--comments area-->
<?php if ($comments) : ?>
	<div id="commentblock">
		<h2 id="comments">
			<?php comments_number('No Responses', 'One Response', '% Responses' );?> to &#8220;<?php the_title(); ?>&#8221;
		</h2>
		<ol id="commentlist">
			<?php foreach ($comments as $comment) : ?>
				<li class="<?php echo $oddcomment; ?>" id="comment-<?php comment_ID() ?>">
					<div class="commentname">
						<span class="commentauthor"><?php comment_author_link() ?></span>
					</div>
					<?php if ($comment->comment_approved == '0') : ?>
						<em>Your comment is awaiting moderation.</em>
					<?php endif; ?>
					<div class="commentinfo">
						<span class="commentdate">
							<?php comment_date('F jS, Y') ?> | 
							<a href="#comment-<?php comment_ID() ?>" title="comment link url"><?php comment_time() ?></a>
						</span>
					</div>
					<div class="commenttext"><?php comment_text() ?></div>
				</li>
				<?php /* Changes every other comment to a different class */	
					if ('alt' == $oddcomment){
						$oddcomment = 'standard';
					}
					else {
						$oddcomment = 'alt';
					}
				?>
			<?php endforeach; /* end for each comment */ ?>
		</ol>
<?php else : // this is displayed if there are no comments so far ?>
	<?php if ('open' == $post-> comment_status) : ?> 
		<!-- If comments are open, but there are no comments. -->
		<div id="commentblock">
		<h2 id="comments">
			No comments yet. Be the first.
		</h2>
	<?php else : // comments are closed ?>
		<!-- If comments are closed. -->
		<p class="nocomments">Comments are closed.</p>
	<?php endif; ?>
<?php endif; ?>

<?php if ('open' == $post-> comment_status) : ?>
<!--comments form -->
<h2 id="commentsformheader">Leave a reply</h2>
	<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
		<p>
			You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php the_permalink(); ?>">logged in</a> 
			to post a comment.
		</p>
		</div>
	<?php else : ?>
		<div id="commentsform">
			<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
			<?php if ( $user_ID ) : ?>
				<p>
					Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. 
					<a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="<?php _e('Log out of this account') ?>">
						Logout &raquo;
					</a>
				</p>
			<?php else : ?>
				<p>
					<input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" />
					<label for="author"><small><?php _e('name');?> <?php if ($req) _e('(required)'); ?></small></label>
				</p>
				<p>
					<input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" />
					<label for="email"><small><?php _e('email');?> (<?php _e('will not be shown');?>) <?php if ($req) _e('(required)'); ?></small></label>
				</p>
				<p>
					<input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" />
					<label for="url"><small><?php _e('website');?></small></label>
				</p>
			<?php endif; ?>
			<!--<p><small><strong>XHTML:</strong> You can use these tags: <?php echo allowed_tags(); ?></small></p>-->
			<p>
				<textarea name="comment" id="comment" cols="50" rows="10" tabindex="4"></textarea>
			</p>
<!--added by raj-->
<?php if ( function_exists('recaptcha_wp_show_captcha_for_comment')  
               && recaptcha_wp_show_captcha_for_comment ()) : ?>
<script>
var RecaptchaOptions = {
   tabindex : 5
};
</script>

<?php echo recaptcha_wp_get_html () ?>
<?php endif; // should show captcha ?>

<p><input name="submit" type="submit" 
id="submit" tabindex="6" value="Submit Comment" />
<!--end recaptha stuff-->
<!--remove this submit button
			<p>
				<input name="submit" type="submit" id="submit" tabindex="5" value="Submit Comment" /> -->
				<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
			</p>
			<?php do_action('comment_form', $post->ID); ?>
		</form>
	</div></div>
	<?php endif; // If registration required and not logged in ?>
<?php endif; // if you delete this the sky will fall on your head ?>