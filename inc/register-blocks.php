<?php

/**
 * Gutenberg category registration
 *
 * @package zota_dev_portal
 */
function zota_dev_portal_block_category( $categories, $post ) {
    return array_merge(
        $categories,
        array(
            array(
                'slug'  => 'zota_dev_portal-blocks',
                'title' => __( 'Webiz Blocks', 'zota_dev_portal' ),
            ),
        )
    );
}

add_filter( 'block_categories', 'zota_dev_portal_block_category', 10, 2 );



/**
 * Gutenberg blocks registration through ACF
 *
 * @package zota_dev_portal
 */

add_action( 'acf/init', function () {
    // check function exists
    if ( function_exists( 'acf_register_block' ) ) {

        // ACF Docs
        // https://www.advancedcustomfields.com/resources/acf_register_block_type/

        // register a info block
        acf_register_block( array(
            'name'            => 'example', //Slug - also used for template filename
            'title'           => __( 'Example Box' ),
            'description'     => __( 'Example Description' ),
            'render_callback' => 'zota_dev_portal_acf_block_render_callback',
            'category'        => 'zota_dev_portal-blocks',
            'icon'            => 'admin-comments', // change icon?
            'keywords'        => array( 'example', 'keyword' ), // Used for search
            'supports'        => array( 'align' => array( 'full' ), ),
            'mode'            => 'edit',
            'align'           => 'true', // Set to 'full' if it needs to be fullwidth
            'enqueue_style' => get_template_directory_uri() . '/template-parts/blocks/css/block-example.css',
        ) );
    }
} );

/*
 * General callback function
 *
 * @see https://www.advancedcustomfields.com/blog/acf-5-8-introducing-acf-blocks-for-gutenberg/
 */

function zota_dev_portal_acf_block_render_callback( $block ) {

    // convert name ("acf/testimonial") into path friendly slug ("testimonial")
    $slug = str_replace( 'acf/', '', $block[ 'name' ] );

    // include a template part from within the "template-parts/blocks" folder
    if ( file_exists( get_theme_file_path( "/template-parts/blocks/block-{$slug}.php" ) ) ) {
        include( get_theme_file_path( "/template-parts/blocks/block-{$slug}.php" ) );
    }
}