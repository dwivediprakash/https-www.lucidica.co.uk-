define( [ 'jquery' ], function( $ ) {
  
  /* START COUNTER */
  
  !function(e){e.fn.countTo=function(t){t=e.extend({},e.fn.countTo.defaults,t||{});var n=Math.ceil(t.speed/t.refreshInterval),o=(t.to-t.from)/n;return e(this).each(function(){var l=this,r=0,a=t.from,f=setInterval(function(){a+=o,r++,e(l).html(a.toFixed(t.decimals)),"function"==typeof t.onUpdate&&t.onUpdate.call(l,a),r>=n&&(clearInterval(f),a=t.to,"function"==typeof t.onComplete&&t.onComplete.call(l,a))},t.refreshInterval)})},e.fn.countTo.defaults={from:0,to:100,speed:1e3,refreshInterval:100,decimals:0,onUpdate:null,onComplete:null}}(jQuery);

  $( '.counter' ).countTo({
    from: 50,
    to: 2500,
    speed: 3000,
    refreshInterval: 10,
    onComplete: function( value ) {
      console.debug( this );
    }
  });
  
  /* END COUNTER */

});