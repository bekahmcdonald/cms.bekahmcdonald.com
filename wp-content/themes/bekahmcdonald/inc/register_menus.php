<?php

function BM_register_nav_menus() {
  register_nav_menus(array(
    'primary'       => 'Primary',
  ));
}

add_action('after_setup_theme', 'BM_register_nav_menus');