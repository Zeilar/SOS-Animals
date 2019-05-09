<?php

function cptui_register_my_cpts() {

/**
 * Post Type: USPs.
 */

$labels = array(
    "name" => __( "USPs", "sosa" ),
    "singular_name" => __( "USP", "sosa" ),
);

$args = array(
    "label" => __( "USPs", "sosa" ),
    "labels" => $labels,
    "description" => "",
    "public" => true,
    "publicly_queryable" => true,
    "show_ui" => true,
    "delete_with_user" => false,
    "show_in_rest" => true,
    "rest_base" => "",
    "rest_controller_class" => "WP_REST_Posts_Controller",
    "has_archive" => false,
    "show_in_menu" => true,
    "show_in_nav_menus" => false,
    "exclude_from_search" => true,
    "capability_type" => "post",
    "map_meta_cap" => true,
    "hierarchical" => false,
    "rewrite" => array( "slug" => "sosa_usp", "with_front" => true ),
    "query_var" => true,
    "supports" => array( "title", "editor" ),
);

register_post_type( "sosa_usp", $args );

/**
 * Post Type: Dogs.
 */

$labels = array(
    "name" => __( "Dogs", "sosa" ),
    "singular_name" => __( "Dog", "sosa" ),
);

$args = array(
    "label" => __( "Dogs", "sosa" ),
    "labels" => $labels,
    "description" => "",
    "public" => true,
    "publicly_queryable" => true,
    "show_ui" => true,
    "delete_with_user" => false,
    "show_in_rest" => true,
    "rest_base" => "",
    "rest_controller_class" => "WP_REST_Posts_Controller",
    "has_archive" => "dogs",
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "exclude_from_search" => false,
    "capability_type" => "post",
    "map_meta_cap" => true,
    "hierarchical" => true,
    "rewrite" => array( "slug" => "dogs", "with_front" => true ),
    "query_var" => true,
    "supports" => array( "title", "editor" ),
    "taxonomies" => array( "category", "post_tag", "sex" ),
);

register_post_type( "sosa_dog", $args );

/**
 * Post Type: Contact forms.
 */

$labels = array(
    "name" => __( "Contact forms", "sosa" ),
    "singular_name" => __( "Contact form", "sosa" ),
);

$args = array(
    "label" => __( "Contact forms", "sosa" ),
    "labels" => $labels,
    "description" => "",
    "public" => true,
    "publicly_queryable" => true,
    "show_ui" => true,
    "delete_with_user" => false,
    "show_in_rest" => true,
    "rest_base" => "",
    "rest_controller_class" => "WP_REST_Posts_Controller",
    "has_archive" => false,
    "show_in_menu" => true,
    "show_in_nav_menus" => false,
    "exclude_from_search" => false,
    "capability_type" => "post",
    "map_meta_cap" => true,
    "hierarchical" => false,
    "rewrite" => array( "slug" => "sosa_contact", "with_front" => true ),
    "query_var" => true,
    "supports" => array( "title", "editor" ),
);

register_post_type( "sosa_contact", $args );

/**
 * Post Type: Success stories.
 */

$labels = array(
    "name" => __( "Success stories", "sosa" ),
    "singular_name" => __( "Success story", "sosa" ),
);

$args = array(
    "label" => __( "Success stories", "sosa" ),
    "labels" => $labels,
    "description" => "",
    "public" => true,
    "publicly_queryable" => true,
    "show_ui" => true,
    "delete_with_user" => false,
    "show_in_rest" => true,
    "rest_base" => "",
    "rest_controller_class" => "WP_REST_Posts_Controller",
    "has_archive" => false,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "exclude_from_search" => false,
    "capability_type" => "post",
    "map_meta_cap" => true,
    "hierarchical" => true,
    "rewrite" => array( "slug" => "sosa_ss", "with_front" => true ),
    "query_var" => true,
    "supports" => array( "title", "editor" ),
);

register_post_type( "sosa_ss", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );
