<?php 



add_action('init', 'register_custom_types');



function register_custom_types() {



	$labels_carousel = array(

		'name' => _x('Carousel', 'post type general name'),

		'singular_name' => _x('Carousel image', 'post type singular name'),

		'all_items' => __('See all images'),

		'add_new' => _x('Add new', 'Image'),

		'add_new_item' => __('Add new image'),

		'edit_item' => __('Edit image'),

		'new_item' => __('New image'),

		'view_item' => __('View image'),

		'search_items' => __('Search image'),

		'not_found' =>  __('Not found image'),

		'not_found_in_trash' => __('Not found in the trash'),

		'parent_item_colon' => ''

	);



	$args_carousel = array(

		'labels'             => $labels_carousel,

		'description'        => 'Carousel images',

		'public'             => true,

		'publicly_queryable' => true,

		'show_ui'            => true,

		'query_var'          => true,

		'menu_icon'          => null,

		'rewrite'            => true,

		'capability_type'    => 'post',

		'hierarchical'       => false,

		'menu_position'      => null,

		'show_in_menu'       => true,

		'show_in_nav_menus'  => true,

		//'taxonomies'         => array('category'),	

		'rewrite'            => array('slug' => 'carousel'), 

		'supports'           => array('title','thumbnail', 'custom-fields'),

		'has_archive'        => true,

	  );



	  register_post_type( 'carousel' , $args_carousel );


	  $labels_album = array(

		'name' => _x('Album', 'post type general name'),

		'singular_name' => _x('Album', 'post type singular name'),

		'all_items' => __('See all albums'),

		'add_new' => _x('Add new', 'Album'),

		'add_new_item' => __('Add new Album'),

		'edit_item' => __('Edit Album'),

		'new_item' => __('New Album'),

		'view_item' => __('View Album'),

		'search_items' => __('Search Album'),

		'not_found' =>  __('Not found Album'),

		'not_found_in_trash' => __('Not found in the trash'),

		'parent_item_colon' => ''

	);



	$args_albums = array(

		'labels'             => $labels_album,

		'description'        => 'Albums',

		'public'             => true,

		'publicly_queryable' => true,

		'show_ui'            => true,

		'query_var'          => true,

		'menu_icon'          => null,

		'rewrite'            => true,

		'capability_type'    => 'post',

		'hierarchical'       => false,

		'menu_position'      => null,

		'show_in_menu'       => true,

		'show_in_nav_menus'  => true,

		//'taxonomies'         => array('category'),	

		'rewrite'            => array('slug' => 'albums'), 

		'supports'           => array('title','thumbnail', 'custom-fields'),

		'has_archive'        => true,

	  );



	  register_post_type( 'albums' , $args_albums );

	  


	flush_rewrite_rules();

}



?>