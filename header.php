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
  <header class="uk-width-small-1-1 uk-container-center uk-grid">
    <div class="uk-width-1-2">
    <img src="<?php echo get_template_directory_uri() . '/img/logo-mcv.svg'; ?>" title="<?php bloginfo( 'name' ); ?>"/>
    </div>
  </header>
<?php 
  wp_nav_menu(array(
    'menu' => 'Main Navigation',
    'container_id' => 'main-nav', 
    'walker' => new MCV_Main_Nav_Walker()
  ));
?>