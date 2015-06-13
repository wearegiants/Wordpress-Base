<?php

  $mainMenu = array(
    'container'       => false,
    'echo'            => false,
    'items_wrap'      => '',
    'theme_location'  => 'main-menu',
    'depth'           => 0,
  );

  function add_menuclass($ulclass) {
    return preg_replace('/<a /', '<a class="btn btn-nav"', $ulclass);
  }
  add_filter('wp_nav_menu','add_menuclass');