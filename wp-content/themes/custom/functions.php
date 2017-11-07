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