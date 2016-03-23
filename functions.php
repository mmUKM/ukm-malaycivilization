<?php
/**
* @packege ATMA
* @subpackage Malaycivilization
*
*/

add_action( 'after_setup_theme', 'mcv_setup' );
  function mcv_setup() {
    
    add_theme_support( 'title-tag' );
    add_theme_support( 'html5', array( 'search-form' ) );
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 145, 145, true );
    remove_action( 'wp_head', 'wp_generator' );
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
    load_theme_textdomain( 'mcv', get_template_directory() . '/lang' );
    register_nav_menus( array(
      'top'       => __( 'Top Navigation', 'mcv' ),
      'main'      => __( 'Main Navigation', 'mcv' ),
      'footer'    => __( 'Footer Navigation', 'mcv' ),
    ) );
    add_filter( 'show_admin_bar', '__return_false' );
  }

/**
 * Load configuration
 * Theme 
 */

add_action( 'after_setup_theme', 'mcv_load_configuration' );
  function mcv_load_configurations() {
    
    require( get_template_directory() . '/inc/theme-metabox.php' );
    require( get_template_directory() . '/inc/theme-post-type.php' );
    
  }
