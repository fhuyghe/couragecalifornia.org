import Isotope from 'isotope-layout'
import ImagesLoaded from 'imagesloaded'
import jQueryBridget from 'jquery-bridget';

jQueryBridget( 'isotope', Isotope, $ );
jQueryBridget( 'imagesLoaded', ImagesLoaded, $ );

export default {
  init() {
    // JavaScript to be fired on the about us page

  
 
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired

    setTimeout(() => {
    let $grid = $('.grid'); 
    $grid.isotope( {
      itemSelector: '.article',
      percentPosition: true,
      layoutMode: 'fitRows',
      fitRows: {
        gutter: 20,
      },
    });
    
    $grid.imagesLoaded(function() {
      $grid.isotope('layout');
    });

      $('.categories ul li').click(function () {
        if ($(this).hasClass('active')) { 
          $('.categories li').removeClass('active');
          $grid.isotope({
              filter: '*', // All grid items
          });   
        } else { 
          $('.categories li').removeClass('active');
          $(this).addClass('active');
          var data = $(this).attr('data-filter');
          $grid.isotope({
              filter: data, // All grid items
          });   
        }
    });
      
    }, 2000); // Making sure the dev is setup
  },
};
