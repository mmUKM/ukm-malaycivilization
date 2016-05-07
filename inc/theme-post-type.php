<?php
/**
 * @package ATMA
 * @subpackage malaycivilization
 * @since 1.0
 */
function mcv_custom_module() {

  /*
   * List Module
   * --------------------------------------------------
   * 01. Adat Perpatih
   * 02. Karya Jawi (Jawi Works)
   * 03. Karya Khas N. A Halim
   * 04. Pangkalan Data ATMA (PADAT)
   * 05. Malay Dictionary Of End Syllables
   * 06. Malay Dictionaries By Non-Malays
   * 07. Sari Online
   * 08. Peribahasa
   * 09. Pantun Baba
   * 10. Sejuta Pantun
   * 11. Koleksi Tenas Effendy
   * 12. Koleksi Yang Quee Yee
   * 13. Seni Ukir Kayu
   * 14. Tokoh Pemikir Alam Melayu
   * 15. Slideshow
   * ---------------------------------------------------
   * Custom Module 01
   * Module Name: Adat Perpatih
   */

  $labels = array(
    'name'                  => _x( 'Adat Perpatih', 'Post Type General Name', 'mcv' ),
    'singular_name'         => _x( 'Adat Perpatih', 'Post Type Singular Name', 'mcv' ),
    'menu_name'             => __( 'Adat Perpatih', 'mcv' ),
    'name_admin_bar'        => __( 'Adat Perpatih', 'mcv' ),
    'archives'              => __( 'Item Archives', 'mcv' ),
    'parent_item_colon'     => __( 'Parent:', 'mcv' ),
    'all_items'             => __( 'All', 'mcv' ),
    'add_new_item'          => __( 'Add New', 'mcv' ),
    'add_new'               => __( 'Add New', 'mcv' ),
    'new_item'              => __( 'New', 'mcv' ),
    'edit_item'             => __( 'Edit', 'mcv' ),
    'update_item'           => __( 'Update', 'mcv' ),
    'view_item'             => __( 'View', 'mcv' ),
    'search_items'          => __( 'Search', 'mcv' ),
    'not_found'             => __( 'Not found', 'mcv' ),
    'not_found_in_trash'    => __( 'Not found in Trash', 'mcv' ),
    'featured_image'        => __( 'Featured Image', 'mcv' ),
    'set_featured_image'    => __( 'Set featured image', 'mcv' ),
    'remove_featured_image' => __( 'Remove featured image', 'mcv' ),
    'use_featured_image'    => __( 'Use as featured image', 'mcv' ),
    'insert_into_item'      => __( 'Insert into item', 'mcv' ),
    'uploaded_to_this_item' => __( 'Uploaded to this item', 'mcv' ),
    'items_list'            => __( 'Items list', 'mcv' ),
    'items_list_navigation' => __( 'Items list navigation', 'mcv' ),
    'filter_items_list'     => __( 'Filter items list', 'mcv' ),
  );
  $rewrite = array(
    'slug'                  => 'adat_perpatih',
    'with_front'            => true,
    'pages'                 => true,
    'feeds'                 => true,
  );
  $args = array(
    'label'                 => __( 'Adat Perpatih', 'mcv' ),
    'description'           => __( 'Collections of  Negeri Sembilan Public Library and The Museum of Negeri Sembilan.', 'mcv' ),
    'labels'                => $labels,
    'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions', 'page-attributes', ),
    'taxonomies'            => array( 'mcv_adat_pepatih_category' ),
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    //'menu_position'         => 5,
    'menu_icon'             => get_template_directory_uri() . '/img/database.svg',
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => true,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'rewrite'               => $rewrite,
    'capability_type'       => 'post',
  );
  register_post_type( 'mcv_adat_pepatih', $args );

  /*
   * Custom Module 02
   * Module Name: Karya Jawi (Jawi Works)
   */

  $labels = array(
    'name'                  => _x( 'Karya Jawi', 'Post Type General Name', 'mcv' ),
    'singular_name'         => _x( 'Karya Jawi', 'Post Type Singular Name', 'mcv' ),
    'menu_name'             => __( 'Karya Jawi', 'mcv' ),
    'name_admin_bar'        => __( 'Karya Jawi', 'mcv' ),
    'archives'              => __( 'Item Archives', 'mcv' ),
    'parent_item_colon'     => __( 'Parent:', 'mcv' ),
    'all_items'             => __( 'All', 'mcv' ),
    'add_new_item'          => __( 'Add New', 'mcv' ),
    'add_new'               => __( 'Add New', 'mcv' ),
    'new_item'              => __( 'New', 'mcv' ),
    'edit_item'             => __( 'Edit', 'mcv' ),
    'update_item'           => __( 'Update', 'mcv' ),
    'view_item'             => __( 'View', 'mcv' ),
    'search_items'          => __( 'Search', 'mcv' ),
    'not_found'             => __( 'Not found', 'mcv' ),
    'not_found_in_trash'    => __( 'Not found in Trash', 'mcv' ),
    'featured_image'        => __( 'Featured Image', 'mcv' ),
    'set_featured_image'    => __( 'Set featured image', 'mcv' ),
    'remove_featured_image' => __( 'Remove featured image', 'mcv' ),
    'use_featured_image'    => __( 'Use as featured image', 'mcv' ),
    'insert_into_item'      => __( 'Insert into item', 'mcv' ),
    'uploaded_to_this_item' => __( 'Uploaded to this item', 'mcv' ),
    'items_list'            => __( 'Items list', 'mcv' ),
    'items_list_navigation' => __( 'Items list navigation', 'mcv' ),
    'filter_items_list'     => __( 'Filter items list', 'mcv' ),
  );
  $rewrite = array(
    'slug'                  => 'karya_jawi',
    'with_front'            => true,
    'pages'                 => true,
    'feeds'                 => true,
  );
  $args = array(
    'label'                 => __( 'Karya Jawi', 'mcv' ),
    'description'           => __( 'Collections of  Negeri Sembilan Public Library and The Museum of Negeri Sembilan.', 'mcv' ),
    'labels'                => $labels,
    'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions', 'page-attributes', ),
    'taxonomies'            => array( 'mcv_karya_jawi_category' ),
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    //'menu_position'         => 5,
    'menu_icon'             => get_template_directory_uri() . '/img/database.svg',
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => true,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'rewrite'               => $rewrite,
    'capability_type'       => 'post',
  );
  register_post_type( 'mcv_karya_jawi', $args );

  /*
   * Custom Module 03
   * Module Name: Koleksi Khas N.A. Halim
   */

  $labels = array(
    'name'                  => _x( 'N A Halim', 'Post Type General Name', 'mcv' ),
    'singular_name'         => _x( 'N A Halim', 'Post Type Singular Name', 'mcv' ),
    'menu_name'             => __( 'N A Halim', 'mcv' ),
    'name_admin_bar'        => __( 'N A Halim', 'mcv' ),
    'archives'              => __( 'Item Archives', 'mcv' ),
    'parent_item_colon'     => __( 'Parent:', 'mcv' ),
    'all_items'             => __( 'All', 'mcv' ),
    'add_new_item'          => __( 'Add New', 'mcv' ),
    'add_new'               => __( 'Add New', 'mcv' ),
    'new_item'              => __( 'New', 'mcv' ),
    'edit_item'             => __( 'Edit', 'mcv' ),
    'update_item'           => __( 'Update', 'mcv' ),
    'view_item'             => __( 'View', 'mcv' ),
    'search_items'          => __( 'Search', 'mcv' ),
    'not_found'             => __( 'Not found', 'mcv' ),
    'not_found_in_trash'    => __( 'Not found in Trash', 'mcv' ),
    'featured_image'        => __( 'Featured Image', 'mcv' ),
    'set_featured_image'    => __( 'Set featured image', 'mcv' ),
    'remove_featured_image' => __( 'Remove featured image', 'mcv' ),
    'use_featured_image'    => __( 'Use as featured image', 'mcv' ),
    'insert_into_item'      => __( 'Insert into item', 'mcv' ),
    'uploaded_to_this_item' => __( 'Uploaded to this item', 'mcv' ),
    'items_list'            => __( 'Items list', 'mcv' ),
    'items_list_navigation' => __( 'Items list navigation', 'mcv' ),
    'filter_items_list'     => __( 'Filter items list', 'mcv' ),
  );
  $rewrite = array(
    'slug'                  => 'na_halim',
    'with_front'            => true,
    'pages'                 => true,
    'feeds'                 => true,
  );
  $args = array(
    'label'                 => __( 'N A Halim', 'mcv' ),
    'description'           => __( 'Collections of  N.A. Halim.', 'mcv' ),
    'labels'                => $labels,
    'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions', 'page-attributes', ),
    'taxonomies'            => array( 'mcv_na_halim_category' ),
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    //'menu_position'         => 5,
    'menu_icon'             => get_template_directory_uri() . '/img/database.svg',
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => true,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'rewrite'               => $rewrite,
    'capability_type'       => 'post',
  );
  register_post_type( 'mcv_na_halim', $args );

   /*
   * Custom Module 04
   * Module Name: Pangkalan Data ATMA (PADAT)
   */

  $labels = array(
    'name'                  => _x( 'Pangkalan Data ATMA', 'Post Type General Name', 'mcv' ),
    'singular_name'         => _x( 'Pangkalan Data ATMA', 'Post Type Singular Name', 'mcv' ),
    'menu_name'             => __( 'Pangkalan Data ATMA', 'mcv' ),
    'name_admin_bar'        => __( 'Pangkalan Data ATMA', 'mcv' ),
    'archives'              => __( 'Item Archives', 'mcv' ),
    'parent_item_colon'     => __( 'Parent:', 'mcv' ),
    'all_items'             => __( 'All', 'mcv' ),
    'add_new_item'          => __( 'Add New', 'mcv' ),
    'add_new'               => __( 'Add New', 'mcv' ),
    'new_item'              => __( 'New', 'mcv' ),
    'edit_item'             => __( 'Edit', 'mcv' ),
    'update_item'           => __( 'Update', 'mcv' ),
    'view_item'             => __( 'View', 'mcv' ),
    'search_items'          => __( 'Search', 'mcv' ),
    'not_found'             => __( 'Not found', 'mcv' ),
    'not_found_in_trash'    => __( 'Not found in Trash', 'mcv' ),
    'featured_image'        => __( 'Featured Image', 'mcv' ),
    'set_featured_image'    => __( 'Set featured image', 'mcv' ),
    'remove_featured_image' => __( 'Remove featured image', 'mcv' ),
    'use_featured_image'    => __( 'Use as featured image', 'mcv' ),
    'insert_into_item'      => __( 'Insert into item', 'mcv' ),
    'uploaded_to_this_item' => __( 'Uploaded to this item', 'mcv' ),
    'items_list'            => __( 'Items list', 'mcv' ),
    'items_list_navigation' => __( 'Items list navigation', 'mcv' ),
    'filter_items_list'     => __( 'Filter items list', 'mcv' ),
  );
  $rewrite = array(
    'slug'                  => 'padat',
    'with_front'            => true,
    'pages'                 => true,
    'feeds'                 => true,
  );
  $args = array(
    'label'                 => __( 'Pangkalan Data ATMA', 'mcv' ),
    'description'           => __( 'Collections of  N.A. Halim.', 'mcv' ),
    'labels'                => $labels,
    'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions', 'page-attributes', ),
    'taxonomies'            => array( 'mcv_padat_category' ),
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    //'menu_position'         => 5,
    'menu_icon'             => get_template_directory_uri() . '/img/database.svg',
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => true,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'rewrite'               => $rewrite,
    'capability_type'       => 'post',
  );
  register_post_type( 'mcv_padat', $args );

   /*
   * Custom Module 05
   * Module Name: Malay Dictionary Of End Syllables
   */

  $labels = array(
    'name'                  => _x( 'Malay Dictionary Of End Syllables', 'Post Type General Name', 'mcv' ),
    'singular_name'         => _x( 'Malay Dictionary Of End Syllables', 'Post Type Singular Name', 'mcv' ),
    'menu_name'             => __( 'Malay Dictionary Of End Syllables', 'mcv' ),
    'name_admin_bar'        => __( 'Malay Dictionary Of End Syllables', 'mcv' ),
    'archives'              => __( 'Item Archives', 'mcv' ),
    'parent_item_colon'     => __( 'Parent:', 'mcv' ),
    'all_items'             => __( 'All', 'mcv' ),
    'add_new_item'          => __( 'Add New', 'mcv' ),
    'add_new'               => __( 'Add New', 'mcv' ),
    'new_item'              => __( 'New', 'mcv' ),
    'edit_item'             => __( 'Edit', 'mcv' ),
    'update_item'           => __( 'Update', 'mcv' ),
    'view_item'             => __( 'View', 'mcv' ),
    'search_items'          => __( 'Search', 'mcv' ),
    'not_found'             => __( 'Not found', 'mcv' ),
    'not_found_in_trash'    => __( 'Not found in Trash', 'mcv' ),
    'featured_image'        => __( 'Featured Image', 'mcv' ),
    'set_featured_image'    => __( 'Set featured image', 'mcv' ),
    'remove_featured_image' => __( 'Remove featured image', 'mcv' ),
    'use_featured_image'    => __( 'Use as featured image', 'mcv' ),
    'insert_into_item'      => __( 'Insert into item', 'mcv' ),
    'uploaded_to_this_item' => __( 'Uploaded to this item', 'mcv' ),
    'items_list'            => __( 'Items list', 'mcv' ),
    'items_list_navigation' => __( 'Items list navigation', 'mcv' ),
    'filter_items_list'     => __( 'Filter items list', 'mcv' ),
  );
  $rewrite = array(
    'slug'                  => 'dic_syllables',
    'with_front'            => true,
    'pages'                 => true,
    'feeds'                 => true,
  );
  $args = array(
    'label'                 => __( 'Malay Dictionary Of End Syllables', 'mcv' ),
    'description'           => __( 'Collections of  Malay Dictionary Of End Syllables', 'mcv' ),
    'labels'                => $labels,
    'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions', 'page-attributes', ),
    'taxonomies'            => array( 'mcv_dic_syllables_category' ),
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    //'menu_position'         => 5,
    'menu_icon'             => get_template_directory_uri() . '/img/database.svg',
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => true,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'rewrite'               => $rewrite,
    'capability_type'       => 'post',
  );
  register_post_type( 'mcv_dic_syllables', $args );

   /*
   * Custom Module 06
   * Module Name: Malay Dictionaries By Non-Malays
   */

  $labels = array(
    'name'                  => _x( 'Malay Dictionaries By Non-Malays', 'Post Type General Name', 'mcv' ),
    'singular_name'         => _x( 'Malay Dictionaries By Non-Malays', 'Post Type Singular Name', 'mcv' ),
    'menu_name'             => __( 'Malay Dictionaries By Non-Malays', 'mcv' ),
    'name_admin_bar'        => __( 'Malay Dictionaries By Non-Malays', 'mcv' ),
    'archives'              => __( 'Item Archives', 'mcv' ),
    'parent_item_colon'     => __( 'Parent:', 'mcv' ),
    'all_items'             => __( 'All', 'mcv' ),
    'add_new_item'          => __( 'Add New', 'mcv' ),
    'add_new'               => __( 'Add New', 'mcv' ),
    'new_item'              => __( 'New', 'mcv' ),
    'edit_item'             => __( 'Edit', 'mcv' ),
    'update_item'           => __( 'Update', 'mcv' ),
    'view_item'             => __( 'View', 'mcv' ),
    'search_items'          => __( 'Search', 'mcv' ),
    'not_found'             => __( 'Not found', 'mcv' ),
    'not_found_in_trash'    => __( 'Not found in Trash', 'mcv' ),
    'featured_image'        => __( 'Featured Image', 'mcv' ),
    'set_featured_image'    => __( 'Set featured image', 'mcv' ),
    'remove_featured_image' => __( 'Remove featured image', 'mcv' ),
    'use_featured_image'    => __( 'Use as featured image', 'mcv' ),
    'insert_into_item'      => __( 'Insert into item', 'mcv' ),
    'uploaded_to_this_item' => __( 'Uploaded to this item', 'mcv' ),
    'items_list'            => __( 'Items list', 'mcv' ),
    'items_list_navigation' => __( 'Items list navigation', 'mcv' ),
    'filter_items_list'     => __( 'Filter items list', 'mcv' ),
  );
  $rewrite = array(
    'slug'                  => 'dic_non_malay',
    'with_front'            => true,
    'pages'                 => true,
    'feeds'                 => true,
  );
  $args = array(
    'label'                 => __( 'Malay Dictionaries By Non-Malays', 'mcv' ),
    'description'           => __( 'Collections of  N.A. Halim.', 'mcv' ),
    'labels'                => $labels,
    'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions', 'page-attributes', ),
    'taxonomies'            => array( 'mcv_dic_non_malay_category' ),
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    //'menu_position'         => 5,
    'menu_icon'             => get_template_directory_uri() . '/img/database.svg',
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => true,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'rewrite'               => $rewrite,
    'capability_type'       => 'post',
  );
  register_post_type( 'mcv_dic_non_malay', $args );

  /*
   * Custom Module 07
   * Module Name: Sari Online
   */

  $labels = array(
    'name'                  => _x( 'Sari Online', 'Post Type General Name', 'mcv' ),
    'singular_name'         => _x( 'Sari Online', 'Post Type Singular Name', 'mcv' ),
    'menu_name'             => __( 'Sari Online', 'mcv' ),
    'name_admin_bar'        => __( 'Sari Online', 'mcv' ),
    'archives'              => __( 'Item Archives', 'mcv' ),
    'parent_item_colon'     => __( 'Parent:', 'mcv' ),
    'all_items'             => __( 'All', 'mcv' ),
    'add_new_item'          => __( 'Add New', 'mcv' ),
    'add_new'               => __( 'Add New', 'mcv' ),
    'new_item'              => __( 'New', 'mcv' ),
    'edit_item'             => __( 'Edit', 'mcv' ),
    'update_item'           => __( 'Update', 'mcv' ),
    'view_item'             => __( 'View', 'mcv' ),
    'search_items'          => __( 'Search', 'mcv' ),
    'not_found'             => __( 'Not found', 'mcv' ),
    'not_found_in_trash'    => __( 'Not found in Trash', 'mcv' ),
    'featured_image'        => __( 'Featured Image', 'mcv' ),
    'set_featured_image'    => __( 'Set featured image', 'mcv' ),
    'remove_featured_image' => __( 'Remove featured image', 'mcv' ),
    'use_featured_image'    => __( 'Use as featured image', 'mcv' ),
    'insert_into_item'      => __( 'Insert into item', 'mcv' ),
    'uploaded_to_this_item' => __( 'Uploaded to this item', 'mcv' ),
    'items_list'            => __( 'Items list', 'mcv' ),
    'items_list_navigation' => __( 'Items list navigation', 'mcv' ),
    'filter_items_list'     => __( 'Filter items list', 'mcv' ),
  );
  $rewrite = array(
    'slug'                  => 'sari_online',
    'with_front'            => true,
    'pages'                 => true,
    'feeds'                 => true,
  );
  $args = array(
    'label'                 => __( 'Sari Online', 'mcv' ),
    'description'           => __( 'Collections of Sari Online', 'mcv' ),
    'labels'                => $labels,
    'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions', 'page-attributes', ),
    'taxonomies'            => array( 'mcv_sari_online_category' ),
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    //'menu_position'         => 5,
    'menu_icon'             => get_template_directory_uri() . '/img/database.svg',
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => true,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'rewrite'               => $rewrite,
    'capability_type'       => 'post',
  );
  register_post_type( 'mcv_sari_online', $args );

  /*
   * Custom Module 08
   * Module Name: Peribahasa
   */

  $labels = array(
    'name'                  => _x( 'Peribahasa', 'Post Type General Name', 'mcv' ),
    'singular_name'         => _x( 'Peribahasa', 'Post Type Singular Name', 'mcv' ),
    'menu_name'             => __( 'Peribahasa', 'mcv' ),
    'name_admin_bar'        => __( 'Peribahasa', 'mcv' ),
    'archives'              => __( 'Item Archives', 'mcv' ),
    'parent_item_colon'     => __( 'Parent:', 'mcv' ),
    'all_items'             => __( 'All', 'mcv' ),
    'add_new_item'          => __( 'Add New', 'mcv' ),
    'add_new'               => __( 'Add New', 'mcv' ),
    'new_item'              => __( 'New', 'mcv' ),
    'edit_item'             => __( 'Edit', 'mcv' ),
    'update_item'           => __( 'Update', 'mcv' ),
    'view_item'             => __( 'View', 'mcv' ),
    'search_items'          => __( 'Search', 'mcv' ),
    'not_found'             => __( 'Not found', 'mcv' ),
    'not_found_in_trash'    => __( 'Not found in Trash', 'mcv' ),
    'featured_image'        => __( 'Featured Image', 'mcv' ),
    'set_featured_image'    => __( 'Set featured image', 'mcv' ),
    'remove_featured_image' => __( 'Remove featured image', 'mcv' ),
    'use_featured_image'    => __( 'Use as featured image', 'mcv' ),
    'insert_into_item'      => __( 'Insert into item', 'mcv' ),
    'uploaded_to_this_item' => __( 'Uploaded to this item', 'mcv' ),
    'items_list'            => __( 'Items list', 'mcv' ),
    'items_list_navigation' => __( 'Items list navigation', 'mcv' ),
    'filter_items_list'     => __( 'Filter items list', 'mcv' ),
  );
  $rewrite = array(
    'slug'                  => 'peribahasa',
    'with_front'            => true,
    'pages'                 => true,
    'feeds'                 => true,
  );
  $args = array(
    'label'                 => __( 'Peribahasa', 'mcv' ),
    'description'           => __( 'Collections of Peribahasa', 'mcv' ),
    'labels'                => $labels,
    'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions', 'page-attributes', ),
    'taxonomies'            => array( 'mcv_peribahasa_category' ),
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    //'menu_position'         => 5,
    'menu_icon'             => get_template_directory_uri() . '/img/database.svg',
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => true,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'rewrite'               => $rewrite,
    'capability_type'       => 'post',
  );
  register_post_type( 'mcv_peribahasa', $args );

  /*
   * Custom Module 09
   * Module Name: Pantun Baba
   */

  $labels = array(
    'name'                  => _x( 'Pantun Baba', 'Post Type General Name', 'mcv' ),
    'singular_name'         => _x( 'Pantun Baba', 'Post Type Singular Name', 'mcv' ),
    'menu_name'             => __( 'Pantun Baba', 'mcv' ),
    'name_admin_bar'        => __( 'Pantun Baba', 'mcv' ),
    'archives'              => __( 'Item Archives', 'mcv' ),
    'parent_item_colon'     => __( 'Parent:', 'mcv' ),
    'all_items'             => __( 'All', 'mcv' ),
    'add_new_item'          => __( 'Add New', 'mcv' ),
    'add_new'               => __( 'Add New', 'mcv' ),
    'new_item'              => __( 'New', 'mcv' ),
    'edit_item'             => __( 'Edit', 'mcv' ),
    'update_item'           => __( 'Update', 'mcv' ),
    'view_item'             => __( 'View', 'mcv' ),
    'search_items'          => __( 'Search', 'mcv' ),
    'not_found'             => __( 'Not found', 'mcv' ),
    'not_found_in_trash'    => __( 'Not found in Trash', 'mcv' ),
    'featured_image'        => __( 'Featured Image', 'mcv' ),
    'set_featured_image'    => __( 'Set featured image', 'mcv' ),
    'remove_featured_image' => __( 'Remove featured image', 'mcv' ),
    'use_featured_image'    => __( 'Use as featured image', 'mcv' ),
    'insert_into_item'      => __( 'Insert into item', 'mcv' ),
    'uploaded_to_this_item' => __( 'Uploaded to this item', 'mcv' ),
    'items_list'            => __( 'Items list', 'mcv' ),
    'items_list_navigation' => __( 'Items list navigation', 'mcv' ),
    'filter_items_list'     => __( 'Filter items list', 'mcv' ),
  );
  $rewrite = array(
    'slug'                  => 'pantun_baba',
    'with_front'            => true,
    'pages'                 => true,
    'feeds'                 => true,
  );
  $args = array(
    'label'                 => __( 'Pantun Baba', 'mcv' ),
    'description'           => __( 'Collections of Pantun Baba', 'mcv' ),
    'labels'                => $labels,
    'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions', 'page-attributes', ),
    'taxonomies'            => array( 'mcv_pantun_baba_category' ),
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    //'menu_position'         => 5,
    'menu_icon'             => get_template_directory_uri() . '/img/database.svg',
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => true,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'rewrite'               => $rewrite,
    'capability_type'       => 'post',
  );
  register_post_type( 'mcv_pantun_baba', $args );

    /*
   * Custom Module 10
   * Module Name: Sejuta Pantun
   */

  $labels = array(
    'name'                  => _x( 'Sejuta Pantun', 'Post Type General Name', 'mcv' ),
    'singular_name'         => _x( 'Sejuta Pantun', 'Post Type Singular Name', 'mcv' ),
    'menu_name'             => __( 'Sejuta Pantun', 'mcv' ),
    'name_admin_bar'        => __( 'Sejuta Pantun', 'mcv' ),
    'archives'              => __( 'Item Archives', 'mcv' ),
    'parent_item_colon'     => __( 'Parent:', 'mcv' ),
    'all_items'             => __( 'All', 'mcv' ),
    'add_new_item'          => __( 'Add New', 'mcv' ),
    'add_new'               => __( 'Add New', 'mcv' ),
    'new_item'              => __( 'New', 'mcv' ),
    'edit_item'             => __( 'Edit', 'mcv' ),
    'update_item'           => __( 'Update', 'mcv' ),
    'view_item'             => __( 'View', 'mcv' ),
    'search_items'          => __( 'Search', 'mcv' ),
    'not_found'             => __( 'Not found', 'mcv' ),
    'not_found_in_trash'    => __( 'Not found in Trash', 'mcv' ),
    'featured_image'        => __( 'Featured Image', 'mcv' ),
    'set_featured_image'    => __( 'Set featured image', 'mcv' ),
    'remove_featured_image' => __( 'Remove featured image', 'mcv' ),
    'use_featured_image'    => __( 'Use as featured image', 'mcv' ),
    'insert_into_item'      => __( 'Insert into item', 'mcv' ),
    'uploaded_to_this_item' => __( 'Uploaded to this item', 'mcv' ),
    'items_list'            => __( 'Items list', 'mcv' ),
    'items_list_navigation' => __( 'Items list navigation', 'mcv' ),
    'filter_items_list'     => __( 'Filter items list', 'mcv' ),
  );
  $rewrite = array(
    'slug'                  => 'sejuta_pantun',
    'with_front'            => true,
    'pages'                 => true,
    'feeds'                 => true,
  );
  $args = array(
    'label'                 => __( 'Sejuta Pantun', 'mcv' ),
    'description'           => __( 'Collections of Sejuta Pantun', 'mcv' ),
    'labels'                => $labels,
    'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions', 'page-attributes', ),
    'taxonomies'            => array( 'mcv_sejuta_pantun_category' ),
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    //'menu_position'         => 5,
    'menu_icon'             => get_template_directory_uri() . '/img/database.svg',
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => true,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'rewrite'               => $rewrite,
    'capability_type'       => 'post',
  );
  register_post_type( 'mcv_sejuta_pantun', $args );

  /*
   * Custom Module 11
   * Module Name: Tenas Effendy
   */

  $labels = array(
    'name'                  => _x( 'Tenas Effendy', 'Post Type General Name', 'mcv' ),
    'singular_name'         => _x( 'Tenas Effendy', 'Post Type Singular Name', 'mcv' ),
    'menu_name'             => __( 'Tenas Effendy', 'mcv' ),
    'name_admin_bar'        => __( 'Tenas Effendy', 'mcv' ),
    'archives'              => __( 'Item Archives', 'mcv' ),
    'parent_item_colon'     => __( 'Parent:', 'mcv' ),
    'all_items'             => __( 'All', 'mcv' ),
    'add_new_item'          => __( 'Add New', 'mcv' ),
    'add_new'               => __( 'Add New', 'mcv' ),
    'new_item'              => __( 'New', 'mcv' ),
    'edit_item'             => __( 'Edit', 'mcv' ),
    'update_item'           => __( 'Update', 'mcv' ),
    'view_item'             => __( 'View', 'mcv' ),
    'search_items'          => __( 'Search', 'mcv' ),
    'not_found'             => __( 'Not found', 'mcv' ),
    'not_found_in_trash'    => __( 'Not found in Trash', 'mcv' ),
    'featured_image'        => __( 'Featured Image', 'mcv' ),
    'set_featured_image'    => __( 'Set featured image', 'mcv' ),
    'remove_featured_image' => __( 'Remove featured image', 'mcv' ),
    'use_featured_image'    => __( 'Use as featured image', 'mcv' ),
    'insert_into_item'      => __( 'Insert into item', 'mcv' ),
    'uploaded_to_this_item' => __( 'Uploaded to this item', 'mcv' ),
    'items_list'            => __( 'Items list', 'mcv' ),
    'items_list_navigation' => __( 'Items list navigation', 'mcv' ),
    'filter_items_list'     => __( 'Filter items list', 'mcv' ),
  );
  $rewrite = array(
    'slug'                  => 'tenas_effendy',
    'with_front'            => true,
    'pages'                 => true,
    'feeds'                 => true,
  );
  $args = array(
    'label'                 => __( 'Tenas Effendy', 'mcv' ),
    'description'           => __( 'Collections of Tenas Effendy', 'mcv' ),
    'labels'                => $labels,
    'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions', 'page-attributes', ),
    'taxonomies'            => array( 'mcv_tenas_effendy_category' ),
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    //'menu_position'         => 5,
    'menu_icon'             => get_template_directory_uri() . '/img/database.svg',
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => true,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'rewrite'               => $rewrite,
    'capability_type'       => 'post',
  );
  register_post_type( 'mcv_tenas_effendy', $args );

  /*
   * Custom Module 12
   * Module Name: Yang Quee Yee
   */

  $labels = array(
    'name'                  => _x( 'Yang Quee Yee', 'Post Type General Name', 'mcv' ),
    'singular_name'         => _x( 'Yang Quee Yee', 'Post Type Singular Name', 'mcv' ),
    'menu_name'             => __( 'Yang Quee Yee', 'mcv' ),
    'name_admin_bar'        => __( 'Yang Quee Yee', 'mcv' ),
    'archives'              => __( 'Item Archives', 'mcv' ),
    'parent_item_colon'     => __( 'Parent:', 'mcv' ),
    'all_items'             => __( 'All', 'mcv' ),
    'add_new_item'          => __( 'Add New', 'mcv' ),
    'add_new'               => __( 'Add New', 'mcv' ),
    'new_item'              => __( 'New', 'mcv' ),
    'edit_item'             => __( 'Edit', 'mcv' ),
    'update_item'           => __( 'Update', 'mcv' ),
    'view_item'             => __( 'View', 'mcv' ),
    'search_items'          => __( 'Search', 'mcv' ),
    'not_found'             => __( 'Not found', 'mcv' ),
    'not_found_in_trash'    => __( 'Not found in Trash', 'mcv' ),
    'featured_image'        => __( 'Featured Image', 'mcv' ),
    'set_featured_image'    => __( 'Set featured image', 'mcv' ),
    'remove_featured_image' => __( 'Remove featured image', 'mcv' ),
    'use_featured_image'    => __( 'Use as featured image', 'mcv' ),
    'insert_into_item'      => __( 'Insert into item', 'mcv' ),
    'uploaded_to_this_item' => __( 'Uploaded to this item', 'mcv' ),
    'items_list'            => __( 'Items list', 'mcv' ),
    'items_list_navigation' => __( 'Items list navigation', 'mcv' ),
    'filter_items_list'     => __( 'Filter items list', 'mcv' ),
  );
  $rewrite = array(
    'slug'                  => 'yang_quee_yee',
    'with_front'            => true,
    'pages'                 => true,
    'feeds'                 => true,
  );
  $args = array(
    'label'                 => __( 'Yang Quee Yee', 'mcv' ),
    'description'           => __( 'Collections of Yang Quee Yee', 'mcv' ),
    'labels'                => $labels,
    'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions', 'page-attributes', ),
    'taxonomies'            => array( 'mcv_yang_quee_yee_category' ),
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    //'menu_position'         => 5,
    'menu_icon'             => get_template_directory_uri() . '/img/database.svg',
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => true,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'rewrite'               => $rewrite,
    'capability_type'       => 'post',
  );
  register_post_type( 'mcv_yang_quee_yee', $args );

  /*
   * Custom Module 13
   * Module Name: Seni Ukir Kayu
   */

  $labels = array(
    'name'                  => _x( 'Seni Ukir Kayu', 'Post Type General Name', 'mcv' ),
    'singular_name'         => _x( 'Seni Ukir Kayu', 'Post Type Singular Name', 'mcv' ),
    'menu_name'             => __( 'Seni Ukir Kayu', 'mcv' ),
    'name_admin_bar'        => __( 'Seni Ukir Kayu', 'mcv' ),
    'archives'              => __( 'Item Archives', 'mcv' ),
    'parent_item_colon'     => __( 'Parent:', 'mcv' ),
    'all_items'             => __( 'All', 'mcv' ),
    'add_new_item'          => __( 'Add New', 'mcv' ),
    'add_new'               => __( 'Add New', 'mcv' ),
    'new_item'              => __( 'New', 'mcv' ),
    'edit_item'             => __( 'Edit', 'mcv' ),
    'update_item'           => __( 'Update', 'mcv' ),
    'view_item'             => __( 'View', 'mcv' ),
    'search_items'          => __( 'Search', 'mcv' ),
    'not_found'             => __( 'Not found', 'mcv' ),
    'not_found_in_trash'    => __( 'Not found in Trash', 'mcv' ),
    'featured_image'        => __( 'Featured Image', 'mcv' ),
    'set_featured_image'    => __( 'Set featured image', 'mcv' ),
    'remove_featured_image' => __( 'Remove featured image', 'mcv' ),
    'use_featured_image'    => __( 'Use as featured image', 'mcv' ),
    'insert_into_item'      => __( 'Insert into item', 'mcv' ),
    'uploaded_to_this_item' => __( 'Uploaded to this item', 'mcv' ),
    'items_list'            => __( 'Items list', 'mcv' ),
    'items_list_navigation' => __( 'Items list navigation', 'mcv' ),
    'filter_items_list'     => __( 'Filter items list', 'mcv' ),
  );
  $rewrite = array(
    'slug'                  => 'seni_ukir_kayu',
    'with_front'            => true,
    'pages'                 => true,
    'feeds'                 => true,
  );
  $args = array(
    'label'                 => __( 'Seni Ukir Kayu', 'mcv' ),
    'description'           => __( 'Collections of Seni Ukir Kayu', 'mcv' ),
    'labels'                => $labels,
    'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions', 'page-attributes', ),
    'taxonomies'            => array( 'mcv_seni_ukir_kayu_category' ),
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    //'menu_position'         => 5,
    'menu_icon'             => get_template_directory_uri() . '/img/database.svg',
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => true,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'rewrite'               => $rewrite,
    'capability_type'       => 'post',
  );
  register_post_type( 'mcv_seni_ukir_kayu', $args );

  /*
   * Custom Module 14
   * Module Name: Tokoh Pemikir Alam Melayu
   */

  $labels = array(
    'name'                  => _x( 'Tokoh Pemikir', 'Post Type General Name', 'mcv' ),
    'singular_name'         => _x( 'Tokoh Pemikir', 'Post Type Singular Name', 'mcv' ),
    'menu_name'             => __( 'Tokoh Pemikir', 'mcv' ),
    'name_admin_bar'        => __( 'Tokoh Pemikir', 'mcv' ),
    'archives'              => __( 'Item Archives', 'mcv' ),
    'parent_item_colon'     => __( 'Parent:', 'mcv' ),
    'all_items'             => __( 'All', 'mcv' ),
    'add_new_item'          => __( 'Add New', 'mcv' ),
    'add_new'               => __( 'Add New', 'mcv' ),
    'new_item'              => __( 'New', 'mcv' ),
    'edit_item'             => __( 'Edit', 'mcv' ),
    'update_item'           => __( 'Update', 'mcv' ),
    'view_item'             => __( 'View', 'mcv' ),
    'search_items'          => __( 'Search', 'mcv' ),
    'not_found'             => __( 'Not found', 'mcv' ),
    'not_found_in_trash'    => __( 'Not found in Trash', 'mcv' ),
    'featured_image'        => __( 'Featured Image', 'mcv' ),
    'set_featured_image'    => __( 'Set featured image', 'mcv' ),
    'remove_featured_image' => __( 'Remove featured image', 'mcv' ),
    'use_featured_image'    => __( 'Use as featured image', 'mcv' ),
    'insert_into_item'      => __( 'Insert into item', 'mcv' ),
    'uploaded_to_this_item' => __( 'Uploaded to this item', 'mcv' ),
    'items_list'            => __( 'Items list', 'mcv' ),
    'items_list_navigation' => __( 'Items list navigation', 'mcv' ),
    'filter_items_list'     => __( 'Filter items list', 'mcv' ),
  );
  $rewrite = array(
    'slug'                  => 'tokoh_pemikir',
    'with_front'            => true,
    'pages'                 => true,
    'feeds'                 => true,
  );
  $args = array(
    'label'                 => __( 'Tokoh Pemikir', 'mcv' ),
    'description'           => __( 'Collections of Tokoh Pemikir Alam Melayu', 'mcv' ),
    'labels'                => $labels,
    'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions', 'page-attributes', ),
    'taxonomies'            => array( 'mcv_tokoh_pemikir_category' ),
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    //'menu_position'         => 5,
    'menu_icon'             => get_template_directory_uri() . '/img/database.svg',
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => true,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'rewrite'               => $rewrite,
    'capability_type'       => 'post',
  );
  register_post_type( 'mcv_tokoh_pemikir', $args );
  
    $labels = array(
    'name'                  => _x( 'Slideshows', 'Post Type General Name', 'mcv' ),
    'singular_name'         => _x( 'Slideshow', 'Post Type Singular Name', 'mcv' ),
    'menu_name'             => __( 'Slideshow', 'mcv' ),
    'name_admin_bar'        => __( 'Slideshow', 'mcv' ),
    'archives'              => __( 'Item Archives', 'mcv' ),
    'parent_item_colon'     => __( 'Parent Item:', 'mcv' ),
    'all_items'             => __( 'All Items', 'mcv' ),
    'add_new_item'          => __( 'Add New Item', 'mcv' ),
    'add_new'               => __( 'Add New', 'mcv' ),
    'new_item'              => __( 'New Item', 'mcv' ),
    'edit_item'             => __( 'Edit Item', 'mcv' ),
    'update_item'           => __( 'Update Item', 'mcv' ),
    'view_item'             => __( 'View Item', 'mcv' ),
    'search_items'          => __( 'Search Item', 'mcv' ),
    'not_found'             => __( 'Not found', 'mcv' ),
    'not_found_in_trash'    => __( 'Not found in Trash', 'mcv' ),
    'featured_image'        => __( 'Featured Image', 'mcv' ),
    'set_featured_image'    => __( 'Set featured image', 'mcv' ),
    'remove_featured_image' => __( 'Remove featured image', 'mcv' ),
    'use_featured_image'    => __( 'Use as featured image', 'mcv' ),
    'insert_into_item'      => __( 'Insert into item', 'mcv' ),
    'uploaded_to_this_item' => __( 'Uploaded to this item', 'mcv' ),
    'items_list'            => __( 'Items list', 'mcv' ),
    'items_list_navigation' => __( 'Items list navigation', 'mcv' ),
    'filter_items_list'     => __( 'Filter items list', 'mcv' ),
  );
  $args = array(
    'label'                 => __( 'Slideshow', 'mcv' ),
    'description'           => __( 'Frontpage image slideshow', 'mcv' ),
    'labels'                => $labels,
    'supports'              => array( 'title', ),
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 5,
    'menu_icon'             => 'dashicons-format-gallery',
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => true,    
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'capability_type'       => 'page',
  );
  register_post_type( 'mcv_slideshow', $args );

}
add_action( 'init', 'mcv_custom_module', 0 );