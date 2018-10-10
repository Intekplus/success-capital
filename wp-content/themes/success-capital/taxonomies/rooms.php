<?php
function property_room_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Nombre de pièces', 'Taxonomy General Name', 'intek-theme' ),
		'singular_name'              => _x( 'Nombre de pièces', 'Taxonomy Singular Name', 'intek-theme' ),
		'menu_name'                  => __( 'Nombre de pièces', 'intek-theme' ),
		'all_items'                  => __( 'All Items', 'intek-theme' ),
		'parent_item'                => __( 'Parent Item', 'intek-theme' ),
		'parent_item_colon'          => __( 'Parent Item:', 'intek-theme' ),
		'new_item_name'              => __( 'New Item Name', 'intek-theme' ),
		'add_new_item'               => __( 'Add New Item', 'intek-theme' ),
		'edit_item'                  => __( 'Edit Item', 'intek-theme' ),
		'update_item'                => __( 'Update Item', 'intek-theme' ),
		'view_item'                  => __( 'View Item', 'intek-theme' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'intek-theme' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'intek-theme' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'intek-theme' ),
		'popular_items'              => __( 'Popular Items', 'intek-theme' ),
		'search_items'               => __( 'Search Items', 'intek-theme' ),
		'not_found'                  => __( 'Not Found', 'intek-theme' ),
		'no_terms'                   => __( 'No items', 'intek-theme' ),
		'items_list'                 => __( 'Items list', 'intek-theme' ),
		'items_list_navigation'      => __( 'Items list navigation', 'intek-theme' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'show_in_rest'               => true,
	);
	register_taxonomy( 'room', array( 'property' ), $args );

}
add_action( 'init', 'property_room_taxonomy', 0 );