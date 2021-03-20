<?php

/*
Plugin Name: My Works
Author: Ola
Version: 1.0
*/

function cptui_register_my_cpts_my_work() {

	$labels = [
		"name" => __( "work", "theme-two" ),
		"singular_name" => __( "work", "theme-two" ),
	];

	$args = [
		"label" => __( "work", "theme-two" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "my-work", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail" ],
		"taxonomies" => [ "category" ],
	];

	register_post_type( "my-work", $args );
}

add_action( 'init', 'cptui_register_my_cpts_my_work' );
