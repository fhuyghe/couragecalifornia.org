import Isotope from 'isotope-layout'

export default {
  init() {
    // JavaScript to be fired on the about us page

    var grid = document.querySelector('.grid');
    var iso = new Isotope( grid, {
      itemSelector: '.article',
      percentPosition: true,
      masonry: {
        columnWidth: '.grid-sizer',
      },
    });
    
    iso.imagesLoaded().progress( function() {
      iso.isotope('layout');
    });

    $('.categories ul li').click(function() {
      var data = $(this).attr('data-filter');
        iso.arrange({
          filter: data, // All grid items
        });
    });
  },
};
