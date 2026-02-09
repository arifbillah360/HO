<?php
/**
 * Custom Post Types registration.
 *
 * Registers the hosting_plan post type used to manage
 * individual hosting packages (WordPress Hosting, Turbo, etc.).
 *
 * @package Hosting_Theme
 * @since   1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Register the hosting_plan custom post type.
 */
function hosting_theme_register_post_types() {

	$labels = array(
		'name'                  => _x( 'Hosting Plans', 'Post type general name', 'hosting-theme' ),
		'singular_name'         => _x( 'Hosting Plan', 'Post type singular name', 'hosting-theme' ),
		'menu_name'             => _x( 'Hosting Plans', 'Admin menu text', 'hosting-theme' ),
		'name_admin_bar'        => _x( 'Hosting Plan', 'Add New on Toolbar', 'hosting-theme' ),
		'add_new'               => __( 'Add New', 'hosting-theme' ),
		'add_new_item'          => __( 'Add New Hosting Plan', 'hosting-theme' ),
		'new_item'              => __( 'New Hosting Plan', 'hosting-theme' ),
		'edit_item'             => __( 'Edit Hosting Plan', 'hosting-theme' ),
		'view_item'             => __( 'View Hosting Plan', 'hosting-theme' ),
		'all_items'             => __( 'All Hosting Plans', 'hosting-theme' ),
		'search_items'          => __( 'Search Hosting Plans', 'hosting-theme' ),
		'parent_item_colon'     => __( 'Parent Hosting Plans:', 'hosting-theme' ),
		'not_found'             => __( 'No hosting plans found.', 'hosting-theme' ),
		'not_found_in_trash'    => __( 'No hosting plans found in Trash.', 'hosting-theme' ),
		'featured_image'        => _x( 'Plan Icon', 'Overrides the "Featured Image" phrase', 'hosting-theme' ),
		'set_featured_image'    => _x( 'Set plan icon', 'Overrides the "Set featured image" phrase', 'hosting-theme' ),
		'remove_featured_image' => _x( 'Remove plan icon', 'Overrides the "Remove featured image" phrase', 'hosting-theme' ),
		'use_featured_image'    => _x( 'Use as plan icon', 'Overrides the "Use as featured image" phrase', 'hosting-theme' ),
		'archives'              => _x( 'Hosting Plan Archives', 'The post type archive label', 'hosting-theme' ),
		'insert_into_item'      => _x( 'Insert into hosting plan', 'Overrides the "Insert into post" phrase', 'hosting-theme' ),
		'uploaded_to_this_item' => _x( 'Uploaded to this hosting plan', 'Overrides the "Uploaded to this post" phrase', 'hosting-theme' ),
		'filter_items_list'     => _x( 'Filter hosting plans list', 'Screen reader text', 'hosting-theme' ),
		'items_list_navigation' => _x( 'Hosting plans list navigation', 'Screen reader text', 'hosting-theme' ),
		'items_list'            => _x( 'Hosting plans list', 'Screen reader text', 'hosting-theme' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'show_in_rest'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'hosting-plan' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 5,
		'menu_icon'          => 'dashicons-cloud',
		'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt', 'page-attributes' ),
	);

	register_post_type( 'hosting_plan', $args );
}
add_action( 'init', 'hosting_theme_register_post_types' );

/**
 * Flush rewrite rules on theme activation so the hosting_plan
 * slug works immediately without a manual Settings > Permalinks save.
 */
function hosting_theme_rewrite_flush() {
	hosting_theme_register_post_types();
	flush_rewrite_rules();
}
add_action( 'after_switch_theme', 'hosting_theme_rewrite_flush' );
