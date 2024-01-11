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






<div id="floorplans-footer" class="bgcolor-grey">

  <div class="social-wrapper">

    <div class="row-social">

      <?php if (ICL_LANGUAGE_CODE == 'en'): ?>    
        <a class="social-icon" href="https://www.instagram.com/mosaiq811/" target="_blank" aria-label="link text - new window"><img src="<?php echo bloginfo('template_url'); ?>/images/logo-instagram-white.svg" alt="Visit us on Instagram" /></a>
        <a class="social-icon" href="https://twitter.com/Mosaiq811" target="_blank" aria-label="link text - new window"><img src="<?php echo bloginfo('template_url'); ?>/images/logo-twitter-white.svg" alt="Visit us on Instagram" /></a>
        <a class="social-icon" href="https://www.facebook.com/mosaiq811" target="_blank" aria-label="link text - new window"><img src="<?php echo bloginfo('template_url'); ?>/images/logo-facebook-white.svg" alt="Visit us on Instagram" /></a>
      <?php endif; ?>

      <?php if (ICL_LANGUAGE_CODE == 'fr'): ?>    
        <a class="social-icon" href="https://www.instagram.com/mosaiq811/" target="_blank" aria-label="link text - new window"><img src="<?php echo bloginfo('template_url'); ?>/images/logo-instagram-white.svg" alt="Visit us on Instagram" /></a>
        <a class="social-icon" href="https://twitter.com/Mosaiq811" target="_blank" aria-label="link text - new window"><img src="<?php echo bloginfo('template_url'); ?>/images/logo-twitter-white.svg" alt="Visit us on Instagram" /></a>
        <a class="social-icon" href="https://www.facebook.com/mosaiq811" target="_blank" aria-label="link text - new window"><img src="<?php echo bloginfo('template_url'); ?>/images/logo-facebook-white.svg" alt="Visit us on Instagram" /></a>
      <?php endif; ?>
    
    </div>

  </div>

  <div class="row-otherlinks">

      <?php if (ICL_LANGUAGE_CODE == 'en'): ?>    
        <div class="box email bgcolor-yellow">
          <a href="mailto:info@mosaiq811.ca" target="_blank">info@mosaiq811.ca</a>
        </div>
        <div class="box website bgcolor-green">
          <a href="https://mosaiq811.ca" target="_blank">Mosaiq811.ca</a>
        </div>
        <div class="box phone bgcolor-orange">
          
        </div>
      <?php endif; ?>

      <?php if (ICL_LANGUAGE_CODE == 'fr'): ?>    
        <div class="box email bgcolor-yellow">
          <a href="mailto:info@mosaiq811.ca" target="_blank">info@mosaiq811.ca</a>
        </div>
        <div class="box website bgcolor-green">
          <a href="https://mosaiq811.ca" target="_blank">Mosaiq811.ca</a>
        </div>
        <div class="box phone bgcolor-orange">
         
        </div>
      <?php endif; ?>

  </div>

  <div class="row-ourinvestors bgcolor-grey">

    <?php if (ICL_LANGUAGE_CODE == 'en'): ?>  
      <div class="oi-text"><p>Our Investors</p></div>
      <div class="icon"><img src="<?php bloginfo('template_url'); ?>/images/logo-canada.svg" alt="Government of Canada / Gouvernement du Canada" /></div>
      <div class="icon"><img src="<?php bloginfo('template_url'); ?>/images/logo-cmhc.svg" alt="Canada Housing and Mortgage Corporation / Société canadienne d'hypothèques et de logement" /></div>
      <div class="icon"><img src="<?php bloginfo('template_url'); ?>/images/logo-och.svg" alt="Ottawa Community Housing / La Société de Logement Communautaire d&#039;Ottawa" /></div>
      <div class="icon"><img src="<?php bloginfo('template_url'); ?>/images/logo-ontario.svg" alt="Government of Ontario / Gouvernement de l’Ontario" /></div>
      <div class="icon"><img src="<?php bloginfo('template_url'); ?>/images/logo-ottawa.svg" alt="City of Ottawa / ville d'Ottawa" /></div>
    <?php endif; ?>

    <?php if (ICL_LANGUAGE_CODE == 'fr'): ?>  
      <div class="oi-text"><p>Nos investisseurs</p></div>
      <div class="icon"><img src="<?php bloginfo('template_url'); ?>/images/logo-canada.svg" alt="Government of Canada / Gouvernement du Canada" /></div>
      <div class="icon"><img src="<?php bloginfo('template_url'); ?>/images/logo-cmhc.svg" alt="Canada Housing and Mortgage Corporation / Société canadienne d'hypothèques et de logement" /></div>
      <div class="icon"><img src="<?php bloginfo('template_url'); ?>/images/logo-och.svg" alt="Ottawa Community Housing / La Société de Logement Communautaire d&#039;Ottawa" /></div>
      <div class="icon"><img src="<?php bloginfo('template_url'); ?>/images/logo-ontario.svg" alt="Government of Ontario / Gouvernement de l’Ontario" /></div>
      <div class="icon"><img src="<?php bloginfo('template_url'); ?>/images/logo-ottawa.svg" alt="City of Ottawa / ville d'Ottawa" /></div>
    <?php endif; ?>
  
  </div>




</div><!-- #floorplans-footer -->












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


<?php wp_footer(); ?>

</body>

</html>