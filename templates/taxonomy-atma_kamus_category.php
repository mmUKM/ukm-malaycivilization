<?php
/**
 * @package ATMA
 * @subpackage malaycivilization
 */

get_header(); ?>

<div class="wrapper">
  <article class="padding">
    <?php while( have_posts() ) : the_post(); ?>

    <?php the_title( '<h1>', '</h1>' ); ?>

    <?php
      $kamusmainon  = get_post_meta( get_the_ID(), '_atma_kamus_main_on', true );
      $kamuseson    = get_post_meta( get_the_ID(), '_atma_kamus_es_on', true );
      $kamuseson    = get_post_meta( get_the_ID(), '_atma_kamus_nm_on', true );
    ?>

    <?php if ($kamusmainon == on ) { ?>
    <div class>
      <?php echo wpautop ( get_post_meta( get_the_ID(), '_atma_kamus_main_on', true ) ); ?>
    </div>
    <?php } ?>

    <?php endwhile; ?>
  </article>
</div>

<?php get_footer(); ?>
