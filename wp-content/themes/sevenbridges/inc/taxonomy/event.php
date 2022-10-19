<?php
function event_taxonomy_sevenBridges() {
	$args = [
		'label'  => esc_html__( 'Events', 'sevenBridges' ),
		'labels' => [
			'menu_name'                  => esc_html__( 'Events', 'sevenBridges' ),
			'all_items'                  => esc_html__( 'All Events', 'sevenBridges' ),
			'edit_item'                  => esc_html__( 'Edit Event', 'sevenBridges' ),
			'view_item'                  => esc_html__( 'View Event', 'sevenBridges' ),
			'update_item'                => esc_html__( 'Update Event', 'sevenBridges' ),
			'add_new_item'               => esc_html__( 'Add new Event', 'sevenBridges' ),
			'new_item'                   => esc_html__( 'New Event', 'sevenBridges' ),
			'parent_item'                => esc_html__( 'Parent Event', 'sevenBridges' ),
			'parent_item_colon'          => esc_html__( 'Parent Event', 'sevenBridges' ),
			'search_items'               => esc_html__( 'Search Events', 'sevenBridges' ),
			'popular_items'              => esc_html__( 'Popular Events', 'sevenBridges' ),
			'separate_items_with_commas' => esc_html__( 'Separate Events with commas', 'sevenBridges' ),
			'add_or_remove_items'        => esc_html__( 'Add or remove Events', 'sevenBridges' ),
			'choose_from_most_used'      => esc_html__( 'Choose most used Events', 'sevenBridges' ),
			'not_found'                  => esc_html__( 'No Events found', 'sevenBridges' ),
			'name'                       => esc_html__( 'Events', 'sevenBridges' ),
			'singular_name'              => esc_html__( 'Event', 'sevenBridges' ),
		],
		'public'               => true,
		'publicly_queryable'   => true,
		'show_ui'              => true,
		'show_in_menu'         => true,
		'show_in_nav_menus'    => true,
		'show_tagcloud'        => true,
		'show_in_quick_edit'   => true,
		'show_admin_column'    => true,
		'show_in_rest'         => true,
		'hierarchical'         => true,
		'query_var'            => true,
		'sort'                 => false,
		'rewrite_no_front'     => false,
		'rewrite_hierarchical' => false,
		'rewrite' => true
	];
	register_taxonomy( 'event', [ 'events' ], $args );
}
add_action( 'init', 'event_taxonomy_sevenBridges' );
