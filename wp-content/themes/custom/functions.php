<?php

add_filter('show_admin_bar', '__return_false');
require 'post-types/team-post_type.php';
require 'post-types/partner-post_type.php';

load_theme_textdomain( 'preico' );

//add_theme_support( 'custom-logo', array(
//	'height'      => 240,
//	'width'       => 240,
//	'flex-height' => true,
//) );

add_theme_support( 'post-thumbnails' );

register_nav_menus( array(
	'primary' => __( 'Primary Menu', 'preico' )
) );

register_nav_menus( array(
	'footer' => __( 'Footer Menu', 'preico' )
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

	register_setting( 'general', 'address_input', 'esc_attr' );
	register_setting( 'general', 'phone_input', 'esc_attr' );
}
function contact_callback() {
	echo '<span> </span>';
}

function input_callback( $args ) {
	$option = get_option( $args[0] );
	echo '<input style="width: 600px;" type="text" id="' . $args[0] . '" name="' . $args[0] . '" value="' . $option . '" />';
}
