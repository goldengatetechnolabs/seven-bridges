<?php
function leadership_custom_post_type() {
	$args = [
		'label'  => esc_html__( 'Leaderships', 'text-domain' ),
		'labels' => [
			'menu_name'          => esc_html__( 'Leaderships', 'sevenBridges' ),
			'name_admin_bar'     => esc_html__( 'Leadership', 'sevenBridges' ),
			'add_new'            => esc_html__( 'Add Leadership', 'sevenBridges' ),
			'add_new_item'       => esc_html__( 'Add new Leadership', 'sevenBridges' ),
			'new_item'           => esc_html__( 'New Leadership', 'sevenBridges' ),
			'edit_item'          => esc_html__( 'Edit Leadership', 'sevenBridges' ),
			'view_item'          => esc_html__( 'View Leadership', 'sevenBridges' ),
			'update_item'        => esc_html__( 'View Leadership', 'sevenBridges' ),
			'all_items'          => esc_html__( 'All Leaderships', 'sevenBridges' ),
			'search_items'       => esc_html__( 'Search Leaderships', 'sevenBridges' ),
			'parent_item_colon'  => esc_html__( 'Parent Leadership', 'sevenBridges' ),
			'not_found'          => esc_html__( 'No Leaderships found', 'sevenBridges' ),
			'not_found_in_trash' => esc_html__( 'No Leaderships found in Trash', 'sevenBridges' ),
			'name'               => esc_html__( 'Leaderships', 'sevenBridges' ),
			'singular_name'      => esc_html__( 'Leadership', 'sevenBridges' ),
		],
		'public'              => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'show_ui'             => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'show_in_rest'        => true,
		'capability_type'     => 'post',
		'hierarchical'        => false,
		'has_archive'         => true,
		'query_var'           => true,
		'can_export'          => true,
		'rewrite_no_front'    => false,
		'show_in_menu'        => true,
		'menu_icon'           => 'dashicons-businessman',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'author', 'comments', 'trackbacks', 'page-attributes', 'post-formats', 'custom-fields'),
		
		'rewrite' => true
	];

	register_post_type( 'leadership', $args );
}
add_action( 'init', 'leadership_custom_post_type' );
