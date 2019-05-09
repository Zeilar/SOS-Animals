<?php

function cptui_register_my_taxes() {

/**
 * Taxonomy: Sex.
 */

$labels = array(
    "name" => __( "Sex", "sosa" ),
    "singular_name" => __( "Sex", "sosa" ),
);

$args = array(
    "label" => __( "Sex", "sosa" ),
    "labels" => $labels,
    "public" => true,
    "publicly_queryable" => true,
    "hierarchical" => true,
    "show_ui" => true,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "query_var" => true,
    "rewrite" => array( 'slug' => 'sex', 'with_front' => true, ),
    "show_admin_column" => false,
    "show_in_rest" => true,
    "rest_base" => "sex",
    "rest_controller_class" => "WP_REST_Terms_Controller",
    "show_in_quick_edit" => false,
    );
register_taxonomy( "sex", array( "sosa_dog" ), $args );
}
add_action( 'init', 'cptui_register_my_taxes' );
