<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action('init',  "njengah_blog_cpt");
  
  
	function njengah_blog_cpt(){
		
		$labels = array(
				'name' => 'blog',
				'singular_name' => 'Blog',
				'add_new' => 'Add item',
				'add_new_item' => 'Add item',
				'edit_item' => 'Edit item',
				'new_item' => 'New item',
				'view_item' => 'View item',
				'search_items' => 'Search item',
				'not_found' => 'Not found',
				'not_found_in_trash' => 'No items were found in the basket',
				'parent_item_colon' => '',
				'menu_name' => 'Blog'
				
		);

			$args = array(
				'hierarchical'       =>  true,     
				'labels'             =>  $labels,
				'public'             =>  true,
				'publicly_queryable' =>  true,  
				'description'        => __('Description.'),
				'show_ui'            =>  true, 
				'show_in_menu'       =>  true,
				'show_in_nav_menus'	 =>  true,			
				'query_var'          =>  true,
				'rewrite'            =>  true,
				'query_var'          =>  true,
				'rewrite'            =>  array('slug' => 'blog'),
				'capability_type'    =>  'page',
				'has_archive'        =>  true, 
				'menu_position'      =>   22,
				"show_in_rest"       =>  true,
				'supports'           =>  array( 'title', 'editor', 'author', 'thumbnail', 'comments', 'revisions', 'page-attributes', 'custom-fields' )
			); 

			register_post_type('blog', $args);
		
		
	}
