<?php 
// Register Publication Post Type
function publication_post_type() {

	$labels = array(
		'name'                  => _x( 'Publications', 'Post Type General Name', 'sevenBridges' ),
		'singular_name'         => _x( 'Publication', 'Post Type Singular Name', 'sevenBridges' ),
		'menu_name'             => __( 'Publications', 'sevenBridges' ),
		'name_admin_bar'        => __( 'Publication', 'sevenBridges' ),
		'archives'              => __( 'Item Archives', 'sevenBridges' ),
		'attributes'            => __( 'Item Attributes', 'sevenBridges' ),
		'parent_item_colon'     => __( 'Parent Item:', 'sevenBridges' ),
		'all_items'             => __( 'All Items', 'sevenBridges' ),
		'add_new_item'          => __( 'Add New Item', 'sevenBridges' ),
		'add_new'               => __( 'Add New', 'sevenBridges' ),
		'new_item'              => __( 'New Item', 'sevenBridges' ),
		'edit_item'             => __( 'Edit Item', 'sevenBridges' ),
		'update_item'           => __( 'Update Item', 'sevenBridges' ),
		'view_item'             => __( 'View Item', 'sevenBridges' ),
		'view_items'            => __( 'View Items', 'sevenBridges' ),
		'search_items'          => __( 'Search Item', 'sevenBridges' ),
		'not_found'             => __( 'Not found', 'sevenBridges' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'sevenBridges' ),
		'featured_image'        => __( 'Featured Image', 'sevenBridges' ),
		'set_featured_image'    => __( 'Set featured image', 'sevenBridges' ),
		'remove_featured_image' => __( 'Remove featured image', 'sevenBridges' ),
		'use_featured_image'    => __( 'Use as featured image', 'sevenBridges' ),
		'insert_into_item'      => __( 'Insert into item', 'sevenBridges' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'sevenBridges' ),
		'items_list'            => __( 'Items list', 'sevenBridges' ),
		'items_list_navigation' => __( 'Items list navigation', 'sevenBridges' ),
		'filter_items_list'     => __( 'Filter items list', 'sevenBridges' ),
	);
	$args = array(
		'label'                 => __( 'Publication', 'sevenBridges' ),
		'description'           => __( 'Publication Description', 'sevenBridges' ),
		'labels'                => $labels,
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'author', 'comments', 'trackbacks', 'page-attributes', 'post-formats', 'custom-fields'),
		'taxonomies'            => array('publication', ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_icon'   			=> 'dashicons-format-quote',
		'menu_position'         => 3,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'publications', $args );

}
add_action( 'init', 'publication_post_type', 0 );