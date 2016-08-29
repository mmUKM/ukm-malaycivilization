<?php
/**
 * @package ATMA
 * @subpackage malaycivilization
 * 
 * Custom Metabox 2
 * -----------------------------
 * Menambah field/form/metabox pada custom post type
 * Rujuk dokumentasi di laman @link https://github.com/WebDevStudios/CMB2/wiki untuk jenis-jenis field
 * atau boleh rujuk di dalam folder @subpackage ukm-civilization-master /vendor/cmb2/example-functions.php
 *
 * Semak pautan fuction cmb2 samada berada di dalam folder yang betul.
 * Pautan sedia ada adalah /vendor/cmb2/init.php
 */
if ( file_exists(  get_template_directory() . '/vendor/cmb2/init.php' ) ) {
  require_once  get_template_directory() . '/vendor/cmb2/init.php';
} elseif ( file_exists(  get_template_directory()  . '/vendor/CMB2/init.php' ) ) {
  require_once  get_template_directory()  . '/vendor/CMB2/init.php';
}
/**
 * Post Type yang Terlibat
 * -----------------------------
 * 1. Kamus
 * 2. PADAT (Pangkalan Data ATMA)
 * 3. Slideshow
 * 4. Tokoh Pemikir dan Koleksi Khas
 * 5. Warisan
 */
function atma_post_type_metabox() {
/**
 * Nama prefix adalah _atma_
 * Dahulukan _atma_ pada setiap field yang dipanggil
 */
$prefix = '_atma_';
/**
 * Metabox untuk post type Tokoh Pemikir dan Koleksi Khas
 * Semak fail single-atma_tpkh.php untuk membuat perubahan
 */
$tpkh_main = new_cmb2_box( array(
    'id'            => $prefix . 'tpkh_main',
    'title'         => __( 'Main Content', 'atma' ),
    'object_types'  => array( 'atma_tpkh', ),
    'closed'        => false,
) );

$tpkh_main->add_field( array(
    'name' => __( 'Display this content', 'cmb2' ),
    'desc' => __( 'check this box to display this content only', 'cmb2' ),
    'id'   => $prefix . 'tpkh_main_on',
    'type' => 'checkbox',
) );

$tpkh_main->add_field( array(
    'name'    => __( 'Pengenalan', 'atma' ),
    'desc'    => __( 'field description (optional)', 'atma' ),
    'id'      => $prefix . 'tpkh_main_article',
    'type'    => 'wysiwyg',
    'options' => array( 'textarea_rows' => 5, ),
) );
/**
 * Tokoh Pemikir contents
 * only display when needed
 */
$tpkh_pemikir = new_cmb2_box( array(
    'id'            => $prefix . 'tpkh_tokoh',
    'title'         => __( 'Tokoh Pemikir Contents', 'atma' ),
    'object_types'  => array( 'atma_tpkh', ),
    'closed'        => true,
) );

$tpkh_pemikir->add_field( array(
    'name' => __( 'Display this content', 'cmb2' ),
    'desc' => __( 'check this box to display this content only', 'cmb2' ),
    'id'   => $prefix . 'tpkh_tokoh_on',
    'type' => 'checkbox',
) );

$tpkh_pemikir->add_field( array(
    'name'    => __( 'Pengenalan', 'atma' ),
    'desc'    => __( 'field description (optional)', 'atma' ),
    'id'      => $prefix . 'tpkh_tokoh_pengenalan',
    'type'    => 'wysiwyg',
    'options' => array( 'textarea_rows' => 5, ),
) );

$tpkh_pemikir->add_field( array(
    'name'    => __( 'Biografi', 'atma' ),
    'desc'    => __( 'field description (optional)', 'atma' ),
    'id'      => $prefix . 'tpkh_tokoh_biografi',
    'type'    => 'wysiwyg',
    'options' => array( 'textarea_rows' => 5, ),
) );

$tpkh_pemikir->add_field( array(
    'name'    => __( 'Bibliografi Penulisan', 'atma' ),
    'desc'    => __( 'field description (optional)', 'atma' ),
    'id'      => $prefix . 'tpkh_tokoh_bibliografi',
    'type'    => 'wysiwyg',
    'options' => array( 'textarea_rows' => 5, ),
) );

$tpkh_pemikir->add_field( array(
    'name'    => __( 'Analisis Karya', 'atma' ),
    'desc'    => __( 'field description (optional)', 'atma' ),
    'id'      => $prefix . 'tpkh_tokoh_analisis',
    'type'    => 'wysiwyg',
    'options' => array( 'textarea_rows' => 5, ),
) );

$tpkh_pemikir->add_field( array(
    'name'    => __( 'Pemikiran', 'atma' ),
    'desc'    => __( 'field description (optional)', 'atma' ),
    'id'      => $prefix . 'tpkh_tokoh_pemikiran',
    'type'    => 'wysiwyg',
    'options' => array( 'textarea_rows' => 5, ),
) );

$tpkh_pemikir->add_field( array(
    'name'         => __( 'Foto', 'atma' ),
    'desc'         => __( 'Upload or add multiple images/attachments.', 'atma' ),
    'id'           => $prefix . 'tpkh_tokoh_foto',
    'type'         => 'file_list',
    'preview_size' => array( 100, 100 ), // Default: array( 50, 50 )
) );

/**
 * Koleksi Khas
 * only dosplay when needed
 */
$tpkh_koleksi= new_cmb2_box( array(
    'id'            => $prefix . 'tpkh_koleksi',
    'title'         => __( 'Koleksi Khas Contents', 'atma' ),
    'object_types'  => array( 'atma_tpkh', ),
    'closed'        => true,
) );

$tpkh_koleksi->add_field( array(
    'name' => __( 'Display this content', 'cmb2' ),
    'desc' => __( 'check this box to display this content only', 'cmb2' ),
    'id'   => $prefix . 'tpkh_koleksi_on',
    'type' => 'checkbox',
) );

$tpkh_koleksi->add_field( array(
    'name'    => __( 'Biografi', 'atma' ),
    'desc'    => __( 'field description (optional)', 'atma' ),
    'id'      => $prefix . 'tpkh_koleksi_biografi',
    'type'    => 'wysiwyg',
    'options' => array( 'textarea_rows' => 5, ),
) );

/**
 * Warisan: Main Content
 */
$wari_main = new_cmb2_box( array(
    'id'            => $prefix . 'wari_main',
    'title'         => __( 'Main Content', 'atma' ),
    'object_types'  => array( 'atma_warisan', ),
    'closed'        => true,
) );

$wari_main->add_field( array(
    'name' => __( 'Display this content', 'cmb2' ),
    'desc' => __( 'check this box to display this content only', 'cmb2' ),
    'id'   => $prefix . 'wari_main_on',
    'type' => 'checkbox',
) );

$wari_main->add_field( array(
    'name'    => __( 'Content', 'atma' ),
    'desc'    => __( 'field description (optional)', 'atma' ),
    'id'      => $prefix . 'wari_main_content',
    'type'    => 'wysiwyg',
    'options' => array( 'textarea_rows' => 5, ),
) );


/**
 * Warisan: Adat Perpatih
 * only dosplay when needed
 */
$wari_ap = new_cmb2_box( array(
    'id'            => $prefix . 'wari_ap',
    'title'         => __( 'Adat Perpatih', 'atma' ),
    'object_types'  => array( 'atma_warisan', ),
    'closed'        => true,
) );

$wari_ap->add_field( array(
    'name' => __( 'Display this content', 'cmb2' ),
    'desc' => __( 'check this box to display this content only', 'cmb2' ),
    'id'   => $prefix . 'wari_ap_on',
    'type' => 'checkbox',
) );

$wari_ap->add_field( array(
    'name' => __( 'Thumbnail', 'cmb2' ),
    'desc' => __( 'Book or Article cover', 'cmb2' ),
    'id'   => $prefix . 'wari_ap_thumbnail',
    'type' => 'file',
) );

$wari_ap->add_field( array(
    'name'    => __( 'Author', 'atma' ),
    'desc'    => __( 'field description (optional)', 'atma' ),
    'id'      => $prefix . 'wari_ap_author',
    'type'    => 'text',
) );

$wari_ap->add_field( array(
    'name'    => __( 'Source', 'atma' ),
    'desc'    => __( 'field description (optional)', 'atma' ),
    'id'      => $prefix . 'wari_ap_source',
    'type'    => 'text',
) );

$wari_ap->add_field( array(
    'name'    => __( 'Accession No', 'atma' ),
    'desc'    => __( 'field description (optional)', 'atma' ),
    'id'      => $prefix . 'wari_ap_accession_no',
    'type'    => 'text_small',
) );

$wari_ap->add_field( array(
    'name'    => __( 'Year', 'atma' ),
    'desc'    => __( 'field description (optional)', 'atma' ),
    'id'      => $prefix . 'wari_ap_year',
    'type'    => 'text_date',
    'date_format'  => 'Y',
) );

$wari_ap->add_field( array(
    'name'    => __( 'Page Total', 'atma' ),
    'desc'    => __( 'field description (optional)', 'atma' ),
    'id'      => $prefix . 'wari_ap_page_total',
    'type'    => 'text_small',
) );

$wari_ap->add_field( array(
    'name' => __( 'File', 'cmb2' ),
    'desc' => __( 'Upload pdf file', 'cmb2' ),
    'id'   => $prefix . 'wari_ap_file',
    'type' => 'file',
) );

/**
 * Warisan: Karya Jawi
 * only dosplay when needed
 */

$wari_kj = new_cmb2_box( array(
    'id'            => $prefix . 'wari_kj',
    'title'         => __( 'Karya Jawi', 'atma' ),
    'object_types'  => array( 'atma_warisan', ),
    'closed'        => true,
) );

$wari_kj->add_field( array(
    'name' => __( 'Display this content', 'cmb2' ),
    'desc' => __( 'check this box to display this content only', 'cmb2' ),
    'id'   => $prefix . 'wari_kj_on',
    'type' => 'checkbox',
) );

$wari_kj->add_field( array(
    'name' => __( 'Author', 'cmb2' ),
    'desc' => __( 'check this box to display this content only', 'cmb2' ),
    'id'   => $prefix . 'wari_kj_author',
    'type' => 'text',
) );

$wari_kj->add_field( array(
    'name' => __( 'Source', 'cmb2' ),
    'desc' => __( 'check this box to display this content only', 'cmb2' ),
    'id'   => $prefix . 'wari_kj_source',
    'type' => 'text',
) );

$wari_kj->add_field( array(
    'name' => __( 'Accession No', 'cmb2' ),
    'desc' => __( 'check this box to display this content only', 'cmb2' ),
    'id'   => $prefix . 'wari_kj_author',
    'type' => 'text_small',
) );

$wari_kj->add_field( array(
    'name' => __( 'Page Total', 'cmb2' ),
    'desc' => __( 'check this box to display this content only', 'cmb2' ),
    'id'   => $prefix . 'wari_kj_page_total',
    'type' => 'text_small',
) );

$wari_kj->add_field( array(
    'name' => __( 'PDF File URL', 'cmb2' ),
    'desc' => __( 'Upload compressed  .pdf file', 'cmb2' ),
    'id'   => $prefix . 'wari_kj_file',
    'type' => 'file',
) );

/**
 * Warisan: Peribahasa
 * only dosplay when needed
 */
$wari_pbh = new_cmb2_box( array(
    'id'            => $prefix . 'wari_pbh',
    'title'         => __( 'Peribahasa', 'atma' ),
    'object_types'  => array( 'atma_warisan', ),
    'closed'        => true,
) );

$wari_pbh->add_field( array(
    'name' => __( 'Display this content', 'cmb2' ),
    'desc' => __( 'check this box to display this content only', 'cmb2' ),
    'id'   => $prefix . 'wari_pbh_on',
    'type' => 'checkbox',
) );

$wari_pbh->add_field( array(
    'name'    => __( 'Author', 'atma' ),
    'desc'    => __( 'field description (optional)', 'atma' ),
    'id'      => $prefix . 'wari_pbh_author',
    'type'    => 'text',
) );

$wari_pbh->add_field( array(
    'name'    => __( 'Database', 'atma' ),
    'desc'    => __( 'field description (optional)', 'atma' ),
    'id'      => $prefix . 'wari_pbh_database',
    'type'    => 'text',
) );

$wari_pbh->add_field( array(
    'name'    => __( 'Subject', 'atma' ),
    'desc'    => __( 'field description (optional)', 'atma' ),
    'id'      => $prefix . 'wari_pbh_subject',
    'type'    => 'text',
) );

$wari_pbh->add_field( array(
    'name'    => __( 'Accession No', 'atma' ),
    'desc'    => __( 'field description (optional)', 'atma' ),
    'id'      => $prefix . 'wari_pbh_accession_no',
    'type'    => 'text_small',
) );

$wari_pbh->add_field( array(
    'name'    => __( 'Label', 'atma' ),
    'desc'    => __( 'field description (optional)', 'atma' ),
    'id'      => $prefix . 'wari_pbh_label',
    'type'    => 'text',
) );

$wari_pbh->add_field( array(
    'name'    => __( 'Description', 'atma' ),
    'desc'    => __( 'field description (optional)', 'atma' ),
    'id'      => $prefix . 'wari_pbh_desc',
    'type'    => 'wysiwyg',
    'options' => array( 'textarea_rows' => 5, ),
) );

$wari_pbh->add_field( array(
    'name'    => __( 'Language', 'atma' ),
    'desc'    => __( 'field description (optional)', 'atma' ),
    'id'      => $prefix . 'wari_pbh_lang',
    'type'    => 'text',
) );

/**
 * Warisan: Sejuta Pantun
 * only display when needed
 */
$wari_sp = new_cmb2_box( array(
    'id'            => $prefix . 'wari_sp',
    'title'         => __( 'Sejuta Pantun', 'atma' ),
    'object_types'  => array( 'atma_warisan', ),
    'closed'        => true,
) );

$wari_sp->add_field( array(
    'name' => __( 'Display this content', 'cmb2' ),
    'desc' => __( 'check this box to display this content only', 'cmb2' ),
    'id'   => $prefix . 'wari_sp_on',
    'type' => 'checkbox',
) );

$wari_sp->add_field( array(
    'name'    => __( 'Author', 'atma' ),
    'desc'    => __( 'field description (optional)', 'atma' ),
    'id'      => $prefix . 'wari_sp_author',
    'type'    => 'text',
) );

$wari_sp->add_field( array(
    'name'    => __( 'Source', 'atma' ),
    'desc'    => __( 'field description (optional)', 'atma' ),
    'id'      => $prefix . 'wari_sp_source',
    'type'    => 'text',
) );

$wari_sp->add_field( array(
    'name'    => __( 'Accession No', 'atma' ),
    'desc'    => __( 'field description (optional)', 'atma' ),
    'id'      => $prefix . 'wari_sp_accession_no',
    'type'    => 'text_small',
) );

$wari_sp->add_field( array(
    'name'    => __( 'Year', 'atma' ),
    'desc'    => __( 'field description (optional)', 'atma' ),
    'id'      => $prefix . 'wari_sp_year',
    'type'    => 'text_date',
    'date_format'  => 'Y/m/d',
) );

$wari_sp->add_field( array(
    'name'    => __( 'Page Total', 'atma' ),
    'desc'    => __( 'field description (optional)', 'atma' ),
    'id'      => $prefix . 'wari_sp_page_total',
    'type'    => 'text_small',
) );

$wari_sp->add_field( array(
    'name' => __( 'File', 'cmb2' ),
    'desc' => __( 'Upload pdf file', 'cmb2' ),
    'id'   => $prefix . 'wari_sp_file',
    'type' => 'file',
) );

/**
 * Warisan: Pantun Baba
 * only dosplay when needed
 */
$wari_pb = new_cmb2_box( array(
    'id'            => $prefix . 'wari_pb',
    'title'         => __( 'Pantun Baba', 'atma' ),
    'object_types'  => array( 'atma_warisan', ),
    'closed'        => true,
) );

$wari_pb->add_field( array(
    'name' => __( 'Display this content', 'cmb2' ),
    'desc' => __( 'check this box to display this content only', 'cmb2' ),
    'id'   => $prefix . 'wari_pb_on',
    'type' => 'checkbox',
) );

$wari_pb->add_field( array(
    'name' => __( 'Thumbnail', 'cmb2' ),
    'desc' => __( 'Book or Article cover', 'cmb2' ),
    'id'   => $prefix . 'wari_pb_thumbnail',
    'type' => 'file',
) );

$wari_pb->add_field( array(
    'name'    => __( 'Title', 'atma' ),
    'desc'    => __( 'field description (optional)', 'atma' ),
    'id'      => $prefix . 'wari_pb_title',
    'type'    => 'text',
) );

$wari_pb->add_field( array(
    'name'    => __( 'Author', 'atma' ),
    'desc'    => __( 'field description (optional)', 'atma' ),
    'id'      => $prefix . 'wari_pb_author',
    'type'    => 'text',
) );

$wari_pb->add_field( array(
    'name'    => __( 'Database', 'atma' ),
    'desc'    => __( 'field description (optional)', 'atma' ),
    'id'      => $prefix . 'wari_pb_database',
    'type'    => 'text',
) );

$wari_pb->add_field( array(
    'name'    => __( 'Topic', 'atma' ),
    'desc'    => __( 'field description (optional)', 'atma' ),
    'id'      => $prefix . 'wari_pb_topic',
    'type'    => 'text',
) );

$wari_pb->add_field( array(
    'name'    => __( 'Source', 'atma' ),
    'desc'    => __( 'field description (optional)', 'atma' ),
    'id'      => $prefix . 'wari_pb_source',
    'type'    => 'text',
) );

$wari_pb->add_field( array(
    'name'    => __( 'Accession No', 'atma' ),
    'desc'    => __( 'field description (optional)', 'atma' ),
    'id'      => $prefix . 'wari_pb_accession_no',
    'type'    => 'text_small',
) );

$wari_pb->add_field( array(
    'name'    => __( 'Year', 'atma' ),
    'desc'    => __( 'field description (optional)', 'atma' ),
    'id'      => $prefix . 'wari_pb_year',
    'type'    => 'text_date',
    'date_format'  => 'Y/m/d',
) );

$wari_pb->add_field( array(
    'name'    => __( 'Page Total', 'atma' ),
    'desc'    => __( 'field description (optional)', 'atma' ),
    'id'      => $prefix . 'wari_pb_page_total',
    'type'    => 'text_small',
) );

$wari_pb->add_field( array(
    'name' => __( 'File', 'cmb2' ),
    'desc' => __( 'Upload pdf file', 'cmb2' ),
    'id'   => $prefix . 'wari_pb_file',
    'type' => 'file',
) );

/**
 * Warisan: Seni Ukir Melayu Tradisional
 * only display when needed
 */
$wari_sumt = new_cmb2_box( array(
    'id'            => $prefix . 'wari_sumt',
    'title'         => __( 'Seni Ukir Melayu Tradisional', 'atma' ),
    'object_types'  => array( 'atma_warisan', ),
    'closed'        => true,
) );

$wari_sumt->add_field( array(
    'name' => __( 'Display this content', 'cmb2' ),
    'desc' => __( 'check this box to display this content only', 'cmb2' ),
    'id'   => $prefix . 'wari_sumt_on',
    'type' => 'checkbox',
) );

$wari_sumt->add_field( array(
    'name' => __( 'Thumbnail', 'cmb2' ),
    'desc' => __( 'Book or Article cover', 'cmb2' ),
    'id'   => $prefix . 'wari_sumt_thumbnail',
    'type' => 'file',
) );

$wari_sumt->add_field( array(
    'name'    => __( 'Title', 'atma' ),
    'desc'    => __( 'field description (optional)', 'atma' ),
    'id'      => $prefix . 'wari_sumt_title',
    'type'    => 'text',
) );

$wari_sumt->add_field( array(
    'name'    => __( 'Author', 'atma' ),
    'desc'    => __( 'field description (optional)', 'atma' ),
    'id'      => $prefix . 'wari_sumt_author',
    'type'    => 'text',
) );

$wari_sumt->add_field( array(
    'name'    => __( 'Database', 'atma' ),
    'desc'    => __( 'field description (optional)', 'atma' ),
    'id'      => $prefix . 'wari_sumt_database',
    'type'    => 'text',
) );

$wari_sumt->add_field( array(
    'name'    => __( 'Topic', 'atma' ),
    'desc'    => __( 'field description (optional)', 'atma' ),
    'id'      => $prefix . 'wari_sumt_topic',
    'type'    => 'text',
) );

$wari_sumt->add_field( array(
    'name'    => __( 'Source', 'atma' ),
    'desc'    => __( 'field description (optional)', 'atma' ),
    'id'      => $prefix . 'wari_sumt_source',
    'type'    => 'text',
) );

$wari_sumt->add_field( array(
    'name'    => __( 'Accession No', 'atma' ),
    'desc'    => __( 'field description (optional)', 'atma' ),
    'id'      => $prefix . 'wari_sumt_accession_no',
    'type'    => 'text_small',
) );

$wari_sumt->add_field( array(
    'name'    => __( 'Year', 'atma' ),
    'desc'    => __( 'field description (optional)', 'atma' ),
    'id'      => $prefix . 'wari_sumt_year',
    'type'    => 'text_date',
    'date_format'  => 'Y/m/d',
) );

$wari_sumt->add_field( array(
    'name'    => __( 'Page Total', 'atma' ),
    'desc'    => __( 'field description (optional)', 'atma' ),
    'id'      => $prefix . 'wari_sumt_page_total',
    'type'    => 'text_small',
) );

$wari_sumt->add_field( array(
    'name' => __( 'File', 'cmb2' ),
    'desc' => __( 'Upload pdf file', 'cmb2' ),
    'id'   => $prefix . 'wari_sumt_file',
    'type' => 'file',
) );

/**
 * Warisan: Raja-raja Melayu
 * only dosplay when needed
 */
$wari_rrm = new_cmb2_box( array(
    'id'            => $prefix . 'wari_rrm',
    'title'         => __( 'Raja-raja Melayu', 'atma' ),
    'object_types'  => array( 'atma_warisan', ),
    'closed'        => true,
) );

$wari_rrm->add_field( array(
    'name' => __( 'Display this content', 'cmb2' ),
    'desc' => __( 'check this box to display this content only', 'cmb2' ),
    'id'   => $prefix . 'wari_rrm_on',
    'type' => 'checkbox',
) );

$wari_rrm->add_field( array(
    'name' => __( 'Thumbnail', 'cmb2' ),
    'desc' => __( 'Book or Article cover', 'cmb2' ),
    'id'   => $prefix . 'wari_rrm_thumbnail',
    'type' => 'file',
) );

$wari_rrm->add_field( array(
    'name'    => __( 'Title', 'atma' ),
    'desc'    => __( 'field description (optional)', 'atma' ),
    'id'      => $prefix . 'wari_rrm_title',
    'type'    => 'text',
) );

$wari_rrm->add_field( array(
    'name'    => __( 'Author', 'atma' ),
    'desc'    => __( 'field description (optional)', 'atma' ),
    'id'      => $prefix . 'wari_rrm_author',
    'type'    => 'text',
) );

$wari_rrm->add_field( array(
    'name'    => __( 'Database', 'atma' ),
    'desc'    => __( 'field description (optional)', 'atma' ),
    'id'      => $prefix . 'wari_rrm_database',
    'type'    => 'text',
) );

$wari_rrm->add_field( array(
    'name'    => __( 'Topic', 'atma' ),
    'desc'    => __( 'field description (optional)', 'atma' ),
    'id'      => $prefix . 'wari_rrm_topic',
    'type'    => 'text',
) );

$wari_rrm->add_field( array(
    'name'    => __( 'Source', 'atma' ),
    'desc'    => __( 'field description (optional)', 'atma' ),
    'id'      => $prefix . 'wari_rrm_source',
    'type'    => 'text',
) );

$wari_rrm->add_field( array(
    'name'    => __( 'Accession No', 'atma' ),
    'desc'    => __( 'field description (optional)', 'atma' ),
    'id'      => $prefix . 'wari_rrm_accession_no',
    'type'    => 'text_small',
) );

$wari_rrm->add_field( array(
    'name'    => __( 'Year', 'atma' ),
    'desc'    => __( 'field description (optional)', 'atma' ),
    'id'      => $prefix . 'wari_rrm_year',
    'type'    => 'text_date',
    'date_format'  => 'Y/m/d',
) );

$wari_rrm->add_field( array(
    'name'    => __( 'Page Total', 'atma' ),
    'desc'    => __( 'field description (optional)', 'atma' ),
    'id'      => $prefix . 'wari_rrm_page_total',
    'type'    => 'text_small',
) );

$wari_rrm->add_field( array(
    'name' => __( 'File', 'cmb2' ),
    'desc' => __( 'Upload pdf file', 'cmb2' ),
    'id'   => $prefix . 'wari_rrm_file',
    'type' => 'file',
) );
/**
 * Warisan: Maritim Alam Melayu
 * only dosplay when needed
 */
$wari_mam = new_cmb2_box( array(
    'id'            => $prefix . 'wari_mam',
    'title'         => __( 'Maritim Alam Melayu', 'atma' ),
    'object_types'  => array( 'atma_warisan', ),
    'closed'        => true,
) );

$wari_mam->add_field( array(
    'name' => __( 'Display this content', 'cmb2' ),
    'desc' => __( 'check this box to display this content only', 'cmb2' ),
    'id'   => $prefix . 'wari_km_on',
    'type' => 'checkbox',
) );

$wari_mam->add_field( array(
    'name' => __( 'Thumbnail', 'cmb2' ),
    'desc' => __( 'Book or Article cover', 'cmb2' ),
    'id'   => $prefix . 'wari_mam_thumbnail',
    'type' => 'file',
) );

$wari_mam->add_field( array(
    'name'    => __( 'Title', 'atma' ),
    'desc'    => __( 'field description (optional)', 'atma' ),
    'id'      => $prefix . 'wari_mam_title',
    'type'    => 'text',
) );

$wari_mam->add_field( array(
    'name'    => __( 'Author', 'atma' ),
    'desc'    => __( 'field description (optional)', 'atma' ),
    'id'      => $prefix . 'wari_mam_author',
    'type'    => 'text',
) );

$wari_mam->add_field( array(
    'name'    => __( 'Database', 'atma' ),
    'desc'    => __( 'field description (optional)', 'atma' ),
    'id'      => $prefix . 'wari_mam_database',
    'type'    => 'text',
) );

$wari_mam->add_field( array(
    'name'    => __( 'Topic', 'atma' ),
    'desc'    => __( 'field description (optional)', 'atma' ),
    'id'      => $prefix . 'wari_mam_topic',
    'type'    => 'text',
) );

$wari_mam->add_field( array(
    'name'    => __( 'Source', 'atma' ),
    'desc'    => __( 'field description (optional)', 'atma' ),
    'id'      => $prefix . 'wari_mam_source',
    'type'    => 'text',
) );

$wari_mam->add_field( array(
    'name'    => __( 'Accession No', 'atma' ),
    'desc'    => __( 'field description (optional)', 'atma' ),
    'id'      => $prefix . 'wari_mam_accession_no',
    'type'    => 'text_small',
) );

$wari_mam->add_field( array(
    'name'    => __( 'Year', 'atma' ),
    'desc'    => __( 'field description (optional)', 'atma' ),
    'id'      => $prefix . 'wari_mam_year',
    'type'    => 'text_date',
    'date_format'  => 'Y/m/d',
) );

$wari_mam->add_field( array(
    'name'    => __( 'Page Total', 'atma' ),
    'desc'    => __( 'field description (optional)', 'atma' ),
    'id'      => $prefix . 'wari_mam_page_total',
    'type'    => 'text_small',
) );

$wari_mam->add_field( array(
    'name' => __( 'File', 'cmb2' ),
    'desc' => __( 'Upload pdf file', 'cmb2' ),
    'id'   => $prefix . 'wari_mam_file',
    'type' => 'file',
) );

/**
 * Warisan: Busana Melayu
 * only dosplay when needed
 */
$wari_bm = new_cmb2_box( array(
    'id'            => $prefix . 'wari_bm',
    'title'         => __( 'Busana Melayu', 'atma' ),
    'object_types'  => array( 'atma_warisan', ),
    'closed'        => true,
) );

$wari_bm->add_field( array(
    'name' => __( 'Display this content', 'cmb2' ),
    'desc' => __( 'check this box to display this content only', 'cmb2' ),
    'id'   => $prefix . 'wari_bm_on',
    'type' => 'checkbox',
) );

$wari_bm->add_field( array(
    'name' => __( 'Thumbnail', 'cmb2' ),
    'desc' => __( 'Book or Article cover', 'cmb2' ),
    'id'   => $prefix . 'wari_bm_thumbnail',
    'type' => 'file',
) );

$wari_bm->add_field( array(
    'name'    => __( 'Title', 'atma' ),
    'desc'    => __( 'field description (optional)', 'atma' ),
    'id'      => $prefix . 'wari_bm_title',
    'type'    => 'text',
) );

$wari_bm->add_field( array(
    'name'    => __( 'Author', 'atma' ),
    'desc'    => __( 'field description (optional)', 'atma' ),
    'id'      => $prefix . 'wari_bm_author',
    'type'    => 'text',
) );

$wari_bm->add_field( array(
    'name'    => __( 'Database', 'atma' ),
    'desc'    => __( 'field description (optional)', 'atma' ),
    'id'      => $prefix . 'wari_bm_database',
    'type'    => 'text',
) );

$wari_bm->add_field( array(
    'name'    => __( 'Topic', 'atma' ),
    'desc'    => __( 'field description (optional)', 'atma' ),
    'id'      => $prefix . 'wari_bm_topic',
    'type'    => 'text',
) );

$wari_bm->add_field( array(
    'name'    => __( 'Source', 'atma' ),
    'desc'    => __( 'field description (optional)', 'atma' ),
    'id'      => $prefix . 'wari_bm_source',
    'type'    => 'text',
) );

$wari_bm->add_field( array(
    'name'    => __( 'Accession No', 'atma' ),
    'desc'    => __( 'field description (optional)', 'atma' ),
    'id'      => $prefix . 'wari_bm_accession_no',
    'type'    => 'text_small',
) );

$wari_bm->add_field( array(
    'name'    => __( 'Year', 'atma' ),
    'desc'    => __( 'field description (optional)', 'atma' ),
    'id'      => $prefix . 'wari_bm_year',
    'type'    => 'text_date',
    'date_format'  => 'Y/m/d',
) );

$wari_bm->add_field( array(
    'name'    => __( 'Page Total', 'atma' ),
    'desc'    => __( 'field description (optional)', 'atma' ),
    'id'      => $prefix . 'wari_bm_page_total',
    'type'    => 'text_small',
) );

$wari_bm->add_field( array(
    'name' => __( 'File', 'cmb2' ),
    'desc' => __( 'Upload pdf file', 'cmb2' ),
    'id'   => $prefix . 'wari_bm_file',
    'type' => 'file',
) );

/**
 * Warisan: Arkeologi Alam Melayu
 * only dosplay when needed
 */
$wari_aam = new_cmb2_box( array(
    'id'            => $prefix . 'wari_aam',
    'title'         => __( 'Arkeologi Alam Melayu', 'atma' ),
    'object_types'  => array( 'atma_warisan', ),
    'closed'        => true,
) );

$wari_aam->add_field( array(
    'name' => __( 'Display this content', 'cmb2' ),
    'desc' => __( 'check this box to display this content only', 'cmb2' ),
    'id'   => $prefix . 'wari_aam_on',
    'type' => 'checkbox',
) );

$wari_aam->add_field( array(
    'name' => __( 'Thumbnail', 'cmb2' ),
    'desc' => __( 'Book or Article cover', 'cmb2' ),
    'id'   => $prefix . 'wari_aam_thumbnail',
    'type' => 'file',
) );

$wari_aam->add_field( array(
    'name'    => __( 'Title', 'atma' ),
    'desc'    => __( 'field description (optional)', 'atma' ),
    'id'      => $prefix . 'wari_aam_title',
    'type'    => 'text',
) );

$wari_aam->add_field( array(
    'name'    => __( 'Author', 'atma' ),
    'desc'    => __( 'field description (optional)', 'atma' ),
    'id'      => $prefix . 'wari_aam_author',
    'type'    => 'text',
) );

$wari_aam->add_field( array(
    'name'    => __( 'Database', 'atma' ),
    'desc'    => __( 'field description (optional)', 'atma' ),
    'id'      => $prefix . 'wari_aam_database',
    'type'    => 'text',
) );

$wari_aam->add_field( array(
    'name'    => __( 'Topic', 'atma' ),
    'desc'    => __( 'field description (optional)', 'atma' ),
    'id'      => $prefix . 'wari_aam_topic',
    'type'    => 'text',
) );

$wari_aam->add_field( array(
    'name'    => __( 'Source', 'atma' ),
    'desc'    => __( 'field description (optional)', 'atma' ),
    'id'      => $prefix . 'wari_aam_source',
    'type'    => 'text',
) );

$wari_aam->add_field( array(
    'name'    => __( 'Accession No', 'atma' ),
    'desc'    => __( 'field description (optional)', 'atma' ),
    'id'      => $prefix . 'wari_aam_accession_no',
    'type'    => 'text_small',
) );

$wari_aam->add_field( array(
    'name'    => __( 'Year', 'atma' ),
    'desc'    => __( 'field description (optional)', 'atma' ),
    'id'      => $prefix . 'wari_aam_year',
    'type'    => 'text_date',
    'date_format'  => 'Y/m/d',
) );

$wari_aam->add_field( array(
    'name'    => __( 'Page Total', 'atma' ),
    'desc'    => __( 'field description (optional)', 'atma' ),
    'id'      => $prefix . 'wari_aam_page_total',
    'type'    => 'text_small',
) );

$wari_aam->add_field( array(
    'name' => __( 'File', 'cmb2' ),
    'desc' => __( 'Upload pdf file', 'cmb2' ),
    'id'   => $prefix . 'wari_aam_file',
    'type' => 'file',
) );

/**
 * Warisan: Etnik Alam Melayu
 * only dosplay when needed
 */
$wari_eam = new_cmb2_box( array(
    'id'            => $prefix . 'wari_eam',
    'title'         => __( 'Etnik Alam Melayu', 'atma' ),
    'object_types'  => array( 'atma_warisan', ),
    'closed'        => true,
) );

$wari_eam->add_field( array(
    'name' => __( 'Display this content', 'cmb2' ),
    'desc' => __( 'check this box to display this content only', 'cmb2' ),
    'id'   => $prefix . 'wari_eam_on',
    'type' => 'checkbox',
) );

$wari_eam->add_field( array(
    'name' => __( 'Thumbnail', 'cmb2' ),
    'desc' => __( 'Book or Article cover', 'cmb2' ),
    'id'   => $prefix . 'wari_eam_thumbnail',
    'type' => 'file',
) );

$wari_eam->add_field( array(
    'name'    => __( 'Title', 'atma' ),
    'desc'    => __( 'field description (optional)', 'atma' ),
    'id'      => $prefix . 'wari_eam_title',
    'type'    => 'text',
) );

$wari_eam->add_field( array(
    'name'    => __( 'Author', 'atma' ),
    'desc'    => __( 'field description (optional)', 'atma' ),
    'id'      => $prefix . 'wari_eam_author',
    'type'    => 'text',
) );

$wari_eam->add_field( array(
    'name'    => __( 'Database', 'atma' ),
    'desc'    => __( 'field description (optional)', 'atma' ),
    'id'      => $prefix . 'wari_eam_database',
    'type'    => 'text',
) );

$wari_eam->add_field( array(
    'name'    => __( 'Topic', 'atma' ),
    'desc'    => __( 'field description (optional)', 'atma' ),
    'id'      => $prefix . 'wari_eam_topic',
    'type'    => 'text',
) );

$wari_eam->add_field( array(
    'name'    => __( 'Source', 'atma' ),
    'desc'    => __( 'field description (optional)', 'atma' ),
    'id'      => $prefix . 'wari_eam_source',
    'type'    => 'text',
) );

$wari_eam->add_field( array(
    'name'    => __( 'Accession No', 'atma' ),
    'desc'    => __( 'field description (optional)', 'atma' ),
    'id'      => $prefix . 'wari_eam_accession_no',
    'type'    => 'text_small',
) );

$wari_eam->add_field( array(
    'name'    => __( 'Year', 'atma' ),
    'desc'    => __( 'field description (optional)', 'atma' ),
    'id'      => $prefix . 'wari_eam_year',
    'type'    => 'text_date',
    'date_format'  => 'Y/m/d',
) );

$wari_eam->add_field( array(
    'name'    => __( 'Page Total', 'atma' ),
    'desc'    => __( 'field description (optional)', 'atma' ),
    'id'      => $prefix . 'wari_eam_page_total',
    'type'    => 'text_small',
) );

$wari_eam->add_field( array(
    'name' => __( 'File', 'cmb2' ),
    'desc' => __( 'Upload pdf file', 'cmb2' ),
    'id'   => $prefix . 'wari_eam_file',
    'type' => 'file',
) );

/**
 * Warisan: Tarian Tradisional
 * only dosplay when needed
 */
$wari_ttd = new_cmb2_box( array(
    'id'            => $prefix . 'wari_ttd',
    'title'         => __( 'Tarian Tradisional', 'atma' ),
    'object_types'  => array( 'atma_warisan', ),
    'closed'        => true,
) );

$wari_ttd->add_field( array(
    'name' => __( 'Display this content', 'cmb2' ),
    'desc' => __( 'check this box to display this content only', 'cmb2' ),
    'id'   => $prefix . 'wari_ttd_on',
    'type' => 'checkbox',
) );

$wari_ttd->add_field( array(
    'name' => __( 'Thumbnail', 'cmb2' ),
    'desc' => __( 'Book or Article cover', 'cmb2' ),
    'id'   => $prefix . 'wari_ttd_thumbnail',
    'type' => 'file',
) );

$wari_ttd->add_field( array(
    'name'    => __( 'Title', 'atma' ),
    'desc'    => __( 'field description (optional)', 'atma' ),
    'id'      => $prefix . 'wari_ttd_title',
    'type'    => 'text',
) );

$wari_ttd->add_field( array(
    'name'    => __( 'Author', 'atma' ),
    'desc'    => __( 'field description (optional)', 'atma' ),
    'id'      => $prefix . 'wari_ttd_author',
    'type'    => 'text',
) );

$wari_ttd->add_field( array(
    'name'    => __( 'Database', 'atma' ),
    'desc'    => __( 'field description (optional)', 'atma' ),
    'id'      => $prefix . 'wari_ttd_database',
    'type'    => 'text',
) );

$wari_ttd->add_field( array(
    'name'    => __( 'Topic', 'atma' ),
    'desc'    => __( 'field description (optional)', 'atma' ),
    'id'      => $prefix . 'wari_ttd_topic',
    'type'    => 'text',
) );

$wari_ttd->add_field( array(
    'name'    => __( 'Source', 'atma' ),
    'desc'    => __( 'field description (optional)', 'atma' ),
    'id'      => $prefix . 'wari_ttd_source',
    'type'    => 'text',
) );

$wari_ttd->add_field( array(
    'name'    => __( 'Accession No', 'atma' ),
    'desc'    => __( 'field description (optional)', 'atma' ),
    'id'      => $prefix . 'wari_ttd_accession_no',
    'type'    => 'text_small',
) );

$wari_ttd->add_field( array(
    'name'    => __( 'Year', 'atma' ),
    'desc'    => __( 'field description (optional)', 'atma' ),
    'id'      => $prefix . 'wari_ttd_year',
    'type'    => 'text_date',
    'date_format'  => 'Y/m/d',
) );

$wari_ttd->add_field( array(
    'name'    => __( 'Page Total', 'atma' ),
    'desc'    => __( 'field description (optional)', 'atma' ),
    'id'      => $prefix . 'wari_ttd_page_total',
    'type'    => 'text_small',
) );

$wari_ttd->add_field( array(
    'name' => __( 'File', 'cmb2' ),
    'desc' => __( 'Upload pdf file', 'cmb2' ),
    'id'   => $prefix . 'wari_ttd_file',
    'type' => 'file',
) );

/**
 * KAMUS
 * Malay Dictionary of End Syllables
 * Malay Dictionaries by Non-Malays
 * 20160719
 */

/** (0) Main Contents */

$kamus_main = new_cmb2_box( array(
    'id'            => $prefix . 'kamus_main',
    'title'         => __( 'Main Content', 'atma' ),
    'object_types'  => array( 'atma_kamus', ),
    'closed'        => true,
) );

$kamus_main->add_field( array(
    'name' => __( 'Display this content', 'cmb2' ),
    'desc' => __( 'check this box to display this content only', 'cmb2' ),
    'id'   => $prefix . 'kamus_main_on',
    'type' => 'checkbox',
) );

$kamus_main->add_field( array(
    'name'    => __( 'Content', 'atma' ),
    'desc'    => __( 'field description (optional)', 'atma' ),
    'id'      => $prefix . 'kamus_main_content',
    'type'    => 'wysiwyg',
    'options' => array( 'textarea_rows' => 7, ),
) );

/** (1) Malay Dictionary of End Syllables */
$kamus_es = new_cmb2_box( array(
    'id'            => $prefix . 'kamus_es',
    'title'         => __( 'Malay Dictionary of End Syllables', 'atma' ),
    'object_types'  => array( 'atma_kamus', ),
    'closed'        => true,
) );

$kamus_es->add_field( array(
    'name' => __( 'Display this content', 'cmb2' ),
    'desc' => __( 'check this box to display this content only', 'cmb2' ),
    'id'   => $prefix . 'kamus_es_on',
    'type' => 'checkbox',
) );

$kamus_es->add_field( array(
    'name' => __( 'Root Word', 'atma' ),
    'desc' => __( '', 'atma' ),
    'id'   => $prefix . 'kamus_es_root',
    'type' => 'text',
) );

$kamus_es->add_field( array(
    'name' => __( 'Author', 'atma' ),
    'desc' => __( '', 'atma' ),
    'id'   => $prefix . 'kamus_es_author',
    'type' => 'text',
) );

$kamus_es->add_field( array(
    'name' => __( 'Database', 'atma' ),
    'desc' => __( '', 'atma' ),
    'id'   => $prefix . 'kamus_es_db',
    'type' => 'text',
) );

$kamus_es->add_field( array(
    'name' => __( 'Topic', 'atma' ),
    'desc' => __( '', 'atma' ),
    'id'   => $prefix . 'kamus_es_topic',
    'type' => 'text',
) );

$kamus_es->add_field( array(
    'name' => __( 'Subject', 'atma' ),
    'desc' => __( '', 'atma' ),
    'id'   => $prefix . 'kamus_es_subject',
    'type' => 'text',
) );

$kamus_es->add_field( array(
    'name' => __( 'Year', 'atma' ),
    'desc' => __( '', 'atma' ),
    'id'   => $prefix . 'kamus_es_year',
    'type' => 'text_date',
    'date_format' => 'Y/m/d',
) );

$kamus_es->add_field( array(
    'name' => __( 'Description', 'atma' ),
    'desc' => __( '', 'atma' ),
    'id'   => $prefix . 'kamus_es_desc',
    'type' => 'text',
) );

/** (2) Malay Dictionaries by Non-Malays */
$kamus_nm = new_cmb2_box( array(
    'id'            => $prefix . 'kamus_nm',
    'title'         => __( 'Malay Dictionaries by Non-Malays', 'atma' ),
    'object_types'  => array( 'atma_kamus', ),
    'closed'        => true,
) );

$kamus_nm->add_field( array(
    'name' => __( 'Display this content', 'cmb2' ),
    'desc' => __( 'check this box to display this content only', 'cmb2' ),
    'id'   => $prefix . 'kamus_nm_on',
    'type' => 'checkbox',
) );

$kamus_nm->add_field( array(
    'name' => __( 'Image', 'atma' ),
    'desc' => __( '', 'atma' ),
    'id'   => $prefix . 'kamus_nm_image',
    'type' => 'file',
) );

$kamus_nm->add_field( array(
    'name' => __( 'Image', 'atma' ),
    'desc' => __( 'Upload book or pdf cover in JPG format', 'atma' ),
    'id'   => $prefix . 'kamus_nm_file',
    'type' => 'file',
) );

$kamus_nm->add_field( array(
    'name' => __( 'Title', 'atma' ),
    'desc' => __( '', 'atma' ),
    'id'   => $prefix . 'kamus_nm_title',
    'type' => 'text',
) );

$kamus_nm->add_field( array(
    'name' => __( 'Author', 'atma' ),
    'desc' => __( '', 'atma' ),
    'id'   => $prefix . 'kamus_nm_author',
    'type' => 'text',
) );

$kamus_nm->add_field( array(
    'name' => __( 'Database', 'atma' ),
    'desc' => __( '', 'atma' ),
    'id'   => $prefix . 'kamus_nm_db',
    'type' => 'text',
) );

$kamus_nm->add_field( array(
    'name' => __( 'Topic', 'atma' ),
    'desc' => __( '', 'atma' ),
    'id'   => $prefix . 'kamus_nm_topic',
    'type' => 'text',
) );

$kamus_nm->add_field( array(
    'name' => __( 'Year', 'atma' ),
    'desc' => __( '', 'atma' ),
    'id'   => $prefix . 'kamus_nm_year',
    'type' => 'text_date',
    'date_format' => 'Y/m/d',
) );

$kamus_nm->add_field( array(
    'name' => __( 'Category', 'atma' ),
    'desc' => __( '', 'atma' ),
    'id'   => $prefix . 'kamus_nm_category',
    'type' => 'text',
) );

$kamus_nm->add_field( array(
    'name' => __( 'Page Total', 'atma' ),
    'desc' => __( '', 'atma' ),
    'id'   => $prefix . 'kamus_nm_page_total',
    'type' => 'text_small',
) );

/**
 * PADAT
 * Pangkalan Data ATMA
 */
/** (0) Main contents */
$padat_main = new_cmb2_box( array(
    'id'            => $prefix . 'padat_main',
    'title'         => __( 'Main Content', 'atma' ),
    'object_types'  => array( 'atma_padat', ),
    'closed'        => true,
) );

$padat_main->add_field( array(
    'name' => __( 'Display this content', 'cmb2' ),
    'desc' => __( 'check this box to display this content only', 'cmb2' ),
    'id'   => $prefix . 'padat_main_on',
    'type' => 'checkbox',
) );

$padat_main->add_field( array(
    'name'    => __( 'Content', 'atma' ),
    'desc'    => __( 'field description (optional)', 'atma' ),
    'id'      => $prefix . 'padat_main_content',
    'type'    => 'wysiwyg',
    'options' => array( 'textarea_rows' => 7, ),
) );

/** (1) Book and Articles */
$padat_ba = new_cmb2_box( array(
    'id'            => $prefix . 'padat_ba',
    'title'         => __( 'Book and Articles', 'atma' ),
    'object_types'  => array( 'atma_padat', ),
    'closed'        => true,
) );

$padat_ba->add_field( array(
    'name' => __( 'Display this content', 'cmb2' ),
    'desc' => __( 'check this box to display this content only', 'cmb2' ),
    'id'   => $prefix . 'padat_ba_on',
    'type' => 'checkbox',
) );

$padat_ba->add_field( array(
    'name' => __( 'Thumbnail', 'cmb2' ),
    'desc' => __( 'Book or Article cover', 'cmb2' ),
    'id'   => $prefix . 'padat_ba_thumbnail',
    'type' => 'file',
) );

$padat_ba->add_field( array(
    'name'    => __( 'Title', 'atma' ),
    'desc'    => __( 'field description (optional)', 'atma' ),
    'id'      => $prefix . 'padat_ba_title',
    'type'    => 'text',
) );

$padat_ba->add_field( array(
    'name'    => __( 'Author', 'atma' ),
    'desc'    => __( 'field description (optional)', 'atma' ),
    'id'      => $prefix . 'padat_ba_author',
    'type'    => 'text',
) );

$padat_ba->add_field( array(
    'name'    => __( 'Database', 'atma' ),
    'desc'    => __( 'field description (optional)', 'atma' ),
    'id'      => $prefix . 'padat_ba_database',
    'type'    => 'text',
) );

$padat_ba->add_field( array(
    'name'    => __( 'Topic', 'atma' ),
    'desc'    => __( 'field description (optional)', 'atma' ),
    'id'      => $prefix . 'padat_ba_topic',
    'type'    => 'text',
) );

$padat_ba->add_field( array(
    'name'    => __( 'Source', 'atma' ),
    'desc'    => __( 'field description (optional)', 'atma' ),
    'id'      => $prefix . 'padat_ba_source',
    'type'    => 'text',
) );

$padat_ba->add_field( array(
    'name'    => __( 'Accession No', 'atma' ),
    'desc'    => __( 'field description (optional)', 'atma' ),
    'id'      => $prefix . 'padat_ba_accession_no',
    'type'    => 'text_small',
) );

$padat_ba->add_field( array(
    'name'    => __( 'Year', 'atma' ),
    'desc'    => __( 'field description (optional)', 'atma' ),
    'id'      => $prefix . 'padat_ba_year',
    'type'    => 'text_date',
    'date_format'  => 'Y/m/d',
) );

$padat_ba->add_field( array(
    'name'    => __( 'Page Total', 'atma' ),
    'desc'    => __( 'field description (optional)', 'atma' ),
    'id'      => $prefix . 'padat_ba_page_total',
    'type'    => 'text_small',
) );

$padat_ba->add_field( array(
    'name' => __( 'File', 'cmb2' ),
    'desc' => __( 'Upload pdf file', 'cmb2' ),
    'id'   => $prefix . 'padat_ba_file',
    'type' => 'file',
) );

/**
 * @package ukm-malaycivilization
 * @subpackage slideshow
 * Frontpage slideshow
 */
$slideshow = new_cmb2_box( array(
    'id'            => $prefix . 'slideshow',
    'title'         => __( 'Contents', 'atma' ),
    'object_types'  => array( 'atma_slideshow', ),
    'closed'        => false,
) );

$slideshow->add_field( array(
    'name'    => __( 'Image', 'atma' ),
    'desc'    => __( 'Image size 1200 x 450 px', 'atma' ),
    'id'      => $prefix . 'slideshow_image',
    'type'    => 'file',
) );

$slideshow->add_field( array(
    'name'    => __( 'URL', 'atma' ),
    'desc'    => __( 'Slideshow link to page or other', 'atma' ),
    'id'      => $prefix . 'slideshow_url',
    'type'    => 'text_url',
) );

}
  
add_action( 'cmb2_admin_init', 'atma_post_type_metabox' );

/**
 * Additional settings for images and photogallery
 * Lightbox Gallery
 * tpkh_tokoh_pemikir
 */
function atma_tokoh_gallery( $file_list_meta_key, $img_size = 'medium' ) {
  $files = get_post_meta( get_the_ID(), $file_list_meta_key, 1 );
  echo '<div>';
  foreach ( (array) $files as $attachment_id => $attachment_url ) {
    echo '<a class="padding" href="'. wp_get_attachment_url( $attachment_id ) .'" data-uk-lightbox="&#123;group:&#39;group-'. get_the_ID() .'&#39;&#125;" title="'. get_the_title( $attachment_id ) .'">';
    echo wp_get_attachment_image( $attachment_id, $img_size );
    echo '</a>';
  }
  echo '</div>';
}
