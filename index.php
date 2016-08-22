<?php
/**
 * @package ATMA
 * @subpackage malaycivilization
 */
get_header(); ?>
<?php if ( is_home() ) : ?>
  <?php get_template_part( 'templates/slideshow' ); ?>
<?php endif; ?>
<div class="wrapper">
  <div class="uk-grid padding" data-uk-grid-match="">
    <?php if (dynamic_sidebar( 'sidebar-2' )) : else : ?><?php endif; ?>
  </div>
</div>
<?php get_footer(); ?>