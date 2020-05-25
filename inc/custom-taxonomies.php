<?php 
function cptui_register_my_taxes() {

/**
 * Taxonomy: genders.
 */

$labels = [
    "name" => __( "genders", "understrap" ),
    "singular_name" => __( "gender", "understrap" ),
];

$args = [
    "label" => __( "genders", "understrap" ),
    "labels" => $labels,
    "public" => true,
    "publicly_queryable" => true,
    "hierarchical" => true,
    "show_ui" => true,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "query_var" => true,
    "rewrite" => [ 'slug' => __('gender','kks'), 'with_front' => true,  'hierarchical' => true, ],
    "show_admin_column" => false,
    "show_in_rest" => true,
    "rest_base" => "gender",
    "rest_controller_class" => "WP_REST_Terms_Controller",
    "show_in_quick_edit" => false,
    ];
register_taxonomy( "gender", [ "cats" ], $args );

/**
 * Taxonomy: cities.
 */

$labels = [
    "name" => __( "cities", "understrap" ),
    "singular_name" => __( "city", "understrap" ),
];

$args = [
    "label" => __( "cities", "understrap" ),
    "labels" => $labels,
    "public" => true,
    "publicly_queryable" => true,
    "hierarchical" => true,
    "show_ui" => true,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "query_var" => true,
    "rewrite" => [ 'slug' => __('city','kks'), 'with_front' => true,  'hierarchical' => true, ],
    "show_admin_column" => false,
    "show_in_rest" => true,
    "rest_base" => "city",
    "rest_controller_class" => "WP_REST_Terms_Controller",
    "show_in_quick_edit" => false,
    ];
register_taxonomy( "city", [ "cats" ], $args );
}
add_action( 'init', 'cptui_register_my_taxes' );
