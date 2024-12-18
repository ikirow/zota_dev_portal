<?php
/**
 * Register custom post type
 * @return void
 */

function register_my_cpts_example() {

    /**
     * Post Type: Examples.
     */

    $labels = array(
        "name"               => __( "Examples", "zota_dev_portal" ),
        "singular_name"      => __( "Example", "zota_dev_portal" ),
        "menu_name"          => __( "Examples", "zota_dev_portal" ),
        "all_items"          => __( "All Examples", "zota_dev_portal" ),
        "add_new"            => __( "Add New Example", "zota_dev_portal" ),
        "add_new_item"       => __( "Add New Example", "zota_dev_portal" ),
        "edit_item"          => __( "Edit Example", "zota_dev_portal" ),
        "new_item"           => __( "New Example", "zota_dev_portal" ),
        "view_item"          => __( "View Example", "zota_dev_portal" ),
        "view_items"         => __( "View Examples", "zota_dev_portal" ),
        "search_items"       => __( "Search Example", "zota_dev_portal" ),
        "not_found"          => __( "No Example Found", "zota_dev_portal" ),
        "not_found_in_trash" => __( "No Examples Fount in Trash", "zota_dev_portal" ),
        "parent_item_colon"  => __( "Parent Example", "zota_dev_portal" ),
        "featured_image"     => __( "Example Image", "zota_dev_portal" ),
        "parent_item_colon"  => __( "Parent Example", "zota_dev_portal" ),
    );

    // Set default slug
    $slug = 'example';

    $args = array(
        "label"                 => __( "Examples", "zota_dev_portal" ),
        "labels"                => $labels,
        "description"           => "",
        "public"                => true,
        "publicly_queryable"    => true,
        "show_ui"               => true,
        "delete_with_user"      => false,
        "show_in_rest"          => true,
        "rest_base"             => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "has_archive"           => false,
        "show_in_menu"          => true,
        "show_in_nav_menus"     => true,
        "exclude_from_search"   => false,
        "capability_type"       => "post",
        "map_meta_cap"          => true,
        "hierarchical"          => false,
        "rewrite"               => array( "slug" => $slug, "with_front" => true ),
        "query_var"             => true,
        "menu_position"         => 4,
        "menu_icon"             => "dashicons-admin-site-alt3",
        "supports"              => array( "title", "editor", "thumbnail", "excerpt" ),
//        'template'              => array(
//            array( 'acf/current-specific-post-box', array() ),
//            array( 'core/heading', array(
//                'placeholder' => 'Add Author...',
//            ) ),
//        ),
        // TO disable removing of the initial blocks
//        'template_lock'         => 'all',
    );

    register_post_type( "example", $args );
}

//add_action( 'init', 'register_my_cpts_example' );


