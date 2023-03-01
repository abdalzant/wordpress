<?php
/**
 * Plugin Name: my-offers
 * Plugin URI:  https://wordpress.org
 * Description: Enables the WordPress classic editor and the old-style Edit Post screen with TinyMCE, Meta Boxes, etc. Supports the older plugins that extend this screen.
 * Version:     1.6.2
 * Author:      abdalzant
 * Text Domain: wpdocs_textdomain
 * Domain Path : /languages/
 */




function custom_load_dom(){
	load_plugin_textdomain( 'wpdocs_textdomain', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' );

}
add_action('init','custom_load_dom');
// Register Custom Post Type
function my_offers_post_type() {

	$labels = array(
		'name'                  => _x( 'offers', 'Post Type General Name', 'my_offers' ),
		'singular_name'         => _x( 'offer', 'Post Type Singular Name', 'my_offers' ),
		'menu_name'             => __( 'offers', 'my_offers' ),
		'name_admin_bar'        => __( 'offers', 'my_offers' ),
		'archives'              => __( 'offer Archives', 'my_offers' ),
		'attributes'            => __( 'offer Attributes', 'my_offers' ),
		'parent_item_colon'     => __( 'Parent offer:', 'my_offers' ),
		'all_items'             => __( 'All offers', 'my_offers' ),
		'add_new_item'          => __( 'Add New offer', 'my_offers' ),
		'add_new'               => __( 'Add New offer', 'my_offers' ),
		'new_item'              => __( 'New offer', 'my_offers' ),
		'edit_item'             => __( 'Edit offer', 'my_offers' ),
		'update_item'           => __( 'Update offer', 'my_offers' ),
		'view_item'             => __( 'View offer', 'my_offers' ),
		'view_items'            => __( 'View offers', 'my_offers' ),
		'search_items'          => __( 'Search offer', 'my_offers' ),
		'not_found'             => __( 'Not found', 'my_offers' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'my_offers' ),
		'featured_image'        => __( 'offer Image', 'my_offers' ),
		'set_featured_image'    => __( 'Set offer image', 'my_offers' ),
		'remove_featured_image' => __( 'Remove offer image', 'my_offers' ),
		'use_featured_image'    => __( 'Use as offer image', 'my_offers' ),
		'insert_into_item'      => __( 'Insert into item', 'my_offers' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'my_offers' ),
		'items_list'            => __( 'offers list', 'my_offers' ),
		'items_list_navigation' => __( 'offers list navigation', 'my_offers' ),
		'filter_items_list'     => __( 'Filter offers list', 'my_offers' ),
	);
	$args = array(
		'label'                 => __( 'offer', 'my_offers' ),
		'description'           => __( 'offer Description', 'my_offers' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-welcome-learn-more',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
		'show_in_rest'          => true,
	);
	register_post_type( 'offer', $args );

}
add_action( 'init', 'my_offers_post_type', 0 );

