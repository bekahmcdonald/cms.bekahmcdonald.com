<?php

// Disable completely
// add_filter('use_block_editor_for_post', '__return_false', 10);


// Disable per post type
add_filter('use_block_editor_for_post_type', 'bm_disable_block_editor', 10, 2);

function bm_disable_block_editor($use_block_editor, $post_type) {
  if (!in_array($post_type, array('post'))) {
    return false;
  }

  return $use_block_editor;
}