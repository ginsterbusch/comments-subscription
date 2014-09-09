<?php
/**
 * Template: Admin Page - Options
 */
 
?> 

	<h2><?php _e('Subscribe to Comments Options', 'subscribe-to-doi-comments'); ?></h2>

	<ul>
		<li><label for="name"><?php _e('"From" name for notifications:', 'subscribe-to-doi-comments'); ?> <input type="text" size="40" id="name" name="sg_subscribe_settings[name]" value="' . sg_subscribe_settings::form_setting('name')"); ?></label></li>


		<li><label for="email"><?php _e('"From" e-mail addresss for notifications:', 'subscribe-to-doi-comments'); ?> <input type="text" size="40" id="email" name="sg_subscribe_settings[email]" value="sg_subscribe_settings::form_setting('email'); ?>"); ?></label></li>

		<li>
			<label for="clear_both"><input type="checkbox" id="clear_both" name="sg_subscribe_settings[clear_both]" value="true" <?php sg_subscribe_settings::checkflag('clear_both'); ?> /> 
			<span class="description"><?php _e('Do a CSS "clear" on the subscription checkbox/message (uncheck this if the checkbox/message appears in a strange location in your theme)', 'subscribe-to-doi-comments'); ?></span></label>
		</li>
          
<?php
	  /**
	   * Enable custom comment urls
	   * 
	   * @author Fabian Wolf (@link http://usability-idealist.de/)
	   */
?>
		<li>
			<label for="custom-comment-url"><? php _e('Custom comment URL', 'subscribe-to-doi-comments'); ?></label> <input type="text" name="<?php printf( $strSettingsFieldName, 'custom_comment_url' ); ?>" id="custom-comment-url" value="<?php sg_subscribe_settings::form_setting('custom_comment_url'); ?>" />
		
			<span class="description"><?php printf( __('Acts as template for the comment URL. If left empty, defaults to <strong>[post_permalink]/#comments</strong>. Known keywords: %s', 'subscribe-to-doi-comments'), $strKnownKeywords ); ?></span>
		</li>
	</ul>  
	  
	<fieldset>
		<legend><?php _e('Comment Form Text', 'subscribe-to-doi-comments'); ?></legend>
		  
		 <p><?php _e('Customize the messages shown to different people. Use <code>[manager_link]</code> to insert the URI to the Subscription Manager.', 'subscribe-to-doi-comments'); ?></p>
		  
		 <ul>
			 <li>
				 <label for="not_subscribed_text"><?php _e('Not subscribed', 'subscribe-to-doi-comments'); ?></label>
				<br />
				
				<textarea class="large-text" style="width: 98%; font-size: 12px;" rows="2" cols="60" id="not_subscribed_text" name="sg_subscribe_settings[not_subscribed_text]"><?php _e(sg_subscribe_settings::textarea_setting('not_subscribed_text')); ?></textarea>
				
			</li>
          
			<li>
				<label for="subscribed_text"><?php _e('Subscribed', 'subscribe-to-doi-comments'); ?></label>
				<br />
				<textarea style="width: 98%; font-size: 12px;" rows="2" cols="60" id="subscribed_text" name="sg_subscribe_settings[subscribed_text]"><?php _e(sg_subscribe_settings::textarea_setting('subscribed_text')); ?></textarea>

			</li>

			<li><label for="author_text"><?php _e('Entry Author', 'subscribe-to-doi-comments'); ?></label><br /><textarea style="width: 98%; font-size: 12px;" rows="2" cols="60" id="author_text" name="sg_subscribe_settings[author_text]">' . (sg_subscribe_settings::textarea_setting('author_text'))</textarea></li>
			  
			<li><label for="withoutCom_text"><?php _e('"Subscribe without Commenting" Text', 'subscribe-to-doi-comments'); ?></label><br />

				<textarea style="width: 98%; font-size: 12px;" rows="2" cols="60" id="withoutCom_text" name="sg_subscribe_settings[withoutCom_text]">' . (sg_subscribe_settings::textarea_setting('withoutCom_text'))</textarea>
			</li>
			  
			<li><label for="confirmation_text"><?php _e('Confirmation Text (will be shown after user has clicked on the confirmation link)', 'subscribe-to-doi-comments'); ?></label><br />

				<textarea style="width: 98%; font-size: 12px;" rows="2" cols="60" id="confirmation_text" name="sg_subscribe_settings[confirmation_text]"><?php _e(sg_subscribe_settings::textarea_setting('confirmation_text')); ?></textarea>

			</li>

			<li>
				<label for="mail_text_head"><?php _e('Headline for Double-Opt-In', 'subscribe-to-doi-comments'); ?><input type="text" size="40" id="mail_text_head" name="sg_subscribe_settings[mail_text_head]" value="' . (sg_subscribe_settings::form_setting('mail_text_head'))"); ?></label>
			</li>
          
			<li><label for="mail_text"><?php _e('Mail Text for Double-Opt-In ([verify_url] will be replaced with URL to subscribe finally, no HTML!)', 'subscribe-to-doi-comments'); ?></label><br /><textarea style="width: 98%; font-size: 12px;" rows="8" cols="60" id="mail_text" name="sg_subscribe_settings[mail_text]">' . (sg_subscribe_settings::textarea_setting('mail_text'))</textarea></li>

		</ul>
	
	</fieldset>

	<fieldset>
		<legend><input type="checkbox" id="use_custom_style" name="sg_subscribe_settings[use_custom_style]" value="true"<?php sg_subscribe_settings::checkflag('use_custom_style'); ?> /> <label for="use_custom_style"><?php _e('Use custom style for Subscription Manager', 'subscribe-to-doi-comments'); ?></label></legend>
          
          <p><?php _e('These settings only matter if you are using a custom style.  <code>[theme_path]</code> will be replaced with the path to your current theme.', 'subscribe-to-doi-comments'); ?></p>
          
          <ul>
          <li><label for="sg_sub_header"><?php _e('Path to header:', 'subscribe-to-doi-comments'); ?><input type="text" size="40" id="sg_sub_header" name="sg_subscribe_settings[header]" value="' . sg_subscribe_settings::form_setting('header')"); ?></label></li>
          <li><label for="sg_sub_sidebar"><?php _e('Path to sidebar:', 'subscribe-to-doi-comments'); ?><input type="text" size="40" id="sg_sub_sidebar" name="sg_subscribe_settings[sidebar]" value="' . sg_subscribe_settings::form_setting('sidebar')"); ?></label></li>
          <li><label for="sg_sub_footer"><?php _e('Path to footer:', 'subscribe-to-doi-comments'); ?><input type="text" size="40" id="sg_sub_footer" name="sg_subscribe_settings[footer]" value="' . sg_subscribe_settings::form_setting('footer')"); ?></label></li>
          
          
		  <li><label for="before_manager"><?php _e('HTML for before the subscription manager:', 'subscribe-to-doi-comments'); ?></label><br /><textarea style="width: 98%; font-size: 12px;" rows="2" cols="60" id="before_manager" name="sg_subscribe_settings[before_manager]"><?php sg_subscribe_settings::textarea_setting('before_manager'); ?></textarea></li>
		  <li><label for="after_manager"><?php _e('HTML for after the subscription manager:', 'subscribe-to-doi-comments'); ?></label><br /><textarea style="width: 98%; font-size: 12px;" rows="2" cols="60" id="after_manager" name="sg_subscribe_settings[after_manager]"><?php sg_subscribe_settings::textarea_setting('after_manager'); ?></textarea></li>
		  
		</ul>
	</fieldset>

	<fieldset>
		<legend><?php _e('Hide copyright notice (please consider a donation via PayPal!)', 'subscribe-to-doi-comments'); ?></legend>

		<p><?php _e('You can hide the copyright notice published on the subscription manager page. This is optional. Please consider a donation via PayPal if you hide the copyright notice!', 'subscribe-to-doi-comments'); ?></p>
		<p style="color:darkred;"><?php _e('Lots of work was and is put into this plugin, so be fair and donate if you hide the copyright notice!', 'subscribe-to-doi-comments');
		printf(_e(' <a href="%s" target="_blank">Donate here!</a></p>', 'subscribe-to-doi-comments'), $donationlink); ?>

		<ul>

			<li><label for="hideCopyright"><input type="checkbox" id="hideCopyright" name="sg_subscribe_settings[hideCopyright]" value="true" <?php sg_subscribe_settings::checkflag('hideCopyright'); ?> /> <?php _e('Hide the copyright notice from the subscription manager.', 'subscribe-to-doi-comments'); ?></label></li>
		</ul>
	  
	</fieldset>
