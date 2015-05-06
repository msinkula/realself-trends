<?php // Do not delete these lines
	if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

        if (!empty($post->post_password)) { // if there's a password
            if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
				?>
				<p class="nocomments">This post is password protected. Enter the password to view comments.<p>
				<?php
				return;
            }
        }

		/* This variable is for alternating comment background */
		$oddcomment = 'alt';
?>

<!-- You can start editing here. -->
<div id="comments-box">
<?php if ( have_comments() ) : ?>
	<h4 id="comments-head"><a name="comments"><?php comments_number('0 Comments:', '1 Comment:', '% Comments:' );?></a></h4>
	<ol class="comments-list">
	<?php wp_list_comments(); ?>
	</ol>		
 <?php else : // this is displayed if there are no comments so far ?>
	<?php if ('open' == $post->comment_status) : ?>
		<!-- If comments are open, but there are no comments. -->
	 <?php else : // comments are closed ?>
		<!-- If comments are closed. -->
		<p class="nocomments">Comments are closed.</p>
	<?php endif; ?>
<?php endif; ?>
<?php if ('open' == $post->comment_status) : ?>
<div id="respond">
<h4><?php comment_form_title( 'Leave a Comment:', 'Leave a Comment to %s' ); ?></h4>
<div class="cancel-comment-reply">
	<p><small><?php cancel_comment_reply_link(); ?></small></p>
</div>

<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
<p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>">logged in</a> to post a comment.</p>
<?php else : ?>

<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

<?php if ( $user_ID ) : ?>

<p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Log out of this account">Log out &raquo;</a></p>

<?php else : ?>
<label for="author">Name: <?php /*if ($req) echo "(required)";*/ ?></label>
<input type="text" name="author" id="author" value="<?php echo $comment_author; ?>"  tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> />
<label for="email">Mail: <?php /*if ($req) echo "(required)";*/ ?></label>
<input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>"  tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> />
<label for="url">Website:</label>
<input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>"  tabindex="3" />
<?php endif; ?>
<label for="comment">Comment:</label>
<textarea name="comment" id="comment" cols="50" rows="10" tabindex="4"></textarea>
<input name="submit" type="submit" class="submit" tabindex="5" value="Submit Comment" />
<?php comment_id_fields(); ?>
<?php do_action('comment_form', $post->ID); ?>
</form>
<?php endif; // If registration required and not logged in ?>
</div>
<?php endif; // if you delete this the sky will fall on your head ?>
</div>