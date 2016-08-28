<?php
/**
* @packege ATMA
* @subpackage Malaycivilization
*/
?>
</div><!-- end .sticky -->
<footer class="uk-clearfix">
<nav class="top-nav">
  <?php
    wp_nav_menu(array(
      'theme_location'  => 'footer',
      'menu'            => 'Footer Navigation',
      'container_id'    => 'footer-nav',
      'container_class' => 'wrapper',
    ));
  ?>
</nav>
<div class="wrapper copyright">
  <p><?php _e( 'Copyright', 'mcv' ); ?>&nbsp;&copy;&nbsp;<?php echo date( 'Y' ); ?>&nbsp;<?php echo bloginfo( 'name' ); ?>
</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
