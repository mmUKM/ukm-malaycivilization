<?php
/**
 * @package ATMA
 * @subpackage malaycivilization
 */

get_header(); ?>
<div class="wrapper">
  <article class="padding">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php the_title( '<h2>', '</h2>' ); ?>
    
    <ul class="uk-subnav uk-subnav-pill" data-uk-switcher="{connect:'#tokoh'}">
      <li><a href="#"><?php _e( 'Introduction', 'mcv' ); ?></a></li>
      <li><a href="#"><?php _e( 'Biography', 'mcv' ); ?></a></li>
      <li><a href="#"><?php _e( 'Bibliography of Writing', 'mcv' ); ?></a></li>
      <li><a href="#"><?php _e( 'Piece Analysis', 'mcv' ); ?></a></li>
      <li><a href="#"><?php _e( 'Thinking', 'mcv' ); ?></a></li>
      <li><a href="#"><?php _e( 'Photo Gallery', 'mcv' ); ?></a></li>
    </ul>
    <hr>
    <ul id="tokoh" class="uk-switcher">
      <li><?php echo wpautop( get_post_meta( get_the_ID(), '_mcv_tokoh_pemikir_pengenalan', true ) ); ?></li>
      <li><?php echo wpautop( get_post_meta( get_the_ID(), '_mcv_tokoh_pemikir_biografi', true ) ); ?></li>
      <li><?php echo wpautop( get_post_meta( get_the_ID(), '_mcv_tokoh_pemikir_bibliografi', true ) ); ?></li>
      <li><?php echo wpautop( get_post_meta( get_the_ID(), '_mcv_tokoh_pemikir_analisis', true ) ); ?></li>
      <li><?php echo wpautop( get_post_meta( get_the_ID(), '_mcv_tokoh_pemikir_pemikiran', true ) ); ?></li>
      <li><?php mcv_lightbox_gallery( '_mcv_tokoh_pemikir_foto', 'post-thumbnail' ); ?></li>
    </ul>
<?php endwhile; else: ?>

<?php endif; ?>
  </article>
</div>
<?php get_footer(); ?>