<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package zota_dev_portal
 */

 ?>
 <!doctype html>
 <html <?php language_attributes(); ?>>
 <head>
     <meta charset="<?php bloginfo( 'charset' ); ?>">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="profile" href="https://gmpg.org/xfn/11">
 
     <?php wp_head(); ?>
 </head>
 
 <body <?php body_class(); ?> >
 <?php wp_body_open(); ?>
 <div id="page" class="site">
     <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'zota' ); ?></a>
 
     <header id="masthead" class="site-header">
         <div class="container">
             <div class="header_wrapper">
                 <div class="site-branding">
                     <?php
                     if ( has_custom_logo() ) {
                         the_custom_logo();
                     }
                     ?>
                 </div><!-- .site-branding -->
 
                 <div id="navigation-wrapper" class="navigation-wrapper">
                     <nav id="site-navigation" class="main-navigation">
                         <div class="hamburger menu-toggle" aria-controls="primary-menu"
                                 aria-expanded="false">
                             <span></span>
                             <span></span>
                             <span></span>
                         </div>
                         <?php
                         // Just echo the main menu
                         if ( has_nav_menu( 'menu-1' ) ) {
 
                             wp_nav_menu( array(
                                 'theme_location' => 'menu-1',
                                 'container'      => false,
                                 'items_wrap'     => '<ul id="%1$s" class="%2$s" data-responsive-menu="drilldown">%3$s</ul>',
                                 'menu_class'     => 'megamenu-wrapper',
                                 'menu_id'        => 'primary-menu',
                             ) );
 
                         }
 
                         ?>
                     </nav><!-- #site-navigation -->
                     
                 </div>    
             </div>
         </div>
     </header><!-- #masthead -->
 
     <div id="content" class="site-content <?php the_field( 'page_class' ); ?>">
 