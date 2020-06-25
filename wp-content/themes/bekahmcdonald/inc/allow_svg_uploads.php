<?php

/**
 * Mime type edit
 */

function BM_set_allowed_mime_types( $mimes ) {
  $mimes['svg'] = 'image/svg+xml';
  $mimes['svgz'] = 'image/svg+xml';
  return $mimes;
}

add_filter( 'upload_mimes', 'BM_set_allowed_mime_types' );