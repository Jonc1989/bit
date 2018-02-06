<?php

add_action( 'init', 'news_register' );
/**
 * Register a event post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function news_register() {
	$labels = array(
		'name'               => 'News',
		'singular_name'      => 'News',
		'add_new'            => 'Add new item',
		'add_new_item'       => 'Add new item',
		'edit_item'          => 'Edit news',
		'new_item'           => 'New item',
		'view_item'          => 'View item',
		'search_items'       => 'Search news',
		'not_found'          => __( 'Nothing found', 'preico' ),
		'not_found_in_trash' => __( 'Nothing found in Trash', 'preico' ),
		'parent_item_colon'  => ''
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'news' ),
		'capability_type'    => 'post',
		'hierarchical'       => true,
		'menu_position'      => 42,
		'supports'           => array( 'title', 'editor', 'thumbnail' )
	);

	register_post_type( 'news', $args );

}
