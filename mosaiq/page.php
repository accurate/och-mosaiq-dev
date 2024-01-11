<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
$page_id = $post->ID;


?>
<div id="page-wrapper">
<?php
//no header for about arriv
if (!in_array($page_id , array(161, 421))) {
?>
    <!-- begin SLIDESHOW BANNER (STATIC VERSION) -->
    <div id="homeblock-topbanner" class="not-home section-wrapper">
        
        <div id="homeslider-overlay">
            <div class="tagline-wrapper">
                <div class="padder" role="contentinfo" aria-label="Primary">
                    <?php
                    while ( have_posts() ):
                        the_post();
                        ?>

                        <?php
                        // For About Arriv page only, show the logo:
                        
                        if ($page_id == 161) { // English page ID for 'About Arriv'
                        ?>
                            <img class="arriv-logo" src="<?php bloginfo('template_url'); ?>/images/arriv-logo-en-white.svg" />
                        <?php
                        }
                        if ($page_id == 421) { // French page ID for 'About Arriv'
                        ?>
                            <img class="arriv-logo" src="<?php bloginfo('template_url'); ?>/images/arriv-logo-fr-white.svg" />
                        <?php
                        }
                        ?>
                        
                        <?php
                        $bannertext_group = get_field('bannertext');
                        if( $bannertext_group ) {
                            echo $bannertext_group['title'];
                        }
                        ?>

                        <?php
                        $bannertext_subtitle = $bannertext_group['subtitle'];
                        if ($bannertext_subtitle) {
                        ?>
                            <div class="rentalnote-and-sliderbuttons">
                                <p class="renting" role="heading" aria-level="1"><?php echo $bannertext_group['subtitle']; ?></p>
                            </div>
                        <?php
                        }
                        ?>


                    <?php
                    endwhile; // have_posts;
                    wp_reset_postdata();
                    ?>

                </div><!-- .padder -->
            </div><!-- .tagline-wrapper -->
        </div><!-- #homeslider-overlay -->

		<div id="homeslider">
            <?php
            while ( have_posts() ):
                the_post();
				?>
                	<img src="<?php echo get_field('banner_image'); ?>" />
				<?php
			endwhile; // have_posts;
            wp_reset_postdata();
            ?>
        </div>

    </div>
    <!-- end SLIDESHOW BANNER (STATIC VERSION) -->
    <?php

}
?>

	
    <!-- begin SHARE ROW -->
    <div id="share-row" class="container">
        <div class="row">
            <div class="col-md-12">
                <a id="sharethis-link" class="a2a_dd" href="https://www.addtoany.com/share">
                    <img src="<?php bloginfo('template_url'); ?>/images/share-icon.svg" alt="<?php _e('Share this page','Mosaiq'); ?>" />
                    <span><?php _e('Share This','Mosaiq'); ?></span>
                </a>
            </div>
        </div>
    </div>
    <!-- end SHARE ROW -->





	<!--------------------------------------------- begin ELEMENTOR CONTENT ------------------------------------------------>
        <div id="elem-wrapper">
            <?php
            while ( have_posts() ):
                the_post();
                the_content();
            endwhile; // have_posts;
            wp_reset_postdata();
            ?>
        </div>

    </div>
	<!---------------------------------------------- end ELEMENTOR CONTENT ------------------------------------------------->





	<!--------------------------------------------- begin MODERN, AFFORABLE LIVING ------------------------------------------------>
    <?php
    $args = array(
        'p'         => 296,
        'post_type' => 'any'
    );
    
    $query = new WP_Query( $args );

    if ( $query->have_posts() ) :
        while ( $query->have_posts() ) :
            $query->the_post();
            ?>

            <div id="insideblock-modern-affordable-living" class="section-wrapper bgcolor-grey-light">

                <div class="container first">
                    <div class="row">
                        <div class="col-md-6">
                            <?php echo get_field('modernblock_title'); ?>
                            <?php echo get_field('moderntitle_description'); ?>
                        </div>
                        <div class="col-md-6">
                            <img class="mos-logo" src="<?php bloginfo('template_url'); ?>/images/mos-logo.svg" alt="Mosaïq">
                        </div>
                    </div>
                </div><!-- .container -->

                <div class="container second">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="inner">
                                <p class="color-white"><?php echo get_field('apartments_description'); ?></p>
                                <a class="mos-btn" href="<?php echo get_field('apartments_pagelink'); ?>"><?php _e('Learn More','mosaiq'); ?></a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="inner">
                                <p class="color-white"><?php echo get_field('townhomes_description'); ?></p>
                                <a class="mos-btn" href="<?php echo get_field('townhomes_pagelink'); ?>"><?php _e('Learn More','mosaiq'); ?></a>
                            </div>
                        </div>
                    </div>
                </div><!-- .container -->
        
            </div>

        <?php
        endwhile; // have_posts;
    endif; // have_posts;
    wp_reset_query();
    ?>  
	<!---------------------------------------------- end MODERN, AFFORDABLE LIVING ------------------------------------------------->





<script>

    /*********************** TOP BANNER (STATIC VERSION)- ADJUST HEIGHTS OF ELEMENTS *************************/

    jQuery(window).load(function () {
        adjustBannerHeight();
    });

    jQuery(window).resize(function(){
        var timer;
        clearTimeout(timer);
        timer = setTimeout(function(){
            adjustBannerHeight();
        }, 100);
    });

    function adjustBannerHeight() {
        var $window = jQuery(window);
        var windowsize = $window.width();
        if (windowsize > 1169) {
            var topbanner_height = jQuery('#homeblock-topbanner').height();

            //jQuery('#homeslider-overlay').height(topbanner_height);

            var tagline_height = jQuery('#homeslider-overlay .tagline-wrapper').height();
            var tagline_topmargin = topbanner_height-tagline_height;

           // jQuery('#homeslider-overlay .tagline-wrapper').css('margin-top',tagline_topmargin+'px');

        } else {
            jQuery('#homeslider-overlay').css('height','auto');
            jQuery('#homeslider-overlay .tagline-wrapper').css('margin-top','0');
        }
    }

</script>


   

<?php
get_footer();