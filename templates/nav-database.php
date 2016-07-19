<?php
  wp_nav_menu(array(
    'theme_location'  => 'database',
    'menu'            => 'Database Navigation',
    'container_id'    => 'nav-database',
    'walker'          => new ATMA_Database_Nav_Walker()
  ));
?>
