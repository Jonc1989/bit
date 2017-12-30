<?php

add_action( 'init', 'team_questions' );
/**
 * Register a event post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function team_questions() {
    $labels = array(
        'name'               => 'Questions',
        'singular_name'      => 'Question',
        'add_new'            => 'Add new question',
        'add_new_item'       => 'Add new question',
        'edit_item'          => 'Edit question',
        'new_item'           => 'New question',
        'view_item'          => 'View question',
        'search_items'       => 'Search question',
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
        'rewrite'            => array( 'slug' => 'questions' ),
        'capability_type'    => 'post',
        'hierarchical'       => true,
        'menu_position'      => 42,
        'supports'           => array( 'title', 'editor' )
    );

    register_post_type( 'questions', $args );

}
