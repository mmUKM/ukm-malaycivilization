<?php
/**
 * @package ATMA
 * @subpackage malaycivilization
 */
get_header(); ?>
<?php if ( is_home() ) : ?>
  <?php get_template_part( 'templates/slideshow' ); ?>
<?php endif; ?>
<div class="uk-grid uk-grid-divider padding" data-uk-grid-match="">
  <?php if (dynamic_sidebar( 'sidebar-2' )) : else : ?><?php endif; ?>
</div>
<?php get_footer(); ?>
