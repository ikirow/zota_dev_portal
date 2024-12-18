<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package zota_dev_portal
 */

get_header();
?>
    <div id="primary" class="content-area wrapper">
        <main id="main" class="site-main">

            <header class="page-header">
                <h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'zota_dev_portal' ); ?></h1>
            </header><!-- .page-header -->

            <div class="page-content">
                <p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'zota_dev_portal' ); ?></p>

                <?php
                get_search_form();

                ?>

            </div><!-- .page-content -->

        </main><!-- #main -->
    </div><!-- #primary -->


<?php
get_footer();
