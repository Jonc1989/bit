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

function debug($value)
{
	echo '<pre>';
	print_r($value);
	echo '</pre>';
}