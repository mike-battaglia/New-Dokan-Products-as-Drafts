function my_custom_new_post_status( $status, $user_id, $is_trusted ) {
	$status = $is_trusted ? 'draft' : dokan_get_option( 'product_status', 'dokan_selling', 'pending' );
	return $status;
}
add_filter( 'dokan_get_new_post_status', 'my_custom_new_post_status', 10, 3 );
