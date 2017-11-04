<?php

add_action( 'init', 'team_register' );
/**
 * Register a event post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function team_register() {
	$labels = array(
		'name'               => 'Team',
		'singular_name'      => 'Team',
		'add_new'            => 'Add new person',
		'add_new_item'       => 'Add new item',
		'edit_item'          => 'Edit person',
		'new_item'           => 'New person',
		'view_item'          => 'View person',
		'search_items'       => 'Search person',
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
		'rewrite'            => array( 'slug' => 'team' ),
		'capability_type'    => 'post',
		'hierarchical'       => true,
		'menu_position'      => 42,
		'supports'           => array( 'title', 'editor', 'thumbnail' )
	);

	register_post_type( 'team', $args );

}
