<?php
/**
 * @package ATMA
 * @subpackage malaycivilization
 */

/**
 * Hook CMB2
 */

if ( file_exists(  get_template_directory() . '/lib/cmb2/init.php' ) ) {
  require_once  get_template_directory() . '/lib/cmb2/init.php';
} elseif ( file_exists(  get_template_directory()  . '/lib/CMB2/init.php' ) ) {
  require_once  get_template_directory()  . '/lib/CMB2/init.php';
}

function mcv_modules_metabox() {

$prefix = '_mcv_';

/**
 * @package malaycivilization
 * @name Pemikir Alam Melayu
 * @version 1.0
 */

$pemikir = new_cmb2_box( array(
    'id'            => $prefix . 'tokoh_pemikir',
    'title'         => __( 'Contents', 'mcv' ),
    'object_types'  => array( 'mcv_tokoh_pemikir', ),
    'closed'        => false,
) );

$pemikir->add_field( array(
    'name'    => __( 'Pengenalan', 'mcv' ),
    'desc'    => __( 'field description (optional)', 'mcv' ),
    'id'      => $prefix . 'tokoh_pemikir_pengenalan',
    'type'    => 'wysiwyg',
    'options' => array( 'textarea_rows' => 5, ),
) );

$pemikir->add_field( array(
    'name'    => __( 'Biografi', 'mcv' ),
    'desc'    => __( 'field description (optional)', 'mcv' ),
    'id'      => $prefix . 'tokoh_pemikir_biografi',
    'type'    => 'wysiwyg',
    'options' => array( 'textarea_rows' => 5, ),
) );

$pemikir->add_field( array(
    'name'    => __( 'Bibliografi Penulisan', 'mcv' ),
    'desc'    => __( 'field description (optional)', 'mcv' ),
    'id'      => $prefix . 'tokoh_pemikir_bibliografi',
    'type'    => 'wysiwyg',
    'options' => array( 'textarea_rows' => 5, ),
) );

$pemikir->add_field( array(
    'name'    => __( 'Analisis Karya', 'mcv' ),
    'desc'    => __( 'field description (optional)', 'mcv' ),
    'id'      => $prefix . 'tokoh_pemikir_analisis',
    'type'    => 'wysiwyg',
    'options' => array( 'textarea_rows' => 5, ),
) );

$pemikir->add_field( array(
    'name'    => __( 'Pemikiran', 'mcv' ),
    'desc'    => __( 'field description (optional)', 'mcv' ),
    'id'      => $prefix . 'tokoh_pemikir_pemikiran',
    'type'    => 'wysiwyg',
    'options' => array( 'textarea_rows' => 5, ),
) );

$pemikir->add_field( array(
    'name'         => __( 'Foto', 'mcv' ),
    'desc'         => __( 'Upload or add multiple images/attachments.', 'mcv' ),
    'id'           => $prefix . 'tokoh_pemikir_foto',
    'type'         => 'file_list',
    'preview_size' => array( 100, 100 ), // Default: array( 50, 50 )
) );

$slideshow = new_cmb2_box( array(
    'id'            => $prefix . 'slideshow',
    'title'         => __( 'Contents', 'mcv' ),
    'object_types'  => array( 'mcv_slideshow', ),
    'closed'        => false,
) );

$slideshow->add_field( array(
    'name'    => __( 'Image', 'mcv' ),
    'desc'    => __( 'field description (optional)', 'mcv' ),
    'id'      => $prefix . 'slideshow_image',
    'type'    => 'file',
) );

}
  
add_action( 'cmb2_admin_init', 'mcv_modules_metabox' );