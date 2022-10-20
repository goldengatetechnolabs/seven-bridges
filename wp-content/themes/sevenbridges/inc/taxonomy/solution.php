<?php
function solution_taxonomy_sevenBridges() {
	$args = [
		'label'  => esc_html__( 'Solution', 'sevenBridges' ),
		'labels' => [
			'menu_name'                  => esc_html__( 'Solution', 'sevenBridges' ),
			'all_items'                  => esc_html__( 'All Solution', 'sevenBridges' ),
			'edit_item'                  => esc_html__( 'Edit Solution', 'sevenBridges' ),
			'view_item'                  => esc_html__( 'View Solution', 'sevenBridges' ),
			'update_item'                => esc_html__( 'Update Solution', 'sevenBridges' ),
			'add_new_item'               => esc_html__( 'Add new Solution', 'sevenBridges' ),
			'new_item'                   => esc_html__( 'New Solution', 'sevenBridges' ),
			'parent_item'                => esc_html__( 'Parent Solution', 'sevenBridges' ),
			'parent_item_colon'          => esc_html__( 'Parent Solution', 'sevenBridges' ),
			'search_items'               => esc_html__( 'Search Solution', 'sevenBridges' ),
			'popular_items'              => esc_html__( 'Popular Solution', 'sevenBridges' ),
			'separate_items_with_commas' => esc_html__( 'Separate Solution with commas', 'sevenBridges' ),
			'add_or_remove_items'        => esc_html__( 'Add or remove Solution', 'sevenBridges' ),
			'choose_from_most_used'      => esc_html__( 'Choose most used Solution', 'sevenBridges' ),
			'not_found'                  => esc_html__( 'No Solution found', 'sevenBridges' ),
			'name'                       => esc_html__( 'Solution', 'sevenBridges' ),
			'singular_name'              => esc_html__( 'Solution', 'sevenBridges' ),
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
		//'rewrite' => array('slug' => 'solutions'),
	];
	register_taxonomy( 'solutions', [ 'solution' ], $args );
}
add_action( 'init', 'solution_taxonomy_sevenBridges' );
