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
      $kamusmainon  = get_post_meta( get_the_ID(), '_atma_kamus_main_on', true );
      $kamuseson    = get_post_meta( get_the_ID(), '_atma_kamus_es_on', true );
      $kamusnmon    = get_post_meta( get_the_ID(), '_atma_kamus_nm_on', true );
    ?>

    <?php if ( $kamusmainon == on ) { ?>
    <div id="kamus-main-content">
      <?php echo wpautop ( get_post_meta( get_the_ID(), '_atma_kamus_main_content', true ) ); ?>
    </div>
    <?php } ?>

    <?php if ( $kamuseson == on ) { ?>
    <div id="kamus-es-content">
      <table class="data-content">
        <tr>
          <td><strong><?php _e( 'Root Word', 'atma' ); ?></strong></td>
          <td><?php the_title(); ?></td>
        </tr>
        <tr>
          <td><strong><?php _e( 'Author', 'atma'); ?></strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_kamus_es_author', true ); ?></td>
        </tr>
        <tr>
          <td><strong><?php _e( 'Database', 'atma' ); ?></strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_kamus_es_db', true ); ?></td>
        </tr>
        <tr>
          <td><strong><?php _e( 'Topic', 'atma' ); ?></strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_kamus_es_topic', true ); ?></td>
        </tr>
        <tr>
          <td><strong><?php _e( 'Subject', 'atma' ); ?></strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_kamus_es_subject', true ); ?></td>
        </tr>
        <tr>
          <td><strong><?php _e( 'Accession No.', 'atma' ); ?></strong></td>
          <td><?php echo get_the_ID() ?></td>
        </tr>
        <tr>
          <td><strong><?php _e( 'Year', 'atma' ); ?></strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_kamus_es_year', true ); ?></td>
        </tr>
        <tr>
          <td><strong><?php _e( 'Description', 'atma' ); ?></strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_kamus_es_desc', true ); ?></td>
        </tr>
      </table>
    </div>
    <?php } ?>

    <?php if ( $kamusnmon == on ) { ?>
    <div id="kamus-nm-content">
      <img src="<?php echo get_post_meta( get_the_ID(), '_atma_kamus_nm_image', true ); ?>" alt="">
      <table class="data-content">
        <tr>
          <td><strong><?php _e( 'Title', 'atma' ); ?></strong></td>
          <td><?php the_title(); ?></td>
        </tr>
        <tr>
          <td><strong><?php _e( 'Author', 'atma' ); ?></strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_kamus_nm_author', true ); ?></td>
        </tr>
        <tr>
          <td><strong><?php _e( 'Database', 'atma' ); ?></strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_kamus_nm_db', true ); ?></td>
        </tr>
        <tr>
          <td><strong><?php _e( 'Topic', 'atma'); ?></strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_kamus_nm_topic', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Accession No</strong></td>
          <td><?php echo get_the_ID(); ?></td>
        </tr>
        <tr>
          <td><strong>Year</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_kamus_nm_year', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Category</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_kamus_nm_category', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Page Total</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_kamus_nm_page_total', true ); ?></td>
        </tr>
        <tr>
          <td><strong>File</strong></td>
          <td><a href="<?php echo get_post_meta( get_the_ID(), '_atma_kamus_nm_file', true ); ?>"><?php _e( 'Download', 'atma' ); ?></a></td>
        </tr>
      </table>
    </div>
    <?php } ?>

    <?php endwhile; ?>
    </div>
  </article>
</div>
<?php get_template_part( 'content', 'after' ); ?>
<?php get_footer(); ?>
