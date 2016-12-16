<?php
/**
 * @package ATMA
 * @subpackage ukm-malaycivilization
 */
 get_header(); ?>

<div class="uk-clearfix wrapper">
<?php get_template_part( 'content', 'before' ); ?>
  <article class="padding col">
    <div class="lg-3">
      <?php get_template_part( 'templates/nav', 'database' ); ?>
    </div>
    <div class="lg-9 padding-left">
      <?php while ( have_posts() ) : the_post(); ?>
      <?php atma_lightbox_gallery( '_atma_media_image_gallery', 'post-thumbnail' ); ?>
      <table class="data-content">
        <tr>
          <td><strong>Title</strong></td>
          <td><?php the_title(); ?></td>
        </tr>
        <tr>
          <td><strong>Author</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_media_image_author', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Source</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_media_image_source', true ); ?></td>
        </tr>
      </table>
      <?php endwhile; ?>
  </div>
  </article>
 </div>
<?php get_template_part( 'content', 'after' ); ?>
<?php get_footer(); ?>