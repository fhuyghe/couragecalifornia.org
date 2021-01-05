export default {
  init() {
    // JavaScript to be fired on the about us page
    
    $('html').on('click',function () { 
      $('.person.active').removeClass('active');
    })

    $('.person').on('click', function (e) { 
      e.stopPropagation();
      $('.person.active').removeClass('active');
      $(e.target).parents('.person').toggleClass('active');
    });

    // Accordeon
    $('.accordeon .header').on('click', function (e) { 
      let $accordeon = $(e.target).parents('.accordeon');
      let $content = $('.row', $accordeon);
      let $contentHeight = $content[0].scrollHeight;

      if ($accordeon.hasClass('active')) {
        $content.height(0);
      } else { 
        $content.height($contentHeight + 'px');
      }

      $accordeon.toggleClass('active');

    });
  },
};
