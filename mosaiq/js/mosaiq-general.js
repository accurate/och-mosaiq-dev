function viewportHelper() {
    var e = window, a = 'inner';
    if (!('innerWidth' in window )) {
        a = 'client';
        e = document.documentElement || document.body;
    }
    return { width : e[ a+'Width' ] , height : e[ a+'Height' ] };
}















/***** MOBILE MENU ******/


jQuery( document ).ready(function() {
	
	// tack on a "plus minus" toggle icon to all <li>s with child lists
	jQuery('ul#mobile-nav li').each(function() {
		
		if ( jQuery(this).children('ul').length ) {
			jQuery(this).children('a').after('<div class="toggle-icon closed"><img width="37" height="37" src="/wp-content/themes/mosaiq/images/74x74-icon-nav-plus.png" /></div>')
		}
		
	});
	
	
	//jQuery("#mobile-nav-wrapper ul ul").slideUp();

	// sliding functionality for accordion menu
	jQuery("ul#mobile-nav li .toggle-icon").click(function(e){
		e.preventDefault();
		var clickedRef = jQuery(this);
		
		//toggle the submenu's visibility
		jQuery(this).parent('li').children('ul').stop().slideToggle();
		
		if (clickedRef.hasClass('closed')) {
				clickedRef.removeClass('closed');
				clickedRef.addClass('open');
				clickedRef.html('<img width="37" height="37" src="/wp-content/themes/mosaiq/images/74x74-icon-nav-minus.png" />');
		} else {
			clickedRef.removeClass('open');
			clickedRef.addClass('closed');
			clickedRef.html('<img width="37" height="37" src="/wp-content/themes/mosaiq/images/74x74-icon-nav-plus.png" />');
		}
		
		/* toggle "plus minus" image after toggle animation is complete
		jQuery(this).parent('li').children('ul').promise().done(function() {
			
		}); */
		
	});
	
	
	
	// toggle menu on/off with 'menu' button
	jQuery( "a#mobile-nav-toggle" ).click(function(e) {
		e.preventDefault();
  		jQuery( "#mobile-nav-wrapper" ).stop().slideToggle();
	});
	
	
	
    // Dynamic CSS stuff for various screen sizes
    
	var $window = jQuery(window);
   
    function checkWidth() {
        var windowsize = $window.width();
        if (windowsize > 991) {
			// hide mobile accordion menu at desktop sizes
			if( jQuery("#mobile-nav-wrapper").css('display') != 'none') {
          		jQuery("#mobile-nav-wrapper").slideUp();
			}
			
        }
    }
	  
	jQuery(window).load(function() {
	  checkWidth();
	});
	
	
	jQuery(window).resize(function(){
	  checkWidth();
	});



	// Shorten Language Toggle Text on Mobile
	if( jQuery('body#fr').length == 0) { // English Content
		jQuery('#mobile-menu .wpml-ls-link span.wpml-ls-native').html('FR');
	} else { // French Content
		jQuery('#mobile-menu .wpml-ls-link span.wpml-ls-native').html('EN');
	}
	

    
});