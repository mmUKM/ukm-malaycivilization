<?php
/**
 * @package ATMA
 * @subpackage malaycivilization
 */

get_header(); ?>

<div class="wrapper">
  <article class="padding">
    <div class="large-3-12">
      <?php get_template_part( 'templates/nav', 'database' ); ?>
    </div>
    <div class="large-9-12">
    <?php while( have_posts() ) : the_post(); ?>

    <?php the_title( '<h1>', '</h1>' ); ?>

    <?php
      $padatmainon  = get_post_meta( get_the_ID(), '_atma_padat_main_on', true );
      $padatbaon    = get_post_meta( get_the_ID(), '_atma_padat_ba_on', true );
    ?>

    <?php if ( $padatmainon == on ) { ?>
    <div class>
      <?php echo wpautop ( get_post_meta( get_the_ID(), '_atma_kamus_main_content', true ) ); ?>
    </div>
    <?php } ?>

    <?php if ( $padatbaon == on ) { ?>
    <div class>
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
      </table>
    </div>
    <?php } ?>
    <?php endwhile; ?>
    </div>
  </article>
</div>

<?php get_footer(); ?>
