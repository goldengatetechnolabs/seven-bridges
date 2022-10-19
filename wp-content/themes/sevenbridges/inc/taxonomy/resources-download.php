<?php
function resources_and_download_taxonomy_sevenBridges() {
	$args = [
		'label'  => esc_html__( 'Resources', 'sevenBridges' ),
		'labels' => [
			'menu_name'                  => esc_html__( 'Resources', 'sevenBridges' ),
			'all_items'                  => esc_html__( 'All Resources', 'sevenBridges' ),
			'edit_item'                  => esc_html__( 'Edit Resources', 'sevenBridges' ),
			'view_item'                  => esc_html__( 'View Resources', 'sevenBridges' ),
			'update_item'                => esc_html__( 'Update Resources', 'sevenBridges' ),
			'add_new_item'               => esc_html__( 'Add new Resources', 'sevenBridges' ),
			'new_item'                   => esc_html__( 'New Resources', 'sevenBridges' ),
			'parent_item'                => esc_html__( 'Parent Resources', 'sevenBridges' ),
			'parent_item_colon'          => esc_html__( 'Parent Resources', 'sevenBridges' ),
			'search_items'               => esc_html__( 'Search Resources', 'sevenBridges' ),
			'popular_items'              => esc_html__( 'Popular Resources', 'sevenBridges' ),
			'separate_items_with_commas' => esc_html__( 'Separate Resources with commas', 'sevenBridges' ),
			'add_or_remove_items'        => esc_html__( 'Add or remove Resources', 'sevenBridges' ),
			'choose_from_most_used'      => esc_html__( 'Choose most used Resources', 'sevenBridges' ),
			'not_found'                  => esc_html__( 'No Resources found', 'sevenBridges' ),
			'name'                       => esc_html__( 'Resources', 'sevenBridges' ),
			'singular_name'              => esc_html__( 'Resources', 'sevenBridges' ),
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
	register_taxonomy( 'resource', [ 'resources' ], $args );
}
add_action( 'init', 'resources_and_download_taxonomy_sevenBridges' );
