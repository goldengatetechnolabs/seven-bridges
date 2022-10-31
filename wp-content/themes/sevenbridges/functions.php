<?php
require_once get_template_directory() . '/inc/custom-shortcode.php';
require_once "inc/wp-bootstrap-mega-navwalker.php";

// Register Theme Features
function seven_bridges_theme_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	// This theme uses wp_nav_menu() in one location.
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'seven_bridges_theme_setup' );

//Excerpt Length
function custom_excerpt_length( $length ) {
	return 13;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

/**
 * Enqueue scripts and styles.
 */
 function sevenBridges_scripts()

 {
    
 	wp_enqueue_style('sevenBridges-style', get_template_directory_uri() . "/asset/css/style.css",  false, '1.1', 'all');
 	wp_enqueue_style('sevenBridges-custom', get_template_directory_uri() . "/asset/css/custom.css", false, '1.1', 'all');

	 



 	wp_enqueue_script('sevenBridges-jsbundle', get_template_directory_uri() . '/asset/js/jsbundle.min.js', array(),"1.1", true);
 	wp_enqueue_script('sevenBridges-main', get_template_directory_uri() . '/asset/js/main.js', array("jquery"), "1.1", true);
 	if (is_singular() && comments_open() && get_option('thread_comments')) {

 		wp_enqueue_script('comment-reply');

 	}

 }

 add_action('wp_enqueue_scripts', 'sevenBridges_scripts');

  //manifest file
  add_action( 'wp_head', 'inc_manifest_link' );
  // Creates the link tag
  function inc_manifest_link() {   
		  echo '<link rel="manifest" href="'.get_template_directory_uri().'/asset/images/favicon/manifest.json">';
  }

/**
 * custom post types and Taxanomy
 */
  require get_template_directory() . '/inc/post-type/by-challenge.php';
  require get_template_directory() . '/inc/post-type/by-segment.php';
  require get_template_directory() . '/inc/post-type/testimonial.php';
  require get_template_directory() . '/inc/post-type/case-studies.php';
  require get_template_directory() . '/inc/post-type/publication.php';
  //require get_template_directory() . '/inc/post-type/solutions.php';
//  require get_template_directory() . '/inc/post-type/resources.php';
  require get_template_directory() . '/inc/post-type/leadership.php';
  require get_template_directory() . '/inc/post-type/insights.php';
  require get_template_directory() . '/inc/post-type/blog.php';
  require get_template_directory() . '/inc/post-type/in-the-news.php';
//  require get_template_directory() . '/inc/post-type/event.php';

  require get_template_directory() . '/inc/taxonomy/blog.php';
//  require get_template_directory() . '/inc/taxonomy/event.php';
  //require get_template_directory() . '/inc/taxonomy/solution.php';
  require get_template_directory() . '/inc/taxonomy/publication.php';
//  require get_template_directory() . '/inc/taxonomy/awards-year.php';
//  require get_template_directory() . '/inc/taxonomy/resources-download.php';



/**
 * custom Pagination
 */
//require get_template_directory() . '/inc/pagination.php';

/**
 * custom Breadcrumbs
 */
//  require get_template_directory() . '/inc/breadcrumbs.php';

// sevenBridges Widgets
function sevenBridges_widgets_init()
{

	register_sidebar(

		array(
			'name'          => esc_html__('Header Menu', 'sevenBridges'),
			'id'            => 'header-menu',
			'description'   => '',
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '',
			'after_title'   => '',
		)
	);

	register_sidebar(
        array(
            'name'          => esc_html__('Header Button', 'sevenBridges'),
            'id'            => 'header-button',
            'description'   => '',
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '',
            'after_title'   => '',
        )
    );

    register_sidebar(
        array(
            'name'          => esc_html__('Footer Platform Menu', 'sevenBridges'),
            'id'            => 'footer-platform-menu',
            'description'   => '',
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '',
            'after_title'   => '',
        )
    );
	

	register_sidebar(
        array(
            'name'          => esc_html__('Footer Solutions Menu', 'sevenBridges'),
            'id'            => 'footer-solutions-menu',
            'description'   => '',
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '',
            'after_title'   => '',
        )
    );

    register_sidebar(
        array(
            'name'          => esc_html__('Footer Why Menu', 'sevenBridges'),
            'id'            => 'footer-why-menu',
            'description'   => '',
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '',
            'after_title'   => '',
        )
    );

	register_sidebar(
        array(
            'name'          => esc_html__('Footer Insights Menu', 'sevenBridges'),
            'id'            => 'footer-insights-menu',
            'description'   => '',
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '',
            'after_title'   => '',
        )
    );

	register_sidebar(
        array(
            'name'          => esc_html__('Footer Company Menu', 'sevenBridges'),
            'id'            => 'footer-company-menu',
            'description'   => '',
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '',
            'after_title'   => '',
        )
    );

	register_sidebar(
        array(
            'name'          => esc_html__('Footer Career Menu', 'sevenBridges'),
            'id'            => 'footer-career-menu',
            'description'   => '',
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '',
            'after_title'   => '',
        )
    );


	register_sidebar(
        array(
            'name'          => esc_html__('Footer Links', 'sevenBridges'),
            'id'            => 'footer-links',
            'description'   => '',
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '',
            'after_title'   => '',
        )
    );

	register_sidebar(
        array(
            'name'          => esc_html__('Footer Social Media Links', 'sevenBridges'),
            'id'            => 'footer-social-media-links',
            'description'   => '',
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '',
            'after_title'   => '',
        )
    );

	register_sidebar(
        array(
            'name'          => esc_html__('Footer Links', 'sevenBridges'),
            'id'            => 'footer-links',
            'description'   => '',
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '',
            'after_title'   => '',
        )
    );

    register_nav_menus( array(

        'mega_menu' => __( 'Mega Menu', 'sevenBridges' ),
    
    ) );

}

 add_action('widgets_init', 'sevenBridges_widgets_init');

 function widgets_init()
{

    $location = 'mega_menu';
    $css_class = 'mega-menu-parent';
    $locations = get_nav_menu_locations();
    if ( isset( $locations[ $location ] ) ) {
        $menu = get_term( $locations[ $location ], 'nav_menu' );
        if ( $items = wp_get_nav_menu_items( $menu->name ) ) {
            foreach ( $items as $item ) {
                if ( in_array( $css_class, $item->classes ) ) {
                    register_sidebar( array(
                        'id'   => 'mega-menu-item-col-1' . $item->ID,
                        'description' => 'Mega Menu items',
                        'name' => $item->title . ' - Mega Menu Column 1',
                         
						
                    ));
                    register_sidebar( array(
                        'id'   => 'mega-menu-item-col-2' . $item->ID,
                        'description' => 'Mega Menu items',
                        'name' => $item->title . ' - Mega Menu Column 2',
						
						
                    ));
                    register_sidebar( array(
                        'id'   => 'mega-menu-item-col-3' . $item->ID,
                        'description' => 'Mega Menu items',
                        'name' => $item->title . ' - Mega Menu Column 3',
						 
						
                    ));
                }
            }
        }
    }
    
}
add_action('widgets_init', 'widgets_init');

// add_action('init', 'custom_taxonomy_flush_rewrite');
// function custom_taxonomy_flush_rewrite() {
//     global $wp_rewrite;
//     $wp_rewrite->flush_rules();
// }


// add_filter( 'nav_menu_link_attributes', 'bootstrap5_dropdown_fix' );
// function bootstrap5_dropdown_fix( $atts ) {
//      if ( array_key_exists( 'data-toggle', $atts ) ) {
//          unset( $atts['data-toggle'] );
//          $atts['data-bs-toggle'] = 'dropdown';
//      }
//      return $atts;
// }



// register_nav_menus( array(

//     'primary' => __( 'Primary Menu', 'sevenBridges' ),

// ) );

// Option Page
if ( function_exists( 'acf_add_options_page' ) ) {

	acf_add_options_page( array(
		'page_title'	=> 'Leadership Custom Field',
		'menu_title'	=> 'Leadership Custom Field',
		'menu_slug' 	=> 'Leadership Custom Field',
		'capability'	=> 'edit_posts',
		'redirect'		=> false,
		'parent_slug'    => 'edit.php?post_type=leadership',
	));

    // acf_add_options_page( array(
	// 	'page_title'	=> 'Event Custom Field',
	// 	'menu_title'	=> 'Event Custom Field',
	// 	'menu_slug' 	=> 'Event Custom Field',
	// 	'capability'	=> 'edit_posts',
	// 	'redirect'		=> false,
	// 	'parent_slug'    => 'edit.php?post_type=events',
	// ));

	// acf_add_options_page( array(
	// 	'page_title'	=> 'Resources Custom Field',
	// 	'menu_title'	=> 'Resources Custom Field',
	// 	'menu_slug' 	=> 'Resources Custom Field',
	// 	'capability'	=> 'edit_posts',
	// 	'redirect'		=> false,
	// 	'parent_slug'    => 'edit.php?post_type=resources',
	// ));

	// acf_add_options_page( array(
	// 	'page_title'	=> 'Insight Custom Field',
	// 	'menu_title'	=> 'Insight Custom Field',
	// 	'menu_slug' 	=> 'Insight Custom Field',
	// 	'capability'	=> 'edit_posts',
	// 	'redirect'		=> false,
	// 	'parent_slug'    => 'edit.php?post_type=insights',
	// ));

	// acf_add_options_page( array(
	// 	'page_title'	=> 'Media Custom Field',
	// 	'menu_title'	=> 'Media Custom Field',
	// 	'menu_slug' 	=> 'Media Custom Field',
	// 	'capability'	=> 'edit_posts',
	// 	'redirect'		=> false,
	// 	'parent_slug'    => 'edit.php?post_type=media',
	// ));


	// acf_add_options_page( array(
	// 	'page_title'	=> 'Blog Custom Field',
	// 	'menu_title'	=> 'Blog Custom Field',
	// 	'menu_slug' 	=> 'Blog Custom Field',
	// 	'capability'	=> 'edit_posts',
	// 	'redirect'		=> false,
	// 	'parent_slug'    => 'edit.php?post_type=blogs',
	// ));

}
add_action('acf/init', 'my_acf_op_init');





function my_acf_op_init() {

    // Check function exists.
    if( function_exists('acf_add_options_page') ) {

        // Register options page.
        $option_page = acf_add_options_page(array(
            'page_title'    => __('Theme General Settings'),
            'menu_title'    => __('Theme Settings'),
            'menu_slug'     => 'theme-general-settings',
            'capability'    => 'edit_posts',
            'redirect'      => false
        ));
        acf_add_options_sub_page(array(
            'page_title' 	=> 'Theme Header Settings',
            'menu_title'	=> 'Header',
            'parent_slug'	=> 'theme-general-settings',
        ));
        
        acf_add_options_sub_page(array(
            'page_title' 	=> 'Theme Footer Settings',
            'menu_title'	=> 'Footer',
            'parent_slug'	=> 'theme-general-settings',
        ));
		
    }
}

//search 
// function template_chooser( $template ){
//     global $wp_query;   
      
//     if( $wp_query->is_search ){
//         return locate_template('search.php');  
//     }   
//     return $template;   
// }
// add_filter( 'template_include', 'template_chooser' );

//Pagination
// if ( ! function_exists( 'post_pagination' ) ) :
// 	function post_pagination() {
// 	  global $wp_query;
// 	  $pager = 999999999; // need an unlikely integer
  
// 		 echo paginate_links( array(
// 			  'base' => str_replace( $pager, '%#%', esc_url( get_pagenum_link( $pager ) ) ),
// 			  'format' => '?paged=%#%',
// 			  'current' => max( 1, get_query_var('paged') ),
// 			  'total' => $wp_query->max_num_pages
// 		 ) );
// 	}
//  endif;


// add_filter('post_type_link', 'solutions_permalink_structure', 10, 4);
// function solutions_permalink_structure($post_link, $post, $leavename, $sample) {
//     if (false !== strpos($post_link, '%solutions%')) {
//         $solutions_type_term = get_the_terms($post->ID, 'solutions');
//         if (!empty($solutions_type_term))
//             $post_link = str_replace('%solutions%', array_pop($solutions_type_term)->
//             slug, $post_link);
//         else
//             $post_link = str_replace('%solutions%', 'uncategorized', $post_link);
//     }
//     return $post_link;
// }

