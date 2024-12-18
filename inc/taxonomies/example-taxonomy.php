<?php
/**
 * Register all taxonomies here
 * @todo separate into different files
 *
 * @return void
 */

function register_my_taxes() {

    /**
     * Taxonomy: Examples.
     */

    $labels = array(
        "name"          => __( "Examples", "zota_dev_portal" ),
        "singular_name" => __( "Example", "zota_dev_portal" ),
    );

    $args = array(
        "label"                 => __( "Examples", "zota_dev_portal" ),
        "labels"                => $labels,
        "public"                => true,
        "publicly_queryable"    => false,
        "hierarchical"          => false,
        "show_ui"               => true,
        "show_in_menu"          => true,
        "show_in_nav_menus"     => false,
        "query_var"             => true,
        "rewrite"               => array( 'slug' => 'Example', 'with_front' => false, ),
        "show_admin_column"     => false,
        "show_in_rest"          => true,
        "rest_base"             => "Example",
        "rest_controller_class" => "WP_REST_Terms_Controller",
        "show_in_quick_edit"    => false,
    );
    register_taxonomy( "example", array( "casino" ), $args );

}

//add_action( 'init', 'register_my_taxes' );

