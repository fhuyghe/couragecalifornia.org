export default {
  init() {
    // JavaScript to be fired on all pages

  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
    $('.hamburger').on('click', function () { 
      $('.top-banner').toggleClass('active');
    });
    
    $('li.menu-item-has-children').on('click', function (e) { 
      $(e.target).toggleClass('active');
    })

    // Figure out if the user signed up to the newsletter
    let searchParams = new URLSearchParams(window.location.search)
    if (searchParams.has('action_id')) { 
      $('#newsletter .signup-success').show();
      $('#newsletter')[0].scrollIntoView();
    }
  },
};
