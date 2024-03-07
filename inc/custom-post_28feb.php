<?php 

add_action('init', function() {
	register_post_type('Product', [
		'label' => __('Products', 'txtdomain'),
		'public' => true,
		'menu_position' => 5,
		'menu_icon' => 'dashicons-cloud',
		'supports' => ['title', 'editor', 'thumbnail', 'author', 'revisions', 'comments'],
		'show_in_rest' => true,
		'rewrite' => ['slug' => 'product'],
		'taxonomies' => ['product_taxonomy'],
		'labels' => [
			'singular_name' => __('Product', 'txtdomain'),
			'add_new_item' => __('Add new product', 'txtdomain'),
			'new_item' => __('New product', 'txtdomain'),
			'edit_item' => __('Edit Product', 'txtdomain'),
			'view_item' => __('View product', 'txtdomain'),
			'search_items' => __('Search Product', 'txtdomain'),
			'not_found' => __('No products found', 'txtdomain'),
			'not_found_in_trash' => __('No products found in trash', 'txtdomain'),
			'all_items' => __('All products', 'txtdomain'),
			'insert_into_item' => __('Insert into product', 'txtdomain')
		],		
	]);
 
	register_taxonomy('product_taxonomy', ['product'], [
		'label' => __('Product Category', 'txtdomain'),
		'hierarchical' => true,
		'rewrite' => ['slug' => 'product_taxonomy'],
		'show_admin_column' => true,
		'show_in_rest' => true,
		'labels' => [
			'singular_name' => __('Product Category', 'txtdomain'),
			'all_items' => __('All Categories', 'txtdomain'),
			'edit_item' => __('Add New Category', 'txtdomain'),
			'view_item' => __('View Category', 'txtdomain'),
			'update_item' => __('Update Category', 'txtdomain'),
			'add_new_item' => __('Add New Category', 'txtdomain'),
			'new_item_name' => __('New Category Name', 'txtdomain'),
			'search_items' => __('Search Category', 'txtdomain'),
			'parent_item' => __('Parent Category', 'txtdomain'),
			'parent_item_colon' => __('Parent Category:', 'txtdomain'),
			'not_found' => __('No Category found', 'txtdomain'),
		]
	]);
	register_taxonomy_for_object_type('product_taxonomy', 'product');

});

// function custom_post_type() {

// $labels = array(
//     'name'                => _x( 'Ready', 'Post Type General Name', 'text_domain' ),
//     'singular_name'       => _x( 'Ready', 'Post Type Singular Name', 'text_domain' ),
//     'menu_name'           => __( 'Ready', 'text_domain' ),
//     'parent_item_colon'   => __( 'Parent Ready:', 'text_domain' ),
//     'all_items'           => __( 'All Readys', 'text_domain' ),
//     'view_item'           => __( 'View Ready', 'text_domain' ),
//     'add_new_item'        => __( 'Add New Ready', 'text_domain' ),
//     'add_new'             => __( 'New Ready', 'text_domain' ),
//     'edit_item'           => __( 'Edit Ready', 'text_domain' ),
//     'update_item'         => __( 'Update Ready', 'text_domain' ),
//     'search_items'        => __( 'Search Readys', 'text_domain' ),
//     'not_found'           => __( 'No Readys found', 'text_domain' ),
//     'not_found_in_trash'  => __( 'No Readys found in Trash', 'text_domain' ),
// );
// $args = array(
//     'label'               => __( 'Ready', 'text_domain' ),
//     'description'         => __( 'Ready information pages', 'text_domain' ),
//     'labels'              => $labels,
//     'supports'            => array('title','editor','author','excerpt'),
//     'taxonomies'          => array( 'Ready_taxonomy', 'post_tag' ),
//     'hierarchical'        => false,
//     'public'              => true,
//     'menu_icon' 		  => 'dashicons-admin-generic',
//     'show_ui'             => true,
//     'show_in_menu'        => true,
//     'show_in_nav_menus'   => true,
//     'show_in_admin_bar'   => true,
//     'menu_position'       => 6,
//     'can_export'          => true,
//     'has_archive'         => true,
//     'exclude_from_search' => false,
//     'publicly_queryable'  => true,
//     'capability_type'     => 'page',
// );
// register_post_type( 'Ready', $args );
// }
// register_taxonomy('Ready_taxonomy', ['Ready'], [
// 		'label' => __('Ready Category', 'txtdomain'),
// 		'hierarchical' => true,
// 		'rewrite' => ['slug' => 'Ready_taxonomy'],
// 		'show_admin_column' => true,
// 		'show_in_rest' => true,
// 		'labels' => [
// 			'singular_name' => __('Ready Category', 'txtdomain'),
// 			'all_items' => __('All Categories', 'txtdomain'),
// 			'edit_item' => __('Add New Category', 'txtdomain'),
// 			'view_item' => __('View Category', 'txtdomain'),
// 			'update_item' => __('Update Category', 'txtdomain'),
// 			'add_new_item' => __('Add New Category', 'txtdomain'),
// 			'new_item_name' => __('New Category Name', 'txtdomain'),
// 			'search_items' => __('Search Category', 'txtdomain'),
// 			'parent_item' => __('Parent Category', 'txtdomain'),
// 			'parent_item_colon' => __('Parent Category:', 'txtdomain'),
// 			'not_found' => __('No Category found', 'txtdomain'),
// 		]
// 	]);
// 	register_taxonomy_for_object_type('Ready_taxonomy', 'Ready');
// add_action( 'init', 'custom_post_type' ); 