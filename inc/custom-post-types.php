<?php
function cptui_register_my_cpts_katter() {

/**
 * Post Type: Katter.
 */

$labels = [
    "name" => __( "Katter", "understrap" ),
    "singular_name" => __( "Katt", "understrap" ),
    "menu_name" => __( "Katter", "understrap" ),
    "all_items" => __( "All Katter", "understrap" ),
    "add_new" => __( "Add new", "understrap" ),
    "add_new_item" => __( "Add new Katt", "understrap" ),
    "edit_item" => __( "Edit Katt", "understrap" ),
    "new_item" => __( "New Katt", "understrap" ),
    "view_item" => __( "View Katt", "understrap" ),
    "view_items" => __( "View Katter", "understrap" ),
    "search_items" => __( "Search Katter", "understrap" ),
    "not_found" => __( "No Katter found", "understrap" ),
    "not_found_in_trash" => __( "No Katter found in trash", "understrap" ),
    "parent" => __( "Parent Katt:", "understrap" ),
    "featured_image" => __( "Featured image for this Katt", "understrap" ),
    "set_featured_image" => __( "Set featured image for this Katt", "understrap" ),
    "remove_featured_image" => __( "Remove featured image for this Katt", "understrap" ),
    "use_featured_image" => __( "Use as featured image for this Katt", "understrap" ),
    "archives" => __( "Katt archives", "understrap" ),
    "insert_into_item" => __( "Insert into Katt", "understrap" ),
    "uploaded_to_this_item" => __( "Upload to this Katt", "understrap" ),
    "filter_items_list" => __( "Filter Katter list", "understrap" ),
    "items_list_navigation" => __( "Katter list navigation", "understrap" ),
    "items_list" => __( "Katter list", "understrap" ),
    "attributes" => __( "Katter attributes", "understrap" ),
    "name_admin_bar" => __( "Katt", "understrap" ),
    "item_published" => __( "Katt published", "understrap" ),
    "item_published_privately" => __( "Katt published privately.", "understrap" ),
    "item_reverted_to_draft" => __( "Katt reverted to draft.", "understrap" ),
    "item_scheduled" => __( "Katt scheduled", "understrap" ),
    "item_updated" => __( "Katt updated.", "understrap" ),
    "parent_item_colon" => __( "Parent Katt:", "understrap" ),
];

$args = [
    "label" => __( "Katter", "understrap" ),
    "labels" => $labels,
    "description" => "Lägg till nya katter.",
    "public" => true,
    "publicly_queryable" => true,
    "show_ui" => true,
    "show_in_rest" => true,
    "rest_base" => "",
    "rest_controller_class" => "WP_REST_Posts_Controller",
    "has_archive" => true,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "delete_with_user" => false,
    "exclude_from_search" => false,
    "capability_type" => "post",
    "map_meta_cap" => true,
    "hierarchical" => true,
    "rewrite" => [ "slug" => "katter", "with_front" => true ],
    "query_var" => true,
    "supports" => [ "title", "editor", "thumbnail", "custom-fields" ],
];

register_post_type( "katter", $args );
}

add_action( 'init', 'cptui_register_my_cpts_katter' );