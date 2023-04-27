<?php
/* Template Name: Landing - Townhomes

 * @package MOSAIQ
 */

get_header(); ?>

<?php
$container = get_theme_mod( 'understrap_container_type' );
?>


<?php

// add full theme CSS here so we can get the nav arrows
wp_enqueue_style( 'slick-theme-css', get_template_directory_uri() . '/slick/slick-theme.css', array('slick-css'), null);
?>
    <div id="page-wrapper">
        <!-- begin SLIDESHOW BANNER -->
        <div id="homeblock-topbanner" class="not-home section-wrapper">
        <div id="homeslider-overlay">
            <div class="tagline-wrapper">
                <div class="padder">
                    <?php
                    while ( have_posts() ):
                        the_post();

                        $bannertext_group = get_field('bannertext');
                        if( $bannertext_group ) {
                            echo $bannertext_group['title'];
                        }
                        ?>

                        <div class="rentalnote-and-sliderbuttons">
                            <p class="renting"><?php echo $bannertext_group['subtitle']; ?></p>
                            <div id="homeslider-pagination"></div>
                        </div>
                    <?php
                    endwhile; // have_posts;
                    wp_reset_query();
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




        <!-- begin 'QUALITY, AFFORDABLE FAMILY-LIVING' INTRO -->
        <?php
        while ( have_posts() ):
            the_post();
        
        
            if( have_rows('townhome_affordable_group') ):
                while( have_rows('townhome_affordable_group') ): the_row(); 
                ?>
                
                    <!-- begin INTRO TITLE -->
                    <div id="landingblock-intro" class="section-wrapper">
                        <div class="container">
                            <div class="row">

                                <div class="col-md-12">
                                    <h3 class="uppercase"><?php echo get_sub_field('title'); ?></h3>
                                    <p><?php echo get_sub_field('description'); ?></p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end INTRO TITLE -->
                    

                <?php
                endwhile; //have_rows
            endif; //have_rows

        endwhile; //have_posts
        wp_reset_query();
        ?>
        <!-- end 'QUALITY, AFFORDABLE FAMILY-LIVING INTRO' -->



    <!-- begin PRICING TABLE -->
    <?php
    while ( have_posts() ):
        the_post();



        if( have_rows('pricing_table_buttons') ):
            while( have_rows('pricing_table_buttons') ): the_row();
                $button_2br_text = get_sub_field('button_2bed_text');
                $button_2br_url = get_sub_field('button_2bed_url');
                $button_3br_text = get_sub_field('button_3bed_text');
                $button_3br_url = get_sub_field('button_3bed_url');
                $button_4br_text = get_sub_field('button_4bed_text');
                $button_4br_url = get_sub_field('button_4bed_url');
            endwhile;
        endif;
    
    
        if( have_rows('pricing_table') ):
            while( have_rows('pricing_table') ): the_row(); 
            ?>
           
                <div id="landingblock-properties-table-and-list" class="section-wrapper">

                    <div class="container">
                    
                        <div class="row">

                            <div class="col-md-12">

                                <!-- begin DESKTOP VERSION - Townhomes Table -->
                                <table class="properties-table">
                                    <tr class="border-bottom-darkgrey">
                                        <th class="width-20 border-right-lightgrey"><?php _e('Townhomes','mosaiq') ?></th>
                                        <th class="width-20 border-right-lightgrey" scope="col"><?php _e('2 Bedrooms','mosaiq') ?></th>
                                        <th class="width-20 border-right-lightgrey" scope="col"><?php _e('3 Bedrooms','mosaiq') ?></th>
                                        <th class="width-20 border-right-lightgrey" scope="col"><?php _e('4 Bedrooms','mosaiq') ?></th>
                                    </tr>
                                    <tr class="border-bottom-darkgrey">
                                        <td><strong><?php _e('Market Rent','mosaiq') ?></strong></td>
                                        <td class="border-left-lightgrey"><strong><?php echo get_sub_field('price_2br'); ?></strong></td>
                                        <td class="border-left-lightgrey"><strong><?php echo get_sub_field('price_3br'); ?></strong></td>
                                        <td class="border-left-lightgrey"><strong><?php echo get_sub_field('price_4br'); ?></strong></td>
                                    </tr>
                                    <tr class="border-bottom-darkgrey">
                                        <td><?php _e('Hydro','mosaiq'); ?></td>
                                        <?php $extra_note_plain = __('Extra','mosaiq'); ?>
                                        <td class="border-left-lightgrey"><?php echo $extra_note_plain; ?></td>
                                        <td class="border-left-lightgrey"><?php echo $extra_note_plain; ?></td>
                                        <td class="border-left-lightgrey"><?php echo $extra_note_plain; ?></td>
                                    </tr>
                                    <tr class="border-bottom-darkgrey">
                                        <td><?php _e('Heat','mosaiq'); ?></td>
                                        <?php $included_text = __('Included','mosaiq'); ?>
                                        <td class="border-left-lightgrey"><?php echo $included_text; ?></td>
                                        <td class="border-left-lightgrey"><?php echo $included_text; ?></td>
                                        <td class="border-left-lightgrey"><?php echo $included_text; ?></td>
                                    </tr>
                                    <tr class="border-bottom-darkgrey">
                                        <td><?php _e('Water','mosaiq'); ?></td>
                                        <td class="border-left-lightgrey"><?php echo $included_text; ?></td>
                                        <td class="border-left-lightgrey"><?php echo $included_text; ?></td>
                                        <td class="border-left-lightgrey"><?php echo $included_text; ?></td>
                                    </tr>
                                    <tr class="border-bottom-darkgrey">
                                        <td><?php _e('Parking','mosaiq') ?></td>
                                        <?php $extra_note = __('Extra<sup>*</sup>','mosaiq'); ?>
                                        <td class="border-left-lightgrey"><?php echo $extra_note; ?></td>
                                        <td class="border-left-lightgrey"><?php echo $extra_note; ?></td>
                                        <td class="border-left-lightgrey"><?php echo $extra_note; ?></td>
                                    </tr>
                                    <tr class="border-bottom-darkgrey bgcolor-grey-light">
                                        <td><strong><?php _e('Home Availability','mosaiq') ?></strong></td>
                                        <td class="border-left-lightgrey">
                                            <a class="mos-btn register-btn" href="<?php echo $button_2br_url; ?>" data-lity=""><?php echo $button_2br_text; ?></a>
                                        </td>
                                        <td class="border-left-lightgrey">
                                            <a class="mos-btn register-btn" href="<?php echo $button_3br_url; ?>" data-lity=""><?php echo $button_3br_text; ?></a>
                                        </td>
                                        <td class="border-left-lightgrey">
                                            <a class="mos-btn register-btn" href="<?php echo $button_4br_url; ?>" data-lity=""><?php echo $button_4br_text; ?></a>
                                        </td>
                                    </tr>
                                    <tr class="last">
                                        <td><p class="parking-note">* <?php _e('Limited on-site parking available','mosaiq'); ?></p></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </table>
                                <!-- end DESKTOP VERSION - Townhomes Table -->


                                <!-- begin MOBILE VERSION - Townhomes Table -->
                                <div class="properties-list">

                                    <h4><?php _e('2 Bedrooms','mosaiq') ?></h4>
                                    <ul>
                                        <li><strong><?php _e('Market Rent','mosaiq'); echo ' - '; echo get_sub_field('price_2br'); ?></strong></li>
                                        <li><?php _e('Hydro','mosaiq'); echo ' - '; _e('Extra','mosaiq'); ?></li>
                                        <li><?php _e('Heat','mosaiq'); echo ' - '; _e('Included','mosaiq'); ?></li>
                                        <li><?php _e('Water','mosaiq'); echo ' - '; _e('Included','mosaiq'); ?></li>
                                        <li><?php _e('Parking','mosaiq'); echo ' - '; echo $extra_note; ?></li>
                                    </ul>
                                    <a class="mos-btn register-btn" href="<?php echo $button_2br_url; ?>" data-lity=""><?php echo $button_2br_text; ?></a>
                                    
                                    <h4><?php _e('3 Bedrooms','mosaiq') ?></h4>
                                    <ul>
                                        <li><strong><?php _e('Market Rent','mosaiq'); echo ' - '; echo get_sub_field('price_3br'); ?></strong></li>
                                        <li><?php _e('Hydro','mosaiq'); echo ' - '; _e('Extra','mosaiq'); ?></li>
                                        <li><?php _e('Heat','mosaiq'); echo ' - '; _e('Included','mosaiq'); ?></li>
                                        <li><?php _e('Water','mosaiq'); echo ' - '; _e('Included','mosaiq'); ?></li>
                                        <li><?php _e('Parking','mosaiq'); echo ' - '; echo $extra_note; ?></li>
                                    </ul>
                                    <a class="mos-btn register-btn" href="<?php echo $button_3br_url; ?>" data-lity=""><?php echo $button_3br_text; ?></a>

                                    <h4><?php _e('4 Bedrooms','mosaiq') ?></h4>
                                    <ul>
                                        <li><strong><?php _e('Market Rent','mosaiq'); echo ' - '; echo get_sub_field('price_4br'); ?></strong></li>
                                        <li><?php _e('Hydro','mosaiq'); echo ' - '; _e('Extra','mosaiq'); ?></li>
                                        <li><?php _e('Heat','mosaiq'); echo ' - '; _e('Included','mosaiq'); ?></li>
                                        <li><?php _e('Water','mosaiq'); echo ' - '; _e('Included','mosaiq'); ?></li>
                                        <li><?php _e('Parking','mosaiq'); echo ' - '; echo $extra_note; ?></li>
                                    </ul>
                                    <a class="mos-btn register-btn" href="<?php echo $button_4br_url; ?>" data-lity=""><?php echo $button_4br_text; ?></a>

                                    <p class="parking-note">* <?php if (ICL_LANGUAGE_CODE == 'en') echo 'Limited on-site parking available'; if (ICL_LANGUAGE_CODE == 'fr') echo 'Stationnement limité sur place'; ?></p>

                                </div>
                                
                                <!-- end MOBILE VERSION - Townhomes Table -->




                                
                            </div>

                        </div>

                    </div>

                </div>

                <!-- end APARTMENTS TABLE and LIST -->


                <?php
                endwhile; //have_rows
            endif; //have_rows

        endwhile; //have_posts
        wp_reset_query();
        ?>

        <!-- end PRICING TABLE -->







        <!-- begin YELLOW BLOCK -->
        <?php
        while ( have_posts() ):
            the_post();
            
            if( have_rows('amenities_group') ):
                while( have_rows('amenities_group') ): the_row(); 
                ?>

                    <div id="landingblock-yellow" class="section-wrapper">
                        <div class="container">
                            <div class="row">

                                <div class="col-md-8 col-left">
                                    <p><?php echo get_sub_field('description'); ?></p>
                                </div>

                                <div class="col-md-4 col-right">
                                    <a class="mos-btn" href="<?php echo get_sub_field('button_url'); ?>"><?php _e('Learn more','mosaiq'); ?></a>
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
        <!-- end YELLOW BLOCK -->



        <!--------- begin VIDEOS GROUP ---------->
        <?php
        while ( have_posts() ):
            the_post();

            if ( is_user_logged_in() ) :

                if( have_rows('videos_group') ):
                    while( have_rows('videos_group') ): the_row(); 
                    ?>

                        <div id="videolist-wrapper" class="section-wrapper">
                            <div class="container">

                                <div class="row">
                                    <div class="col-md-12">
                                        <h3 class="uppercase"><?php echo get_sub_field('title'); ?></h3>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <?php
                                        if( have_rows('video_list') ):
                                            while( have_rows('video_list') ): the_row(); 
                                            ?>
                                            
                                                <iframe class="video-single" src="<?php echo get_sub_field('video_link'); ?>" frameborder="0" allowfullscreen></iframe>
                                            <?php
                                            endwhile;
                                        endif;
                                        ?>
                                    </div>
                                </div>
                            
                            </div>
                        </div>

                    <?php
                    endwhile;
                endif;

            endif;


        endwhile; //have_posts
        wp_reset_query();
        ?>





    <!--------- begin FLOORPLAN DROPDOWN/SLIDER ---------->
    <?php
    while ( have_posts() ):
        the_post();
    
    
        if( have_rows('floorplans_group') ):
            while( have_rows('floorplans_group') ): the_row(); 
            ?>
        

            <div id="floorplans-intro-and-dd-wrapper" class="section-wrapper">
                <div class="container">
                    <div class="row">

                        <div class="col-md-8 col-left">
                            <h3 class="uppercase"><?php echo get_sub_field('title'); ?></h3>
                        </div><!-- .col-left -->

                        <div class="col-md-4 col-right">

                            <div id="fp-dropdown">

                                <span class="mos-dd">
                                    <select>
                                        <option value="hide">
                                            <?php if (ICL_LANGUAGE_CODE == 'en'): ?>VIEW FLOOR PLANS<?php endif; ?>
                                            <?php if (ICL_LANGUAGE_CODE == 'fr'): ?>VOIR LES PLANS D’ÉTAGE<?php endif; ?>
                                        </option>
                                        <option value="0">
                                            <?php if (ICL_LANGUAGE_CODE == 'en'): ?>2 Bedrooms<?php endif; ?>
                                            <?php if (ICL_LANGUAGE_CODE == 'fr'): ?>2 chambres<?php endif; ?>
                                        </option>
                                        <option value="1">
                                            <?php if (ICL_LANGUAGE_CODE == 'en'): ?>3 Bedrooms<?php endif; ?>
                                            <?php if (ICL_LANGUAGE_CODE == 'fr'): ?>3 chambres<?php endif; ?>
                                        </option>
                                        <option value="2">
                                            <?php if (ICL_LANGUAGE_CODE == 'en'): ?>4 Bedrooms<?php endif; ?>
                                            <?php if (ICL_LANGUAGE_CODE == 'fr'): ?>4 chambres<?php endif; ?>
                                        </option>
                                    </select>
                                </span>

                            </div><!-- #fp-dropdown --> 

                        </div><!-- .col-right -->



                    </div><!-- .row -->

                </div><!-- .container -->

            </div><!-- #floorplans-intro-and-dd-wrapper -->

            


            
        
            <div id="fp-disclaimer">
                    <p><?php echo get_sub_field('description'); ?></p>
            </div>


            <div id="fp-swipe-msg-mobile">
                <div class="inner">
                    <?php if (ICL_LANGUAGE_CODE == 'en'): ?>
                        <p>Swipe left or right to see sample floor plans for your category</p>
                    <?php endif; ?>
                    <?php if (ICL_LANGUAGE_CODE == 'fr'): ?>
                        <p>Swipe left or right to see sample floor plans for your category [FR].</p>
                    <?php endif; ?>
                </div>
            </div>



            <div id="fpslider-wrapper">

                <div id="fpslider-wrapper-inner">

                    <div id="fpslider">

                        <?php if (ICL_LANGUAGE_CODE == 'en'): ?>    
                            <div class="slide-container"><div class="inner"><img data-featherlight="<?php bloginfo('template_url'); ?>/images/floorplans/2-B-townhome-Mosaiq-new.png" src="<?php bloginfo('template_url'); ?>/images/floorplans/2-B-townhome-Mosaiq-new.png" /></div></div>
                            <div class="slide-container"><div class="inner"><img data-featherlight="<?php bloginfo('template_url'); ?>/images/floorplans/3-F-townhome-Mosaiq-new.png" src="<?php bloginfo('template_url'); ?>/images/floorplans/3-F-townhome-Mosaiq-new.png" /></div></div>
                            <div class="slide-container"><div class="inner"><img data-featherlight="<?php bloginfo('template_url'); ?>/images/floorplans/4-D-townhome-Mosaiq-new.png" src="<?php bloginfo('template_url'); ?>/images/floorplans/4-D-townhome-Mosaiq-new.png" /></div></div>
                        <?php endif; ?>
                        <?php if (ICL_LANGUAGE_CODE == 'fr'): ?>    
                            <div class="slide-container"><div class="inner"><img data-featherlight="<?php bloginfo('template_url'); ?>/images/floorplans/2-B-townhome-Mosaiq-fr-new.png" src="<?php bloginfo('template_url'); ?>/images/floorplans/2-B-townhome-Mosaiq-fr-new.png" /></div></div>
                            <div class="slide-container"><div class="inner"><img data-featherlight="<?php bloginfo('template_url'); ?>/images/floorplans/3-F-townhome-Mosaiq-fr-new.png" src="<?php bloginfo('template_url'); ?>/images/floorplans/3-F-townhome-Mosaiq-fr-new.png" /></div></div>
                            <div class="slide-container"><div class="inner"><img data-featherlight="<?php bloginfo('template_url'); ?>/images/floorplans/4-D-townhome-Mosaiq-fr-new.png" src="<?php bloginfo('template_url'); ?>/images/floorplans/4-D-townhome-Mosaiq-fr-new.png" /></div></div>
                        <?php endif; ?>

                    </div><!-- #fp-slider -->

                </div><!-- #fpslider-wrapper-inner -->

            </div><!-- #fpslider-wrapper -->


            
            <?php
            endwhile; //have_rows
        endif; //have_rows

    endwhile; //have_posts
    wp_reset_query();
    ?>

    <!--------- end FLOORPLAN DROPDOWN/SLIDER ------------>







</div><!-- #page-wrapper -->





<script>



    /*********************** TOP BANNER (STATIC VERSION) - ADJUST HEIGHTS OF ELEMENTS *************************/
    jQuery(window).load(function () {
        adjustBannerHeight();
    });

    jQuery(window).resize(function() {
        var timer;
        clearTimeout(timer);
        timer = setTimeout(function() {
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







    /*********************** FLOOR PLAN DROPDOWN + SLIDER *************************/


    /*** Height Adjustments ***/
    jQuery(document).ready(function() {
        adjustFloorplanHeight();
        resizeVideo();
    });

    jQuery(window).load(function () {
        adjustFloorplanHeight();
        resizeVideo();
    });


    jQuery(window).resize(function() {

        var timer;
        clearTimeout(timer);
        timer = setTimeout(function() {
            adjustFloorplanHeight();
            resizeVideo();
        }, 100);
        
    });

    function adjustFloorplanHeight() {

        var window_width = viewportHelper().width;   
            
        if (window_width > 991) {
                var titleblock_h = jQuery('#floorplans-header .title-block').outerHeight();
                jQuery('#floorplans-header .image-block').height(titleblock_h);
        } else {
                jQuery('#floorplans-header .image-block').css('height','auto');
        }
    
    }

    function resizeVideo() {
        jQuery('iframe').each(function(){

            vid_w = jQuery(this).width();
            vid_h = vid_w * 0.5625;

            jQuery(this).height(vid_h);

        });
    
    }

    /*** Initialize Floor Plan Slider ***/
    jQuery(document).ready(function() {

        jQuery('#fpslider').slick({
            speed: 300,
            autoplay: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            infinite: false,
            dots: false,
            adaptiveHeight: true,
            responsive: [
                {
                breakpoint: 2000,
                settings: {
                    slidesToShow: 2
                }
                },
                {
                breakpoint: 1520,
                settings: {
                    slidesToShow: 1
                }
                }
            ]
        });

    });


    /*** Dropdown (to Filter Floor Plan Slides) ***/
    
    jQuery('.mos-dd select').each(function () {

        var $this = jQuery(this),numberOfOptions = jQuery(this).children('option').length;

        $this.addClass('select-hidden');
        $this.wrap('<div class="select"></div>');
        $this.after('<div class="select-styled"></div>');

        var $styledSelect = $this.next('div.select-styled');
        $styledSelect.text($this.children('option').eq(0).text());

        var $list = jQuery('<ul />', {
            'class': 'select-options' }).
        insertAfter($styledSelect);

        for (var i = 0; i < numberOfOptions; i++) {
            jQuery('<li />', {
            text: $this.children('option').eq(i).text(),
            rel: $this.children('option').eq(i).val() }).
            appendTo($list);
        }

        var $listItems = $list.children('li');

        $styledSelect.click(function (e) {
            e.stopPropagation();
            jQuery('div.select-styled.active').not(this).each(function () {
            jQuery(this).removeClass('active').next('ul.select-options').hide();
            });
            jQuery(this).toggleClass('active').next('ul.select-options').toggle();
        });

        $listItems.click(function (e) {
            e.stopPropagation();
            $styledSelect.text(jQuery(this).text()).removeClass('active');
            $this.val(jQuery(this).attr('rel'));
            $list.hide();
            


                // Adjust floor plan slides based on dropdown selection
                var slide_requested = $this.val();
                
                if (jQuery('#fpslider').length) { // check if slider exists first (i.e. you're on the page with that slider)
                
                    jQuery('#fpslider').slick('removeSlide', null, null, true);

                    
                    if( jQuery('body#fr').length == 0) { // English Content

                        if (slide_requested == "0") { // 2 Bedrooms
                            jQuery('#fpslider').slick('slickAdd','<div class="slide-container"><div class="inner"><img data-featherlight="<?php bloginfo('template_url'); ?>/images/floorplans/2-B-townhome-Mosaiq-new.png" src="<?php bloginfo('template_url'); ?>/images/floorplans/2-B-townhome-Mosaiq-new.png" /></div></div>'); 
                        } else if (slide_requested == "1") { // 3 Bedrooms
                            jQuery('#fpslider').slick('slickAdd','<div class="slide-container"><div class="inner"><img data-featherlight="<?php bloginfo('template_url'); ?>/images/floorplans/3-F-townhome-Mosaiq-new.png" src="<?php bloginfo('template_url'); ?>/images/floorplans/3-F-townhome-Mosaiq-new.png" /></div></div>'); 
                        } else if (slide_requested == "2") { // 4 Bedrooms
                            jQuery('#fpslider').slick('slickAdd','<div class="slide-container"><div class="inner"><img data-featherlight="<?php bloginfo('template_url'); ?>/images/floorplans/4-D-townhome-Mosaiq-new.png" src="<?php bloginfo('template_url'); ?>/images/floorplans/4-D-townhome-Mosaiq-new.png" /></div></div>'); 
                        }

                    } else { // French Content
                        
                        if (slide_requested == "0") { // 2 Bedrooms
                            jQuery('#fpslider').slick('slickAdd','<div class="slide-container"><div class="inner"><img data-featherlight="<?php bloginfo('template_url'); ?>/images/floorplans/2-B-townhome-Mosaiq-fr-new.png" src="<?php bloginfo('template_url'); ?>/images/floorplans/2-B-townhome-Mosaiq-fr-new.png" /></div></div>'); 
                        } else if (slide_requested == "1") { // 3 Bedrooms
                            jQuery('#fpslider').slick('slickAdd','<div class="slide-container"><div class="inner"><img data-featherlight="<?php bloginfo('template_url'); ?>/images/floorplans/3-F-townhome-Mosaiq-fr-new.png" src="<?php bloginfo('template_url'); ?>/images/floorplans/3-F-townhome-Mosaiq-fr-new.png" /></div></div>'); 
                        } else if (slide_requested == "2") { // 4 Bedrooms
                            jQuery('#fpslider').slick('slickAdd','<div class="slide-container"><div class="inner"><img data-featherlight="<?php bloginfo('template_url'); ?>/images/floorplans/4-D-townhome-Mosaiq-fr-new.png" src="<?php bloginfo('template_url'); ?>/images/floorplans/4-D-townhome-Mosaiq-fr-new.png" /></div></div>'); 
                        }

                    }

                    // jQuery('#fpslider').slick('slickGoTo', slide_requested-1);
                }

        }); // $listItems.click(function(e))


        jQuery(document).click(function () {
            $styledSelect.removeClass('active');
            $list.hide();
        });


    }); //jQuery('.mos-dd select').each(function())






</script>



<?php
get_footer();