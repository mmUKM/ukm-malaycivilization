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
    <?php endwhile; ?>
    </div>
  </article>
</div>
<?php get_template_part( 'content', 'after' ); ?>
<?php get_footer(); ?>
