<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package storefront
 */

?><!doctype html>
<html>
<head>

<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<!-- Custom Fonts -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700,800&display=swap" rel="stylesheet">

<?php wp_head(); ?>

<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/slick/slick-theme.css"/>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WR5K2MC');</script>
<!-- End Google Tag Manager -->

</head>

<body <?php body_class(); ?>>

  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WR5K2MC"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<div class="se-pre-con">
  <div class="loader"></div>
</div>

<header>
  <div class="container">

    <a class="menuBtn">
      <span class="lines"></span>
    </a>

    <?php
    do_action( 'storefront_header' );
    ?>

  </div>

  <div class="mainMenu">
    <div class="mainContainer">

    </div>
  </div>

</header>

<?php if( is_front_page() ) { ?>
  <?php //echo do_shortcode('[rev_slider alias="home1-slider"]'); ?>
  <?php if( is_front_page() ) { ?>

    <div class="banners-destaque-desktop">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/banner-top-desktop.jpg" />
    </div>

    <div class="banners-destaque-mobile">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/banner-top-mobile.jpg" />
    </div>

  <?php } ?>
<?php } ?>
