<?php
/**
 * Template: Subscription Checkbox
 */

?>

	<p class="<?php echo implode(' ', $arrPClass; ?>">
<?php
/**
 * Unsubscribed users
 */

	if( $is_unsubscribed_user != false ) :  ?>
		
	<input type="checkbox" name="subscribe" id="stc-doi-subscribe" value="subscribe" style="width: auto;" <?php checked( $checked, true ); ?> />
	
	<label for="stc-doi-subscribe"><?php _e( $strSubscriptionText ); ?></label>  
<?php

/**
 * Admin or subscribed user
 */
	else :
		_e( $strSubscriptionText );
	endif;
?>
	</p>

