<?php
/**
 * @package ATMA
 * @subpackage malaycivilization
 */

get_header(); ?>
<?php if ( is_home() ) : ?>
  <?php get_template_part( 'templates/slideshow' ); ?>
<?php endif; ?>
<?php get_footer(); ?>