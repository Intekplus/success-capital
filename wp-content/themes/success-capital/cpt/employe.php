<?php
function employe_cpt() {

	$labels = array(
		'name'                  => _x( 'Employes', 'Post Type General Name', 'intek-theme' ),
		'singular_name'         => _x( 'Employe', 'Post Type Singular Name', 'intek-theme' ),
		'menu_name'             => __( 'Employes', 'intek-theme' ),
		'name_admin_bar'        => __( 'Employes', 'intek-theme' ),
		'archives'              => __( 'Archives de Employes', 'intek-theme' ),
		'attributes'            => __( 'Item Attributes', 'intek-theme' ),
		'parent_item_colon'     => __( 'Parent Item:', 'intek-theme' ),
		'all_items'             => __( 'All Items', 'intek-theme' ),
		'add_new_item'          => __( 'Add New Item', 'intek-theme' ),
		'add_new'               => __( 'Add New', 'intek-theme' ),
		'new_item'              => __( 'New Item', 'intek-theme' ),
		'edit_item'             => __( 'Edit Item', 'intek-theme' ),
		'update_item'           => __( 'Update Item', 'intek-theme' ),
		'view_item'             => __( 'View Item', 'intek-theme' ),
		'view_items'            => __( 'View Items', 'intek-theme' ),
		'search_items'          => __( 'Search Item', 'intek-theme' ),
		'not_found'             => __( 'Not found', 'intek-theme' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'intek-theme' ),
		'featured_image'        => __( 'Featured Image', 'intek-theme' ),
		'set_featured_image'    => __( 'Set featured image', 'intek-theme' ),
		'remove_featured_image' => __( 'Remove featured image', 'intek-theme' ),
		'use_featured_image'    => __( 'Use as featured image', 'intek-theme' ),
		'insert_into_item'      => __( 'Insert into item', 'intek-theme' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'intek-theme' ),
		'items_list'            => __( 'Items list', 'intek-theme' ),
		'items_list_navigation' => __( 'Items list navigation', 'intek-theme' ),
		'filter_items_list'     => __( 'Filter items list', 'intek-theme' ),
	);
	$args = array(
		'label'                 => __( 'Employe', 'intek-theme' ),
		'description'           => __( 'Employe', 'intek-theme' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'thumbnail' ),
		'taxonomies'            => array(),
		'hierarchical'          => true,
		'public'                => false,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 6,
		'menu_icon'             => 'dashicons-businessman',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
	);
	register_post_type( 'employe', $args );

}
add_action( 'init', 'employe_cpt', 0 );