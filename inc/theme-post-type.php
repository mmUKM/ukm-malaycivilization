<?php
/**
 * @package ATMA
 * @subpackage malaycivilization
 * 
 * @global type $wp_query
 * @param type $template
 * @return type
 */
function atma_template_include( $template ) {
  
  global $wp_query;
  $plugindir = get_template_directory();

  $post_type = get_query_var('post_type');

  if( $post_type == 'atma_warisan' ) {
    return $plugindir . '/templates/single-atma_warisan.php';
  }

  if( $post_type == 'atma_padat' ) {
    return $plugindir . '/templates/single-atma_padat.php';
  }

  if( $post_type == 'atma_tpkh' ) {
    return $plugindir . '/templates/single-atma_tpkh.php';
  }

  if( $post_type == 'atma_kamus' ) {
    return $plugindir . '/templates/single-atma_kamus.php';
  }
  
  if( $post_type == 'atma_karya' ) {
    return $plugindir . '/templates/single-atma_karya.php';
  }

  if (is_tax( 'atma_warisan_category' )) {
    return $plugindir . '/templates/taxonomy-atma_warisan_category.php';
  }
  
  if (is_tax( 'atma_padat_category' )) {
    return $plugindir . '/templates/taxonomy-atma_padat_category.php';
  }
  
  if (is_tax( 'atma_tpkh_category' )) {
    return $plugindir . '/templates/taxonomy-atma_tpkh_category.php';
  }
  
  if (is_tax( 'atma_kamus_category' )) {
    return $plugindir . '/templates/taxonomy-atma_kamus_category.php';
  }
  
  if (is_tax( 'atma_karya_category' )) {
    return $plugindir . '/templates/taxonomy-atma_karya_category.php';
  }

  return $template;   
}
add_filter( 'template_include', 'atma_template_include' );

function atma_custom_post_type() {
  /**
   * Register Post Type
   * - Warisan
   * - PADAT
   * - Tokoh Pemikir dan Koleksi Khas
   * - Kamus
   * - Karya
   * - Slideshow
   */

  $labels = array(
    'name'                  => _x( 'Warisan', 'Post Type General Name', 'atma' ),
    'singular_name'         => _x( 'Warisan', 'Post Type Singular Name', 'atma' ),
    'menu_name'             => __( 'Warisan', 'atma' ),
    'name_admin_bar'        => __( 'Warisan', 'atma' ),
    'archives'              => __( 'Item Archives', 'atma' ),
    'parent_item_colon'     => __( 'Parent Item:', 'atma' ),
    'all_items'             => __( 'All Items', 'atma' ),
    'add_new_item'          => __( 'Add New Item', 'atma' ),
    'add_new'               => __( 'Add New', 'atma' ),
    'new_item'              => __( 'New Item', 'atma' ),
    'edit_item'             => __( 'Edit Item', 'atma' ),
    'update_item'           => __( 'Update Item', 'atma' ),
    'view_item'             => __( 'View Item', 'atma' ),
    'search_items'          => __( 'Search Item', 'atma' ),
    'not_found'             => __( 'Not found', 'atma' ),
    'not_found_in_trash'    => __( 'Not found in Trash', 'atma' ),
    'featured_image'        => __( 'Featured Image', 'atma' ),
    'set_featured_image'    => __( 'Set featured image', 'atma' ),
    'remove_featured_image' => __( 'Remove featured image', 'atma' ),
    'use_featured_image'    => __( 'Use as featured image', 'atma' ),
    'insert_into_item'      => __( 'Insert into item', 'atma' ),
    'uploaded_to_this_item' => __( 'Uploaded to this item', 'atma' ),
    'items_list'            => __( 'Items list', 'atma' ),
    'items_list_navigation' => __( 'Items list navigation', 'atma' ),
    'filter_items_list'     => __( 'Filter items list', 'atma' ),
  );
  $args = array(
    'label'                 => __( 'Warisan', 'atma' ),
    'description'           => __( 'Collections of Warisan', 'atma' ),
    'labels'                => $labels,
    'supports'              => array( 'title', 'revisions', 'page-attributes', ),
    'taxonomies'            => array( 'atma_warisan_category' ),
    'hierarchical'          => true,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    //'menu_position'         => 5,
    'menu_icon'             => get_template_directory_uri() . '/img/database.svg',
    'show_in_admin_bar'     => false,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => 'arkib-warisan',
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'query_var'             => 'warisan',
    'capability_type'       => 'page',
  );
  register_post_type( 'atma_warisan', $args );

  $labels = array(
    'name'                  => _x( 'PADAT', 'Post Type General Name', 'atma' ),
    'singular_name'         => _x( 'PADAT', 'Post Type Singular Name', 'atma' ),
    'menu_name'             => __( 'PADAT', 'atma' ),
    'name_admin_bar'        => __( 'PADAT', 'atma' ),
    'archives'              => __( 'Item Archives', 'atma' ),
    'parent_item_colon'     => __( 'Parent Item:', 'atma' ),
    'all_items'             => __( 'All Items', 'atma' ),
    'add_new_item'          => __( 'Add New Item', 'atma' ),
    'add_new'               => __( 'Add New', 'atma' ),
    'new_item'              => __( 'New Item', 'atma' ),
    'edit_item'             => __( 'Edit Item', 'atma' ),
    'update_item'           => __( 'Update Item', 'atma' ),
    'view_item'             => __( 'View Item', 'atma' ),
    'search_items'          => __( 'Search Item', 'atma' ),
    'not_found'             => __( 'Not found', 'atma' ),
    'not_found_in_trash'    => __( 'Not found in Trash', 'atma' ),
    'featured_image'        => __( 'Featured Image', 'atma' ),
    'set_featured_image'    => __( 'Set featured image', 'atma' ),
    'remove_featured_image' => __( 'Remove featured image', 'atma' ),
    'use_featured_image'    => __( 'Use as featured image', 'atma' ),
    'insert_into_item'      => __( 'Insert into item', 'atma' ),
    'uploaded_to_this_item' => __( 'Uploaded to this item', 'atma' ),
    'items_list'            => __( 'Items list', 'atma' ),
    'items_list_navigation' => __( 'Items list navigation', 'atma' ),
    'filter_items_list'     => __( 'Filter items list', 'atma' ),
  );
  $args = array(
    'label'                 => __( 'PADAT', 'atma' ),
    'description'           => __( 'Pangkalan Data ATMA', 'atma' ),
    'labels'                => $labels,
    'supports'              => array( 'title', 'revisions', 'page-attributes', ),
    'taxonomies'            => array( 'atma_padat_category' ),
    'hierarchical'          => true,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    //'menu_position'         => 5,
    'menu_icon'             => get_template_directory_uri() . '/img/database.svg',
    'show_in_admin_bar'     => false,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => 'arkib-padat',
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'query_var'             => 'padat',
    'capability_type'       => 'page',
  );
  register_post_type( 'atma_padat', $args );


  $labels = array(
    'name'                  => _x( 'Tokoh & Koleksi', 'Post Type General Name', 'atma' ),
    'singular_name'         => _x( 'Tokoh & Koleksi', 'Post Type Singular Name', 'atma' ),
    'menu_name'             => __( 'Tokoh & Koleksi', 'atma' ),
    'name_admin_bar'        => __( 'Tokoh & Koleksi', 'atma' ),
    'archives'              => __( 'Item Archives', 'atma' ),
    'parent_item_colon'     => __( 'Parent Item:', 'atma' ),
    'all_items'             => __( 'All Items', 'atma' ),
    'add_new_item'          => __( 'Add New Item', 'atma' ),
    'add_new'               => __( 'Add New', 'atma' ),
    'new_item'              => __( 'New Item', 'atma' ),
    'edit_item'             => __( 'Edit Item', 'atma' ),
    'update_item'           => __( 'Update Item', 'atma' ),
    'view_item'             => __( 'View Item', 'atma' ),
    'search_items'          => __( 'Search Item', 'atma' ),
    'not_found'             => __( 'Not found', 'atma' ),
    'not_found_in_trash'    => __( 'Not found in Trash', 'atma' ),
    'featured_image'        => __( 'Featured Image', 'atma' ),
    'set_featured_image'    => __( 'Set featured image', 'atma' ),
    'remove_featured_image' => __( 'Remove featured image', 'atma' ),
    'use_featured_image'    => __( 'Use as featured image', 'atma' ),
    'insert_into_item'      => __( 'Insert into item', 'atma' ),
    'uploaded_to_this_item' => __( 'Uploaded to this item', 'atma' ),
    'items_list'            => __( 'Items list', 'atma' ),
    'items_list_navigation' => __( 'Items list navigation', 'atma' ),
    'filter_items_list'     => __( 'Filter items list', 'atma' ),
  );
  $args = array(
    'label'                 => __( 'Tokoh & Koleksi', 'atma' ),
    'description'           => __( 'Tokoh Pemikir dan Koleksi Khas', 'atma' ),
    'labels'                => $labels,
    'supports'              => array( 'title', 'revisions', 'page-attributes', ),
    'taxonomies'            => array( 'atma_tpkh_category' ),
    'hierarchical'          => true,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    //'menu_position'         => 5,
    'menu_icon'             => get_template_directory_uri() . '/img/database.svg',
    'show_in_admin_bar'     => false,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => 'arkib-tpkh',
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'query_var'             => 'tpkh',
    'capability_type'       => 'page',
  );
  register_post_type( 'atma_tpkh', $args );

  $labels = array(
    'name'                  => _x( 'Kamus', 'Post Type General Name', 'atma' ),
    'singular_name'         => _x( 'Kamus', 'Post Type Singular Name', 'atma' ),
    'menu_name'             => __( 'Kamus', 'atma' ),
    'name_admin_bar'        => __( 'Kamus', 'atma' ),
    'archives'              => __( 'Item Archives', 'atma' ),
    'parent_item_colon'     => __( 'Parent Item:', 'atma' ),
    'all_items'             => __( 'All Items', 'atma' ),
    'add_new_item'          => __( 'Add New Item', 'atma' ),
    'add_new'               => __( 'Add New', 'atma' ),
    'new_item'              => __( 'New Item', 'atma' ),
    'edit_item'             => __( 'Edit Item', 'atma' ),
    'update_item'           => __( 'Update Item', 'atma' ),
    'view_item'             => __( 'View Item', 'atma' ),
    'search_items'          => __( 'Search Item', 'atma' ),
    'not_found'             => __( 'Not found', 'atma' ),
    'not_found_in_trash'    => __( 'Not found in Trash', 'atma' ),
    'featured_image'        => __( 'Featured Image', 'atma' ),
    'set_featured_image'    => __( 'Set featured image', 'atma' ),
    'remove_featured_image' => __( 'Remove featured image', 'atma' ),
    'use_featured_image'    => __( 'Use as featured image', 'atma' ),
    'insert_into_item'      => __( 'Insert into item', 'atma' ),
    'uploaded_to_this_item' => __( 'Uploaded to this item', 'atma' ),
    'items_list'            => __( 'Items list', 'atma' ),
    'items_list_navigation' => __( 'Items list navigation', 'atma' ),
    'filter_items_list'     => __( 'Filter items list', 'atma' ),
  );
  $args = array(
    'label'                 => __( 'Kamus', 'atma' ),
    'description'           => __( 'Colllections of Kamus', 'atma' ),
    'labels'                => $labels,
    'supports'              => array( 'title', 'revisions', 'page-attributes', ),
    'taxonomies'            => array( 'atma_kamus_category' ),
    'hierarchical'          => true,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    //'menu_position'         => 5,
    'menu_icon'             => get_template_directory_uri() . '/img/database.svg',
    'show_in_admin_bar'     => false,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => 'arkib-kamus',
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'query_var'             => 'kamus',
    'capability_type'       => 'page',
  );
  register_post_type( 'atma_kamus', $args );
  /**
   * Karya
   */
    $labels = array(
    'name'                  => _x( 'Karya', 'Post Type General Name', 'atma' ),
    'singular_name'         => _x( 'Karya', 'Post Type Singular Name', 'atma' ),
    'menu_name'             => __( 'Karya', 'atma' ),
    'name_admin_bar'        => __( 'Karya', 'atma' ),
    'archives'              => __( 'Item Archives', 'atma' ),
    'parent_item_colon'     => __( 'Parent Item:', 'atma' ),
    'all_items'             => __( 'All Items', 'atma' ),
    'add_new_item'          => __( 'Add New Item', 'atma' ),
    'add_new'               => __( 'Add New', 'atma' ),
    'new_item'              => __( 'New Item', 'atma' ),
    'edit_item'             => __( 'Edit Item', 'atma' ),
    'update_item'           => __( 'Update Item', 'atma' ),
    'view_item'             => __( 'View Item', 'atma' ),
    'search_items'          => __( 'Search Item', 'atma' ),
    'not_found'             => __( 'Not found', 'atma' ),
    'not_found_in_trash'    => __( 'Not found in Trash', 'atma' ),
    'featured_image'        => __( 'Featured Image', 'atma' ),
    'set_featured_image'    => __( 'Set featured image', 'atma' ),
    'remove_featured_image' => __( 'Remove featured image', 'atma' ),
    'use_featured_image'    => __( 'Use as featured image', 'atma' ),
    'insert_into_item'      => __( 'Insert into item', 'atma' ),
    'uploaded_to_this_item' => __( 'Uploaded to this item', 'atma' ),
    'items_list'            => __( 'Items list', 'atma' ),
    'items_list_navigation' => __( 'Items list navigation', 'atma' ),
    'filter_items_list'     => __( 'Filter items list', 'atma' ),
  );
  $args = array(
    'label'                 => __( 'Karya', 'atma' ),
    'description'           => __( 'Collections of Karya', 'atma' ),
    'labels'                => $labels,
    'supports'              => array( 'title', 'revisions', 'page-attributes', ),
    'taxonomies'            => array( 'atma_karya_category' ),
    'hierarchical'          => true,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    //'menu_position'         => 5,
    'menu_icon'             => get_template_directory_uri() . '/img/database.svg',
    'show_in_admin_bar'     => false,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => 'arkib-karya',
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'query_var'             => 'karya',
    'capability_type'       => 'page',
  );
  register_post_type( 'atma_karya', $args );
  /**
   * Slideshow
   */
  $labels = array(
    'name'                  => _x( 'Slideshows', 'Post Type General Name', 'atma' ),
    'singular_name'         => _x( 'Slideshow', 'Post Type Singular Name', 'atma' ),
    'menu_name'             => __( 'Slideshow', 'atma' ),
    'name_admin_bar'        => __( 'Slideshow', 'atma' ),
    'archives'              => __( 'Item Archives', 'atma' ),
    'parent_item_colon'     => __( 'Parent Item:', 'atma' ),
    'all_items'             => __( 'All Items', 'atma' ),
    'add_new_item'          => __( 'Add New Item', 'atma' ),
    'add_new'               => __( 'Add New', 'atma' ),
    'new_item'              => __( 'New Item', 'atma' ),
    'edit_item'             => __( 'Edit Item', 'atma' ),
    'update_item'           => __( 'Update Item', 'atma' ),
    'view_item'             => __( 'View Item', 'atma' ),
    'search_items'          => __( 'Search Item', 'atma' ),
    'not_found'             => __( 'Not found', 'atma' ),
    'not_found_in_trash'    => __( 'Not found in Trash', 'atma' ),
    'featured_image'        => __( 'Featured Image', 'atma' ),
    'set_featured_image'    => __( 'Set featured image', 'atma' ),
    'remove_featured_image' => __( 'Remove featured image', 'atma' ),
    'use_featured_image'    => __( 'Use as featured image', 'atma' ),
    'insert_into_item'      => __( 'Insert into item', 'atma' ),
    'uploaded_to_this_item' => __( 'Uploaded to this item', 'atma' ),
    'items_list'            => __( 'Items list', 'atma' ),
    'items_list_navigation' => __( 'Items list navigation', 'atma' ),
    'filter_items_list'     => __( 'Filter items list', 'atma' ),
  );
  $args = array(
    'label'                 => __( 'Slideshow', 'atma' ),
    'description'           => __( 'Frontpage slideshow banner', 'atma' ),
    'labels'                => $labels,
    'supports'              => array( 'title', 'revisions', 'page-attributes', ),
    'hierarchical'          => true,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    //'menu_position'         => 5,
    'menu_icon'             => get_template_directory_uri() . '/img/slideshow.svg',
    'show_in_admin_bar'     => false,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => false,   
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'query_var'             => 'slideshow',
    'capability_type'       => 'page',
  );
  register_post_type( 'atma_slideshow', $args );
}
add_action( 'init', 'atma_custom_post_type', 0 );

/**
 * Register Taxonomy for:
 * - Warisan
 * - PADAT
 * - Tokoh Pemikir & Koleksi Khas
 * - Kamus
 */

function atma_custom_taxonomy() {
  /**
   * @name Kategori Warisan
   */
  $labels = array(
    'name'                       => _x( 'Categories', 'Taxonomy General Name', 'atma' ),
    'singular_name'              => _x( 'Category', 'Taxonomy Singular Name', 'atma' ),
    'menu_name'                  => __( 'Category', 'atma' ),
    'all_items'                  => __( 'All Items', 'atma' ),
    'parent_item'                => __( 'Parent Item', 'atma' ),
    'parent_item_colon'          => __( 'Parent Item:', 'atma' ),
    'new_item_name'              => __( 'New Item Name', 'atma' ),
    'add_new_item'               => __( 'Add New Item', 'atma' ),
    'edit_item'                  => __( 'Edit Item', 'atma' ),
    'update_item'                => __( 'Update Item', 'atma' ),
    'view_item'                  => __( 'View Item', 'atma' ),
    'separate_items_with_commas' => __( 'Separate items with commas', 'atma' ),
    'add_or_remove_items'        => __( 'Add or remove items', 'atma' ),
    'choose_from_most_used'      => __( 'Choose from the most used', 'atma' ),
    'popular_items'              => __( 'Popular Items', 'atma' ),
    'search_items'               => __( 'Search Items', 'atma' ),
    'not_found'                  => __( 'Not Found', 'atma' ),
    'no_terms'                   => __( 'No items', 'atma' ),
    'items_list'                 => __( 'Items list', 'atma' ),
    'items_list_navigation'      => __( 'Items list navigation', 'atma' ),
  );
  $rewrite = array(
    'slug'                       => 'kategori-warisan',
    'with_front'                 => true,
    'hierarchical'               => false,
  );
  $args = array(
    'labels'                     => $labels,
    'hierarchical'               => true,
    'public'                     => true,
    'show_ui'                    => true,
    'show_admin_column'          => true,
    'show_in_nav_menus'          => true,
    'show_tagcloud'              => false,
    'rewrite'                    => $rewrite,
  );
  register_taxonomy( 'atma_warisan_category', array( 'atma_warisan' ), $args );
  
  /**
   * @name PADAT
   */
  $labels = array(
    'name'                       => _x( 'Categories', 'Taxonomy General Name', 'atma' ),
    'singular_name'              => _x( 'Category', 'Taxonomy Singular Name', 'atma' ),
    'menu_name'                  => __( 'Category', 'atma' ),
    'all_items'                  => __( 'All Items', 'atma' ),
    'parent_item'                => __( 'Parent Item', 'atma' ),
    'parent_item_colon'          => __( 'Parent Item:', 'atma' ),
    'new_item_name'              => __( 'New Item Name', 'atma' ),
    'add_new_item'               => __( 'Add New Item', 'atma' ),
    'edit_item'                  => __( 'Edit Item', 'atma' ),
    'update_item'                => __( 'Update Item', 'atma' ),
    'view_item'                  => __( 'View Item', 'atma' ),
    'separate_items_with_commas' => __( 'Separate items with commas', 'atma' ),
    'add_or_remove_items'        => __( 'Add or remove items', 'atma' ),
    'choose_from_most_used'      => __( 'Choose from the most used', 'atma' ),
    'popular_items'              => __( 'Popular Items', 'atma' ),
    'search_items'               => __( 'Search Items', 'atma' ),
    'not_found'                  => __( 'Not Found', 'atma' ),
    'no_terms'                   => __( 'No items', 'atma' ),
    'items_list'                 => __( 'Items list', 'atma' ),
    'items_list_navigation'      => __( 'Items list navigation', 'atma' ),
  );
  $rewrite = array(
    'slug'                       => 'kategori-padat',
    'with_front'                 => true,
    'hierarchical'               => false,
  );
  $args = array(
    'labels'                     => $labels,
    'hierarchical'               => true,
    'public'                     => true,
    'show_ui'                    => true,
    'show_admin_column'          => true,
    'show_in_nav_menus'          => true,
    'show_tagcloud'              => false,
    'rewrite'                    => $rewrite,
  );
  register_taxonomy( 'atma_padat_category', array( 'atma_padat' ), $args );
  
  /**
   * @name Tokoh Pemikir & Koleksi Khas
   */

  $labels = array(
    'name'                       => _x( 'Categories', 'Taxonomy General Name', 'atma' ),
    'singular_name'              => _x( 'Category', 'Taxonomy Singular Name', 'atma' ),
    'menu_name'                  => __( 'Category', 'atma' ),
    'all_items'                  => __( 'All Items', 'atma' ),
    'parent_item'                => __( 'Parent Item', 'atma' ),
    'parent_item_colon'          => __( 'Parent Item:', 'atma' ),
    'new_item_name'              => __( 'New Item Name', 'atma' ),
    'add_new_item'               => __( 'Add New Item', 'atma' ),
    'edit_item'                  => __( 'Edit Item', 'atma' ),
    'update_item'                => __( 'Update Item', 'atma' ),
    'view_item'                  => __( 'View Item', 'atma' ),
    'separate_items_with_commas' => __( 'Separate items with commas', 'atma' ),
    'add_or_remove_items'        => __( 'Add or remove items', 'atma' ),
    'choose_from_most_used'      => __( 'Choose from the most used', 'atma' ),
    'popular_items'              => __( 'Popular Items', 'atma' ),
    'search_items'               => __( 'Search Items', 'atma' ),
    'not_found'                  => __( 'Not Found', 'atma' ),
    'no_terms'                   => __( 'No items', 'atma' ),
    'items_list'                 => __( 'Items list', 'atma' ),
    'items_list_navigation'      => __( 'Items list navigation', 'atma' ),
  );
  $rewrite = array(
    'slug'                       => 'kategori-tpkh',
    'with_front'                 => true,
    'hierarchical'               => false,
  );
  $args = array(
    'labels'                     => $labels,
    'hierarchical'               => true,
    'public'                     => true,
    'show_ui'                    => true,
    'show_admin_column'          => true,
    'show_in_nav_menus'          => true,
    'show_tagcloud'              => false,
    'rewrite'                    => $rewrite,
  );
  register_taxonomy( 'atma_tpkh_category', array( 'atma_tpkh' ), $args );
  
  /**
   * @name Kamus
   */
    $labels = array(
    'name'                       => _x( 'Categories', 'Taxonomy General Name', 'atma' ),
    'singular_name'              => _x( 'Category', 'Taxonomy Singular Name', 'atma' ),
    'menu_name'                  => __( 'Category', 'atma' ),
    'all_items'                  => __( 'All Items', 'atma' ),
    'parent_item'                => __( 'Parent Item', 'atma' ),
    'parent_item_colon'          => __( 'Parent Item:', 'atma' ),
    'new_item_name'              => __( 'New Item Name', 'atma' ),
    'add_new_item'               => __( 'Add New Item', 'atma' ),
    'edit_item'                  => __( 'Edit Item', 'atma' ),
    'update_item'                => __( 'Update Item', 'atma' ),
    'view_item'                  => __( 'View Item', 'atma' ),
    'separate_items_with_commas' => __( 'Separate items with commas', 'atma' ),
    'add_or_remove_items'        => __( 'Add or remove items', 'atma' ),
    'choose_from_most_used'      => __( 'Choose from the most used', 'atma' ),
    'popular_items'              => __( 'Popular Items', 'atma' ),
    'search_items'               => __( 'Search Items', 'atma' ),
    'not_found'                  => __( 'Not Found', 'atma' ),
    'no_terms'                   => __( 'No items', 'atma' ),
    'items_list'                 => __( 'Items list', 'atma' ),
    'items_list_navigation'      => __( 'Items list navigation', 'atma' ),
  );
  $rewrite = array(
    'slug'                       => 'kategori-kamus',
    'with_front'                 => true,
    'hierarchical'               => false,
  );
  $args = array(
    'labels'                     => $labels,
    'hierarchical'               => true,
    'public'                     => true,
    'show_ui'                    => true,
    'show_admin_column'          => true,
    'show_in_nav_menus'          => true,
    'show_tagcloud'              => false,
    'rewrite'                    => $rewrite,
  );
  register_taxonomy( 'atma_kamus_category', array( 'atma_kamus' ), $args );
  /**
   * Karya
   */
      $labels = array(
    'name'                       => _x( 'Categories', 'Taxonomy General Name', 'atma' ),
    'singular_name'              => _x( 'Category', 'Taxonomy Singular Name', 'atma' ),
    'menu_name'                  => __( 'Category', 'atma' ),
    'all_items'                  => __( 'All Items', 'atma' ),
    'parent_item'                => __( 'Parent Item', 'atma' ),
    'parent_item_colon'          => __( 'Parent Item:', 'atma' ),
    'new_item_name'              => __( 'New Item Name', 'atma' ),
    'add_new_item'               => __( 'Add New Item', 'atma' ),
    'edit_item'                  => __( 'Edit Item', 'atma' ),
    'update_item'                => __( 'Update Item', 'atma' ),
    'view_item'                  => __( 'View Item', 'atma' ),
    'separate_items_with_commas' => __( 'Separate items with commas', 'atma' ),
    'add_or_remove_items'        => __( 'Add or remove items', 'atma' ),
    'choose_from_most_used'      => __( 'Choose from the most used', 'atma' ),
    'popular_items'              => __( 'Popular Items', 'atma' ),
    'search_items'               => __( 'Search Items', 'atma' ),
    'not_found'                  => __( 'Not Found', 'atma' ),
    'no_terms'                   => __( 'No items', 'atma' ),
    'items_list'                 => __( 'Items list', 'atma' ),
    'items_list_navigation'      => __( 'Items list navigation', 'atma' ),
  );
  $rewrite = array(
    'slug'                       => 'kategori-karya',
    'with_front'                 => true,
    'hierarchical'               => false,
  );
  $args = array(
    'labels'                     => $labels,
    'hierarchical'               => true,
    'public'                     => true,
    'show_ui'                    => true,
    'show_admin_column'          => true,
    'show_in_nav_menus'          => true,
    'show_tagcloud'              => false,
    'rewrite'                    => $rewrite,
  );
  register_taxonomy( 'atma_karya_category', array( 'atma_karya' ), $args );
}
add_action( 'init', 'atma_custom_taxonomy', 0 );