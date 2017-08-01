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
  <p><?php _e( 'Copyright', 'mcv' ); ?>&nbsp;&copy;&nbsp;<?php echo date( 'Y' ); ?>&nbsp;<?php echo bloginfo( 'name' ); ?></p>
  <p>
    <!-- BEGIN: Powered by Supercounters.com -->
    <center><script type="text/javascript" src="//widget.supercounters.com/ssl/texthit.js"></script><script type="text/javascript">var sc_texthit_var = sc_texthit_var || [];sc_text_hit(1428470,"Visits","#39b1cc");</script><br><noscript><a href="http://www.supercounters.com">free Hit Counter</a></noscript>
    </center>
    <!-- END: Powered by Supercounters.com -->
  </p>
</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
