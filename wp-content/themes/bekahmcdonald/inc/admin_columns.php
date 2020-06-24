<?php

// add_filter('manage_azur_product_posts_columns', 'BM_product_table_headers');

// function BM_product_table_headers( $defaults ) {
//   $defaults['product_category']  = 'Category';
//   $defaults['theme_colour']  = 'Theme colour';
//   unset($defaults['date']);
//   $defaults['date'] = 'Date';
//   return $defaults;
// }

// add_action( 'manage_azur_product_posts_custom_column', 'BM_product_admin_table_content', 10, 2 );

// function BM_product_admin_table_content( $column_name, $post_id ) {
//   $theme_colour = get_field('theme_colour');

//   if ($column_name == 'theme_colour') {
//     echo $theme_colour;
//   }
// }

// add_filter('manage_azur_vacancy_posts_columns', 'BM_vacancy_table_headers');

// function BM_vacancy_table_headers( $defaults ) {
//   unset($defaults['date']);
//   $defaults['vacancy_category']  = 'Category';
//   $defaults['location']  = 'Location';
//   $defaults['date'] = 'Date';
//   return $defaults;
// }

// add_action( 'manage_azur_vacancy_posts_custom_column', 'BM_vacancy_admin_table_content', 10, 2 );

// function BM_vacancy_admin_table_content( $column_name, $post_id ) {
//   $category = get_field('vacancy_category');
//   $location = get_field('location');

//   if ($column_name == 'vacancy_category') {
//     echo ucfirst($category);
//   } else if ($column_name == 'location' ) {
//     echo $location;
//   }
// }