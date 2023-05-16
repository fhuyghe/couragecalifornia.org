import domReady from '@roots/sage/client/dom-ready';
import 'bootstrap';

/**
 * Application entrypoint
 */
domReady(async () => {

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

  if($('.about')){
    import('./routes/about.js')
  }

  if($('.home')){
    import('./routes/home.js')
  }
});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
if (import.meta.webpackHot) import.meta.webpackHot.accept(console.error);
