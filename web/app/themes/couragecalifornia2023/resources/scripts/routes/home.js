import Isotope from 'isotope-layout'
import ImagesLoaded from 'imagesloaded'
import jQueryBridget from 'jquery-bridget';
import 'jquery-parallax.js/parallax.js'

// jQueryBridget( 'isotope', Isotope, $ );
// jQueryBridget( 'imagesLoaded', ImagesLoaded, $ );

console.log('HOME')

$('.parallax-window').parallax({ imageSrc: '/path/to/image.jpg' });
  
//Banner background
$(window).on('scroll', function () { 
  if ($(window).scrollTop() > 50) {
    $('.top-banner').addClass('scrolled');
  } else {  
    $('.top-banner').removeClass('scrolled');
  }
});
