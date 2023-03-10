<?php
function post_type_projects()
{
  register_post_type('projects', array(
    'labels' => array(
      'name' => 'projects',
      'singular_name' => 'projects',
      'add_new' => 'Add item',
      'add_new_item' => 'Add item',
      'edit_item' => 'Edit item',
      'new_item' => 'New item',
      'view_item' => 'View item',
      'search_items' => 'Search item',
      'not_found' => 'Not found',
      'not_found_in_trash' => 'No items were found in the basket',
      'parent_item_colon' => '',
      'menu_name' => 'Projects'
    ),
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'query_var' => true,
    'rewrite' => array('slug' => '/projects', 'with_front' => false),
    'capability_type' => 'post',
    'has_archive' => true,
    'hierarchical' => false,
    'menu_position' => null,
    'supports' => array('title', 'editor', 'comments', 'thumbnail', 'excerpt', 'custom-fields', 'category', 'page-attributes')
  ));

}


add_action('init', 'post_type_projects');