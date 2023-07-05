<?php
/**
 * BBase Code functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package BBase_Code
 */

foreach (glob(get_stylesheet_directory()."/inc/*.php") as $filepath){
	if ( ! $filepath ) {
		trigger_error( sprintf( 'Error locating %s for inclusion', $file ), E_USER_ERROR );
	}
	require_once $filepath;
}
function theme_js_script() {
	wp_enqueue_script( 'main-sc-script', get_template_directory_uri() . '/assets/js/main-ct.js');
	}
add_action('wp_enqueue_scripts', 'theme_js_script');

function callAPI($method, $url, $data){
	$curl = curl_init();
	switch ($method){
	   case "POST":
		  //curl_setopt($curl, CURLOPT_POST, 1);
		  if ($data)
			 //curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
		  break;
	   case "PUT":
		  curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
		  if ($data)
			 curl_setopt($curl, CURLOPT_POSTFIELDS, $data);			 					
		  break;
	   default:
		  if ($data)
			 $url = sprintf("%s?%s", $url, http_build_query($data));
	}
	// OPTIONS:
	if($method=="POST")
	{
		curl_setopt( $curl, CURLOPT_HEADER, 0);
		curl_setopt( $curl, CURLINFO_HEADER_OUT, 1);
		curl_setopt( $curl, CURLOPT_AUTOREFERER, 1);
		curl_setopt( $curl, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt( $curl, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt( $curl, CURLOPT_SSL_VERIFYPEER, 0);

		curl_setopt( $curl, CURLOPT_POST, 1);

		
		curl_setopt( $curl, CURLOPT_POSTFIELDS, $data);
		curl_setopt( $curl, CURLOPT_HTTPHEADER, array('accept: application/json','Content-type: application/json'));
		//curl_setopt( $curl, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:2.0.1) Gecko/20100101 Firefox/4.0.1');
		curl_setopt( $curl, CURLOPT_URL, $url);
	
		

	}
	else
	{
		curl_setopt($curl, CURLOPT_URL, $url);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
	
	}
	
	// EXECUTE:
	$result = curl_exec($curl);
	return $result;

	if(!$result){die("Connection Failure");}
	
	
 }

 function callAPITOKEN($method, $url, $data,$token){
	$curl = curl_init();
	curl_setopt( $curl, CURLOPT_HEADER, 0);
	curl_setopt( $curl, CURLINFO_HEADER_OUT, 1);
	curl_setopt( $curl, CURLOPT_AUTOREFERER, 1);
	curl_setopt( $curl, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt( $curl, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt( $curl, CURLOPT_SSL_VERIFYPEER, 0);
	if($method=="POST")
	{
		curl_setopt( $curl, CURLOPT_POST, 0);

	
		curl_setopt( $curl, CURLOPT_POSTFIELDS, $data);
	}

	
	curl_setopt( $curl, CURLOPT_HTTPHEADER, array('accept: accept: */*','Authorization: Bearer '.$token));
	//curl_setopt( $curl, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:2.0.1) Gecko/20100101 Firefox/4.0.1');
	curl_setopt( $curl, CURLOPT_URL, $url);
	$result = curl_exec($curl);
	return $result;
 }
add_action( 'init', 'smartwp_disable_emojis' );

function smartwp_disable_emojis() {
 remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
 remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
 remove_action( 'wp_print_styles', 'print_emoji_styles' );
 remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
 remove_action( 'admin_print_styles', 'print_emoji_styles' );
 remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
 remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
 add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
}

function disable_emojis_tinymce( $plugins ) {
 if ( is_array( $plugins ) ) {
 return array_diff( $plugins, array( 'wpemoji' ) );
 } else {
 return array();
 }
}
add_action( 'rest_api_init', function() {
	register_rest_field( 
		'post', // an object type (like "post", "term", "comment")
		'featured_image_data', // we are going to store image information here
		array(
			'get_callback' => 'rudr_get_featured_image_data',
		)
	);
} );

function rudr_get_featured_image_data( $post, $field_name, $request ) {
	
	if( empty( $post[ 'featured_media' ] ) ) {
		return;
	}
	
	$image_id = (int) $post[ 'featured_media' ];
	
	if( ! $image = get_post( $image_id ) ) {
		return;
	}
	
	return array(
		'src' => wp_get_attachment_url( $image_id ),
		'alt' => get_post_meta( $image_id, '_wp_attachment_image_alt', true ),
		'caption' => $image->post_excerpt
	);
}
add_action('after_setup_theme', 'remove_admin_bar');
function remove_admin_bar() {
	show_admin_bar(false);
}