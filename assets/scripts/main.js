/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can
 * always reference jQuery with $, even when in .noConflict() mode.
 * ======================================================================== */

(function($) {

  // Use this variable to set up the common and page specific functions. If you
  // rename this variable, you will also need to rename the namespace below.
  var Sage = {
    // All pages
    'common': {
      init: function() {
        // JavaScript to be fired on all pages
        // Flowtype for responsive font size
        $('body').flowtype({
         inimum   : 500,
         maximum   : 1200,
         minFont   : 12,
         maxFont   : 28,
         fontRatio : 30
        });
        //Smart navbar with headroom
        $('.navbar').headroom();
        //Slick Carousel
        $('.amor-carousel').slick({
          dots: true,
          arrows: false,
          speed: 500,
          fade: true,
          cssEase: 'linear',
          mobileFirst: true
        });
        //Sticky sidebar
        $('.sidebar').stick_in_parent();
        // Menu onClick, fade in, animate enter each <li>
        $('.btn-navbar').click(function() {
          $('.mobile-menu').show("slow");
          $('body').css('overflow-y', 'hidden;');
        });
        $('.glyphicon-remove').click(function() {
          $('.mobile-menu').hide("slow");
          $('body').css('overflow-y', 'show;');
        });
        //Newsletter
        $('.newsletter-email').attr("value", "Seu e-mail...");
        //Change font on focus
        $('.newsletter-email, .search-field').focusin(function () {
          $(this).css('font-family', 'arial').css('font-size', '0.8em');
        });
        $('.newsletter-email, .search-field').focusout(function () {
          $(this).css('font-family', 'arial').css('font-size', '0.8em');
        });
        //Mudar placeholder da area de pesquisa
        // $('.search-field').attr("placeholder", "Buscar...");
        //FIM JS
      },
      finalize: function() {
        // JavaScript to be fired on all pages, after page specific JS is fired
      }
    },
    // Home page
    'home': {
      init: function() {
        // JavaScript to be fired on the home page
      },
      finalize: function() {
        // JavaScript to be fired on the home page, after the init JS
      }
    },
    // About us page, note the change from about-us to about_us.
    'about_us': {
      init: function() {
        // JavaScript to be fired on the about us page
      }
    }
  };

  // The routing fires all common scripts, followed by the page specific scripts.
  // Add additional events for more control over timing e.g. a finalize event
  var UTIL = {
    fire: function(func, funcname, args) {
      var fire;
      var namespace = Sage;
      funcname = (funcname === undefined) ? 'init' : funcname;
      fire = func !== '';
      fire = fire && namespace[func];
      fire = fire && typeof namespace[func][funcname] === 'function';

      if (fire) {
        namespace[func][funcname](args);
      }
    },
    loadEvents: function() {
      // Fire common init JS
      UTIL.fire('common');

      // Fire page-specific init JS, and then finalize JS
      $.each(document.body.className.replace(/-/g, '_').split(/\s+/), function(i, classnm) {
        UTIL.fire(classnm);
        UTIL.fire(classnm, 'finalize');
      });

      // Fire common finalize JS
      UTIL.fire('common', 'finalize');
    }
  };

  // Load Events
  $(document).ready(UTIL.loadEvents);

})(jQuery); // Fully reference jQuery after this point.
