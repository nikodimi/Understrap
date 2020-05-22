<?php
function cptui_register_my_cpts() {

/**
 * Post Type: cats.
 */

$labels = [
    "name" => __( "cats", "understrap" ),
    "singular_name" => __( "cat", "understrap" ),
    "menu_name" => __( "My cats", "understrap" ),
    "all_items" => __( "All cats", "understrap" ),
    "add_new" => __( "Add new", "understrap" ),
    "add_new_item" => __( "Add new cat", "understrap" ),
    "edit_item" => __( "Edit cat", "understrap" ),
    "new_item" => __( "New cat", "understrap" ),
    "view_item" => __( "View cat", "understrap" ),
    "view_items" => __( "View cats", "understrap" ),
    "search_items" => __( "Search cats", "understrap" ),
    "not_found" => __( "No cats found", "understrap" ),
    "not_found_in_trash" => __( "No cats found in trash", "understrap" ),
    "parent" => __( "Parent cat:", "understrap" ),
    "featured_image" => __( "Featured image for this cat", "understrap" ),
    "set_featured_image" => __( "Set featured image for this cat", "understrap" ),
    "remove_featured_image" => __( "Remove featured image for this cat", "understrap" ),
    "use_featured_image" => __( "Use as featured image for this cat", "understrap" ),
    "archives" => __( "cat archives", "understrap" ),
    "insert_into_item" => __( "Insert into cat", "understrap" ),
    "uploaded_to_this_item" => __( "Upload to this cat", "understrap" ),
    "filter_items_list" => __( "Filter cats list", "understrap" ),
    "items_list_navigation" => __( "cats list navigation", "understrap" ),
    "items_list" => __( "cats list", "understrap" ),
    "attributes" => __( "cats attributes", "understrap" ),
    "name_admin_bar" => __( "cat", "understrap" ),
    "item_published" => __( "cat published", "understrap" ),
    "item_published_privately" => __( "cat published privately.", "understrap" ),
    "item_reverted_to_draft" => __( "cat reverted to draft.", "understrap" ),
    "item_scheduled" => __( "cat scheduled", "understrap" ),
    "item_updated" => __( "cat updated.", "understrap" ),
    "parent_item_colon" => __( "Parent cat:", "understrap" ),
];

$args = [
    "label" => __( "cats", "understrap" ),
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
    "rewrite" => [ "slug" => "cats", "with_front" => true ],
    "query_var" => true,
    "supports" => [ "title", "editor", "thumbnail" ],
];

register_post_type( "cats", $args );

/**
 * Post Type: faqs.
 */

$labels = [
    "name" => __( "faqs", "understrap" ),
    "singular_name" => __( "faq", "understrap" ),
    "menu_name" => __( "Faqs", "understrap" ),
    "all_items" => __( "All faqs", "understrap" ),
    "add_new" => __( "Add new", "understrap" ),
    "add_new_item" => __( "Add new faq", "understrap" ),
    "edit_item" => __( "Edit faq", "understrap" ),
    "new_item" => __( "New faq", "understrap" ),
    "view_item" => __( "View faq", "understrap" ),
    "view_items" => __( "View faqs", "understrap" ),
    "search_items" => __( "Search faqs", "understrap" ),
    "not_found" => __( "No faqs found", "understrap" ),
    "not_found_in_trash" => __( "No faqs found in trash", "understrap" ),
    "parent" => __( "Parent faq:", "understrap" ),
    "featured_image" => __( "Featured image for this faq", "understrap" ),
    "set_featured_image" => __( "Set featured image for this faq", "understrap" ),
    "remove_featured_image" => __( "Remove featured image for this faq", "understrap" ),
    "use_featured_image" => __( "Use as featured image for this faq", "understrap" ),
    "archives" => __( "faq archives", "understrap" ),
    "insert_into_item" => __( "Insert into faq", "understrap" ),
    "uploaded_to_this_item" => __( "Upload to this faq", "understrap" ),
    "filter_items_list" => __( "Filter faqs list", "understrap" ),
    "items_list_navigation" => __( "faqs list navigation", "understrap" ),
    "items_list" => __( "faqs list", "understrap" ),
    "attributes" => __( "faqs attributes", "understrap" ),
    "name_admin_bar" => __( "faq", "understrap" ),
    "item_published" => __( "faq published", "understrap" ),
    "item_published_privately" => __( "faq published privately.", "understrap" ),
    "item_reverted_to_draft" => __( "faq reverted to draft.", "understrap" ),
    "item_scheduled" => __( "faq scheduled", "understrap" ),
    "item_updated" => __( "faq updated.", "understrap" ),
    "parent_item_colon" => __( "Parent faq:", "understrap" ),
];

$args = [
    "label" => __( "faqs", "understrap" ),
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
    "rewrite" => [ "slug" => "faqs", "with_front" => true ],
    "query_var" => true,
    "supports" => [ "title", "editor" ],
];

register_post_type( "faqs", $args );

/**
 * Post Type: site infos.
 */

$labels = [
    "name" => __( "site infos", "understrap" ),
    "singular_name" => __( "site info", "understrap" ),
    "menu_name" => __( "Site infos", "understrap" ),
    "all_items" => __( "All site infos", "understrap" ),
    "add_new" => __( "Add new", "understrap" ),
    "add_new_item" => __( "Add new site info", "understrap" ),
    "edit_item" => __( "Edit site info", "understrap" ),
    "new_item" => __( "New site info", "understrap" ),
    "view_item" => __( "View site info", "understrap" ),
    "view_items" => __( "View site infos", "understrap" ),
    "search_items" => __( "Search site infos", "understrap" ),
    "not_found" => __( "No site infos found", "understrap" ),
    "not_found_in_trash" => __( "No site infos found in trash", "understrap" ),
    "parent" => __( "Parent site info:", "understrap" ),
    "featured_image" => __( "Featured image for this site info", "understrap" ),
    "set_featured_image" => __( "Set featured image for this site info", "understrap" ),
    "remove_featured_image" => __( "Remove featured image for this site info", "understrap" ),
    "use_featured_image" => __( "Use as featured image for this site info", "understrap" ),
    "archives" => __( "site info archives", "understrap" ),
    "insert_into_item" => __( "Insert into site info", "understrap" ),
    "uploaded_to_this_item" => __( "Upload to this site info", "understrap" ),
    "filter_items_list" => __( "Filter site infos list", "understrap" ),
    "items_list_navigation" => __( "site infos list navigation", "understrap" ),
    "items_list" => __( "site infos list", "understrap" ),
    "attributes" => __( "site infos attributes", "understrap" ),
    "name_admin_bar" => __( "site info", "understrap" ),
    "item_published" => __( "site info published", "understrap" ),
    "item_published_privately" => __( "site info published privately.", "understrap" ),
    "item_reverted_to_draft" => __( "site info reverted to draft.", "understrap" ),
    "item_scheduled" => __( "site info scheduled", "understrap" ),
    "item_updated" => __( "site info updated.", "understrap" ),
    "parent_item_colon" => __( "Parent site info:", "understrap" ),
];

$args = [
    "label" => __( "site infos", "understrap" ),
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
    "rewrite" => [ "slug" => "site_info", "with_front" => true ],
    "query_var" => true,
    "supports" => [ "title", "editor", "thumbnail" ],
];

register_post_type( "site_info", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );
