import Isotope from 'isotope-layout'
import ImagesLoaded from 'imagesloaded'
import jQueryBridget from 'jquery-bridget';
import 'jquery-parallax.js/parallax'

jQueryBridget( 'isotope', Isotope, $ );
jQueryBridget( 'imagesLoaded', ImagesLoaded, $ );

export default {
  init() {
    // JavaScript to be fired on the home page
    $('.parallax-window').parallax({ imageSrc: '/path/to/image.jpg' });
    
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
