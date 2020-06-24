<?php

// Register Project Custom Post Type Project
function BM_create_project_cpt() {

	$labels = array(
		'name' => _x( 'Projects', 'Post Type General Name', 'bekahmcdonald' ),
		'singular_name' => _x( 'Project', 'Post Type Singular Name', 'bekahmcdonald' ),
		'menu_name' => _x( 'Projects', 'Admin Menu text', 'bekahmcdonald' ),
		'name_admin_bar' => _x( 'Project', 'Add New on Toolbar', 'bekahmcdonald' ),
		'archives' => __( 'Project Archives', 'bekahmcdonald' ),
		'attributes' => __( 'Project Attributes', 'bekahmcdonald' ),
		'parent_item_colon' => __( 'Parent Project:', 'bekahmcdonald' ),
		'all_items' => __( 'All Projects', 'bekahmcdonald' ),
		'add_new_item' => __( 'Add New Project', 'bekahmcdonald' ),
		'add_new' => __( 'Add New', 'bekahmcdonald' ),
		'new_item' => __( 'New Project', 'bekahmcdonald' ),
		'edit_item' => __( 'Edit Project', 'bekahmcdonald' ),
		'update_item' => __( 'Update Project', 'bekahmcdonald' ),
		'view_item' => __( 'View Project', 'bekahmcdonald' ),
		'view_items' => __( 'View Projects', 'bekahmcdonald' ),
		'search_items' => __( 'Search Project', 'bekahmcdonald' ),
		'not_found' => __( 'Not found', 'bekahmcdonald' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'bekahmcdonald' ),
		'featured_image' => __( 'Featured Image', 'bekahmcdonald' ),
		'set_featured_image' => __( 'Set featured image', 'bekahmcdonald' ),
		'remove_featured_image' => __( 'Remove featured image', 'bekahmcdonald' ),
		'use_featured_image' => __( 'Use as featured image', 'bekahmcdonald' ),
		'insert_into_item' => __( 'Insert into Project', 'bekahmcdonald' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Project', 'bekahmcdonald' ),
		'items_list' => __( 'Projects list', 'bekahmcdonald' ),
		'items_list_navigation' => __( 'Projects list navigation', 'bekahmcdonald' ),
		'filter_items_list' => __( 'Filter Projects list', 'bekahmcdonald' ),
	);
	$rewrite = array(
		'slug' => 'work',
		'with_front' => true,
		'pages' => false,
		'feeds' => false,
	);
	$args = array(
		'label' => __( 'Project', 'bekahmcdonald' ),
		'description' => __( '', 'bekahmcdonald' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-portfolio',
		'supports' => array('title'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => false,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
		'rewrite' => $rewrite,
	);
	register_post_type( 'project', $args );

}
add_action( 'init', 'BM_create_project_cpt', 0 );