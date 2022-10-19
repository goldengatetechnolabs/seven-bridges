<?php
function awards_taxonomy_sevenBridges() {
	$args = [
		'label'  => esc_html__( 'Years', 'sevenBridges' ),
		'labels' => [
			'menu_name'                  => esc_html__( 'Years', 'sevenBridges' ),
			'all_items'                  => esc_html__( 'All Years', 'sevenBridges' ),
			'edit_item'                  => esc_html__( 'Edit Year', 'sevenBridges' ),
			'view_item'                  => esc_html__( 'View Year', 'sevenBridges' ),
			'update_item'                => esc_html__( 'Update Year', 'sevenBridges' ),
			'add_new_item'               => esc_html__( 'Add new Year', 'sevenBridges' ),
			'new_item'                   => esc_html__( 'New Year', 'sevenBridges' ),
			'parent_item'                => esc_html__( 'Parent Year', 'sevenBridges' ),
			'parent_item_colon'          => esc_html__( 'Parent Year', 'sevenBridges' ),
			'search_items'               => esc_html__( 'Search Years', 'sevenBridges' ),
			'popular_items'              => esc_html__( 'Popular Years', 'sevenBridges' ),
			'separate_items_with_commas' => esc_html__( 'Separate Years with commas', 'sevenBridges' ),
			'add_or_remove_items'        => esc_html__( 'Add or remove Years', 'sevenBridges' ),
			'choose_from_most_used'      => esc_html__( 'Choose most used Years', 'sevenBridges' ),
			'not_found'                  => esc_html__( 'No Years found', 'sevenBridges' ),
			'name'                       => esc_html__( 'Years', 'sevenBridges' ),
			'singular_name'              => esc_html__( 'Year', 'sevenBridges' ),
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
	register_taxonomy( 'awards-year', [ 'awards' ], $args );
}
add_action( 'init', 'awards_taxonomy_sevenBridges' );
