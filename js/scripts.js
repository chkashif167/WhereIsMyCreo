jQuery(document).ready(function($) {

     var mainheight = jQuery(window).height();
     var mainwidth = jQuery(window).width();

     jQuery(".slider").owlCarousel({
          items: 1,
          dots: false,
          autoplay: true,
          loop: true,
          nav: true,
     });

});