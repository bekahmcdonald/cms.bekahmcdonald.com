<?php

add_filter('manage_project_posts_columns', 'BM_product_table_headers');

function BM_product_table_headers( $defaults ) {
  $defaults['image']  = 'Image';
  
  unset($defaults['date']);
  unset($defaults['title']);
  unset($defaults['tags']);

  $defaults['title'] = 'Title';
  $defaults['caption']  = 'Caption';
  $defaults['tags'] = 'Tags';
  $defaults['date'] = 'Date';
  return $defaults;
}

add_action( 'manage_project_posts_custom_column', 'BM_product_admin_table_content', 10, 2 );

function BM_product_admin_table_content( $column_name, $post_id ) {
  $product = get_fields();

  if ($column_name == 'image') {
    echo '<img src="' . $product['thumbnail']['image']['sizes']['medium'] .'" width="150" height="100" />';
  }

  if ($column_name == 'caption') {
    echo $product['thumbnail']['caption'];
  }
}
add_action('admin_head', 'bm_admin_head');
function bm_admin_head() {
    global $post_type;
    if ( 'project' == $post_type ) {
        ?><style type="text/css"> .column-image { width: 175px; } </style><?php
    }
}