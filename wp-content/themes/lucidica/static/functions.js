/*
Lucidica Theme Functions
Version: 1.0
Date: 2017-10-19
*/


/* Animated scrolling for anchor links on same page */
  jQuery(function() {
    jQuery('a[href*=#]:not([href=#])').click(function() {
      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
        var target = jQuery(this.hash);
        target = target.length ? target : jQuery('[name=' + this.hash.slice(1) +']');
        if (target.length) {
          jQuery('html,body').animate({
            scrollTop: target.offset().top
          }, 1000);
          return false;
        }
      }
    });
  });


/* Toggle Show/Hide Main Navigation for small screen sizes */
  jQuery(function(){
    jQuery('.menu-toggle').click(function() {
      jQuery('#site-nav').toggleClass( "toggled-on" );
    });
    jQuery('ul.menu > li > a').click(function() {  
      jQuery('#site-nav').toggleClass( "toggled-on" );
    });
  });

/* Toggle Show/Hide page sections */
  jQuery('.more-link').click(function() {
    jQuery( ".more-info" ).slideToggle('slow', function() {
    });
    jQuery('.more-link').toggleClass( "expanded" );
  });

  jQuery(window).scroll(function() {    
    var scroll = jQuery(window).scrollTop();

    if (scroll >= 170) {
        jQuery(".navbar.home").removeClass("maximised");
    } else {
        jQuery(".navbar.home").addClass("maximised");
    }
  });