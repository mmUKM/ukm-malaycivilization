<?php
/**
* @packege ATMA
* @subpackage Malaycivilization
*/

/**
 * Hook CMB2
 */

if ( file_exists(  get_template_directory() . '/lib/mcv/init.php' ) ) {
  require_once  get_template_directory() . '/lib/mcv/init.php';
} elseif ( file_exists(  get_template_directory()  . '/lib/CMB2/init.php' ) ) {
  require_once  get_template_directory()  . '/lib/CMB2/init.php';
}


$prefix = '_mcv_';

$cmb_demo = new_mcv_box( array(
    'id'            => $prefix . 'adat_perpatih',
    'title'         => __( 'Test Metabox', 'mcv' ),
    'object_types'  => array( 'mcv_adat_pepatih', ), // Post type
    'closed'     => false,
) );

$cmb_demo->add_field( array(
    'name'       => __( 'Test Text', 'mcv' ),
    'desc'       => __( 'field description (optional)', 'mcv' ),
    'id'         => $prefix . 'text',
    'type'       => 'text',
    'show_on_cb' => 'yourprefix_hide_if_no_cats', // function should return a bool value
    // 'sanitization_cb' => 'my_custom_sanitization', // custom sanitization callback parameter
    // 'escape_cb'       => 'my_custom_escaping',  // custom escaping callback parameter
    // 'on_front'        => false, // Optionally designate a field to wp-admin only
    // 'repeatable'      => true,
) );
  
add_action( 'mcv_admin_init', 'yourprefix_register_demo_metabox' );