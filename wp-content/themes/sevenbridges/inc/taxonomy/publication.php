<?php
function publication_taxonomy_sevenBridges() {
	$args = [
		'label'  => esc_html__( 'Publication', 'sevenBridges' ),
		'labels' => [
			'menu_name'                  => esc_html__( 'Publication', 'sevenBridges' ),
			'all_items'                  => esc_html__( 'All Publication', 'sevenBridges' ),
			'edit_item'                  => esc_html__( 'Edit Publication', 'sevenBridges' ),
			'view_item'                  => esc_html__( 'View Publication', 'sevenBridges' ),
			'update_item'                => esc_html__( 'Update Publication', 'sevenBridges' ),
			'add_new_item'               => esc_html__( 'Add new Publication', 'sevenBridges' ),
			'new_item'                   => esc_html__( 'New Publication', 'sevenBridges' ),
			'parent_item'                => esc_html__( 'Parent Publication', 'sevenBridges' ),
			'parent_item_colon'          => esc_html__( 'Parent Publication', 'sevenBridges' ),
			'search_items'               => esc_html__( 'Search Publication', 'sevenBridges' ),
			'popular_items'              => esc_html__( 'Popular Publication', 'sevenBridges' ),
			'separate_items_with_commas' => esc_html__( 'Separate Publication with commas', 'sevenBridges' ),
			'add_or_remove_items'        => esc_html__( 'Add or remove Publication', 'sevenBridges' ),
			'choose_from_most_used'      => esc_html__( 'Choose most used Publication', 'sevenBridges' ),
			'not_found'                  => esc_html__( 'No Publication found', 'sevenBridges' ),
			'name'                       => esc_html__( 'Publication', 'sevenBridges' ),
			'singular_name'              => esc_html__( 'Publication', 'sevenBridges' ),
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
		
	];
	register_taxonomy( 'publication', [ 'publications' ], $args );
}
add_action( 'init', 'publication_taxonomy_sevenBridges' );
