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
      <video controls>
        <source src="<?php echo get_post_meta( get_the_ID(), '_atma_media_video_file', true ); ?>" type="video/mp4">
      </video>
      <table class="data-content">
        <tr>
          <td><strong>Title</strong></td>
          <td><?php the_title(); ?></td>
        </tr>
        <tr>
          <td><strong>Author</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_media_video_author', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Source</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_media_video_source', true ); ?></td>
        </tr>
      </table>
      <?php endwhile; ?>
  </div>
  </article>
 </div>
<?php get_template_part( 'content', 'after' ); ?>
<?php get_footer(); ?>