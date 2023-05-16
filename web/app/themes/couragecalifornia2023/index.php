<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>

    
  <!-- {{-- Font Awesome --}} -->
  <script src="https://kit.fontawesome.com/667efd8f5c.js" crossorigin="anonymous"></script>

  <!-- {{-- Google Font --}} -->
  <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">

  <script src="https://act.couragecampaign.org/resources/actionkit.js"></script>


  <!-- Google tag (gtag.js) --> 
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-R94VNCT2CV"></script>
  <script> window.dataLayer = window.dataLayer || []; 
  function gtag(){dataLayer.push(arguments);} 
  gtag('js', new Date()); 
  gtag('config', 'G-R94VNCT2CV');
  gtag('config', 'GTM-T9TS8F4');
  </script>

  </head>

  <body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <?php do_action('get_header'); ?>

    <div id="app">
      <?php echo view(app('sage.view'), app('sage.data'))->render(); ?>
    </div>

    <?php do_action('get_footer'); ?>
    <?php wp_footer(); ?>
  </body>
</html>
