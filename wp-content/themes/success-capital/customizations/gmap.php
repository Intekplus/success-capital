<?php

function my_acf_google_map_api( $api ){
	
	$api['key'] = 'AIzaSyDccmB2wsgbde20KFi4WDwJFjuvb4bAVw8';
	
	return $api;
	
}

add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');
function add_scripts() {
	wp_enqueue_script('google-maps', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyDccmB2wsgbde20KFi4WDwJFjuvb4bAVw8&libraries=geometry', array(), '3', true );
  }
  add_action('wp_enqueue_scripts',  __NAMESPACE__ . '\\add_scripts');