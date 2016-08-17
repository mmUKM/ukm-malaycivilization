<?php
/**
 * @package ATMA
 * @subpackage malaycivilization
 * 
 * Template Name: With Database Menus
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
      
    <?php the_content(); ?>
    <?php endwhile; ?>
    </div>
  </article>
</div>

<?php get_footer(); ?>
