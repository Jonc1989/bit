<?php

add_action( 'init', 'partner_register' );
/**
 * Register a event post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function partner_register() {
	$labels = array(
		'name'               => 'Partners',
		'singular_name'      => 'Partner',
		'add_new'            => 'Add new partner',
		'add_new_item'       => 'Add new partner',
		'edit_item'          => 'Edit partner',
		'new_item'           => 'New partner',
		'view_item'          => 'View partner',
		'search_items'       => 'Search partner',
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
		'rewrite'            => array( 'slug' => 'partner' ),
		'capability_type'    => 'post',
		'hierarchical'       => true,
		'menu_position'      => 42,
		'supports'           => array( 'thumbnail' )
	);

	register_post_type( 'partner', $args );

}
