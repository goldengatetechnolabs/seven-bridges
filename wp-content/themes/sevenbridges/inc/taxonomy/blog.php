<?php
function blog_taxonomy_sevenBridges() {
	$args = [
		'label'  => esc_html__( 'Blogs', 'sevenBridges' ),
		'labels' => [
			'menu_name'                  => esc_html__( 'Blogs', 'sevenBridges' ),
			'all_items'                  => esc_html__( 'All Blogs', 'sevenBridges' ),
			'edit_item'                  => esc_html__( 'Edit Blog', 'sevenBridges' ),
			'view_item'                  => esc_html__( 'View Blog', 'sevenBridges' ),
			'update_item'                => esc_html__( 'Update Blog', 'sevenBridges' ),
			'add_new_item'               => esc_html__( 'Add new Blog', 'sevenBridges' ),
			'new_item'                   => esc_html__( 'New Blog', 'sevenBridges' ),
			'parent_item'                => esc_html__( 'Parent Blog', 'sevenBridges' ),
			'parent_item_colon'          => esc_html__( 'Parent Blog', 'sevenBridges' ),
			'search_items'               => esc_html__( 'Search Blogs', 'sevenBridges' ),
			'popular_items'              => esc_html__( 'Popular Blogs', 'sevenBridges' ),
			'separate_items_with_commas' => esc_html__( 'Separate Blogs with commas', 'sevenBridges' ),
			'add_or_remove_items'        => esc_html__( 'Add or remove Blogs', 'sevenBridges' ),
			'choose_from_most_used'      => esc_html__( 'Choose most used Blogs', 'sevenBridges' ),
			'not_found'                  => esc_html__( 'No Blogs found', 'sevenBridges' ),
			'name'                       => esc_html__( 'Blogs', 'sevenBridges' ),
			'singular_name'              => esc_html__( 'Blog', 'sevenBridges' ),
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
	register_taxonomy( 'blog', [ 'blogs' ], $args );
}
add_action( 'init', 'blog_taxonomy_sevenBridges' );
