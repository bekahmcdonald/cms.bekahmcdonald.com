<?php

define('HOME_PAGE_POST_ID', 21);
define('WORK_PAGE_POST_ID', 203);

function BM_register_rest_route($url, $callback)
{
  register_rest_route('bm/v1', $url, [
    'methods'  => WP_REST_Server::READABLE,
    'callback' => $callback
  ]);
}

add_action('rest_api_init', function () {
  BM_register_rest_route('/global', 'BM_global_api_data');
}, 10);


function BM_global_api_data()
{
  $fields = get_fields(HOME_PAGE_POST_ID);

  $global = [
    'work'        => BM_build_projects_data(),
    'social'      => BM_social_data(),
    'api_keys'    => BM_api_data(),
  ];
  $result = array_merge($fields, $global);
  return $result;
}


function BM_social_data()
{
  $field = get_field('social', 'option');
  $result = [];

  foreach ($field['links'] as $link) {
    $result[] = [
      'platform' => $link['platform'],
      'url' => $link['url'],
      'icon' => $link['icon']['url']
    ];
  }

  return $result;
}

function BM_api_data()
{
  $field = get_field('api_keys', 'option');
  $result = [];
  foreach ($field as $key => $value) {
    $result[$value['id']] = $value['key'];
  }
  return $result;
}


function BM_build_projects_data(array $options = [])
{

  $data = [
    'title' => get_the_title(WORK_PAGE_POST_ID),
    'intro' => get_field('intro', WORK_PAGE_POST_ID),
    'projects' => []
  ];

  $args = [
    'post_type'    => 'project',
    'orderby' => 'menu_order',
    'order'   => 'DESC',
  ];

  // Run query
  $query = new WP_Query($args);
  $projects = $query->posts;


  if (!empty($projects)) {

    foreach ($projects as $project) {

      $fields = get_fields($project->ID);

      $item = [
        'id' => $project->ID,
        'tags' => wp_get_post_terms($project->ID, 'post_tag', array(
          'fields' => 'names',
        )),
      ];

      if ($fields) {
        $item['thumbnail'] = $fields['thumbnail'];
      }

      $data['projects'][] = $item;
    }
  }

  return $data;
}
