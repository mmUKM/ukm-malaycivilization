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

function atma_post_type_metabox() {

$prefix = '_atma_';


/**
 * @package ukm-malaycivilization
 * @subpackage atma_tpkh: Tokoh Pemikir
 */
/**
 * Main content
 * only display when needed
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
    'id'   => $prefix . 'wari_ap_on',
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

/**
 * @package ukm-malaycivilization
 * @subpackage slideshow
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