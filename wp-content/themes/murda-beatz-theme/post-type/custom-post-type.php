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



	   $labels_tour = array(

		'name' => _x('Tour', 'post type general name'),

		'singular_name' => _x('Tour', 'post type singular name'),

		'all_items' => __('See all Tours'),

		'add_new' => _x('Add new', 'Tour'),

		'add_new_item' => __('Add new Tour'),

		'edit_item' => __('Edit Tour'),

		'new_item' => __('New Tour'),

		'view_item' => __('View Tour'),

		'search_items' => __('Search Tour'),

		'not_found' =>  __('Not found Tour'),

		'not_found_in_trash' => __('Not found in the trash'),

		'parent_item_colon' => ''

	);



	$args_tour = array(

		'labels'             => $labels_tour,

		'description'        => 'Tour',

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

		'rewrite'            => array('slug' => 'tour'), 

		'supports'           => array('title','thumbnail', 'custom-fields'),

		'has_archive'        => true,

	  );



	  register_post_type( 'tour' , $args_tour );


	   $labels_store = array(

		'name' => _x('store', 'post type general name'),

		'singular_name' => _x('Store', 'post type singular name'),

		'all_items' => __('See all Store'),

		'add_new' => _x('Add new', 'Store'),

		'add_new_item' => __('Add new Store'),

		'edit_item' => __('Edit Store'),

		'new_item' => __('New Store'),

		'view_item' => __('View Store'),

		'search_items' => __('Search Store'),

		'not_found' =>  __('Not found Store'),

		'not_found_in_trash' => __('Not found in the trash'),

		'parent_item_colon' => ''

	);



	$args_store = array(

		'labels'             => $labels_store,

		'description'        => 'Store',

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

		'rewrite'            => array('slug' => 'tour'), 

		'supports'           => array('title','thumbnail', 'custom-fields'),

		'has_archive'        => true,

	  );



	  register_post_type( 'store' , $args_store );

	  


	flush_rewrite_rules();

}



?>