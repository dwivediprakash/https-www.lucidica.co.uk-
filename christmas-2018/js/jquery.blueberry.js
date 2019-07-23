/*
 * jQuery Blueberry Slider v0.4 BETA - Modifiedy by Tegan Snyder to add arrows
 * http://marktyrrell.com/labs/blueberry/
 *
 * Copyright (C) 2011, Mark Tyrrell <me@marktyrrell.com>
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 *=========================================================================== 
 * MAJOR EDITING BY WEBAKERY.ASIA FOR USE IN XMAS TEMPLATE ON ENVATO MARKET  
 *===========================================================================  
 */
(function ($) {
  $.fn.extend({
    blueberry: function (options) {

      //default values for plugin options
      var defaults = {
        interval: 15000,
        duration: 500,
        lineheight: 1,
        height: 'auto', //reserved
        hoverpause: false,
        pager: false,
        nav: false, //reserved
        keynav: false,
        arrows: true
      }
      var options = $.extend(defaults, options);
      return this.each(function () {
        $('.blueberry .slides').show();
        var o = options;
        var obj = $(this);
        //store the slide and pager li
        var slides = $('.slides li', obj);
        var pager = $('.pager li', obj);
        slides.each(function () {
          $("img", this).css({'max-width': $("img", this).width()});
          console.log($("img", this).width());
          // $("img", this).css({'max-width':500});
        });
        //set initial current and next slide index values
        var current = 0;
        var next = current + 1;
        //get height and width of initial slide image and calculate size ratio
        var imgHeight = slides.eq(current).find('img').height();
        var imgWidth = slides.eq(current).find('img').width();
        var imgRatio = imgWidth / imgHeight;
        //define vars for setsize function
        var sliderWidth = 0;
        var cropHeight = 0;
        //hide all slides, fade in the first, add active class to first slide
        slides.hide().eq(current).fadeIn(o.duration).addClass('active');
        // Set first price and title
        $('.product-title span').html(slides.eq(current).find('img').attr('title'));
        $('.product-title-second span').html(slides.eq(current).find('img').attr('data-filter'));
        // var customHref = ;
        $('.product-link a')
          .html(slides.eq(current).find('img').attr('alt'))
          .attr('href', slides.eq(current).find('img').attr('data-main'));
        $('.product-price').html(slides.eq(current).find('span').html());
        //build pager if it doesn't already exist and if enabled
        if (pager.length) {
          pager.eq(current).addClass('active');
        } else if (o.pager) {
          obj.append('<ul class="pager"></ul>');
          slides.each(function (index) {
            $('.pager', obj).append('<li><a href="#"><span>' + index + '</span></a></li>')
          });
          pager = $('.pager li', obj);
          pager.eq(current).addClass('active');
        }
        //rotate to selected slide on pager click
        if (pager) {
          $('a', pager).click(function () {
            //stop the timer
            clearTimeout(obj.play);
            //set the slide index based on pager index
            next = $(this).parent().index();
            //rotate the slides
            rotate();
            return false;
          });
        }
        //primary function to change slides
        var rotate = function () {

          // Fade Out the title and price
          $('.product-title span').fadeOut(o.duration);
          $('.product-title-second span').fadeOut(o.duration);
          $('.product-link a').fadeOut(o.duration);
          $('.product-price').fadeOut(o.duration);
          //fade out current slide and remove active class,
          //fade in next slide and add active class
          slides.eq(current).fadeOut(o.duration).removeClass('active')
            .end().eq(next).fadeIn(o.duration).addClass('active').queue(function () {
            //add rotateTimer function to end of animation queue
            //this prevents animation buildup caused by requestAnimationFrame
            //rotateTimer starts a timer for the next rotate
            rotateTimer();
            $(this).dequeue();
            $('.product-title span').html($("img", $(this)).attr('title')).fadeIn(o.duration);
            $('.product-title-second span').html($("img", $(this)).attr('data-filter')).fadeIn(o.duration);
            $('.product-link a')
              .html($("img", $(this)).attr('alt')).fadeIn(o.duration)
              .attr('href', slides.eq(current).find('img').attr('data-main'));
            $('.product-price').html($("span", $(this)).html()).fadeIn(o.duration);
          });
          //update current and next vars to reflect slide change
          //set next as first slide if current is the last
          current = next;
          next = current >= slides.length - 1 ? 0 : current + 1;
        };
        //create a timer to control slide rotation interval
        var rotateTimer = function () {
          obj.play = setTimeout(function () {
            //trigger slide rotate function at end of timer
            rotate();
          }, o.interval);
        };
        //start the timer for the first time
        rotateTimer();
        //pause the slider on hover
        //disabled by default due to bug
        if (o.hoverpause) {
          slides.hover(function () {
            //stop the timer in mousein
            clearTimeout(obj.play);
          }, function () {
            //start the timer on mouseout
            rotateTimer();
          });
        }
        //calculate and set height based on image width/height ratio and specified line height
        var setsize = function () {
          sliderWidth = $('.slides', obj).width();
          cropHeight = Math.floor(((sliderWidth / imgRatio) / o.lineheight)) * o.lineheight;
          $('.slides', obj).css({height: cropHeight});
        };
        //setsize();
        //bind setsize function to window resize event
        $(window).resize(function () {
          //setsize();
        });
        //Add arrows - Tegan Snyder
        if (o.arrows) {
          $('.arrow_right').click(function () {
            clearTimeout(obj.play);
            rotate();
          });
          $('.arrow_left').click(function () {
            clearTimeout(obj.play);
            next = current - 1;
            rotate();
          });
        }
        //Add keyboard navigation
        if (o.keynav) {
          $(document).keyup(function (e) {
            switch (e.which) {
              case 39:
              case 32: //right arrow & space
                clearTimeout(obj.play);
                rotate();
                break;
              case 37: // left arrow
                clearTimeout(obj.play);
                next = current - 1;
                rotate();
                break;
            }
          });
        }
      });
    }
  });
})(jQuery);