<?php
/**
* @packege ATMA
* @subpackage Malaycivilization
*/

require( get_template_directory() . '/lib/theme-updates/theme-update-checker.php' );
  new ThemeUpdateChecker(
    'ukm-malaycivilization-master',
    'https://raw.githubusercontent.com/mmUKM/ukm-malaycivilization/master/package.json'
);


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
add_action( 'after_setup_theme', 'mcv_setup' );
  
function mcv_scripts() {
  // CSS
  wp_deregister_script( 'jquery' );
  wp_enqueue_script( 'jquery', get_template_directory_uri() . '/lib/jquery/jquery.min.js', array(), '2.2.3', false );
  wp_enqueue_script( 'uikit', get_template_directory_uri() . '/lib/uikit/js/uikit.min.js', array(), '2.26.2', true );
  wp_enqueue_script( 'uikit-accordian', get_template_directory_uri() . '/lib/uikit/js/components/accordion.min.js', array(), '2.26.2', true );
  wp_enqueue_script( 'uikit-slider', get_template_directory_uri() . '/lib/uikit/js/components/slider.min.js', array(), '2.26.2', true );
  wp_enqueue_script( 'uikit-slideshow', get_template_directory_uri() . '/lib/uikit/js/components/slideshow.min.js', array(), '2.26.2', true );
  wp_enqueue_script( 'uikit-slideset', get_template_directory_uri() . '/lib/uikit/js/components/slideset.min.js', array(), '2.26.2', true );
  wp_enqueue_script( 'uikit-lightbox', get_template_directory_uri() . '/lib/uikit/js/components/lightbox.min.js', array(), '2.26.2', true );
  wp_enqueue_script( 'uikit-search', get_template_directory_uri() . '/lib/uikit/js/components/search.min.js', array(), '2.26.2', true );
  wp_enqueue_script( 'fitvidsjs', get_template_directory_uri() . '/lib/fitvids/jquery.fitvids.js', array(), '1.1.0', true );
  wp_enqueue_script( 'theme', get_template_directory_uri() . '/js/scripts.min.js', array(), '2017.0', true );
  // JS
  wp_enqueue_style( 'uikit', get_template_directory_uri() . '/lib/uikit/css/uikit.almost-flat.min.css', false, '2.26.2' );
  wp_enqueue_style( 'uikit-accordian', get_template_directory_uri() . '/lib/uikit/css/components/accordion.almost-flat.min.css', false, '2.26.2' );
  wp_enqueue_style( 'uikit-slider', get_template_directory_uri() . '/lib/uikit/css/components/slider.almost-flat.min.css', false, '2.26.2' );
  wp_enqueue_style( 'uikit-slideshow', get_template_directory_uri() . '/lib/uikit/css/components/slideshow.almost-flat.min.css', false, '2.26.2' );
  wp_enqueue_style( 'uikit-slidenav', get_template_directory_uri() . '/lib/uikit/css/components/slidenav.almost-flat.min.css', false, '2.26.2' );
  wp_enqueue_style( 'uikit-search', get_template_directory_uri() . '/lib/uikit/css/components/search.almost-flat.min.css', false, '2.26.2' );
  wp_enqueue_style( 'style', get_stylesheet_uri(), false, '2017.0' );
}
add_action( 'wp_enqueue_scripts', 'mcv_scripts' );

/**
 * Load configuration
 * Theme 
 */
function mcv_load_configurations() {

  require( get_template_directory() . '/inc/theme-metabox.php' );
  require( get_template_directory() . '/inc/theme-post-type.php' );
  require( get_template_directory() . '/inc/theme-responsive-menu.php' );

}
add_action( 'after_setup_theme', 'mcv_load_configurations' );


