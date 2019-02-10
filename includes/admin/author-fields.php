<?php

function lg_custom_user_profile_fields( $user ){
	?>
	<table class="form-table">
		<tr>
			<th>
				<label for="lg_twitter"><?php _e( 'Twitter', 'udemy' ); ?></label>
			</th>
			<td>
				<input type="text" name="lg_twitter" id="lg_twitter" class="regular-text"
				       value="<?php echo esc_attr( get_the_author_meta( 'lg_twitter', $user->ID ) ); ?>"/>
			</td>
		</tr>
	</table>
	<?php
}

function lg_save_extra_profile_fields( $user_id){
	if( !current_user_can( 'edit_user' ) ){
		return;
	}

	update_user_meta(  $user_id, 'lg_twitter', $_POST['lg_twitter'] );
}