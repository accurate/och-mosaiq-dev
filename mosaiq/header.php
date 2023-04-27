<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    
    <?php wp_head(); ?>
</head>




<body <?php body_class(); ?> <?php understrap_body_attributes(); ?> <?php if (ICL_LANGUAGE_CODE == 'fr') { echo 'id="fr"'; } ?> >
<?php do_action( 'wp_body_open' ); ?>




<div class="site" id="page">



<!-- DESKTOP NAV BEGINS -->
<div id="mosaiq-menu-wrapper">

    <div id="mosaiq-menu-utility">
        <?php do_action('wpml_add_language_selector'); ?>
        
    </div>

    <div id="mosaiq-menu-main">

        <h1 class="logo-wrapper">
            <?php
            if (ICL_LANGUAGE_CODE == 'en') :
            ?>
                <a href="<?php echo site_url(); ?>"><img class="mos-logo" src="<?php bloginfo('template_url'); ?>/images/mos-logo.svg" alt="Mosaïq"></a>
            <?php
            endif;
            ?>
            <?php
            if (ICL_LANGUAGE_CODE == 'fr') :
            ?>
                <a href="<?php echo site_url(); ?>/fr"><img class="mos-logo" src="<?php bloginfo('template_url'); ?>/images/mos-logo.svg" alt="Mosaïq"></a>
            <?php
            endif;
            ?>
        </h1>
            
        <?php
        wp_nav_menu(
            array(
                'menu' => 'main-menu',
                'theme_location' => 'primary'
            )
        )
        ?>

        <div id = "nav-reg"><a href="
        <?php    
            if (ICL_LANGUAGE_CODE == 'en'){
                echo "https://eepurl.com/hjqDor";
            } else if (ICL_LANGUAGE_CODE == 'fr'){
                echo "https://eepurl.com/hrtu31";
            }

            if (ICL_LANGUAGE_CODE == 'en'){
                $email_btn_desktop_text = 'Join&nbsp;email&nbsp;list';
            } else if (ICL_LANGUAGE_CODE == 'fr'){
                $email_btn_desktop_text = 'JOINDRE&nbsp;LA&nbsp;LISTE DE&nbsp;COURRIEL';
            }
        ?>
        " data-lity class="register-btn" ><?php echo $email_btn_desktop_text; ?></a></div>
        
    </div>

</div><!-- #mosaiq-menu-wrapper -->
<!-- DESKTOP NAV ENDS -->






<!-- MOBILE NAV BEGINS -->
<div id="mobile-menu">

    <div id="hamburger-row">

        <h1 class="logo-wrapper"><a href="<?php echo site_url(); ?>" id="mobile-logo"><img src="<?php bloginfo('template_url'); ?>/images/mos-logo.svg" alt="<?php echo __('Mosaiq Home', 'mosaiq'); ?>" /></a></h1>
        
        <div id="mobile-menu-rightside-wrapper">

            <?php do_action('wpml_add_language_selector'); ?>
    
            <?php
            if (ICL_LANGUAGE_CODE == 'en') :
            ?>
                <a class="register-btn"><?php _e('Join&nbsp;email&nbsp;list'); ?></a>
            <?php
            endif;
            ?>

            <?php
            if (ICL_LANGUAGE_CODE == 'fr') :
            ?>
                <a class="register-btn"><?php _e('JOINDRE&nbsp;LA&nbsp;LISTE DE&nbsp;COURRIEL'); ?></a>
            <?php
            endif;
            ?>

            <span class="menu-accessible-text"><?php _e('Menu', 'mosaiq'); ?></span>
            <a href="#" id="mobile-nav-toggle"><img src="<?php bloginfo('template_url'); ?>/images/28x17-icon-mobile-menu-toggle.png" alt="<?php echo __('Mobile Navigation', 'mosaiq'); ?>" /></a>
        
        </div>
    
    
    
    </div>


    <div id="mobile-nav-wrapper">
        <div id="mobile-nav">

            <?php
            wp_nav_menu(
                array(
                    'menu' => 'main-menu',
                    'theme_location' => 'primary',
                    'container' => false
                )
            );

           
            ?>

        </div>
    </div><!-- #mobile-nav-wrapper -->



</div><!-- #mobile-menu -->
<!-- MOBILE NAV ENDS -->
<div id="learn-more" style="background:#fff" class="lity-hide">
    <?php
        echo do_shortcode("[gravityform id='1' title='false' description='false' ajax='true' tabindex='49']"); 
    ?> 
</div>