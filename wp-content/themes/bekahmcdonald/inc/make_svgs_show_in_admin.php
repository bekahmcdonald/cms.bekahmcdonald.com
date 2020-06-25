<?php

/**
 * Make SVGs show in admin
 */


add_action('admin_head', function() {
  echo '
    <style>
    td.media-icon img[src$=".svg"],
    .acf-image-uploader .image-wrap img[src$=".svg"],
    img[src$=".svg"].attachment-post-thumbnail {
      width: 100% !important;
      height: auto !important;
      object-fit: contain;
    }
    </style>
  ';
});