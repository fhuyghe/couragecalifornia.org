export default {
  init() {
    // JavaScript to be fired on the about us page
    
    $('html').click(function () { 
      $('.person.active').removeClass('active');
    })

    $('.person').click(function (e) { 
      e.stopPropagation();
      $(e.target).parents('.person').toggleClass('active');
    });
  },
};
