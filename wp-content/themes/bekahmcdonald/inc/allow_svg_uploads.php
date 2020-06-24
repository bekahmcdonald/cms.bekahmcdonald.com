<?php

function BM_add_svg_to_allowed_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'BM_add_svg_to_allowed_mime_types');
