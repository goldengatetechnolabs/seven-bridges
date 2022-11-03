<?php
function press_releases_taxonomy_sevenBridges() {
	$args = [
		'label'  => esc_html__( 'Press Releases', 'sevenBridges' ),
		'labels' => [
			'menu_name'                  => esc_html__( 'Press Releases', 'sevenBridges' ),
			'all_items'                  => esc_html__( 'All Press Releases ', 'sevenBridges' ),
			'edit_item'                  => esc_html__( 'Edit Press Release', 'sevenBridges' ),
			'view_item'                  => esc_html__( 'View Press Release', 'sevenBridges' ),
			'update_item'                => esc_html__( 'Update Press Release', 'sevenBridges' ),
			'add_new_item'               => esc_html__( 'Add new Press Release', 'sevenBridges' ),
			'new_item'                   => esc_html__( 'New Press Release', 'sevenBridges' ),
			'parent_item'                => esc_html__( 'Parent Press Release', 'sevenBridges' ),
			'parent_item_colon'          => esc_html__( 'Parent Press Release', 'sevenBridges' ),
			'search_items'               => esc_html__( 'Search Press Release', 'sevenBridges' ),
			'popular_items'              => esc_html__( 'Popular Press Release', 'sevenBridges' ),
			'separate_items_with_commas' => esc_html__( 'Separate Press Release with commas', 'sevenBridges' ),
			'add_or_remove_items'        => esc_html__( 'Add or remove Press Release', 'sevenBridges' ),
			'choose_from_most_used'      => esc_html__( 'Choose most used Press Release', 'sevenBridges' ),
			'not_found'                  => esc_html__( 'No Press Release found', 'sevenBridges' ),
			'name'                       => esc_html__( 'Press Release', 'sevenBridges' ),
			'singular_name'              => esc_html__( 'Press Release', 'sevenBridges' ),
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
	register_taxonomy( 'press-releases', [ 'press' ], $args );
}
add_action( 'init', 'press_releases_taxonomy_sevenBridges' );
