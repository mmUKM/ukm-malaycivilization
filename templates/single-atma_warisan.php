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
      $warikjon     = get_post_meta( get_the_ID(), '_atma_wari_kj_on', true );
      $waripbhon    = get_post_meta( get_the_ID(), '_atma_wari_pbh_on', true );
      $warispon     = get_post_meta( get_the_ID(), '_atma_wari_sp_on', true );
      $waripbon     = get_post_meta( get_the_ID(), '_atma_wari_pb_on', true );
      $warisumton   = get_post_meta( get_the_ID(), '_atma_wari_sumt_on', true );
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
          <td><strong><?php _e('Title', 'atma' ); ?></strong></td>
          <td><?php the_title(); ?></td>
        </tr>
        <tr>
          <td><strong><?php _e( 'Author', 'atma' ); ?></strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_wari_kj_author', true ); ?></td>
        </tr>
        <tr>
          <td><strong><?php _e( 'Database', 'atma' ); ?></strong></td>
          <td><?php echo get_the_term_list( $post->ID, 'atma_warisan_database', '', ', ','' ); ?></td>
        </tr>
        <tr>
          <td><strong><?php _e( 'Topic', 'atma' ); ?></strong></td>
          <td><?php echo get_the_term_list( $post->ID, 'atma_warisan_topic', '', ', ','' ); ?></td>
        </tr>
        <tr>
          <td><strong><?php _e( 'Source', 'atma' ); ?></strong></td>
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
    <?php
    /**
     * Paparan halaman Warisan: Sejuta Pantun
     */
    if ( $warispon == on ) { ?>
    <div id="warisan-sp-content">
      <img src="<?php echo get_post_meta( get_the_ID(), '_atma_wari_sp_thumbnail', true ); ?>" width="200" alt="">
      <table class="data-content">
        <tr>
          <td><strong>Title</strong></td>
          <td><?php the_title(); ?></td>
        </tr>
        <tr>
          <td><strong>Author</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_wari_sp_author', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Database</strong></td>
          <td><?php echo get_the_term_list( $post->ID, 'atma_warisan_database', '', ', ', '' ); ?></td>
        </tr>
        <tr>
          <td><strong>Topic</strong></td>
          <td><?php echo get_the_term_list( $post->ID, 'atma_warisan_topic', '', ', ', '' ); ?></td>
        </tr>
        <tr>
          <td><strong>Source</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_wari_sp_source', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Subject</strong></td>
          <td><?php echo get_the_term_list( $post->ID, 'atma_warisan_subject', '', ', ', '' ); ?></td>
        </tr>
        <tr>
          <td><strong>Accession No</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_wari_ba_accession_no', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Year</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_wari_sp_year', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Category</strong></td>
          <td><?php echo get_the_term_list( $post->ID, 'atma_warisan_category', '', '<br>', '' ); ?></td>
        </tr>
        <tr>
          <td><strong>Download</strong></td>
          <td><?php echo wpautop ( get_post_meta( get_the_ID(), '_atma_wari_sp_text', true ) ); ?></td>
        </tr>
      </table>
    </div>
    <?php }//end warispon?>
    <?php
    /**
     * Paparan halaman untuk Warisan: Pantun Baba
     */
    if ( $waripbon == on ) { ?>
    <div id="warisan-pb-content">
      <img src="<?php echo get_post_meta( get_the_ID(), '_atma_wari_pb_thumbnail', true ); ?>" width="200" alt="">
      <table class="data-content">
        <tr>
          <td><strong>Title</strong></td>
          <td><?php the_title(); ?></td>
        </tr>
        <tr>
          <td><strong>Author</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_wari_pb_author', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Database</strong></td>
          <td><?php echo get_the_term_list( $post->ID, 'atma_warisan_database', '', ', ', '' ); ?></td>
        </tr>
        <tr>
          <td><strong>Topic</strong></td>
          <td><?php echo get_the_term_list( $post->ID, 'atma_warisan_topic', '', ', ', '' ); ?></td>
        </tr>
        <tr>
          <td><strong>Source</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_wari_pb_source', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Subject</strong></td>
          <td><?php echo get_the_term_list( $post->ID, 'atma_warisan_subject', '', ', ', '' ); ?></td>
        </tr>
        <tr>
          <td><strong>Accession No</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_wari_ba_accession_no', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Year</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_wari_pb_year', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Category</strong></td>
          <td><?php echo get_the_term_list( $post->ID, 'atma_warisan_category', '', '<br>', '' ); ?></td>
        </tr>
        <tr>
          <td><strong>Text</strong></td>
          <td><?php echo wpautop ( get_post_meta( get_the_ID(), '_atma_wari_pb_text', true ) ); ?></td>
        </tr>
      </table>
    </div>
    <?php }//end waripbon?>
    <?php
    /**
     * Paparan halam untuk Warisan: Seni Ukir Melayu Tradisional
     */
    if ( $warisumton == on ) { ?>
    <div id="wari-sumt-content">
      <img src="<?php echo get_post_meta( get_the_ID(), '_atma_wari_sumt_thumbnail', true ); ?>" width="200" alt="">
      <table class="data-content">
        <tr>
          <td><strong>Title</strong></td>
          <td><?php the_title(); ?></td>
        </tr>
        <tr>
          <td><strong>Comments</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_wari_sumt_comment', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Author</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_wari_sumt_author', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Database</strong></td>
          <td><?php echo get_the_term_list( $post->ID, 'atma_warisan_database', '', ',', '' ); ?></td>
        </tr>
        <tr>
          <td><strong>Topic</strong></td>
          <td><?php echo get_the_term_list( $post->ID, 'atma_warisan_topic', '', ',', '' ); ?></td>
        </tr>
        <tr>
          <td><strong>Source</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_wari_ba_source', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Subject</strong></td>
          <td><?php echo get_the_term_list( $post->ID, 'atma_warisan_subject', '', ', ', '' ); ?></td>
        </tr>
        <tr>
          <td><strong>Keywords</strong></td>
          <td><?php echo get_the_term_list( $post->ID, 'atma_warisan_keyword', '', ', ', '' ); ?></td>
        </tr>
        <tr>
          <td><strong>Accession No</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_wari_sumt_accession_no', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Year</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_wari_sumt_year', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Category</strong></td>
          <td><?php echo get_the_term_list( $post->ID, 'atma_warisan_category', '', ',', '' ); ?></td>
        </tr>
        <tr>
          <td><strong>Label</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_wari_sumt_label', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Description</strong></td>
          <td><?php echo wpautop ( get_post_meta( get_the_ID(), '_atma_wari_ba_page_total', true ) ); ?></td>
        </tr>
        <tr>
          <td><strong>Type</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_wari_sumt_type', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Material</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_wari_sumt_material', true ); ?></td>
        </tr>
        <tr>
          <td><strong><?php _e( 'Publication Place', 'atma' ); ?></strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_wari_sumt_pub_place', true ); ?></td>
        </tr>
        <tr>
          <td><strong><?php _e( 'Wood', 'atma' ); ?></strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_wari_sumt_wood', true ); ?></td>
        </tr>
        <tr>
          <td><strong><?php _e( 'Width', 'atma' ); ?></strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_wari_sumt_width', true ); ?></td>
        </tr>
        <tr>
          <td><strong><?php _e( 'Height', 'atma' ); ?></strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_wari_sumt_height', true ); ?></td>
        </tr>
        <tr>
          <td><strong><?php _e( 'Value', 'atma' ); ?></strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_wari_sumt_value', true ); ?></td>
        </tr>
        <tr>
          <td><strong><?php _e( 'Technique', 'atma' ); ?></strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_wari_sumt_technique', true ); ?></td>
        </tr>
        <tr>
          <td><strong><?php _e( 'Motif', 'atma' ); ?></strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_wari_sumt_motif', true ); ?></td>
        </tr>
        <tr>
          <td><strong><?php _e( 'Current Value', 'atma' ); ?></strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_wari_cur_value', true ); ?></td>
        </tr>
      </table>
    </div>
    <?php }//end warisumton?>
    <?php endwhile; ?>
    </div>
  </article>
</div>
<?php get_template_part( 'content', 'after' ); ?>
<?php get_footer(); ?>
