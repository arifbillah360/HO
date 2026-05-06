<?php
/**
 * Custom Post Types for hosting types: Turbo, Reseller, Student.
 *
 * Registers three CPTs to manage different hosting categories:
 *   - turbo_hosting
 *   - reseller_hosting
 *   - student_hosting
 *
 * @package Hosting_Theme
 * @since   1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Register Turbo Hosting CPT.
 */
function hosting_theme_register_turbo_hosting() {
	$labels = array(
		'name'                  => _x( 'Turbo Hosting Plans', 'Post type general name', 'hosting-theme' ),
		'singular_name'         => _x( 'Turbo Plan', 'Post type singular name', 'hosting-theme' ),
		'menu_name'             => _x( 'Turbo Hosting', 'Admin menu text', 'hosting-theme' ),
		'all_items'             => __( 'All Turbo Plans', 'hosting-theme' ),
		'add_new_item'          => __( 'Add New Turbo Plan', 'hosting-theme' ),
		'edit_item'             => __( 'Edit Turbo Plan', 'hosting-theme' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'show_in_rest'       => true,
		'rewrite'            => array( 'slug' => 'turbo-hosting' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'menu_position'      => 6,
		'menu_icon'          => 'dashicons-bolt',
		'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt', 'page-attributes' ),
	);

	register_post_type( 'turbo_hosting', $args );
}
add_action( 'init', 'hosting_theme_register_turbo_hosting' );

/**
 * Register Reseller Hosting CPT.
 */
function hosting_theme_register_reseller_hosting() {
	$labels = array(
		'name'                  => _x( 'Reseller Hosting Plans', 'Post type general name', 'hosting-theme' ),
		'singular_name'         => _x( 'Reseller Plan', 'Post type singular name', 'hosting-theme' ),
		'menu_name'             => _x( 'Reseller Hosting', 'Admin menu text', 'hosting-theme' ),
		'all_items'             => __( 'All Reseller Plans', 'hosting-theme' ),
		'add_new_item'          => __( 'Add New Reseller Plan', 'hosting-theme' ),
		'edit_item'             => __( 'Edit Reseller Plan', 'hosting-theme' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'show_in_rest'       => true,
		'rewrite'            => array( 'slug' => 'reseller-hosting' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'menu_position'      => 7,
		'menu_icon'          => 'dashicons-store',
		'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt', 'page-attributes' ),
	);

	register_post_type( 'reseller_hosting', $args );
}
add_action( 'init', 'hosting_theme_register_reseller_hosting' );

/**
 * Register Student Hosting CPT.
 */
function hosting_theme_register_student_hosting() {
	$labels = array(
		'name'                  => _x( 'Student Hosting Plans', 'Post type general name', 'hosting-theme' ),
		'singular_name'         => _x( 'Student Plan', 'Post type singular name', 'hosting-theme' ),
		'menu_name'             => _x( 'Student Hosting', 'Admin menu text', 'hosting-theme' ),
		'all_items'             => __( 'All Student Plans', 'hosting-theme' ),
		'add_new_item'          => __( 'Add New Student Plan', 'hosting-theme' ),
		'edit_item'             => __( 'Edit Student Plan', 'hosting-theme' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'show_in_rest'       => true,
		'rewrite'            => array( 'slug' => 'student-hosting' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'menu_position'      => 8,
		'menu_icon'          => 'dashicons-graduation',
		'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt', 'page-attributes' ),
	);

	register_post_type( 'student_hosting', $args );
}
add_action( 'init', 'hosting_theme_register_student_hosting' );

/**
 * Flush rewrite rules on theme activation.
 */
function hosting_theme_hosting_types_rewrite_flush() {
	hosting_theme_register_turbo_hosting();
	hosting_theme_register_reseller_hosting();
	hosting_theme_register_student_hosting();
	flush_rewrite_rules();
}
add_action( 'after_switch_theme', 'hosting_theme_hosting_types_rewrite_flush' );
