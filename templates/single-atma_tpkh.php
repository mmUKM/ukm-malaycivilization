<?php
/**
 * @package ATMA
 * @subpackage ukm-malaycivilization
 */

get_header(); ?>
<div class="wrapper">
  <article class="padding">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php the_title( '<h2>', '</h2>' ); ?>
    <?php echo wpautop( get_post_meta( get_the_ID(), '_atma_tpkh_main_article', true ) ); ?>
    <ul class="uk-subnav uk-subnav-pill" data-uk-switcher="{connect:'#tokoh'}">
      <li><a href="#"><?php _e( 'Introduction', 'atma' ); ?></a></li>
      <li><a href="#"><?php _e( 'Biography', 'atma' ); ?></a></li>
      <li><a href="#"><?php _e( 'Bibliography of Writing', 'atma' ); ?></a></li>
      <li><a href="#"><?php _e( 'Piece Analysis', 'atma' ); ?></a></li>
      <li><a href="#"><?php _e( 'Thinking', 'atma' ); ?></a></li>
      <li><a href="#"><?php _e( 'Photo Gallery', 'atma' ); ?></a></li>
    </ul>
    <hr>
    <ul id="tokoh" class="uk-switcher">
      <li><?php echo wpautop( get_post_meta( get_the_ID(), '_atma_tpkh_tokoh_pengenalan', true ) ); ?></li>
      <li><?php echo wpautop( get_post_meta( get_the_ID(), '_atma_tpkh_tokoh_biografi', true ) ); ?></li>
      <li><?php echo wpautop( get_post_meta( get_the_ID(), '_atma_tpkh_tokoh_bibliografi', true ) ); ?></li>
      <li><?php echo wpautop( get_post_meta( get_the_ID(), '_atma_tpkh_tokoh_analisis', true ) ); ?></li>
      <li><?php echo wpautop( get_post_meta( get_the_ID(), '_atma_tpkh_tokoh_pemikiran', true ) ); ?></li>
      <li><?php atma_lightbox_gallery( '_atma_tpkh_tokoh_foto', 'post-thumbnail' ); ?></li>
    </ul>
<?php endwhile; else: ?>

<?php endif; ?>
  </article>
</div>
<?php get_footer(); ?>