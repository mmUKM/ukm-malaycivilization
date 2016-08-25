<?php
/**
 * @package ATMA
 * @subpackage malaycivilization
 */

get_header(); ?>

<div class="uk-clearfix wrapper">
  <article class="padding">
    <?php while( have_posts() ) : the_post(); ?>

    <?php the_title( '<h1>', '</h1>' ); ?>

    <?php the_content(); ?>

    <?php endwhile; ?>
  </article>
</div>
<?php get_template_part( 'content', 'after' ); ?>
<?php get_footer(); ?>
