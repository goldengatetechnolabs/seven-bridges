<?php
function in_the_news_taxonomy_sevenBridges() {
	$args = [
		'label'  => esc_html__( 'In the News', 'sevenBridges' ),
		'labels' => [
			'menu_name'                  => esc_html__( 'In the News', 'sevenBridges' ),
			'all_items'                  => esc_html__( 'All News', 'sevenBridges' ),
			'edit_item'                  => esc_html__( 'Edit News', 'sevenBridges' ),
			'view_item'                  => esc_html__( 'View News', 'sevenBridges' ),
			'update_item'                => esc_html__( 'Update News', 'sevenBridges' ),
			'add_new_item'               => esc_html__( 'Add new News', 'sevenBridges' ),
			'new_item'                   => esc_html__( 'New News', 'sevenBridges' ),
			'parent_item'                => esc_html__( 'Parent News', 'sevenBridges' ),
			'parent_item_colon'          => esc_html__( 'Parent News', 'sevenBridges' ),
			'search_items'               => esc_html__( 'Search News', 'sevenBridges' ),
			'popular_items'              => esc_html__( 'Popular News', 'sevenBridges' ),
			'separate_items_with_commas' => esc_html__( 'Separate News with commas', 'sevenBridges' ),
			'add_or_remove_items'        => esc_html__( 'Add or remove News', 'sevenBridges' ),
			'choose_from_most_used'      => esc_html__( 'Choose most used News', 'sevenBridges' ),
			'not_found'                  => esc_html__( 'No News found', 'sevenBridges' ),
			'name'                       => esc_html__( 'News', 'sevenBridges' ),
			'singular_name'              => esc_html__( 'News', 'sevenBridges' ),
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
	register_taxonomy( 'in-the-news', [ 'press' ], $args );
}
add_action( 'init', 'in_the_news_taxonomy_sevenBridges' );
