<?php
/**
 * Register theme options page here
 *
 * @package zota_dev_portal
 */

function register_zota_dev_portal_options_pages() {

    // Check function exists.
    if ( !function_exists( 'acf_add_options_page' ) )
        return;

    // register options page.
    $option_page = acf_add_options_page( array(
        'page_title'  => __( 'Theme General Settings', 'zota_dev_portal' ),
        'menu_title'  => __( 'Zota Settings', 'zota_dev_portal' ),
        'menu_slug'   => 'theme-general-settings',
        //'parent_slug' => 'options-general.php',
        'capability'  => 'edit_posts',
        'redirect'    => false,
        'update_button' => __( 'Save', 'zota_dev_portal' ),
        // 'autoload' => true,
    ) );
}

// Hook into acf initialization.
add_action( 'acf/init', 'register_zota_dev_portal_options_pages' );