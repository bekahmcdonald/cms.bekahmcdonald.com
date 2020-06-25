<?php

define('HOME_PAGE_POST_ID', 21);

function BM_register_rest_route($url, $callback) {
  register_rest_route('bm/v1', $url, [
    'methods'  => WP_REST_Server::READABLE,
    'callback' => $callback
  ]);
}

add_action('rest_api_init', function() {
  BM_register_rest_route('/global', 'BM_global_api_data');
}, 10);


function BM_global_api_data() {
  return [
    'hero'        => BM_hero_data(),
    'about'       => BM_about_data(),
    'work'        => BM_build_projects_data(),
    'contact'     => BM_contact_data(),
    'social'      => BM_social_data(),
  ];
}

function BM_hero_data() {
  return get_field('hero', HOME_PAGE_POST_ID);
}

function BM_about_data() {
  return get_field('about', HOME_PAGE_POST_ID);
}

function BM_contact_data() {
  return get_field('contact', HOME_PAGE_POST_ID);
}

function BM_social_data() {
  $field = get_field('social', 'option');
  $result = [];

  foreach($field['links'] as $link) {
    $result[] = [
      'platform' => $link['platform'],
      'url' => $link['url'],
      'icon' => $link['icon']['url']
    ];
  }
  
  return $result;
}

function BM_build_projects_data(array $options=[]) {

  $data = [];

  $args = [
    'post_type'    => 'project',
    'orderby' => 'menu_order',
    'order'   => 'DESC',
  ];

  // Run query
  $query = new WP_Query($args);
  $projects = $query->posts;


  if (!empty($projects)) {

    foreach($projects as $project) {

      $fields = get_fields($project->ID);

      $item = [
        'id' => $project->ID,
      ];

      if ($fields) {
        $item['thumbnail'] = $fields['thumbnail'];
      }

      $data[] = $item;
    }
  }

  return $data;
}