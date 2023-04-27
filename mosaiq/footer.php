<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

 <!-- begin FOOTER -->












	<!--------------------------------------------- begin FOOTER ------------------------------------------------>
    <?php
    $args = array(
        'p'         => 1391,
        'post_type' => 'any'
    );
    
    $query = new WP_Query( $args );

    if ( $query->have_posts() ) :
        while ( $query->have_posts() ) :
            $query->the_post();
            
            
            if( have_rows('footer_content') ):
                while( have_rows('footer_content') ): the_row();
            ?>


                


            <div id="site-footer" class="section-wrapper bgcolor-grey">
                <div class="container">
                    <div class="row">
                    
                        <div class="col-md-4">


                            <a href="<?php echo get_sub_field('logo_url'); ?>"><img class="arriv-logo" src="<?php echo get_sub_field('logo'); ?>" alt="Logo" /></a>
                            <br />
                            <p><?php echo get_sub_field('subtitle'); ?></p>
                            
                            
                            <!-- <img class="arriv-logo" src="<?php bloginfo('template_url'); ?>/images/arriv-logo-fpo.svg" alt="Arriv" /> -->
                        </div>
                    
                        <div class="col-md-4">
                            <?php

                            wp_nav_menu(
                                array(
                                    'menu' => 'main-menu',
                                    'theme_location' => 'primary'
                                )
                            );

                            ?>
                        </div>
                    
                        <div class="col-md-4">

                            <div class="follow-us">
    
                                <p><?php echo get_sub_field('social_text'); ?></p>

                                <div class="inner">
                                    <a href="<?php echo get_sub_field('social_facebook_url'); ?>" target="_blank"><img class="logo" src="<?php bloginfo('template_url'); ?>/images/icon-facebook.svg" alt="Facebook" /></a>
                                    <a href="<?php echo get_sub_field('social_instagram_url'); ?>" target="_blank"><img class="logo" src="<?php bloginfo('template_url'); ?>/images/icon-instagram.svg" alt="Instagram" /></a>
                                    <a href="<?php echo get_sub_field('social_twitter_url'); ?>" target="_blank"><img class="logo" src="<?php bloginfo('template_url'); ?>/images/icon-twitter.svg" alt="Twitter" /></a>
                                </div>

                            </div>

                            <div class="footer-contact-details">
                                <?php echo get_sub_field('contact_details'); ?>
                            </div>
                           
                        </div>
                    
                    </div>
                </div>
            </div>


            <?php if (ICL_LANGUAGE_CODE == 'en'): ?>
                <div id="footer-privacy"><a href="<?php bloginfo('url'); ?>/privacy-policy/">Privacy Policy</a></div>
            <?php endif; ?>

            <?php if (ICL_LANGUAGE_CODE == 'fr'): ?>
                <div id="footer-privacy"><a href="<?php bloginfo('url'); ?>/fr/protection-de-la-vie-privee/">Protection de la vie privée</a></div>
            <?php endif; ?>


            <?php
                endwhile; // have_rows('footer_content')
            endif; // have_rows('footer_content')



    endwhile; // have_posts;
endif; // have_posts;
wp_reset_query();
?>  
<!---------------------------------------------- end FOOTER ------------------------------------------------->








</div><!-- #page-wrapper -->



</div><!-- #page - opened in header.php -->




<?php
if ( is_user_logged_in() == false) :
?>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-177825332-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-177825332-1');
</script>

<?php endif; ?>


<!-- BEGIN ADDTOANY.COM - Link sharing -->
<script async src="https://static.addtoany.com/menu/page.js"></script>
<!-- END ADDTOANY.COM - Link sharing -->



<script>
jQuery(window).scroll(function(e){ 
    var $el = jQuery('#nav-reg'); 
    var isPositionFixed = ($el.css('position') == 'fixed');
    if (jQuery(this).scrollTop() > 200 && !isPositionFixed){ 
        $el.css({'position': 'fixed', 'top': '20px', 'right' : '60px', 'z-index':'100'}); 
    }
    if (jQuery(this).scrollTop() < 200 && isPositionFixed){
        $el.css({'position': 'static', 'top': '0px'}); 
    } 
});
</script>

<?php wp_footer(); ?>

</body>

</html>