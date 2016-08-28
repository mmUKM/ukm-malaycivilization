<?php
/**
 * @package ATMA
 * @subpackage malaycivilization
 */

get_header(); ?>

<div class="uk-clearfix wrapper">
  <?php get_template_part( 'content', 'before' ); ?>
  <article class="padding column">
    <div class="large-3-12">
      <?php get_template_part( 'templates/nav', 'database' ); ?>
    </div>
    <div class="large-9-12 padding-left">
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
      <?php echo wpautop ( get_post_meta( get_the_ID(), '_atma_padat_main_content', true ) ); ?>
    </div>
    <?php }//end warimainon?>
    <?php if ( $wariaapon == on ) { ?>
    <div id="padat-ba-content">
      <img src="<?php echo get_post_meta( get_the_ID(), '_atma_padat_ba_thumbnail', true ); ?>" width="200" alt="">
      <table class="data-content">
        <tr>
          <td><strong>Title</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_padat_ba_title', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Author</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_padat_ba_author', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Database</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_padat_ba_database', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Topic</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_padat_ba_topic', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Source</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_padat_ba_source', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Keywords</strong></td>
          <td><?php echo get_the_term_list( $post->ID, 'atma_padat_keyword', '', ', ', '' ); ?></td>
        </tr>
        <tr>
          <td><strong>Accession No</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_padat_ba_accession_no', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Year</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_padat_ba_year', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Category</strong></td>
          <td><?php echo get_the_term_list( $post->ID, 'atma_padat_category', '', '<br>', '' ); ?></td>
        </tr>
        <tr>
          <td><strong>Page Total</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_padat_ba_page_total', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Download</strong></td>
          <td><a href="<?php echo get_post_meta( get_the_ID(), '_atma_padat_ba_file', true ); ?>">Portable Document Format (PDF)</a></td>
        </tr>
      </table>
    </div>
    <?php }//end wariaapon?>
    <?php if ( $warikjon == on ) { ?>
    <div id="padat-ba-content">
      <img src="<?php echo get_post_meta( get_the_ID(), '_atma_padat_ba_thumbnail', true ); ?>" width="200" alt="">
      <table class="data-content">
        <tr>
          <td><strong>Title</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_padat_ba_title', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Author</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_padat_ba_author', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Database</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_padat_ba_database', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Topic</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_padat_ba_topic', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Source</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_padat_ba_source', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Keywords</strong></td>
          <td><?php echo get_the_term_list( $post->ID, 'atma_padat_keyword', '', ', ', '' ); ?></td>
        </tr>
        <tr>
          <td><strong>Accession No</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_padat_ba_accession_no', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Year</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_padat_ba_year', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Category</strong></td>
          <td><?php echo get_the_term_list( $post->ID, 'atma_padat_category', '', '<br>', '' ); ?></td>
        </tr>
        <tr>
          <td><strong>Page Total</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_padat_ba_page_total', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Download</strong></td>
          <td><a href="<?php echo get_post_meta( get_the_ID(), '_atma_padat_ba_file', true ); ?>">Portable Document Format (PDF)</a></td>
        </tr>
      </table>
    </div>
    <?php }//end warikjon?>
    <?php if ( $waripbhon == on ) { ?>
    <div id="padat-ba-content">
      <img src="<?php echo get_post_meta( get_the_ID(), '_atma_padat_ba_thumbnail', true ); ?>" width="200" alt="">
      <table class="data-content">
        <tr>
          <td><strong>Title</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_padat_ba_title', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Author</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_padat_ba_author', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Database</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_padat_ba_database', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Topic</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_padat_ba_topic', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Source</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_padat_ba_source', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Keywords</strong></td>
          <td><?php echo get_the_term_list( $post->ID, 'atma_padat_keyword', '', ', ', '' ); ?></td>
        </tr>
        <tr>
          <td><strong>Accession No</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_padat_ba_accession_no', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Year</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_padat_ba_year', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Category</strong></td>
          <td><?php echo get_the_term_list( $post->ID, 'atma_padat_category', '', '<br>', '' ); ?></td>
        </tr>
        <tr>
          <td><strong>Page Total</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_padat_ba_page_total', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Download</strong></td>
          <td><a href="<?php echo get_post_meta( get_the_ID(), '_atma_padat_ba_file', true ); ?>">Portable Document Format (PDF)</a></td>
        </tr>
      </table>
    </div>
    <?php }//end waripbhon?>
    <?php if ( $warispon == on ) { ?>
    <div id="padat-ba-content">
      <img src="<?php echo get_post_meta( get_the_ID(), '_atma_padat_ba_thumbnail', true ); ?>" width="200" alt="">
      <table class="data-content">
        <tr>
          <td><strong>Title</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_padat_ba_title', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Author</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_padat_ba_author', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Database</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_padat_ba_database', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Topic</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_padat_ba_topic', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Source</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_padat_ba_source', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Keywords</strong></td>
          <td><?php echo get_the_term_list( $post->ID, 'atma_padat_keyword', '', ', ', '' ); ?></td>
        </tr>
        <tr>
          <td><strong>Accession No</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_padat_ba_accession_no', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Year</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_padat_ba_year', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Category</strong></td>
          <td><?php echo get_the_term_list( $post->ID, 'atma_padat_category', '', '<br>', '' ); ?></td>
        </tr>
        <tr>
          <td><strong>Page Total</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_padat_ba_page_total', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Download</strong></td>
          <td><a href="<?php echo get_post_meta( get_the_ID(), '_atma_padat_ba_file', true ); ?>">Portable Document Format (PDF)</a></td>
        </tr>
      </table>
    </div>
    <?php }//end warispon?>
    <?php if ( $waripbon == on ) { ?>
    <div id="padat-ba-content">
      <img src="<?php echo get_post_meta( get_the_ID(), '_atma_padat_ba_thumbnail', true ); ?>" width="200" alt="">
      <table class="data-content">
        <tr>
          <td><strong>Title</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_padat_ba_title', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Author</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_padat_ba_author', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Database</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_padat_ba_database', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Topic</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_padat_ba_topic', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Source</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_padat_ba_source', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Keywords</strong></td>
          <td><?php echo get_the_term_list( $post->ID, 'atma_padat_keyword', '', ', ', '' ); ?></td>
        </tr>
        <tr>
          <td><strong>Accession No</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_padat_ba_accession_no', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Year</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_padat_ba_year', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Category</strong></td>
          <td><?php echo get_the_term_list( $post->ID, 'atma_padat_category', '', '<br>', '' ); ?></td>
        </tr>
        <tr>
          <td><strong>Page Total</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_padat_ba_page_total', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Download</strong></td>
          <td><a href="<?php echo get_post_meta( get_the_ID(), '_atma_padat_ba_file', true ); ?>">Portable Document Format (PDF)</a></td>
        </tr>
      </table>
    </div>
    <?php }//end waripbon?>
    <?php if ( $warisumton == on ) { ?>
    <div id="padat-ba-content">
      <img src="<?php echo get_post_meta( get_the_ID(), '_atma_padat_ba_thumbnail', true ); ?>" width="200" alt="">
      <table class="data-content">
        <tr>
          <td><strong>Title</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_padat_ba_title', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Author</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_padat_ba_author', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Database</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_padat_ba_database', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Topic</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_padat_ba_topic', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Source</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_padat_ba_source', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Keywords</strong></td>
          <td><?php echo get_the_term_list( $post->ID, 'atma_padat_keyword', '', ', ', '' ); ?></td>
        </tr>
        <tr>
          <td><strong>Accession No</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_padat_ba_accession_no', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Year</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_padat_ba_year', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Category</strong></td>
          <td><?php echo get_the_term_list( $post->ID, 'atma_padat_category', '', '<br>', '' ); ?></td>
        </tr>
        <tr>
          <td><strong>Page Total</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_padat_ba_page_total', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Download</strong></td>
          <td><a href="<?php echo get_post_meta( get_the_ID(), '_atma_padat_ba_file', true ); ?>">Portable Document Format (PDF)</a></td>
        </tr>
      </table>
    </div>
    <?php }//end warisumton?>
    <?php if ( $warirrmon == on ) { ?>
    <div id="padat-ba-content">
      <img src="<?php echo get_post_meta( get_the_ID(), '_atma_padat_ba_thumbnail', true ); ?>" width="200" alt="">
      <table class="data-content">
        <tr>
          <td><strong>Title</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_padat_ba_title', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Author</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_padat_ba_author', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Database</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_padat_ba_database', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Topic</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_padat_ba_topic', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Source</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_padat_ba_source', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Keywords</strong></td>
          <td><?php echo get_the_term_list( $post->ID, 'atma_padat_keyword', '', ', ', '' ); ?></td>
        </tr>
        <tr>
          <td><strong>Accession No</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_padat_ba_accession_no', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Year</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_padat_ba_year', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Category</strong></td>
          <td><?php echo get_the_term_list( $post->ID, 'atma_padat_category', '', '<br>', '' ); ?></td>
        </tr>
        <tr>
          <td><strong>Page Total</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_padat_ba_page_total', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Download</strong></td>
          <td><a href="<?php echo get_post_meta( get_the_ID(), '_atma_padat_ba_file', true ); ?>">Portable Document Format (PDF)</a></td>
        </tr>
      </table>
    </div>
    <?php }//end warirrmon?>
    <?php if ( $warimamon == on ) { ?>
    <div id="padat-ba-content">
      <img src="<?php echo get_post_meta( get_the_ID(), '_atma_padat_ba_thumbnail', true ); ?>" width="200" alt="">
      <table class="data-content">
        <tr>
          <td><strong>Title</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_padat_ba_title', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Author</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_padat_ba_author', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Database</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_padat_ba_database', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Topic</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_padat_ba_topic', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Source</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_padat_ba_source', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Keywords</strong></td>
          <td><?php echo get_the_term_list( $post->ID, 'atma_padat_keyword', '', ', ', '' ); ?></td>
        </tr>
        <tr>
          <td><strong>Accession No</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_padat_ba_accession_no', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Year</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_padat_ba_year', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Category</strong></td>
          <td><?php echo get_the_term_list( $post->ID, 'atma_padat_category', '', '<br>', '' ); ?></td>
        </tr>
        <tr>
          <td><strong>Page Total</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_padat_ba_page_total', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Download</strong></td>
          <td><a href="<?php echo get_post_meta( get_the_ID(), '_atma_padat_ba_file', true ); ?>">Portable Document Format (PDF)</a></td>
        </tr>
      </table>
    </div>
    <?php }//end warimamon?>
    <?php if ( $waribmon == on ) { ?>
    <div id="padat-ba-content">
      <img src="<?php echo get_post_meta( get_the_ID(), '_atma_padat_ba_thumbnail', true ); ?>" width="200" alt="">
      <table class="data-content">
        <tr>
          <td><strong>Title</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_padat_ba_title', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Author</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_padat_ba_author', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Database</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_padat_ba_database', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Topic</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_padat_ba_topic', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Source</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_padat_ba_source', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Keywords</strong></td>
          <td><?php echo get_the_term_list( $post->ID, 'atma_padat_keyword', '', ', ', '' ); ?></td>
        </tr>
        <tr>
          <td><strong>Accession No</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_padat_ba_accession_no', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Year</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_padat_ba_year', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Category</strong></td>
          <td><?php echo get_the_term_list( $post->ID, 'atma_padat_category', '', '<br>', '' ); ?></td>
        </tr>
        <tr>
          <td><strong>Page Total</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_padat_ba_page_total', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Download</strong></td>
          <td><a href="<?php echo get_post_meta( get_the_ID(), '_atma_padat_ba_file', true ); ?>">Portable Document Format (PDF)</a></td>
        </tr>
      </table>
    </div>
    <?php }//end waribmon?>
    <?php if ( $wariaamon == on ) { ?>
    <div id="padat-ba-content">
      <img src="<?php echo get_post_meta( get_the_ID(), '_atma_padat_ba_thumbnail', true ); ?>" width="200" alt="">
      <table class="data-content">
        <tr>
          <td><strong>Title</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_padat_ba_title', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Author</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_padat_ba_author', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Database</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_padat_ba_database', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Topic</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_padat_ba_topic', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Source</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_padat_ba_source', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Keywords</strong></td>
          <td><?php echo get_the_term_list( $post->ID, 'atma_padat_keyword', '', ', ', '' ); ?></td>
        </tr>
        <tr>
          <td><strong>Accession No</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_padat_ba_accession_no', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Year</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_padat_ba_year', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Category</strong></td>
          <td><?php echo get_the_term_list( $post->ID, 'atma_padat_category', '', '<br>', '' ); ?></td>
        </tr>
        <tr>
          <td><strong>Page Total</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_padat_ba_page_total', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Download</strong></td>
          <td><a href="<?php echo get_post_meta( get_the_ID(), '_atma_padat_ba_file', true ); ?>">Portable Document Format (PDF)</a></td>
        </tr>
      </table>
    </div>
    <?php }//end wariaamon?>
    <?php if ( $warieamon == on ) { ?>
    <div id="padat-ba-content">
      <img src="<?php echo get_post_meta( get_the_ID(), '_atma_padat_ba_thumbnail', true ); ?>" width="200" alt="">
      <table class="data-content">
        <tr>
          <td><strong>Title</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_padat_ba_title', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Author</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_padat_ba_author', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Database</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_padat_ba_database', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Topic</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_padat_ba_topic', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Source</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_padat_ba_source', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Keywords</strong></td>
          <td><?php echo get_the_term_list( $post->ID, 'atma_padat_keyword', '', ', ', '' ); ?></td>
        </tr>
        <tr>
          <td><strong>Accession No</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_padat_ba_accession_no', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Year</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_padat_ba_year', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Category</strong></td>
          <td><?php echo get_the_term_list( $post->ID, 'atma_padat_category', '', '<br>', '' ); ?></td>
        </tr>
        <tr>
          <td><strong>Page Total</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_padat_ba_page_total', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Download</strong></td>
          <td><a href="<?php echo get_post_meta( get_the_ID(), '_atma_padat_ba_file', true ); ?>">Portable Document Format (PDF)</a></td>
        </tr>
      </table>
    </div>
    <?php }//end warieamon?>
    <?php if ( $warittdon == on ) { ?>
    <div id="padat-ba-content">
      <img src="<?php echo get_post_meta( get_the_ID(), '_atma_padat_ba_thumbnail', true ); ?>" width="200" alt="">
      <table class="data-content">
        <tr>
          <td><strong>Title</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_padat_ba_title', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Author</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_padat_ba_author', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Database</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_padat_ba_database', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Topic</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_padat_ba_topic', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Source</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_padat_ba_source', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Keywords</strong></td>
          <td><?php echo get_the_term_list( $post->ID, 'atma_padat_keyword', '', ', ', '' ); ?></td>
        </tr>
        <tr>
          <td><strong>Accession No</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_padat_ba_accession_no', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Year</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_padat_ba_year', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Category</strong></td>
          <td><?php echo get_the_term_list( $post->ID, 'atma_padat_category', '', '<br>', '' ); ?></td>
        </tr>
        <tr>
          <td><strong>Page Total</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_padat_ba_page_total', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Download</strong></td>
          <td><a href="<?php echo get_post_meta( get_the_ID(), '_atma_padat_ba_file', true ); ?>">Portable Document Format (PDF)</a></td>
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
