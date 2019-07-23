/*
Lucidica Theme Functions
Version: 1.0
Date: 2017-10-19
*/
/* Tracking calls via  Google Analytics*/
jQuery( document ).ready(function() {
    jQuery("nav#site-navigation").on('click','a[href^="tel"]', function() {
            ga('send', 'event', 'Phone Call Tracking', 'Click to Call', '0207-042-6310', 0);
            console.log('test');
        }
    );
});
/* Animated scrolling for anchor links on same page */
  jQuery(function() {
    jQuery('a[href*=#]:not([href=#])').click(function() {
      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
        var target = jQuery(this.hash);
        target = target.length ? target : jQuery('[name=' + this.hash.slice(1) +']');
        if (target.length) {
          jQuery('html,body').animate({
            scrollTop: target.offset().top - 220
          }, 1000);
          return false;
        }
      }
    });
  });
/* Progress bar section animation */
jQuery(function() {
    var progressbarContainer = jQuery('.progressbar');
    if (progressbarContainer.length > 0) {
        var progressbarBar = jQuery('.progressbar__bar');
        var progressbarBarFill = jQuery('.progressbar__bar-fill');
        var progressbarDescription = jQuery('.progressbar__description ul li');
        var progressbarIcons = jQuery('.progressbar__icons');
    }
    jQuery(progressbarContainer).on('click','.progressbar__icon', function (e) {
        //remove .selected from the icons
        jQuery(progressbarIcons).children('div').each(function () {jQuery(this).removeClass('selected')});
        //get index of clicked icon and add .selected to it
        var indexClicked = jQuery(progressbarIcons).find(this).addClass('selected').index();
        //change progress bar width
        jQuery(progressbarBarFill).css('width',(jQuery(progressbarBar).width() / 5) * indexClicked);
        //apply styles to li elements to match clicked icon
        jQuery(progressbarDescription).each(function (i) {
            jQuery(this).removeClass('visible current');
            if (i < indexClicked) {
                jQuery(this).addClass('visible');
            } else if (i === indexClicked) {
                jQuery(this).addClass('visible current');
            }
        });
    });
});
/* FAQ section */
    jQuery(function() {
        var faq = jQuery('.faq-section');
        if (faq.length > 0) {
            jQuery(faq).find('div').slideUp();
            jQuery(faq).on('click', 'h3', function (e) {
               jQuery(this).next().slideToggle();
            });
        }
    });
/* Toggle Show/Hide Main Navigation for small screen sizes */
  jQuery(function(){
    jQuery('.menu-toggle').click(function() {
      jQuery('#site-navigation').toggleClass( "toggled-on" );
    });
    jQuery('ul.site-nav > li > a').click(function() {  
      jQuery('#site-navigation').toggleClass( "toggled-on" );
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

( function( $ ) {
    var body    = $( 'body' ),
        _window = $( window );


    $(".profile-meta").click(function() {
        $(this).parent().toggleClass( 'expanded' );
    });


    /* Makes "skip to content" link work correctly in IE9 and Chrome for better accessibility */
    _window.on( 'hashchange.lucidica', function() {
        var element = document.getElementById( location.hash.substring( 1 ) );

        if ( element ) {
            if ( ! /^(?:a|select|input|button|textarea)$/i.test( element.tagName ) )
                element.tabIndex = -1;

            element.focus();
        }
    } );

    /*
    Add's form submission events watched by Google Analitycs
     */

    document.addEventListener( 'wpcf7mailsent', function( event ) {
        if ( '7556' == event.detail.contactFormId ) {
            gtag('event', 'Submission', {
                'event_category': 'Contact Us Form'
            });
        }
        if ( '4965' == event.detail.contactFormId ) {
            gtag('event', 'Submission', {
                'event_category': 'Request a quote Form'
            });
        }
        if ( '8876' == event.detail.contactFormId ) {
            gtag('event', 'Submission', {
                'event_category': 'Mom Contact Form'
            });
        }
    }, false );
} )( jQuery );