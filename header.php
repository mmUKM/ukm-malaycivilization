<?php
/**
* @packege ATMA
* @subpackage Malaycivilization
*/
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <?php endif; ?>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="sticky">
  <header>
    <nav class="top-nav">
      <?php
        wp_nav_menu(array(
          'theme_location'  => 'top',
          'menu'            => 'Top Navigation',
          'menu_id'         => 'top-nav-right',
          'container_id'    => 'top-nav',
          'container_class' => 'wrapper',
        ));
      ?>
    </nav>
    <div class="wrapper">
      <a href="<?php bloginfo( 'url' ); ?>">
        <img src="<?php echo get_template_directory_uri() . __( '/img/logo-mcv-en.svg', 'mcv' ); ?>" data-uk-svg>
      </a>
    </div>
  </header>
  <nav class="main-nav">
    <div class="wrapper">
      <?php
        wp_nav_menu(array(
          'theme_location'  => 'main',
          'menu'            => 'Main Navigation',
          'container_id'    => 'nav-main',
          'walker'          => new ATMA_Main_Nav_Walker()
        ));
      ?>
    </div>
  </nav>
