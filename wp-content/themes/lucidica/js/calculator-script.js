$(document).ready( function() {

	/* START CALCULATOR FORM */

  $( '#calc-button' ).on( 'click', function() {
  	countSummary();

		var name = $( '#calc-name' ),
				email = $( '#calc-email' ),
				message = result;

		if ( name.val().length >= 2 &&
				name.val().length <= 50 &&
				name.val().match(/^[a-zA-Z]+$/) &&
				email.val().length >= 3 &&
				email.val().length <= 50 &&
				email.val().match(/^([a-zA-Z0-9_.-])+@([a-zA-Z0-9_.-])+\.([a-zA-Z])+([a-zA-Z])+$/) &&
				message.match(/^[a-zA-Z0-9\.\-\|\s\n\<\>\/\+]+$/)
				) {
			$.ajax({
				type: 'POST',
				url: 'http://www.lucidica.com/wp-content/themes/lucidica/calculator-mailer.php',
				data: {
					name: name.val(),
					email: email.val(),
					message: $( '#summary' ).text() + ' with services' + message
				},
				success: function() {
					name.val( '' );
					email.val( '' );
				}
			});
		}

		if ( name.val().length >= 2 &&
				name.val().length <= 50 &&
				name.val().match(/^[a-zA-Z]+$/)  ) {
			name.removeClass( 'error' );
		} else {
			name.addClass( 'error' );
		}

		if ( email.val().length >= 3 &&
				email.val().length <= 50 &&
				email.val().match(/^([a-zA-Z0-9_.-])+@([a-zA-Z0-9_.-])+\.([a-zA-Z])+([a-zA-Z])+$/) ) {
			email.removeClass( 'error' );
		} else {
			email.addClass( 'error' );
		}
	});

	/* END CALCULATOR FORM */
  
  $( 'a' ).on( 'click', function( event ){
    if ( $( this ).prop( 'href' ) == '#' ) {
      event.preventDefault();
    }
  });
		
  /* START CALCULATOR */
  
  var count = 0,
      result;
  
  function countSummary() {
    count = 0;
    result = '';
    
    $( '.checked' ).each( function() {
      if ( $( this ).hasClass( 'input' ) ) {
        /*if ( $( this ).val() >= 0 ) {
          count += parseInt( $( this ).val() * $( this ).attr( 'data-price' ) );
        }*/
      } else if ( $( this ).hasClass( 'quantity' ) ) {
        count += parseInt( $( this ).attr( 'data-price' ) * $( 'input.quantity-input' ).val() );
      } else if ( $( this ).hasClass( 'siblings-numbers' )) {
        count += parseInt( $( this ).attr( 'data-price' ) * $( this ).parent( '.outbutton' ).siblings( '.siblings-numbers-input').val() );
      } else {
        count += parseInt( $( this ).attr( 'data-price' ) );
      }
			
      if ( $( this ).text() == 'No' ) {

      } else {
        result += ' | ' + ( $( this ).attr( 'data-id' ) ) + ' - ' + $( this ).attr( 'data-name' ) + ' ' + $( this ).val();
      }
    });
    $( '#summary' ).text( count + ' GBP' );
  }

  countSummary();
  
  $( 'div.radio-buttons' ).find( 'a.button' ).on( 'click', function() {
    $( this ).closest( 'div.radio-buttons' ).find( 'a.button' ).removeClass( 'checked' );
    $( this ).addClass( 'checked' );
    countSummary();
  });
  
  $( 'div.checkbox-buttons' ).find( 'a.button' ).on( 'click', function() {
    $( this ).toggleClass( 'checked' );
    countSummary();
  });
  
  $( 'input.input, .siblings-numbers-input' ).on( 'change keydown click keyup', function() {
    if ( $( this ).val() >= 1 ) {
      countSummary();
    }
  });
  
  $( 'div.siblings-buttons' ).find( 'a.button' ).on( 'click', function() {
    if ( $( this ).text() == 'No' ) {
      $( this ).closest( '.siblings' ).find( 'input' ).removeClass( 'active' );
    } else {
      $( this ).closest( '.siblings' ).find( 'input' ).addClass( 'active' );
    }
    $( this ).closest( 'div.siblings-buttons' ).find( 'a.button' ).removeClass( 'checked' );
    $( this ).addClass( 'checked' );
    countSummary();
  });




  
  /* END CALCULATOR */
  
	
	
  /* START SCROLL TO */
  
  $( '.nav li a' ).on( 'click', function(e) {
    if ( '' !== this.hash ) {
      e.preventDefault();
      var t = this.hash;
      $( 'html, body' ).animate({
        scrollTop: $( t).offset().top
      }, 800, function() {
        window.location.hash = t
      });
    }
  });
  
  /* END SCROLL TO */
	
	$( 'body' ).scrollspy({
		target: '#calc-nav-wrap',
		offset: 100
	});
	
	/* START FIXED BLOCKS */
	
	function fixedNav() {
		var nav = $( '#nav' ),
				blockOffset = 100;
    
		if ( $(window).scrollTop() > $( '#calc' ).offset().top - 100 && $(window).scrollTop() <= $( '#calc' ).offset().top + $( '#calc' ).outerHeight() - nav.outerHeight() - blockOffset ) {
			nav.addClass( 'fixed' ).removeClass( 'bottom' );
		} else if ( $(window).scrollTop() > $( '#calc' ).offset().top + $( '#calc' ).outerHeight() - nav.outerHeight() - 100 ) {
			nav.removeClass( 'fixed' ).addClass( 'bottom' );
		} else {
			nav.removeClass( 'fixed' ).removeClass( 'bottom' );
    }
	}
	
	fixedNav();
	
	function fixedCheckout() {
		var checkout = $( '#calc-checkout' ),
				blockOffset = 100;
    
		if ( $(window).scrollTop() > $( '#calc' ).offset().top - 100 && $(window).scrollTop() <= $( '#calc' ).offset().top + $( '#calc' ).outerHeight() - checkout.outerHeight() - blockOffset ) {
			checkout.addClass( 'fixed' ).removeClass( 'bottom' );
		} else if ( $(window).scrollTop() > $( '#calc' ).offset().top + $( '#calc' ).outerHeight() - checkout.outerHeight() - 100 ) {
			checkout.removeClass( 'fixed' ).addClass( 'bottom' );
		} else {
			checkout.removeClass( 'fixed' ).removeClass( 'bottom' );
    }
	}
	
	fixedCheckout();
  
  $(window).on( 'scroll', function() {
		fixedNav();
  });
  
  $(window).on( 'scroll', function() {
		fixedCheckout();
  });
	
	/* END FIXED BLOCKS */
  
});

// START SCROLLSPY

+function ($) {
  'use strict';

  function ScrollSpy(element, options ) {
    this.$body          = $(document.body)
    this.$scrollElement = $(element).is(document.body) ? $(window) : $(element)
    this.options        = $.extend({}, ScrollSpy.DEFAULTS, options )
    this.selector       = ( this.options.target || '' ) + ' .nav li > a'
    this.offsets        = []
    this.targets        = []
    this.activeTarget   = null
    this.scrollHeight   = 0

    this.$scrollElement.on( 'scroll.bs.scrollspy', $.proxy( this.process, this ))
    this.refresh()
    this.process()
  }

  ScrollSpy.VERSION  = '3.3.7'

  ScrollSpy.DEFAULTS = {
    offset: 10
  }

  ScrollSpy.prototype.getScrollHeight = function () {
    return this.$scrollElement[0].scrollHeight || Math.max( this.$body[0].scrollHeight, document.documentElement.scrollHeight)
  }

  ScrollSpy.prototype.refresh = function () {
    var that          = this
    var offsetMethod  = 'offset'
    var offsetBase    = 0

    this.offsets      = []
    this.targets      = []
    this.scrollHeight = this.getScrollHeight()

    if (!$.isWindow( this.$scrollElement[0])) {
      offsetMethod = 'position'
      offsetBase   = this.$scrollElement.scrollTop()
    }

    this.$body
      .find( this.selector)
      .map(function () {
        var $el   = $( this )
        var href  = $el.data( 'target' ) || $el.attr( 'href' )
        var $href = /^#./.test(href) && $(href)

        return ($href
          && $href.length
          && $href.is( ':visible' )
          && [[$href[offsetMethod]().top + offsetBase, href]]) || null
      })
      .sort(function (a, b) { return a[0] - b[0] })
      .each(function () {
        that.offsets.push( this[0])
        that.targets.push( this[1])
      })
  }

  ScrollSpy.prototype.process = function () {
    var scrollTop    = this.$scrollElement.scrollTop() + this.options.offset
    var scrollHeight = this.getScrollHeight()
    var maxScroll    = this.options.offset + scrollHeight - this.$scrollElement.height()
    var offsets      = this.offsets
    var targets      = this.targets
    var activeTarget = this.activeTarget
    var i

    if ( this.scrollHeight != scrollHeight) {
      this.refresh()
    }

    if (scrollTop >= maxScroll) {
      return activeTarget != (i = targets[targets.length - 1]) && this.activate(i)
    }

    if (activeTarget && scrollTop < offsets[0]) {
      this.activeTarget = null
      return this.clear()
    }

    for (i = offsets.length; i--;) {
      activeTarget != targets[i]
        && scrollTop >= offsets[i]
        && (offsets[i + 1] === undefined || scrollTop < offsets[i + 1])
        && this.activate( targets[i])
    }
  }

  ScrollSpy.prototype.activate = function ( target) {
    this.activeTarget = target

    this.clear()

    var selector = this.selector +
      '[data-target="' + target + '"],' +
      this.selector + '[href="' + target + '"]'

    var active = $(selector)
      .parents( 'li' )
      .addClass( 'active' )

    if (active.parent( '.dropdown-menu' ).length) {
      active = active
        .closest( 'li.dropdown' )
        .addClass( 'active' )
    }

    active.trigger( 'activate.bs.scrollspy' )
  }

  ScrollSpy.prototype.clear = function () {
    $( this.selector)
      .parentsUntil( this.options.target, '.active' )
      .removeClass( 'active' )
  }

  function Plugin(option) {
    return this.each(function () {
      var $this   = $( this )
      var data    = $this.data( 'bs.scrollspy' )
      var options = typeof option == 'object' && option

      if (!data) $this.data( 'bs.scrollspy', (data = new ScrollSpy( this, options )))
      if ( typeof option == 'string' ) data[option]()
    })
  }

  var old = $.fn.scrollspy

  $.fn.scrollspy             = Plugin
  $.fn.scrollspy.Constructor = ScrollSpy


  $.fn.scrollspy.noConflict = function () {
    $.fn.scrollspy = old
    return this
  }

  $(window).on( 'load.bs.scrollspy.data-api', function () {
    $( '[data-spy="scroll"]' ).each(function () {
      var $spy = $( this )
      Plugin.call($spy, $spy.data())
    })
  })

}(jQuery);

// END SCROLLSPY