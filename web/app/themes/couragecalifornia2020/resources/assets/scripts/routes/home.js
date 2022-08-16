import Isotope from 'isotope-layout'
import ImagesLoaded from 'imagesloaded'
import jQueryBridget from 'jquery-bridget';

jQueryBridget( 'isotope', Isotope, $ );
jQueryBridget( 'imagesLoaded', ImagesLoaded, $ );

export default {
  init() {
    // JavaScript to be fired on the home page
    
    //Banner background
    $(window).on('scroll', function () { 
      if ($(window).scrollTop() > 50) {
        $('.top-banner').addClass('scrolled');
      } else {  
        $('.top-banner').removeClass('scrolled');
      }
    });
  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS

  },
};
