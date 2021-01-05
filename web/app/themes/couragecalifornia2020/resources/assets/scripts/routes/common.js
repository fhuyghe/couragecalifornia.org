//import ScrollReveal from 'scrollreveal'

export default {
  init() {
    // JavaScript to be fired on all pages
    // var slideUp = {
    //   distance: '50%',
    //   origin: 'bottom',
    //   opacity: 0,
    // };
    // ScrollReveal().reveal('.slide-up', slideUp);
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired

    $('.hamburger').on('click', function () { 
      $('.top-banner').toggleClass('active');
    });
  },
};
