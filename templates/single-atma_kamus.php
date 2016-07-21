<?php
/**
 * @package ATMA
 * @subpackage malaycivilization
 */

get_header(); ?>

<div class="uk-clearfix wrapper">
  <article class="padding">
    <div class="large-3-12">
      <?php get_template_part( 'templates/nav', 'database' ); ?>
    </div>
    <div class="large-9-12">
    <?php while( have_posts() ) : the_post(); ?>

    <?php the_title( '<h1>', '</h1>' ); ?>

    <?php
      $kamusmainon  = get_post_meta( get_the_ID(), '_atma_kamus_main_on', true );
      $kamuseson    = get_post_meta( get_the_ID(), '_atma_kamus_es_on', true );
      $kamusnmon    = get_post_meta( get_the_ID(), '_atma_kamus_nm_on', true );
    ?>

    <?php if ( $kamusmainon == on ) { ?>
    <div class>
      <?php echo wpautop ( get_post_meta( get_the_ID(), '_atma_kamus_main_content', true ) ); ?>
    </div>
    <?php } ?>

    <?php if ( $kamuseson == on ) { ?>
    <div class>
      <table class="data-content">
        <tr>
          <td><strong>Root Word</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_kamus_es_root', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Author</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_kamus_es_author', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Database</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_kamus_es_db', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Topic</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_kamus_es_topic', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Subject</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_kamus_es_subject', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Accession No</strong></td>
          <td><?php echo get_the_ID() ?></td>
        </tr>
        <tr>
          <td><strong>Year</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_kamus_es_year', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Description</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_kamus_es_desc', true ); ?></td>
        </tr>
      </table>
    </div>
    <?php } ?>

    <?php if ( $kamusnmon == on ) { ?>
    <div class>
      <img src="<?php echo get_post_meta( get_the_ID(), '_atma_kamus_nm_image', true ); ?>" alt="">
      <table class="data-content">
        <tr>
          <td><strong>Title</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_kamus_nm_title', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Author</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_kamus_nm_author', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Database</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_kamus_nm_db', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Topic</strong></td>
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
      </table>
    </div>
    <?php } ?>

    <?php endwhile; ?>
    </div>
  </article>
</div>

<?php get_footer(); ?>
