<?php
// Register Custom Post Type
function custom_post_type_testimonials() {

	$labels = array(
		'name'                => _x( 'Testimonials', 'Post Type General Name', 'sevenBridges' ),
		'singular_name'       => _x( 'Testimonial', 'Post Type Singular Name', 'sevenBridges' ),
		'menu_name'           => __( 'Testimonials', 'sevenBridges' ),
		'name_admin_bar'      => __( 'Testimonials', 'sevenBridges' ),
		'parent_item_colon'   => __( 'Parent Testimonial:', 'sevenBridges' ),
		'all_items'           => __( 'All Testimonials', 'sevenBridges' ),
		'add_new_item'        => __( 'Add New Testimonial', 'sevenBridges' ),
		'add_new'             => __( 'Add New', 'sevenBridges' ),
		'new_item'            => __( 'New Testimonial', 'sevenBridges' ),
		'edit_item'           => __( 'Edit Testimonial', 'sevenBridges' ),
		'update_item'         => __( 'UpdateTestimonial', 'sevenBridges' ),
		'view_item'           => __( 'View Testimonial', 'sevenBridges' ),
		'search_items'        => __( 'Search Testimonial', 'sevenBridges' ),
		'not_found'           => __( 'Not found', 'sevenBridges' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'sevenBridges' ),
	);
	$args = array(
		'label'               => __( 'Testimonial', 'sevenBridges' ),
		'labels'              => $labels,
		'supports'            => array( 'author', 'thumbnail', 'revisions', 'page-attributes','editor','title','custom-fields', ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 10,
		'menu_icon'           => 'dashicons-testimonial',
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => false,		
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);
	register_post_type( 'testimonials', $args );

}
add_action( 'init', 'custom_post_type_testimonials', 0 );
