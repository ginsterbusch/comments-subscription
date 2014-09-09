<?php
/**
 * Template: Template tag subscription form
 */

      /* ------------------------------------------------------------------- */
      /* This is the text that is displayed for users who are NOT subscribed */
      /* ------------------------------------------------------------------- */
?>

	<form action="" method="post">
		<input type="hidden" name="solo-comment-subscribe" value="solo-comment-subscribe" />
		<input type="hidden" name="postid" value="<?php echo intval($id); ?>" />
		
		<input type="hidden" name="ref" value="<?php 
			echo urlencode('http://' . $_SERVER['HTTP_HOST'] . esc_attr($_SERVER['REQUEST_URI']));
		?>" />

		<p class="solo-subscribe-to-doi-comments">
			<?php echo $sg_subscribe->withoutCom_text; ?><br />

			<label for="solo-subscribe-email"><?php _e('E-Mail:', 'subscribe-to-doi-comments'); ?>
			<input type="text" name="email" id="solo-subscribe-email" size="22" value="<?php echo $user_email; ?>" /></label>
			<input type="submit" name="submit" value="<?php _e('Subscribe', 'subscribe-to-doi-comments'); ?>" />
		</p>
	</form>
