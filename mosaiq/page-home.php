<?php
/* Template Name: Home

 * @package MOSAIQ
 */

get_header(); ?>

<?php
$container = get_theme_mod( 'understrap_container_type' );
?>




<div id="page-wrapper">

    <!-- begin SLIDESHOW BANNER -->
    <div id="homeblock-topbanner" class="section-wrapper">

        <div id="homeslider-overlay">

            <div class="tagline-wrapper">

                <div class="padder">

                    <?php
                    while ( have_posts() ):
                        the_post();
                    
                        $home_bannertext_group = get_field('home_bannertext');
                        if( $home_bannertext_group ) {
                            echo $home_bannertext_group['homebanner_title'];
                        } ?>

                        <div class="rentalnote-and-sliderbuttons">
                            <p class="renting"><?php echo $home_bannertext_group['homebanner_subtitle']; ?></p>
                            <div id="homeslider-pagination"></div>
                        </div>
                
                    <?php
                    endwhile; // have_posts;
                    wp_reset_query();
                    ?>

                </div><!-- .padder -->

            </div><!-- .tagline-wrapper -->
        
        </div>

        <div id="homeslider">
            <?php
            while ( have_posts() ):
                the_post();
                if( have_rows('slides') ):
                    while( have_rows('slides') ) : the_row();
                    ?>
                        <img data-lazy="<?php echo get_sub_field('image'); ?>" />
                    <?php
                    endwhile;
                endif;
            endwhile; // have_posts;
            wp_reset_query();
            ?>
        </div>

    </div>
    <!-- end SLIDESHOW BANNER -->


    <!-- begin SHARE ROW -->
    <div id="share-row" class="container">
        <div class="row">
            <div class="col-md-12">
                <a id="sharethis-link" class="a2a_dd" href="https://www.addtoany.com/share">
                    <img src="<?php bloginfo('template_url'); ?>/images/share-icon.svg" alt="<?php _e('Share this page','mosaiq'); ?>" />
                    <span><?php _e('Share This','mosaiq'); ?></span>
                </a>
            </div>
        </div>
    </div>
    <!-- end SHARE ROW -->




    <!-- begin MODERN, AFFORDABLE LIVING -->
    <?php
    while ( have_posts() ):
        the_post();
    
    
        if( have_rows('home_modernaffordableliving_group') ):
            while( have_rows('home_modernaffordableliving_group') ): the_row(); 
            ?>

                <div id="homeblock-modern-affordable-living" class="section-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h3 class="uppercase"><?php echo get_sub_field('title'); ?></h3>
                                <p><?php echo get_sub_field('subtitle'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div id="homeblock-learnmore" class="section-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="inner">
                                    <p class="color-white"><?php echo get_sub_field('block_apartments_text'); ?></p>
                                    <a class="mos-btn" href="<?php echo get_sub_field('block_apartments_url'); ?>"><?php _e('Learn more','mosaiq'); ?></a>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="inner">
                                    <p class="color-white"><?php echo get_sub_field('block_townhomes_text'); ?></p>
                                    <a class="mos-btn" href="<?php echo get_sub_field('block_townhomes_url'); ?>"><?php _e('Learn more','mosaiq'); ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
             
                <div id="homeblock-new-concept" class="section-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4">
                                <h3 class="uppercase"><?php echo get_sub_field('anewconcept_title'); ?></h3>
                            </div>
                            <div class="col-lg-8">
                                <p><?php echo get_sub_field('anewconcept_text'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>

            <?php
            endwhile; //have_rows
        endif; //have_rows

    endwhile; //have_posts
    wp_reset_query();
    ?>
    <!-- end MODERN, AFFORDABLE LIVING -->



    <!-- begin DOWNTOWN-LIVING -->
    <?php
    while ( have_posts() ):
        the_post();
    
    
        if( have_rows('home_downtownliving_group') ):
            while( have_rows('home_downtownliving_group') ): the_row(); 
            ?>

                <div id="homeblock-downtown-living" class="section-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h3 class="uppercase"><?php echo get_sub_field('title'); ?></h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="inner">
                                    <img class="icon" src="<?php bloginfo('template_url'); ?>/images/home-downtownliving-walk.svg" alt="icon" />
                                    <h4 class="uppercase"><?php echo get_sub_field('block1_titledata'); ?></h4>
                                </div>
                                <p class="description"><?php echo get_sub_field('block1_description'); ?></p>
                            </div>
                            <div class="col-md-4">
                                <div class="inner">
                                    <img class="icon" src="<?php bloginfo('template_url'); ?>/images/home-downtownliving-bike.svg" alt="icon" />
                                    <h4 class="uppercase"><?php echo get_sub_field('block2_titledata'); ?></h4>
                                </div>
                                <p class="description"><?php echo get_sub_field('block2_description'); ?></p>
                            </div>
                            <div class="col-md-4">
                                <div class="inner">
                                    <img class="icon" src="<?php bloginfo('template_url'); ?>/images/home-downtownliving-transit.svg" alt="icon" />
                                    <h4 class="uppercase"><?php echo get_sub_field('block3_titledata'); ?></h4>
                                </div>
                                <p class="description"><?php echo get_sub_field('block3_description'); ?></p>
                            </div>
                        </div>

                    </div>
                </div>

                <?php
            endwhile; //have_rows
        endif; //have_rows

    endwhile; //have_posts
    wp_reset_query();
    ?>
    <!-- end DOWNTOWN-LIVING -->



    <!-- begin MOSAIQ: A COMMUNITY CONCEPT -->
    <?php
    while ( have_posts() ):
        the_post();


        if( have_rows('home_mosaiqacommunityconcept_group') ):
            while( have_rows('home_mosaiqacommunityconcept_group') ): the_row(); 
            ?>

                <div id="homeblock-colorgrid" class="section-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <h3 class="uppercase color-grey"><?php echo get_sub_field('title'); ?></h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 mos-col">
                                <div class="inner bgcolor-grey">
                                    <h3 class="color-white"><?php echo get_sub_field('block_apartments_title'); ?></h3>
                                    <p class="color-white"><?php echo get_sub_field('block_apartments_description'); ?></p>
                                    <a class="mos-btn" href="<?php echo get_sub_field('block_apartments_url'); ?>"><?php _e('Learn more','mosaiq'); ?></a>
                                </div>
                            </div>
                            <div class="col-lg-4 mos-col">
                                <div class="inner bgcolor-green">
                                    <h3 class="color-white"><?php echo get_sub_field('block_townhomes_title'); ?></h3>
                                    <p class="color-white"><?php echo get_sub_field('block_townhomes_description'); ?></p>
                                    <a class="mos-btn" href="<?php echo get_sub_field('block_townhomes_url'); ?>"><?php _e('Learn more','mosaiq'); ?></a>
                                </div>
                            </div>
                            <div class="col-lg-4 mos-col">
                                <div class="inner bgcolor-orange">
                                    <h3 class="color-grey"><?php echo get_sub_field('block_mosaiqconcept_title'); ?></h3>
                                    <p class="color-grey"><?php echo get_sub_field('block_mosaiqconcept_description'); ?></p>
                                    <a class="mos-btn" href="<?php echo get_sub_field('block_mosaiqconcept_url'); ?>"><?php _e('Learn more','mosaiq'); ?></a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 mos-col">
                                <div class="inner bgcolor-yellow">
                                    <h3 class="color-grey"><?php echo get_sub_field('block_mosaiqamenities_title'); ?></h3>
                                    <p class="color-grey"><?php echo get_sub_field('block_mosaiqamenities_description'); ?></p>
                                    <a class="mos-btn" href="<?php echo get_sub_field('block_mosaiqamenities_url'); ?>"><?php _e('Learn more','mosaiq'); ?></a>
                                </div>
                            </div>
                            <div class="col-lg-8 mos-col">
                                <div class="floorplans-block inner">
                                    <img src="<?php bloginfo('template_url'); ?>/images/home-floorplan-thumbnail.png" />
                                    <div class="inner-inner">
                                        <h3 class="color-grey"><?php echo get_sub_field('block_floorplans_title'); ?></h3>
                                        <p class="color-grey"><?php echo get_sub_field('block_floorplans_description'); ?></p>
                                        <a class="mos-btn" href="<?php echo get_sub_field('block_floorplans_button1_url'); ?>"><?php _e('Apartments','mosaiq'); ?></a><br /><br />
                                        <a class="mos-btn" href="<?php echo get_sub_field('block_floorplans_button2_url'); ?>"><?php _e('Townhomes','mosaiq'); ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                
                <div id="homeblock-sustainable-green-living" class="section-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4">
                                <h3 class="uppercase"><?php echo get_sub_field('sustainablegreenliving_title'); ?></h3>
                            </div>
                            <div class="col-lg-8">
                                <p><?php echo get_sub_field('sustainablegreenliving_description'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>


            <?php
            endwhile; //have_rows
        endif; //have_rows

    endwhile; //have_posts
    wp_reset_query();
    ?>
    <!-- end MOSAIQ: A COMMUNITY CONCEPT -->


    <!-- begin Intro VIDEO -->
    <?php
    while ( have_posts() ):
        the_post();
        ?>

        <div id="homeblock-video-launcher" class="section-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="inner first">
                            <iframe class="video-player" src="<?php echo get_field('home_introvideo_url'); ?>" frameborder="0" allowfullscreen></iframe>
                        </div><!-- .inner -->
                    </div><!-- .col-md-12 -->
                </div><!-- .row -->    
                <div class="row">
                    <div class="col-lg-12">
                        <div class="inner second">
                            <iframe class="video-player" src="<?php echo get_field('home_3dvideo_url'); ?>" frameborder="0" allowfullscreen allow="xr-spatial-tracking"></iframe>
                        </div><!-- .inner -->
                    </div><!-- .col-md-12 -->
                </div><!-- .row -->
                
            </div><!-- .container -->
        </div><!-- #homeblock-video-launcher -->
        
    <?php
    endwhile; //have_posts
    wp_reset_query();
    ?>
    <!-- end Intro VIDEO -->


    <!-- begin 3D VIDEO -->
    <?php
    while ( have_posts() ):
        the_post();
        ?>

        <div id="homeblock-video-launcher" class="section-wrapper">
            <div class="container">
                
            </div><!-- .container -->
        </div><!-- #homeblock-video-launcher -->

    <?php
    endwhile; //have_posts
    wp_reset_query();
    ?>
    <!-- end 3D VIDEO -->


    <!-- begin LOCATION,LOCATION -->
    <?php
    while ( have_posts() ):
        the_post();

        if( have_rows('home_locationmap_group') ):
            while( have_rows('home_locationmap_group') ): the_row(); 
            ?>
    
                <div id="homeblock-map" class="section-wrapper bgcolor-grey-light">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <img class="logo" src="<?php bloginfo('template_url'); ?>/images/mos-logo.svg" alt="Mosaïq" />
                                <h3 class="uppercase"><?php echo get_sub_field('tagline'); ?></h3>
                                <p><?php echo get_sub_field('description'); ?></p>
                            </div>
                            <div class="col-md-6">
                                <iframe width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="<?php echo get_sub_field('map_embed_url'); ?>"></iframe>
                                <p class="map-caption"><?php echo get_sub_field('address'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <?php
            endwhile; //have_rows
        endif; //have_rows

    endwhile; //have_posts
    wp_reset_query();
    ?>
    <!-- end LOCATION,LOCATION -->

               

<script>
var userFeed;
    jQuery(document).ready(function() {

        jQuery('#homeslider').on('init lazyLoaded', function(event, slick){
            jQuery('#homeslider-pagination .slick-dots li button').empty();
            slick.resize();
        });


        jQuery('#homeslider').slick({
            lazyLoad: 'progressive',
            speed: 300,
            slidesToShow: 1,
            slidesToScroll: 1,
            infinite: true,
            dots: true,
            adaptiveHeight: true,
            autoplay: true,
            prevArrow: false,
            nextArrow: false,
            appendDots: jQuery('#homeslider-pagination')
            /*
            responsive: [{
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
                },
                {
                breakpoint: 400,
                settings: {
                    arrows: false,
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }]
            */
        });

        userFeed = new Instafeed({
            get: 'user',
            target: "instafeed-container",
            resolution: 'low_resolution',
            accessToken: 'IGQVJYUkFuSHB2Mkx1dTlKdmlRbnNLUjRjaTl4bTBNN2d3SHZAEVDc1eE93WDVCeTVpMk45WnpDR0lJTlRhbnV3VnRTSkRHVHpXNk1HdlNrRnpJX1lvSUd6YkJ5ZAzhNMjNmVDI3Qmpyei1KZAmZAfMnk5UQZDZD'
        });
        userFeed.run();
    });




    jQuery(window).load(function () {

        adjustBannerHeight();
        centerVidPlayButton();
        resizeVideo();

    });

    jQuery(window).resize(function(){

        var timer;
        clearTimeout(timer);
        timer = setTimeout(function(){
            adjustBannerHeight();
            centerVidPlayButton();
            resizeVideo();
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

            //jQuery('#homeslider-overlay .tagline-wrapper').css('margin-top',tagline_topmargin+'px');

        } else {
            jQuery('#homeslider-overlay').css('height','auto');
            jQuery('#homeslider-overlay .tagline-wrapper').css('margin-top','0');
        }
    }

    function centerVidPlayButton() {

        var vidlaunch_container_w = jQuery('#homeblock-video-launcher a.launch-pic-container').width();
        var vidlaunch_container_h = jQuery('#homeblock-video-launcher a.launch-pic-container').height();

        var vidlaunch_playbtn_w = jQuery('#homeblock-video-launcher a.launch-pic-container img.launch-button').width();
        var vidlaunch_playbtn_h = jQuery('#homeblock-video-launcher a.launch-pic-container img.launch-button').height();

        var vidlaunch_playbtn_xpos = parseInt(vidlaunch_container_w - vidlaunch_playbtn_w) / 2;
        var vidlaunch_playbtn_ypos = parseInt(vidlaunch_container_h - vidlaunch_playbtn_h) / 2;

        jQuery('#homeblock-video-launcher a.launch-pic-container img.launch-button').css('left',vidlaunch_playbtn_xpos);
        jQuery('#homeblock-video-launcher a.launch-pic-container img.launch-button').css('top',vidlaunch_playbtn_ypos);

    }

    function resizeVideo() {
        jQuery('iframe').each(function(){

            vid_w = jQuery(this).width();
            vid_h = vid_w * 0.5625;

            jQuery(this).height(vid_h);

        });
    
    }


</script>




   

<?php
get_footer();