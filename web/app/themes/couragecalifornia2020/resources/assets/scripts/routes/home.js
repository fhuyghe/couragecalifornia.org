import 'jquery-parallax.js/parallax'

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
