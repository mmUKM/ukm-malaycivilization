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

  if( $post_type == 'atma_pantun' ) {
    return $plugindir . '/templates/single-atma_pantun.php';
  }
  
  if( $post_type == 'atma_peribahasa' ) {
    return $plugindir . '/templates/single-atma_peribahasa.php';
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

  if( $post_type == 'atma_audio' ) {
    return $plugindir . '/templates/single-atma_audio.php';
  }

  if( $post_type == 'atma_image' ) {
    return $plugindir . '/templates/single-atma_image.php';
  }

  if( $post_type == 'atma_video' ) {
    return $plugindir . '/templates/single-atma_video.php';
  }

  if( $post_type == 'atma_recipe' ) {
    return $plugindir . '/templates/single-atma_recipe.php';
  }

  if( $post_type == 'atma_buku' ) {
    return $plugindir . '/templates/single-atma_buku.php';
  }

  if ( is_tax( 'atma_warisan_category' ) ) {
    return $plugindir . '/templates/taxonomy-atma_warisan_category.php';
  }

  if ( is_tax( 'atma_warisan_database' ) ) {
    return $plugindir . '/templates/taxonomy-atma_warisan_database.php';
  }

  if ( is_tax( 'atma_warisan_keyword' ) ) {
    return $plugindir . '/templates/taxonomy-atma_warisan_keyword.php';
  }

  if ( is_tax( 'atma_warisan_topic' ) ) {
    return $plugindir . '/templates/taxonomy-atma_warisan_subject.php';
  }

  if ( is_tax( 'atma_warisan_topic' ) ) {
    return $plugindir . '/templates/taxonomy-atma_warisan_topic.php';
  }

  if ( is_tax( 'atma_padat_category' ) ) {
    return $plugindir . '/templates/taxonomy-atma_padat_category.php';
  }

  if ( is_tax( 'atma_padat_keyword' ) ) {
    return $plugindir . '/templates/taxonomy-atma_padat_keyword.php';
  }
  
  if ( is_tax( 'atma_pantun_category' ) ) {
    return $plugindir . '/templates/taxonomy-atma_pantun_category.php';
  }

  if ( is_tax( 'atma_tpkh_category' ) ) {
    return $plugindir . '/templates/taxonomy-atma_tpkh_category.php';
  }

  if ( is_tax( 'atma_kamus_category' ) ) {
    return $plugindir . '/templates/taxonomy-atma_kamus_category.php';
  }

  if ( is_tax( 'atma_karya_category' ) ) {
    return $plugindir . '/templates/taxonomy-atma_karya_category.php';
  }

  if ( is_tax( 'atma_media_category' ) ) {
    return $plugindir . '/templates/taxonomy-atma_media_category.php';
  }

  if ( is_tax( 'atma_recipe_category' ) ) {
    return $plugindir . '/templates/taxonomy-atma_recipe_category.php';
  }

  if ( is_tax( 'atma_buku_category' ) ) {
    return $plugindir . '/templates/taxonomy-atma_buku_category.php';
  }

  if ( is_tax( 'atma_database' ) ) {
    return $plugindir . '/templates/taxonomy-atma_database.php';
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
    'name'                  => _x( 'Pantun', 'Post Type General Name', 'atma' ),
    'singular_name'         => _x( 'Pantun', 'Post Type Singular Name', 'atma' ),
    'menu_name'             => __( 'Pantun', 'atma' ),
    'name_admin_bar'        => __( 'Pantun', 'atma' ),
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
    'label'                 => __( 'Pantun', 'atma' ),
    'description'           => __( 'Collections of Pantun', 'atma' ),
    'labels'                => $labels,
    'supports'              => array( 'title', 'revisions', 'page-attributes', ),
    'taxonomies'            => array( 'atma_warisan_category', 'atma_warisan_database', 'atma_warisan_keywords', 'atma_warisan_subject','atma_warisan_topic' ),
    'hierarchical'          => true,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    //'menu_position'         => 5,
    'menu_icon'             => get_template_directory_uri() . '/img/database.svg',
    'show_in_admin_bar'     => false,
    'show_in_nav_menus'     => false,
    'can_export'            => true,
    'has_archive'           => 'arkib-pantun',
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'query_var'             => 'Pantun',
    'capability_type'       => 'page',
  );
  register_post_type( 'atma_pantun', $args );

  $labels = array(
    'name'                  => _x( 'Peribahasa', 'Post Type General Name', 'atma' ),
    'singular_name'         => _x( 'Peribahasa', 'Post Type Singular Name', 'atma' ),
    'menu_name'             => __( 'Peribahasa', 'atma' ),
    'name_admin_bar'        => __( 'peribahasa', 'atma' ),
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
    'label'                 => __( 'Peribahasa', 'atma' ),
    'description'           => __( 'Collections of peribahasa', 'atma' ),
    'labels'                => $labels,
    'supports'              => array( 'title', 'revisions', 'page-attributes', ),
    'taxonomies'            => array( 'atma_warisan_category', 'atma_warisan_database', 'atma_warisan_keywords', 'atma_warisan_subject','atma_warisan_topic' ),
    'hierarchical'          => true,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    //'menu_position'         => 5,
    'menu_icon'             => get_template_directory_uri() . '/img/database.svg',
    'show_in_admin_bar'     => false,
    'show_in_nav_menus'     => false,
    'can_export'            => true,
    'has_archive'           => 'arkib-peribahasa',
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'query_var'             => 'peribahasa',
    'capability_type'       => 'page',
  );
  register_post_type( 'atma_peribahasa', $args );
  
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
    'taxonomies'            => array( 'atma_warisan_category', 'atma_warisan_database', 'atma_warisan_keywords', 'atma_warisan_subject','atma_warisan_topic' ),
    'hierarchical'          => true,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    //'menu_position'         => 5,
    'menu_icon'             => get_template_directory_uri() . '/img/database.svg',
    'show_in_admin_bar'     => false,
    'show_in_nav_menus'     => false,
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
    'show_in_nav_menus'     => false,
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
    'show_in_nav_menus'     => false,
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
    'show_in_nav_menus'     => false,
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
    'show_in_nav_menus'     => false,
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
    'show_in_nav_menus'     => false,
    'can_export'            => true,
    'has_archive'           => false,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'query_var'             => 'slideshow',
    'capability_type'       => 'page',
  );
  register_post_type( 'atma_slideshow', $args );

  /**
   * Audio
   */
  $labels = array(
    'name'                  => _x( 'Audios', 'Post Type General Name', 'atma' ),
    'singular_name'         => _x( 'Audio', 'Post Type Singular Name', 'atma' ),
    'menu_name'             => __( 'Audio', 'atma' ),
    'name_admin_bar'        => __( 'Audio', 'atma' ),
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
    'label'                 => __( 'Audio', 'atma' ),
    'description'           => __( 'Audio collections', 'atma' ),
    'labels'                => $labels,
    'supports'              => array( 'title', 'revisions', 'page-attributes', ),
    'hierarchical'          => true,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    //'menu_position'         => 5,
    'menu_icon'             => get_template_directory_uri() . '/img/database.svg',
    'show_in_admin_bar'     => false,
    'show_in_nav_menus'     => false,
    'can_export'            => true,
    'has_archive'           => false,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'query_var'             => 'audio',
    'capability_type'       => 'page',
  );
  register_post_type( 'atma_audio', $args );

  /**
   * Video
   */
  $labels = array(
    'name'                  => _x( 'Videos', 'Post Type General Name', 'atma' ),
    'singular_name'         => _x( 'Video', 'Post Type Singular Name', 'atma' ),
    'menu_name'             => __( 'Video', 'atma' ),
    'name_admin_bar'        => __( 'Video', 'atma' ),
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
    'label'                 => __( 'Video', 'atma' ),
    'description'           => __( 'Video collections', 'atma' ),
    'labels'                => $labels,
    'supports'              => array( 'title', 'revisions', 'page-attributes', ),
    'hierarchical'          => true,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    //'menu_position'         => 5,
    'menu_icon'             => get_template_directory_uri() . '/img/database.svg',
    'show_in_admin_bar'     => false,
    'show_in_nav_menus'     => false,
    'can_export'            => true,
    'has_archive'           => false,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'query_var'             => 'video',
    'capability_type'       => 'page',
  );
  register_post_type( 'atma_video', $args );

  /**
   * Image
   */
  $labels = array(
    'name'                  => _x( 'Images', 'Post Type General Name', 'atma' ),
    'singular_name'         => _x( 'Image', 'Post Type Singular Name', 'atma' ),
    'menu_name'             => __( 'Image', 'atma' ),
    'name_admin_bar'        => __( 'Image', 'atma' ),
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
    'label'                 => __( 'Image', 'atma' ),
    'description'           => __( 'Image collections', 'atma' ),
    'labels'                => $labels,
    'supports'              => array( 'title', 'revisions', 'page-attributes', ),
    'hierarchical'          => true,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    //'menu_position'         => 5,
    'menu_icon'             => get_template_directory_uri() . '/img/database.svg',
    'show_in_admin_bar'     => false,
    'show_in_nav_menus'     => false,
    'can_export'            => true,
    'has_archive'           => false,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'query_var'             => 'Image',
    'capability_type'       => 'page',
  );
  register_post_type( 'atma_image', $args );

  /**
   * Recipe
   */
  $labels = array(
    'name'                  => _x( 'Recipes', 'Post Type General Name', 'atma' ),
    'singular_name'         => _x( 'Recipe', 'Post Type Singular Name', 'atma' ),
    'menu_name'             => __( 'Recipe', 'atma' ),
    'name_admin_bar'        => __( 'Recipe', 'atma' ),
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
    'featured_Recipe'       => __( 'Featured Recipe', 'atma' ),
    'set_featured_Recipe'   => __( 'Set featured Recipe', 'atma' ),
    'remove_featured_Recipe'=> __( 'Remove featured Recipe', 'atma' ),
    'use_featured_Recipe'   => __( 'Use as featured Recipe', 'atma' ),
    'insert_into_item'      => __( 'Insert into item', 'atma' ),
    'uploaded_to_this_item' => __( 'Uploaded to this item', 'atma' ),
    'items_list'            => __( 'Items list', 'atma' ),
    'items_list_navigation' => __( 'Items list navigation', 'atma' ),
    'filter_items_list'     => __( 'Filter items list', 'atma' ),
  );
  $args = array(
    'label'                 => __( 'Recipe', 'atma' ),
    'description'           => __( 'Recipe collections', 'atma' ),
    'labels'                => $labels,
    'supports'              => array( 'title', 'revisions', 'page-attributes', ),
    'hierarchical'          => true,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    //'menu_position'         => 5,
    'menu_icon'             => get_template_directory_uri() . '/img/database.svg',
    'show_in_admin_bar'     => false,
    'show_in_nav_menus'     => false,
    'can_export'            => true,
    'has_archive'           => false,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'query_var'             => 'recipe',
    'capability_type'       => 'page',
  );
  register_post_type( 'atma_recipe', $args );

  $labels = array(
    'name'                  => _x( 'Book &amp; Article', 'Post Type General Name', 'atma' ),
    'singular_name'         => _x( 'Book &amp; Article', 'Post Type Singular Name', 'atma' ),
    'menu_name'             => __( 'Book &amp; Article', 'atma' ),
    'name_admin_bar'        => __( 'Book &amp; Article', 'atma' ),
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
    'label'                 => __( 'Book &amp; Article', 'atma' ),
    'description'           => __( 'Collections of Book &amp; Article', 'atma' ),
    'labels'                => $labels,
    'supports'              => array( 'title', 'revisions', 'page-attributes', ),
    'hierarchical'          => true,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    //'menu_position'         => 5,
    'menu_icon'             => get_template_directory_uri() . '/img/database.svg',
    'show_in_admin_bar'     => false,
    'show_in_nav_menus'     => false,
    'can_export'            => true,
    'has_archive'           => false,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'query_var'             => 'buku',
    'capability_type'       => 'page',
  );
  register_post_type( 'atma_buku', $args );
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
   * @name All Databases
   */
  $labels = array(
    'name'                       => _x( 'Databases', 'Taxonomy General Name', 'atma' ),
    'singular_name'              => _x( 'Database', 'Taxonomy Singular Name', 'atma' ),
    'menu_name'                  => __( 'Database', 'atma' ),
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
    'slug'                       => 'atma-database',
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
  register_taxonomy( 'atma_database', array( 'atma_recipe', 'atma_buku' ), $args );
  /**
   * @name Kategori Pantun
   */
  $labels = array(
    'name'                       => _x( 'Pantun Categories', 'Taxonomy General Name', 'atma' ),
    'singular_name'              => _x( 'Pantun Category', 'Taxonomy Singular Name', 'atma' ),
    'menu_name'                  => __( 'Pantun Category', 'atma' ),
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
    'slug'                       => 'category-pantun',
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
  register_taxonomy( 'atma_pantun_category', 'atma_pantun', $args );
  
  /**
   * @name Kategori Warisan
   */
  $labels = array(
    'name'                       => _x( 'Warisan Categories', 'Taxonomy General Name', 'atma' ),
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
    'slug'                       => 'category-warisan',
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
  register_taxonomy( 'atma_warisan_category', array( 'atma_warisan', 'atma_pantun', 'atma_peribahasa' ), $args );

  /**
   * @name Database Warisan
   */
  $labels = array(
    'name'                       => _x( 'Warisan Databases', 'Taxonomy General Name', 'atma' ),
    'singular_name'              => _x( 'Database', 'Taxonomy Singular Name', 'atma' ),
    'menu_name'                  => __( 'Database', 'atma' ),
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
    'slug'                       => 'database-warisan',
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
  register_taxonomy( 'atma_warisan_database', array( 'atma_warisan', 'atma_pantun', 'atma_peribahasa' ), $args );

  /**
   * @name Keyword Warisan
   */
  $labels = array(
    'name'                       => _x( 'Warisan Keywords', 'Taxonomy General Name', 'atma' ),
    'singular_name'              => _x( 'Keyword', 'Taxonomy Singular Name', 'atma' ),
    'menu_name'                  => __( 'Keyword', 'atma' ),
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
    'slug'                       => 'keyword-warisan',
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
  register_taxonomy( 'atma_warisan_keyword', array( 'atma_warisan', 'atma_pantun', 'atma_peribahasa' ), $args );
    /**
   * @name Subject Warisan
   */
  $labels = array(
    'name'                       => _x( 'Warisan Subjects', 'Taxonomy General Name', 'atma' ),
    'singular_name'              => _x( 'Subject', 'Taxonomy Singular Name', 'atma' ),
    'menu_name'                  => __( 'Subject', 'atma' ),
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
    'slug'                       => 'subject-warisan',
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
  register_taxonomy( 'atma_warisan_subject', array( 'atma_warisan', 'atma_pantun', 'atma_peribahasa' ), $args );
  /**
   * @name Topic Warisan
   */
  $labels = array(
    'name'                       => _x( 'Warisan Topics', 'Taxonomy General Name', 'atma' ),
    'singular_name'              => _x( 'Topic', 'Taxonomy Singular Name', 'atma' ),
    'menu_name'                  => __( 'Topic', 'atma' ),
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
    'slug'                       => 'topic-warisan',
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
  register_taxonomy( 'atma_warisan_topic', array( 'atma_warisan', 'atma_pantun', 'atma_peribahasa' ), $args );
  /**
   * @name PADAT
   */
  $labels = array(
    'name'                       => _x( 'PADAT Categories', 'Taxonomy General Name', 'atma' ),
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
   * @name Keyword PADAT
   */
    $labels = array(
    'name'                       => _x( 'PADAT Keywords', 'Taxonomy General Name', 'atma' ),
    'singular_name'              => _x( 'Keyword', 'Taxonomy Singular Name', 'atma' ),
    'menu_name'                  => __( 'Keyword', 'atma' ),
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
    'slug'                       => 'keyword-padat',
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
  register_taxonomy( 'atma_padat_keyword', array( 'atma_padat' ), $args );

  /**
   * @name Tokoh Pemikir & Koleksi Khas
   */

  $labels = array(
    'name'                       => _x( 'Tokoh Categories', 'Taxonomy General Name', 'atma' ),
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
    'name'                       => _x( 'Kamus Categories', 'Taxonomy General Name', 'atma' ),
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
    'name'                       => _x( 'Karya Categories', 'Taxonomy General Name', 'atma' ),
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

  /**
   * Kategori Media
   */
  $labels = array(
    'name'                       => _x( 'Media Categories', 'Taxonomy General Name', 'atma' ),
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
    'slug'                       => 'kategori-media',
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
  register_taxonomy( 'atma_media_category', array( 'atma_audio', 'atma_image', 'atma_video' ), $args );
  
  /**
   * @name Kategori Resepi
   */
  $labels = array(
    'name'                       => _x( 'Recipe Categories', 'Taxonomy General Name', 'atma' ),
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
    'slug'                       => 'category-recipe',
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
  register_taxonomy( 'atma_recipe_category', array( 'atma_recipe' ), $args );
/**
   * @name Kategori Buku
   */
  $labels = array(
    'name'                       => _x( 'Book & Article Categories', 'Taxonomy General Name', 'atma' ),
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
    'slug'                       => 'category-book',
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
  register_taxonomy( 'atma_buku_category', array( 'atma_buku' ), $args );
}
add_action( 'init', 'atma_custom_taxonomy', 0 );

/**
 * Manage custom column
 */
function set_atma_warisan_columns($columns) {
  return array(
      'cb'                    => '<input type="checkbox" />',
      'title'                 => __( 'Title', 'atma' ),
      'atma_warisan_category' => __( 'Category', 'atma' ),
      'atma_warisan_database' => __( 'Database', 'atma' ),
      'atma_warisan_topic'    => __( 'Topic', 'atma' ),
      'atma_warisan_subject'  => __( 'Subject', 'atma' ),
      'date'                  => __( 'Date' )
  );
}

function custom_atma_warisan_column( $column, $post_id ) {
  switch ( $column ) {
    case 'atma_warisan_category' : echo get_the_term_list( $post->ID, 'atma_warisan_category', '', ', ','' ); break;
    case 'atma_warisan_database' : echo get_the_term_list( $post->ID, 'atma_warisan_database', '', ', ','' ); break;
    case 'atma_warisan_topic' : echo get_the_term_list( $post->ID, 'atma_warisan_topic', '', ', ','' ); break;
    case 'atma_warisan_subject' : echo get_the_term_list( $post->ID, 'atma_warisan_subject', '', ', ','' ); break;
  }
}

add_filter( 'manage_atma_warisan_posts_columns' , 'set_atma_warisan_columns' );
add_action( 'manage_atma_warisan_posts_custom_column' , 'custom_atma_warisan_column', 10, 2 );
