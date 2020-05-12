<?php 
function cptui_register_my_cpts_katter() {

/**
 * Post Type: katter.
 */

$labels = [
    "name" => __( "katter", "understrap" ),
    "singular_name" => __( "katt", "understrap" ),
    "menu_name" => __( "Katter", "understrap" ),
    "all_items" => __( "All katter", "understrap" ),
    "add_new" => __( "Add new", "understrap" ),
    "add_new_item" => __( "Add new katt", "understrap" ),
    "edit_item" => __( "Edit katt", "understrap" ),
    "new_item" => __( "New katt", "understrap" ),
    "view_item" => __( "View katt", "understrap" ),
    "view_items" => __( "View katter", "understrap" ),
    "search_items" => __( "Search katter", "understrap" ),
    "not_found" => __( "No katter found", "understrap" ),
    "not_found_in_trash" => __( "No katter found in trash", "understrap" ),
    "parent" => __( "Parent katt:", "understrap" ),
    "featured_image" => __( "Featured image for this katt", "understrap" ),
    "set_featured_image" => __( "Set featured image for this katt", "understrap" ),
    "remove_featured_image" => __( "Remove featured image for this katt", "understrap" ),
    "use_featured_image" => __( "Use as featured image for this katt", "understrap" ),
    "archives" => __( "katt archives", "understrap" ),
    "insert_into_item" => __( "Insert into katt", "understrap" ),
    "uploaded_to_this_item" => __( "Upload to this katt", "understrap" ),
    "filter_items_list" => __( "Filter katter list", "understrap" ),
    "items_list_navigation" => __( "katter list navigation", "understrap" ),
    "items_list" => __( "katter list", "understrap" ),
    "attributes" => __( "katter attributes", "understrap" ),
    "name_admin_bar" => __( "katt", "understrap" ),
    "item_published" => __( "katt published", "understrap" ),
    "item_published_privately" => __( "katt published privately.", "understrap" ),
    "item_reverted_to_draft" => __( "katt reverted to draft.", "understrap" ),
    "item_scheduled" => __( "katt scheduled", "understrap" ),
    "item_updated" => __( "katt updated.", "understrap" ),
    "parent_item_colon" => __( "Parent katt:", "understrap" ),
];

$args = [
    "label" => __( "katter", "understrap" ),
    "labels" => $labels,
    "description" => "",
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
    "hierarchical" => false,
    "rewrite" => [ "slug" => "katter", "with_front" => true ],
    "query_var" => true,
    "supports" => [ "title", "editor", "thumbnail", "custom-fields" ],
];

register_post_type( "katter", $args );
}

add_action( 'init', 'cptui_register_my_cpts_katter' );
