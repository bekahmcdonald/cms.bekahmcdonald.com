<?php

function BM_hide_wordpress_version() {
  return '';
}

add_filter('the_generator', 'BM_hide_wordpress_version');