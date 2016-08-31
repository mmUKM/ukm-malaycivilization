<?php
/**
 * @package ATMA
 * @subpackage malaycivilization
 */

get_header(); ?>

<div class="uk-clearfix wrapper">
  <?php get_template_part( 'content', 'before' ); ?>
  <article class="padding col">
    <div class="lg-3">
      <?php get_template_part( 'templates/nav', 'database' ); ?>
    </div>
    <div class="lg-9 padding-left">
    <?php while( have_posts() ) : the_post(); ?>

    <?php
      $warimainon   = get_post_meta( get_the_ID(), '_atma_wari_main_on', true );
      $wariaapon    = get_post_meta( get_the_ID(), '_atma_wari_ap_on', true );
      $warikjon     = get_post_meta( get_the_ID(), '_atma_wari_main_on', true );
      $waripbhon    = get_post_meta( get_the_ID(), '_atma_wari_pbh_on', true );
      $warispon     = get_post_meta( get_the_ID(), '_atma_wari_sp_on', true );
      $waripbon     = get_post_meta( get_the_ID(), '_atma_wari_pb_on', true );
      $warisumton   = get_post_meta( get_the_ID(), '_atma_wari_sumt_on', true );
      $warirrmon    = get_post_meta( get_the_ID(), '_atma_wari_rrm_on', true );
      $warimamon    = get_post_meta( get_the_ID(), '_atma_wari_mam_on', true );
      $waribmon     = get_post_meta( get_the_ID(), '_atma_wari_bm_on', true );
      $wariaamon    = get_post_meta( get_the_ID(), '_atma_wari_aam_on', true );
      $warieamon    = get_post_meta( get_the_ID(), '_atma_wari_eam_on', true );
      $warittdon     = get_post_meta( get_the_ID(), '_atma_wari_td_on', true );
    ?>

    <?php if ( $warimainon == on ) { ?>
    <div id="padat-main-content">
      <?php echo wpautop ( get_post_meta( get_the_ID(), '_atma_wari_main_content', true ) ); ?>
    </div>
    <?php }//end warimainon?>
    <?php
    /**
     * Paparan muka hadapan untuk Warisan: Adat Perpatih
     * Semak post meta di /inc/theme-metabox.php
     */
    if ( $wariapon == on ) { ?>
    <div id="padat-ba-content">
      <img src="<?php echo get_post_meta( get_the_ID(), '_atma_wari_ap_thumbnail', true ); ?>" width="200" alt="">
      <table class="data-content">
        <tr>
          <td><strong>Title</strong></td>
          <td><?php the_title(); ?></td>
        </tr>
        <tr>
          <td><strong>Author</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_wari_ap_author', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Database</strong></td>
          <td><?php echo get_the_term_list( $post->ID, 'atma_warisan_database', '', ', ','' ); ?></td>
        </tr>
        <tr>
          <td><strong>Topic</strong></td>
          <td><?php echo get_the_term_list( $post->ID, 'atma_warisan_topic', '', ', ','' ); ?></td>
        </tr>
        <tr>
          <td><strong>Source</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_wari_ap_source', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Keyword</strong></td>
          <td><?php echo get_the_term_list( $post->ID, 'atma_warisan_keyword', '', ', ','' ); ?></td>
        </tr>
        <tr>
          <td><strong>Accession No</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_wari_ap_accession_no', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Year</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_wari_ap_year', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Category</strong></td>
          <td><?php echo get_the_term_list( $post->ID, 'atma_warisan_category', '', ', ','' ); ?></td>
        </tr>
        <tr>
          <td><strong>Page Total</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_wari_ap_page_total', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Download</strong></td>
          <td><a href="<?php echo get_post_meta( get_the_ID(), '_atma_wari_ap_file', true ); ?>">Portable Document Format (PDF)</a></td>
        </tr>
      </table>
    </div>
    <?php }//end wariaapon?>
    <?php
    /**
     * Paparan halaman Warisan: Karya Jawi
     * Semak post meta di /inc/theme-metabox.php
     */
    if ( $warikjon == on ) { ?>
    <div id="warisan-ap-content">
      <img src="<?php echo get_post_meta( get_the_ID(), '_atma_wari_kj_thumbnail', true ); ?>" width="200" alt="">
      <table class="data-content">
        <tr>
          <td><strong>Title</strong></td>
          <td><?php the_title(); ?></td>
        </tr>
        <tr>
          <td><strong>Author</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_wari_kj_author', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Database</strong></td>
          <td><?php echo get_the_term_list( $post->ID, 'atma_warisan_database', '', ', ','' ); ?></td>
        </tr>
        <tr>
          <td><strong>Topic</strong></td>
          <td><?php echo get_the_term_list( $post->ID, 'atma_warisan_topic', '', ', ','' ); ?></td>
        </tr>
        <tr>
          <td><strong>Source</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_wari_kj_source', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Keywords</strong></td>
          <td><?php echo get_the_term_list( $post->ID, 'atma_warisan_keyword', '', ', ', '' ); ?></td>
        </tr>
        <tr>
          <td><strong>Accession No</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_wari_kj_accession_no', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Year</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_wari_kj_year', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Category</strong></td>
          <td><?php echo get_the_term_list( $post->ID, 'atma_warisan_category', '', '<br>', '' ); ?></td>
        </tr>
        <tr>
          <td><strong>Page Total</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_wari_kj_page_total', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Download</strong></td>
          <td><a href="<?php echo get_post_meta( get_the_ID(), '_atma_wari_kj_file', true ); ?>">Portable Document Format (PDF)</a></td>
        </tr>
      </table>
    </div>
    <?php }//end warikjon?>
    <?php
    /**
     * Paparan untuk halaman Warisan: Peri Bahasa
     * Semak fail /inc/theme-metabox.php untuk pertalian post meta box
     */
    if ( $waripbhon == on ) { ?>
    <div id="warisan-pbh-content">
      <img src="<?php echo get_post_meta( get_the_ID(), '_atma_wari_pbh_thumbnail', true ); ?>" width="200" alt="">
      <table class="data-content">
        <tr>
          <td><strong>Title</strong></td>
          <td><?php the_title(); ?></td>
        </tr>
        <tr>
          <td><strong>Author</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_wari_pbh_author', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Database</strong></td>
          <td><?php echo get_the_term_list( $post->ID, 'atma_warisan_database', '', ', ','' ); ?></td>
        </tr>
        <tr>
          <td><strong>Topic</strong></td>
          <td><?php echo get_the_term_list( $post->ID, 'atma_warisan_topic', '', ', ','' ); ?></td>
        </tr>
        <tr>
          <td><strong>Source</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_wari_pbh_source', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Keywords</strong></td>
          <td><?php echo get_the_term_list( $post->ID, 'atma_warisan_database', '', ', ','' ); ?></td>
        </tr>
        <tr>
          <td><strong>Subject</strong></td>
          <td><?php echo get_the_term_list( $post->ID, 'atma_warisan_subject', '', ', ','' ); ?></td>
        </tr>
        <tr>
          <td><strong>Accession No</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_wari_pbh_accession_no', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Label</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_wari_pbh_label', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Description</strong></td>
          <td><?php echo wpautop ( get_post_meta( get_the_ID(), '_atma_wari_pbh_desc', true ) ); ?></td>
        </tr>
        <tr>
          <td><strong>Language</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_wari_pbh_lang', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Year</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_wari_pbh_year', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Category</strong></td>
          <td><?php echo get_the_term_list( $post->ID, 'atma_warisan_category', '', '<br>', '' ); ?></td>
        </tr>
        <tr>
          <td><strong>Page Total</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_wari_pbh_page_total', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Download</strong></td>
          <td><a href="<?php echo get_post_meta( get_the_ID(), '_atma_wari_pbh_file', true ); ?>">Portable Document Format (PDF)</a></td>
        </tr>
      </table>
    </div>
    <?php }//end waripbhon?>
    <?php if ( $warispon == on ) { ?>
    <div id="padat-ba-content">
      <img src="<?php echo get_post_meta( get_the_ID(), '_atma_wari_ba_thumbnail', true ); ?>" width="200" alt="">
      <table class="data-content">
        <tr>
          <td><strong>Title</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_wari_ba_title', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Author</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_wari_ba_author', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Database</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_wari_ba_database', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Topic</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_wari_ba_topic', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Source</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_wari_ba_source', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Keywords</strong></td>
          <td><?php echo get_the_term_list( $post->ID, 'atma_padat_keyword', '', ', ', '' ); ?></td>
        </tr>
        <tr>
          <td><strong>Accession No</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_wari_ba_accession_no', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Year</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_wari_ba_year', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Category</strong></td>
          <td><?php echo get_the_term_list( $post->ID, 'atma_padat_category', '', '<br>', '' ); ?></td>
        </tr>
        <tr>
          <td><strong>Page Total</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_wari_ba_page_total', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Download</strong></td>
          <td><a href="<?php echo get_post_meta( get_the_ID(), '_atma_wari_ba_file', true ); ?>">Portable Document Format (PDF)</a></td>
        </tr>
      </table>
    </div>
    <?php }//end warispon?>
    <?php if ( $waripbon == on ) { ?>
    <div id="padat-ba-content">
      <img src="<?php echo get_post_meta( get_the_ID(), '_atma_wari_ba_thumbnail', true ); ?>" width="200" alt="">
      <table class="data-content">
        <tr>
          <td><strong>Title</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_wari_ba_title', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Author</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_wari_ba_author', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Database</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_wari_ba_database', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Topic</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_wari_ba_topic', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Source</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_wari_ba_source', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Keywords</strong></td>
          <td><?php echo get_the_term_list( $post->ID, 'atma_padat_keyword', '', ', ', '' ); ?></td>
        </tr>
        <tr>
          <td><strong>Accession No</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_wari_ba_accession_no', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Year</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_wari_ba_year', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Category</strong></td>
          <td><?php echo get_the_term_list( $post->ID, 'atma_padat_category', '', '<br>', '' ); ?></td>
        </tr>
        <tr>
          <td><strong>Page Total</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_wari_ba_page_total', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Download</strong></td>
          <td><a href="<?php echo get_post_meta( get_the_ID(), '_atma_wari_ba_file', true ); ?>">Portable Document Format (PDF)</a></td>
        </tr>
      </table>
    </div>
    <?php }//end waripbon?>
    <?php if ( $warisumton == on ) { ?>
    <div id="padat-ba-content">
      <img src="<?php echo get_post_meta( get_the_ID(), '_atma_wari_ba_thumbnail', true ); ?>" width="200" alt="">
      <table class="data-content">
        <tr>
          <td><strong>Title</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_wari_ba_title', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Author</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_wari_ba_author', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Database</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_wari_ba_database', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Topic</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_wari_ba_topic', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Source</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_wari_ba_source', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Keywords</strong></td>
          <td><?php echo get_the_term_list( $post->ID, 'atma_padat_keyword', '', ', ', '' ); ?></td>
        </tr>
        <tr>
          <td><strong>Accession No</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_wari_ba_accession_no', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Year</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_wari_ba_year', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Category</strong></td>
          <td><?php echo get_the_term_list( $post->ID, 'atma_padat_category', '', '<br>', '' ); ?></td>
        </tr>
        <tr>
          <td><strong>Page Total</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_wari_ba_page_total', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Download</strong></td>
          <td><a href="<?php echo get_post_meta( get_the_ID(), '_atma_wari_ba_file', true ); ?>">Portable Document Format (PDF)</a></td>
        </tr>
      </table>
    </div>
    <?php }//end warisumton?>
    <?php if ( $warirrmon == on ) { ?>
    <div id="padat-ba-content">
      <img src="<?php echo get_post_meta( get_the_ID(), '_atma_wari_ba_thumbnail', true ); ?>" width="200" alt="">
      <table class="data-content">
        <tr>
          <td><strong>Title</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_wari_ba_title', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Author</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_wari_ba_author', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Database</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_wari_ba_database', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Topic</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_wari_ba_topic', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Source</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_wari_ba_source', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Keywords</strong></td>
          <td><?php echo get_the_term_list( $post->ID, 'atma_padat_keyword', '', ', ', '' ); ?></td>
        </tr>
        <tr>
          <td><strong>Accession No</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_wari_ba_accession_no', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Year</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_wari_ba_year', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Category</strong></td>
          <td><?php echo get_the_term_list( $post->ID, 'atma_padat_category', '', '<br>', '' ); ?></td>
        </tr>
        <tr>
          <td><strong>Page Total</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_wari_ba_page_total', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Download</strong></td>
          <td><a href="<?php echo get_post_meta( get_the_ID(), '_atma_wari_ba_file', true ); ?>">Portable Document Format (PDF)</a></td>
        </tr>
      </table>
    </div>
    <?php }//end warirrmon?>
    <?php if ( $warimamon == on ) { ?>
    <div id="padat-ba-content">
      <img src="<?php echo get_post_meta( get_the_ID(), '_atma_wari_ba_thumbnail', true ); ?>" width="200" alt="">
      <table class="data-content">
        <tr>
          <td><strong>Title</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_wari_ba_title', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Author</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_wari_ba_author', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Database</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_wari_ba_database', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Topic</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_wari_ba_topic', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Source</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_wari_ba_source', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Keywords</strong></td>
          <td><?php echo get_the_term_list( $post->ID, 'atma_padat_keyword', '', ', ', '' ); ?></td>
        </tr>
        <tr>
          <td><strong>Accession No</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_wari_ba_accession_no', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Year</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_wari_ba_year', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Category</strong></td>
          <td><?php echo get_the_term_list( $post->ID, 'atma_padat_category', '', '<br>', '' ); ?></td>
        </tr>
        <tr>
          <td><strong>Page Total</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_wari_ba_page_total', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Download</strong></td>
          <td><a href="<?php echo get_post_meta( get_the_ID(), '_atma_wari_ba_file', true ); ?>">Portable Document Format (PDF)</a></td>
        </tr>
      </table>
    </div>
    <?php }//end warimamon?>
    <?php if ( $waribmon == on ) { ?>
    <div id="padat-ba-content">
      <img src="<?php echo get_post_meta( get_the_ID(), '_atma_wari_ba_thumbnail', true ); ?>" width="200" alt="">
      <table class="data-content">
        <tr>
          <td><strong>Title</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_wari_ba_title', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Author</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_wari_ba_author', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Database</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_wari_ba_database', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Topic</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_wari_ba_topic', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Source</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_wari_ba_source', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Keywords</strong></td>
          <td><?php echo get_the_term_list( $post->ID, 'atma_padat_keyword', '', ', ', '' ); ?></td>
        </tr>
        <tr>
          <td><strong>Accession No</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_wari_ba_accession_no', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Year</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_wari_ba_year', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Category</strong></td>
          <td><?php echo get_the_term_list( $post->ID, 'atma_padat_category', '', '<br>', '' ); ?></td>
        </tr>
        <tr>
          <td><strong>Page Total</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_wari_ba_page_total', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Download</strong></td>
          <td><a href="<?php echo get_post_meta( get_the_ID(), '_atma_wari_ba_file', true ); ?>">Portable Document Format (PDF)</a></td>
        </tr>
      </table>
    </div>
    <?php }//end waribmon?>
    <?php if ( $wariaamon == on ) { ?>
    <div id="padat-ba-content">
      <img src="<?php echo get_post_meta( get_the_ID(), '_atma_wari_ba_thumbnail', true ); ?>" width="200" alt="">
      <table class="data-content">
        <tr>
          <td><strong>Title</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_wari_ba_title', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Author</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_wari_ba_author', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Database</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_wari_ba_database', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Topic</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_wari_ba_topic', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Source</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_wari_ba_source', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Keywords</strong></td>
          <td><?php echo get_the_term_list( $post->ID, 'atma_padat_keyword', '', ', ', '' ); ?></td>
        </tr>
        <tr>
          <td><strong>Accession No</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_wari_ba_accession_no', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Year</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_wari_ba_year', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Category</strong></td>
          <td><?php echo get_the_term_list( $post->ID, 'atma_padat_category', '', '<br>', '' ); ?></td>
        </tr>
        <tr>
          <td><strong>Page Total</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_wari_ba_page_total', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Download</strong></td>
          <td><a href="<?php echo get_post_meta( get_the_ID(), '_atma_wari_ba_file', true ); ?>">Portable Document Format (PDF)</a></td>
        </tr>
      </table>
    </div>
    <?php }//end wariaamon?>
    <?php if ( $warieamon == on ) { ?>
    <div id="padat-ba-content">
      <img src="<?php echo get_post_meta( get_the_ID(), '_atma_wari_ba_thumbnail', true ); ?>" width="200" alt="">
      <table class="data-content">
        <tr>
          <td><strong>Title</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_wari_ba_title', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Author</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_wari_ba_author', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Database</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_wari_ba_database', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Topic</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_wari_ba_topic', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Source</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_wari_ba_source', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Keywords</strong></td>
          <td><?php echo get_the_term_list( $post->ID, 'atma_padat_keyword', '', ', ', '' ); ?></td>
        </tr>
        <tr>
          <td><strong>Accession No</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_wari_ba_accession_no', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Year</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_wari_ba_year', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Category</strong></td>
          <td><?php echo get_the_term_list( $post->ID, 'atma_padat_category', '', '<br>', '' ); ?></td>
        </tr>
        <tr>
          <td><strong>Page Total</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_wari_ba_page_total', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Download</strong></td>
          <td><a href="<?php echo get_post_meta( get_the_ID(), '_atma_wari_ba_file', true ); ?>">Portable Document Format (PDF)</a></td>
        </tr>
      </table>
    </div>
    <?php }//end warieamon?>
    <?php if ( $warittdon == on ) { ?>
    <div id="padat-ba-content">
      <img src="<?php echo get_post_meta( get_the_ID(), '_atma_wari_ba_thumbnail', true ); ?>" width="200" alt="">
      <table class="data-content">
        <tr>
          <td><strong>Title</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_wari_ba_title', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Author</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_wari_ba_author', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Database</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_wari_ba_database', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Topic</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_wari_ba_topic', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Source</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_wari_ba_source', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Keywords</strong></td>
          <td><?php echo get_the_term_list( $post->ID, 'atma_padat_keyword', '', ', ', '' ); ?></td>
        </tr>
        <tr>
          <td><strong>Accession No</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_wari_ba_accession_no', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Year</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_wari_ba_year', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Category</strong></td>
          <td><?php echo get_the_term_list( $post->ID, 'atma_padat_category', '', '<br>', '' ); ?></td>
        </tr>
        <tr>
          <td><strong>Page Total</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_wari_ba_page_total', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Download</strong></td>
          <td><a href="<?php echo get_post_meta( get_the_ID(), '_atma_wari_ba_file', true ); ?>">Portable Document Format (PDF)</a></td>
        </tr>
      </table>
    </div>
    <?php }//end waritdon?>    
    <?php endwhile; ?>
    </div>
  </article>
</div>
<?php get_template_part( 'content', 'after' ); ?>
<?php get_footer(); ?>
