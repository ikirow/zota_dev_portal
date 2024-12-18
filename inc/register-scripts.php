<?php

/**
 * Register/Deregister main styles and scripts
 * Make sure the priority is low enough to avoid conflicts with plugins
 *
 * filemtime() can be used for dynamic versioning
 *
 * @since  1.0
 * @return void
 */

//Enable if using google fonts or need other prefetch
//add_action( 'wp_head', 'prefetch_resources' );
function prefetch_resources() {
    ?>
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="anonymous">
    <?php
}



add_action( 'wp_enqueue_scripts', 'zota_dev_portal_scripts' );
function zota_dev_portal_scripts() {

    wp_enqueue_style( 'zota_dev_portal-style', get_template_directory_uri() . '/assets/css/site.css', array(), filemtime(
        get_template_directory
        () .
        '/assets/css/site.css' ) );
//    wp_style_add_data( 'zota_dev_portal-style', 'rtl', 'replace' );

    wp_enqueue_script( 'zota_dev_portal-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), '20151215', true );
    wp_enqueue_script( 'zota_dev_portal-fixed_header', get_template_directory_uri() . '/assets/js/fixed_header.js', array(), '20151215', true );


    wp_enqueue_script( 'zota_dev_portal-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(),
        '20151215',
        true );

    wp_enqueue_script( 'gsap', get_template_directory_uri() . '/assets/js/gsap.min.js', array( 'jquery' ));
    wp_enqueue_script( 'gsap_scrolltrigger', get_template_directory_uri() . '/assets/js/ScrollTrigger.min.js', array( 'jquery' ));

    wp_enqueue_script(
        'zota_dev_portal-app',
        get_template_directory_uri() . '/assets/js/app.js',
        array( 'jquery','gsap','gsap_scrolltrigger' ),
        filemtime(
            get_template_directory
            () .
            '/assets/js/app.js' ), true
    );

    $getLangCode = apply_filters( 'wpml_current_language', NULL );

    // Localize the script with new data
    $language_code = array(
        'lang' => $getLangCode,
    );
    wp_localize_script( 'zota_dev_portal-app', 'localize', $language_code );

    // @todo add conditionals to limit the js load

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}



/*
 * Add styling to visualise blocks in the admin
 */

add_action( 'enqueue_block_editor_assets', 'gutenberg_assets' );
function gutenberg_assets() {
    // Load the theme styles within Gutenberg.
    wp_enqueue_style( 'gutenberg-styles', get_template_directory_uri() . '/assets/css/site-admin.css', false, filemtime( get_template_directory() . '/assets/css/site-admin.css') );
    /*
    wp_enqueue_script( 'guten-script',
        get_template_directory_uri() . '/assets/js/guten.js', array( 'wp-blocks'), filemtime( get_template_directory() . '/assets/js/guten.js')
    );
    */
}

