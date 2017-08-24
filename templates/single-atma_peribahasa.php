<?php
/**
 * @package ATMA
 * @subpackage malaycivilization
 */

get_header(); ?>

<div class="uk-clearfix wrapper">
  <?php get_template_part( 'content', 'before' ); ?>
  <article class="padding col">
<!--    <div class="lg-3">
      <?php get_template_part( 'templates/nav', 'database' ); ?>
    </div>-->
    <div class="lg-12 padding-left">
    <?php while( have_posts() ) : the_post(); ?>
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
    <?php endwhile; ?>
    </div>
  </article>
</div>
<?php get_template_part( 'content', 'after' ); ?>
<?php get_footer(); ?>
