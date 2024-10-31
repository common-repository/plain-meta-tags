<?php
/*
Plugin Name: Plain Meta Tags
Plugin URI: http://www.thepicklingjar.com/
Description: A manual meta tag plugin
Version: 1.0
Author: The Pickling Jar Ltd
Author URI: http://www.thepicklingjar.com/
*/

function plain_meta_tags(){
	global $post;
	$id = $post->ID;
	if(is_home() || is_front_page()){
		return;
	}
	if(get_post_custom_values('keywords', $id)) {
		$arr = get_post_custom_values('keywords', $id);
		echo '<meta name="keywords" content="'.$arr[0].'" />'."\n";
	}
	if(get_post_custom_values('description', $id)) {
		$arr = get_post_custom_values('description', $id);
		echo '<meta name="description" content="'.$arr[0].'" />';
	}
}
add_action('wp_head', 'plain_meta_tags');
?>
