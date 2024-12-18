<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package zota_dev_portal
 */

?>
<!-- 
<div class="container">
    <div class="wp-block-group mobile_only is-style-sectionequal">
        <div class="wp-block-group__inner-container">
            <p><?php the_field( 'footer_text', 'option' ); ?></p>
            <div class="wp-block-button is-style-smallbtn">
                <a class="wp-block-button__link" href="<?php the_field( 'footer_link', 'option' ); ?>"><?php _e('Request API Access','zota_dev_portal');?></a>
            </div>
        </div>
    </div>
</div> -->

</div><!-- #content -->

<footer id="colophon" class="site-footer">

    <div class="wrapper">
       <section class="footer-top">
        <div class="site-branding">
                <?php
                if ( has_custom_logo() ) {
                    the_custom_logo();
                }
                ?>

            </div><!-- .site-branding -->
            <div class="subscribe-form">
                <?php echo do_shortcode( '[contact-form-7 id="1795" title="Subscribe form"]' ); ?>
                <div class="social">
                <ul>
                    <?php if ( have_rows( 'social_links', 'option' ) ) : ?>
                        <?php while ( have_rows( 'social_links', 'option' ) ) : the_row(); ?>
                            <li><a class="github" href="<?php the_sub_field( 'github' ); ?>" target="_blank"></a></li>
                            <li><a class="codecov" href="<?php the_sub_field( 'codecov' ); ?>" target="_blank"></a></li>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </ul>
            </div>
            </div>
       </section>

        <div class="footer_columns">

            <nav class="footer-navigation">
               <div  class="column">
                <h2>
                    <?php echo __('Pages','dev_portal');?>
                </h2>
               <?php
                wp_nav_menu( array(
                    'theme_location' => 'footer-1',
                ) );
                ?>
               </div>
                <div class="column">
               
               <?php
               if ( is_active_sidebar( 'footer-widget' ) ) {
                   dynamic_sidebar( 'footer-widget' );
               }
               ?>
           </div>

           <!-- <div class="column">
               <?php
                   if ( is_active_sidebar( 'footer-widget-1' ) ) {
                       dynamic_sidebar( 'footer-widget-1' );
                   }
               ?>
           </div> -->

           <div class="column">
               <?php
                   if ( is_active_sidebar( 'footer-widget-2' ) ) {
                       dynamic_sidebar( 'footer-widget-2' );
                   }
               ?>
           </div>

            </nav><!-- #site-navigation -->


            

            
        </div>

        <div class="socket">
            
            <div class="site-info">
                <?php
                /* translators: 1: Theme name, 2: Theme author. */
                printf( esc_html__( ' %1$s %2$s All Rights Reserved. ', 'zota_dev_portal' ), ' Zota Technology Ltd.', date("Y") );
                ?>
            </div><!-- .site-info -->
        </div>
    </div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<!-- Facebook Pixel Code -->
<script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '440877279815344');
    fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
               src="https://www.facebook.com/tr?id=440877279815344&ev=PageView&noscript=1"
    /></noscript>
<!-- End Facebook Pixel Code -->

</body>
</html>
