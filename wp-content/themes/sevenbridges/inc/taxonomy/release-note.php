<?php
function release_note_taxonomy_sevenBridges() {
	$args = [
		'label'  => esc_html__( 'Release Note', 'sevenBridges' ),
		'labels' => [
			'menu_name'                  => esc_html__( 'Release Note', 'sevenBridges' ),
			'all_items'                  => esc_html__( 'All Release Note', 'sevenBridges' ),
			'edit_item'                  => esc_html__( 'Edit Release Note', 'sevenBridges' ),
			'view_item'                  => esc_html__( 'View Release Note', 'sevenBridges' ),
			'update_item'                => esc_html__( 'Update Release Note', 'sevenBridges' ),
			'add_new_item'               => esc_html__( 'Add new Release Note', 'sevenBridges' ),
			'new_item'                   => esc_html__( 'New Release Note', 'sevenBridges' ),
			'parent_item'                => esc_html__( 'Parent Release Note', 'sevenBridges' ),
			'parent_item_colon'          => esc_html__( 'Parent Release Note', 'sevenBridges' ),
			'search_items'               => esc_html__( 'Search Release Note', 'sevenBridges' ),
			'popular_items'              => esc_html__( 'Popular Release Note', 'sevenBridges' ),
			'separate_items_with_commas' => esc_html__( 'Separate Release Note with commas', 'sevenBridges' ),
			'add_or_remove_items'        => esc_html__( 'Add or remove Release Note', 'sevenBridges' ),
			'choose_from_most_used'      => esc_html__( 'Choose most used Release Note', 'sevenBridges' ),
			'not_found'                  => esc_html__( 'No Release Note found', 'sevenBridges' ),
			'name'                       => esc_html__( 'Release Note', 'sevenBridges' ),
			'singular_name'              => esc_html__( 'Release Note', 'sevenBridges' ),
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
	register_taxonomy( 'release-note', [ 'release-notes' ], $args );
}
add_action( 'init', 'release_note_taxonomy_sevenBridges' );