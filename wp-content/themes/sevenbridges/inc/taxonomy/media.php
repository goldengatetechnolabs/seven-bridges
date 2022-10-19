<?php
function media_taxonomy_sevenBridges() {
	$args = [
		'label'  => esc_html__( 'Media', 'sevenBridges' ),
		'labels' => [
			'menu_name'                  => esc_html__( 'Media', 'sevenBridges' ),
			'all_items'                  => esc_html__( 'All Media', 'sevenBridges' ),
			'edit_item'                  => esc_html__( 'Edit Media', 'sevenBridges' ),
			'view_item'                  => esc_html__( 'View Media', 'sevenBridges' ),
			'update_item'                => esc_html__( 'Update Media', 'sevenBridges' ),
			'add_new_item'               => esc_html__( 'Add new Media', 'sevenBridges' ),
			'new_item'                   => esc_html__( 'New Media', 'sevenBridges' ),
			'parent_item'                => esc_html__( 'Parent Media', 'sevenBridges' ),
			'parent_item_colon'          => esc_html__( 'Parent Media', 'sevenBridges' ),
			'search_items'               => esc_html__( 'Search Media', 'sevenBridges' ),
			'popular_items'              => esc_html__( 'Popular Media', 'sevenBridges' ),
			'separate_items_with_commas' => esc_html__( 'Separate Media with commas', 'sevenBridges' ),
			'add_or_remove_items'        => esc_html__( 'Add or remove Media', 'sevenBridges' ),
			'choose_from_most_used'      => esc_html__( 'Choose most used Media', 'sevenBridges' ),
			'not_found'                  => esc_html__( 'No Media found', 'sevenBridges' ),
			'name'                       => esc_html__( 'Media', 'sevenBridges' ),
			'singular_name'              => esc_html__( 'Media', 'sevenBridges' ),
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
	register_taxonomy( 'medias', [ 'media' ], $args );
}
add_action( 'init', 'Media_taxonomy_sevenBridges' );
