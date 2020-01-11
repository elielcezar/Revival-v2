<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package storefront
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
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

</head>

<body <?php body_class(); ?>>

<header>
  <div class="container">

    <a class="menuBtn">
      <span class="lines"></span>
    </a>

    <div class="mainMenu">
    	<div class="mainContainer">

    	</div>
    </div>

    <?php
    do_action( 'storefront_header' );
    ?>

  </div>
</header>

<?php if( is_front_page() ) { ?>

  <div class="banners-destaque-desktop">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/banner-top-desktop.jpg" />
  </div>

  <div class="banners-destaque-mobile">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/banner-top-mobile.jpg" />
  </div>

<?php } ?>
