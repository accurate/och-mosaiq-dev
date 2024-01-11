<?php
/* Template Name: Floorplans - Landing (Original)

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

<div id="lang-toggle">
<?php do_action('wpml_add_language_selector'); ?>
</div>

    <div id="page-wrapper">

        <div id="floorplans-header">


            <div class="title-block">
            <?php if (ICL_LANGUAGE_CODE == 'en'): ?>
				<a href="https://mosaiq811.ca/" target="_blank"><img class="logo" src="<?php echo bloginfo('template_url'); ?>/images/mos-logo-horizontal-white.svg" /></a>
 <?php endif; ?>
				<?php if (ICL_LANGUAGE_CODE == 'fr'): ?>
				<a href="https://mosaiq811.ca/fr/floor-plans-fr/" target="_blank"><img class="logo" src="<?php echo bloginfo('template_url'); ?>/images/mos-logo-horizontal-white.svg" /></a>
				<?php endif; ?>
                <div class="tagline-wrapper">
                    
                    <?php if (ICL_LANGUAGE_CODE == 'en'): ?>
                        <h3>Where <span class="highlight yellow">Community,</span><br />
                        <span class="highlight green">Green Living</span>,<br />
                        and <span class="highlight orange">Affordable</span><br />
                        Rentals Meet.</h3>
                        <p class="renting" role="heading" aria-level="4">Renting Summer 2021</p>
                    <?php endif; ?>
                    
                    <?php if (ICL_LANGUAGE_CODE == 'fr'): ?>
                        <h3>Une <span class="highlight yellow">communauté unique</span><br />
                        qui conjugue<br />
                        <span class="highlight green">habitat écologique</span><br />
                        et <span class="highlight orange">logements locatifs</span> abordables.</h3>
                        <p class="renting" role="heading" aria-level="4">Locations l’été 2021</p>
                    <?php endif; ?>

                </div><!-- .tagline-wrapper -->


        
        
            </div><!-- .title-block -->


            <div class="image-block" style="background-image:url('<?php echo bloginfo('template_url'); ?>/images/floorplans-header.jpg');">
                <img class="mobile-only" src="<?php echo bloginfo('template_url'); ?>/images/floorplans-header.jpg" />
            </div>
            
        </div>


<?php if (ICL_LANGUAGE_CODE == 'en'): ?>
    <div id="choose-right-home-row">
        <h2>CHOOSE THE HOME THAT&rsquo;S RIGHT <span class="highlight orange">FOR YOU!</span></h2>
    </div>
<?php endif; ?>


<?php if (ICL_LANGUAGE_CODE == 'fr'): ?>
    <div id="choose-right-home-row">
        <h2>CHOISISSEZ LE LOGEMENT QUI <span class="highlight orange">VOUS CONVIENT!</span></h2>
    </div>
<?php endif; ?>


<div id="fp-info-text">
    <?php if (ICL_LANGUAGE_CODE == 'en'): ?>
        <p>The floorplans below represent a small sample of Mosaïq's many modern and spacious apartment and townhome models.</p>
    <?php endif; ?>
    <?php if (ICL_LANGUAGE_CODE == 'fr'): ?>
        <p>Les plans d'étage ci-dessous représentent un petit échantillon des nombreux modèles modernes et spacieux d’appartements et de maisons de ville de Mosaïq.</p>
    <?php endif; ?>
</div>

		
<div id="fp-dropdowns">
    
    <div class="leftside">

        <div class="left">
            <?php if (ICL_LANGUAGE_CODE == 'en'): ?>    
                <h3>Apartments</h3>
                <p>Studio, 1, 2, 3 Bedroom</p>
            <?php endif; ?>
            <?php if (ICL_LANGUAGE_CODE == 'fr'): ?>
                <h3>Appartements</h3>
                <p>Studio, 1, 2, 3 et 4 chambres à coucher</p>
            <?php endif; ?>
        </div>
        
        <div class="right">

            <span id="dd_one" class="mos-dd">
                <select>
                    <option value="hide">
                        <?php if (ICL_LANGUAGE_CODE == 'en'): ?>VIEW FLOOR PLANS<?php endif; ?>
                        <?php if (ICL_LANGUAGE_CODE == 'fr'): ?>VOIR LES PLANS D’ÉTAGE
                         <?php endif; ?>
                    </option>
                    <option value="0">
                            <?php if (ICL_LANGUAGE_CODE == 'en'): ?>Studio<?php endif; ?>
                            <?php if (ICL_LANGUAGE_CODE == 'fr'): ?>Studio<?php endif; ?>
                    </option>
                    <option value="1">
                        <?php if (ICL_LANGUAGE_CODE == 'en'): ?>1 Bedroom<?php endif; ?>
                        <?php if (ICL_LANGUAGE_CODE == 'fr'): ?>1 Bedroom<?php endif; ?>
                    </option>
                    <option value="2">
                        <?php if (ICL_LANGUAGE_CODE == 'en'): ?>2 Bedrooms<?php endif; ?>
                        <?php if (ICL_LANGUAGE_CODE == 'fr'): ?>2 Bedrooms<?php endif; ?>
                    </option>
                    <option value="3">
                        <?php if (ICL_LANGUAGE_CODE == 'en'): ?>3 Bedrooms<?php endif; ?>
                        <?php if (ICL_LANGUAGE_CODE == 'fr'): ?>3 Bedrooms<?php endif; ?>
                    </option>
                </select>
            </span>

        </div>

    </div><!-- .leftside -->

    <div class="rightside">

        <div class="left">
			<?php if (ICL_LANGUAGE_CODE == 'en'): ?>
            <h3>Townhomes</h3>
            <p>2, 3, 4 Bedroom</p>
			<?php endif; ?>
			<?php if (ICL_LANGUAGE_CODE == 'fr'): ?>
			 <h3>Maisons de ville</h3>
            <p>1, 2, 3 et 4 chambres à coucher</p>
			<?php endif; ?>
        </div>

        <div class="right">

        <span id="dd_two" class="mos-dd">
            <select>
                <option value="hide">
                    <?php if (ICL_LANGUAGE_CODE == 'en'): ?>VIEW FLOOR PLANS<?php endif; ?>
                    <?php if (ICL_LANGUAGE_CODE == 'fr'): ?>VOIR LES PLANS D’ÉTAGE<?php endif; ?>
                </option>
                <option value="4">
                    <?php if (ICL_LANGUAGE_CODE == 'en'): ?>2 Bedrooms<?php endif; ?>
                    <?php if (ICL_LANGUAGE_CODE == 'fr'): ?>2 chambres<?php endif; ?>
                </option>
                <option value="5">
                    <?php if (ICL_LANGUAGE_CODE == 'en'): ?>3 Bedrooms<?php endif; ?>
                    <?php if (ICL_LANGUAGE_CODE == 'fr'): ?>3 chambres<?php endif; ?>
                </option>
                <option value="6">
                    <?php if (ICL_LANGUAGE_CODE == 'en'): ?>4 Bedrooms<?php endif; ?>
                    <?php if (ICL_LANGUAGE_CODE == 'fr'): ?>4 chambres<?php endif; ?>
                </option>
            </select>
        </span>

        </div>

    </div><!-- .rightside -->

</div><!-- #fp-dropdowns -->



        <!--------- SLIDER BEGINS ---------->
		
<div id="fp-disclaimer">
    <?php if (ICL_LANGUAGE_CODE == 'en'): ?>
        <p>All floor plans, specifications, and drawings are provided as general artist concepts, for information purposes only, and are subject to change without notice. They are not intended to be relied on for dimensions, materials, finishes, layout, appliances, or furniture placement. Homes are leased unfurnished.</p>
    <?php endif; ?>
    <?php if (ICL_LANGUAGE_CODE == 'fr'): ?>
        <p>Tous les plans d’étage, spécifications et illustrations sont de nature conceptuelle et fournis à titre indicatif seulement, et peuvent changer sans préavis. Ils ne doivent pas être utilisés pour guider les dimensions, les matériaux, les finitions, la disposition, les appareils ou l'emplacement des meubles. Les logements sont loués non meublés.</p>
    <?php endif; ?>
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
                <div class="slide-container"><div class="inner"><img data-featherlight="<?php bloginfo('template_url'); ?>/images/floorplans/B-B-studio-apartment-Mosaiq.png" src="<?php bloginfo('template_url'); ?>/images/floorplans/B-B-studio-apartment-Mosaiq.png" /></div></div>
                <div class="slide-container"><div class="inner"><img data-featherlight="<?php bloginfo('template_url'); ?>/images/floorplans/B-C-studio-apartment-Mosaiq.png" src="<?php bloginfo('template_url'); ?>/images/floorplans/B-C-studio-apartment-Mosaiq.png" /></div></div>
                <div class="slide-container"><div class="inner"><img data-featherlight="<?php bloginfo('template_url'); ?>/images/floorplans/1-C-apartment-Mosaiq.png" src="<?php bloginfo('template_url'); ?>/images/floorplans/1-C-apartment-Mosaiq.png" /></div></div>
                <div class="slide-container"><div class="inner"><img data-featherlight="<?php bloginfo('template_url'); ?>/images/floorplans/1-D-apartment-accessible-Mosaiq.png" src="<?php bloginfo('template_url'); ?>/images/floorplans/1-D-apartment-accessible-Mosaiq.png" /></div></div>
                <div class="slide-container"><div class="inner"><img data-featherlight="<?php bloginfo('template_url'); ?>/images/floorplans/1-G-apartment-Mosaiq.png" src="<?php bloginfo('template_url'); ?>/images/floorplans/1-G-apartment-Mosaiq.png" /></div></div>    
                <div class="slide-container"><div class="inner"><img data-featherlight="<?php bloginfo('template_url'); ?>/images/floorplans/2-B-townhome-Mosaiq.png" src="<?php bloginfo('template_url'); ?>/images/floorplans/2-B-townhome-Mosaiq.png" /></div></div>
                <div class="slide-container"><div class="inner"><img data-featherlight="<?php bloginfo('template_url'); ?>/images/floorplans/2-A-apartment-Mosaiq.png" src="<?php bloginfo('template_url'); ?>/images/floorplans/2-A-apartment-Mosaiq.png" /></div></div>
                <div class="slide-container"><div class="inner"><img data-featherlight="<?php bloginfo('template_url'); ?>/images/floorplans/2-B-apartment-Mosaiq.png" src="<?php bloginfo('template_url'); ?>/images/floorplans/2-B-apartment-Mosaiq.png" /></div></div>
                <div class="slide-container"><div class="inner"><img data-featherlight="<?php bloginfo('template_url'); ?>/images/floorplans/3-A-apartment-Mosaiq.png" src="<?php bloginfo('template_url'); ?>/images/floorplans/3-A-apartment-Mosaiq.png" /></div></div>
                <div class="slide-container"><div class="inner"><img data-featherlight="<?php bloginfo('template_url'); ?>/images/floorplans/3-F-townhome-Mosaiq.png" src="<?php bloginfo('template_url'); ?>/images/floorplans/3-F-townhome-Mosaiq.png" /></div></div>
                <div class="slide-container"><div class="inner"><img data-featherlight="<?php bloginfo('template_url'); ?>/images/floorplans/4-D-townhome-Mosaiq.png" src="<?php bloginfo('template_url'); ?>/images/floorplans/4-D-townhome-Mosaiq.png" /></div></div>
            <?php endif; ?>
            <?php if (ICL_LANGUAGE_CODE == 'fr'): ?>
                <div class="slide-container"><div class="inner"><img data-featherlight="<?php bloginfo('template_url'); ?>/images/floorplans/B-B-studio-apartment-Mosaiq-fr.png" src="<?php bloginfo('template_url'); ?>/images/floorplans/B-B-studio-apartment-Mosaiq-fr.png" /></div></div>
                <div class="slide-container"><div class="inner"><img data-featherlight="<?php bloginfo('template_url'); ?>/images/floorplans/B-C-studio-apartment-Mosaiq-fr.png" src="<?php bloginfo('template_url'); ?>/images/floorplans/B-C-studio-apartment-Mosaiq-fr.png" /></div></div>
                <div class="slide-container"><div class="inner"><img data-featherlight="<?php bloginfo('template_url'); ?>/images/floorplans/1-C-apartment-Mosaiq-fr.png" src="<?php bloginfo('template_url'); ?>/images/floorplans/1-C-apartment-Mosaiq-fr.png" /></div></div>
                <div class="slide-container"><div class="inner"><img data-featherlight="<?php bloginfo('template_url'); ?>/images/floorplans/1-D-apartment-Mosaiq-fr.png" src="<?php bloginfo('template_url'); ?>/images/floorplans/1-D-apartment-Mosaiq-fr.png" /></div></div>
                <div class="slide-container"><div class="inner"><img data-featherlight="<?php bloginfo('template_url'); ?>/images/floorplans/1-G-apartment-Mosaiq-fr.png" src="<?php bloginfo('template_url'); ?>/images/floorplans/1-G-apartment-Mosaiq-fr.png" /></div></div>    
                <div class="slide-container"><div class="inner"><img data-featherlight="<?php bloginfo('template_url'); ?>/images/floorplans/2-B-townhome-Mosaiq-fr.png" src="<?php bloginfo('template_url'); ?>/images/floorplans/2-B-townhome-Mosaiq-fr.png" /></div></div>
                <div class="slide-container"><div class="inner"><img data-featherlight="<?php bloginfo('template_url'); ?>/images/floorplans/2-A-apartment-Mosaiq-fr.png" src="<?php bloginfo('template_url'); ?>/images/floorplans/2-A-apartment-Mosaiq-fr.png" /></div></div>
                <div class="slide-container"><div class="inner"><img data-featherlight="<?php bloginfo('template_url'); ?>/images/floorplans/2-B-apartment-Mosaiq-fr.png" src="<?php bloginfo('template_url'); ?>/images/floorplans/2-B-apartment-Mosaiq-fr.png" /></div></div>
                <div class="slide-container"><div class="inner"><img data-featherlight="<?php bloginfo('template_url'); ?>/images/floorplans/3-B-apartment-Mosaiq-fr.png" src="<?php bloginfo('template_url'); ?>/images/floorplans/3-B-apartment-Mosaiq-fr.png" /></div></div>
                <div class="slide-container"><div class="inner"><img data-featherlight="<?php bloginfo('template_url'); ?>/images/floorplans/3-F-townhome-Mosaiq-fr.png" src="<?php bloginfo('template_url'); ?>/images/floorplans/3-F-townhome-Mosaiq-fr.png" /></div></div>
                <div class="slide-container"><div class="inner"><img data-featherlight="<?php bloginfo('template_url'); ?>/images/floorplans/4-D-townhome-Mosaiq-fr.png" src="<?php bloginfo('template_url'); ?>/images/floorplans/4-D-townhome-Mosaiq-fr.png" /></div></div>
            <?php endif; ?>
        </div><!-- #fp-slider -->

    </div><!-- #fpslider-wrapper-inner -->

</div><!-- #fpslider-wrapper -->






    <!-- end SLIDESHOW BANNER -->



        <!--------- SLIDER ENDS ------------>











    </div><!-- #page-wrapper -->





    <script>

        jQuery(document).ready(function() {
            adjustHeaderBGHeight();
        });

        jQuery(window).load(function () {
            adjustHeaderBGHeight();
        });


        jQuery(window).resize(function(){

            var timer;
            clearTimeout(timer);
            timer = setTimeout(function(){
                adjustHeaderBGHeight();
            }, 100);
            
        });

        function adjustHeaderBGHeight() {

        var window_width = viewportHelper().width;   
            
        if (window_width > 991) {
                var titleblock_h = jQuery('#floorplans-header .title-block').outerHeight();
                jQuery('#floorplans-header .image-block').height(titleblock_h);
        } else {
                jQuery('#floorplans-header .image-block').css('height','auto');
        }
        
        }

    </script>










<script>

    jQuery(document).ready(function() {

        jQuery('#homeslider').on('init', function(event, slick){
            jQuery('#homeslider-pagination .slick-dots li button').empty();
            slick.resize();
        });

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


        /*
        jQuery('#fpslider-prev').click(function(e){
            e.preventDefault();
            jQuery('#fpslider').slick('slickPrev');
        });

        jQuery('#fpslider-next').click(function(e){
            e.preventDefault();
            jQuery('#fpslider').slick('slickNext');
        });
        */
        





    });


</script>



<?php
get_footer('floorplanslanding');