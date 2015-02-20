<?php

// artist custom post type
function artist_post() {
	$labels = array(
		'name'               => _x( 'Artists', 'post type general name' ),
		'singular_name'      => _x( 'Artist', 'post type singular name' ),
		'add_new'            => _x( 'Add New', 'artist' ),
		'add_new_item'       => __( 'Add New Artist' ),
		'edit_item'          => __( 'Edit Artist' ),
		'new_item'           => __( 'New Artist' ),
		'all_items'          => __( 'All Artists' ),
		'view_item'          => __( 'View Artist' ),
		'search_items'       => __( 'Search Artists' ),
		'not_found'          => __( 'No artists found' ),
		'not_found_in_trash' => __( 'No artists found in the Trash' ), 
		'parent_item_colon'  => '',
		'menu_name'          => 'Artists'
	);
	$args = array(
		'labels'        => $labels,
		'description'   => 'Artists',
		'public'        => true,
		'menu_position' => 5,
		'menu_icon' => '/wp-content/themes/naughtydog/images/custom/pin.png',
		'supports'      => array( 'title', 'editor', 'thumbnail' ),
		'has_archive'   => true,
	);
	register_post_type( 'artist', $args );	
}
add_action( 'init', 'artist_post' );

// album custom post type
function album_post() {
	$labels = array(
		'name'               => _x( 'Albums', 'post type general name' ),
		'singular_name'      => _x( 'Album', 'post type singular name' ),
		'add_new'            => _x( 'Add New', 'album' ),
		'add_new_item'       => __( 'Add New Album' ),
		'edit_item'          => __( 'Edit Album' ),
		'new_item'           => __( 'New Album' ),
		'all_items'          => __( 'All Albums' ),
		'view_item'          => __( 'View Album' ),
		'search_items'       => __( 'Search Albums' ),
		'not_found'          => __( 'No albums found' ),
		'not_found_in_trash' => __( 'No albums found in the Trash' ), 
		'parent_item_colon'  => '',
		'menu_name'          => 'Albums'
	);
	$args = array(
		'labels'        => $labels,
		'description'   => 'Albums',
		'public'        => true,
		'menu_position' => 5,
		'menu_icon' => '/wp-content/themes/naughtydog/images/custom/pin.png',
		'supports'      => array( 'title', 'editor', 'thumbnail' ),
		'has_archive'   => true,
	);
	register_post_type( 'album', $args );	
}
add_action( 'init', 'album_post' );

// hook into the init action and call create_video_taxonomies() when it fires
add_action( 'init', 'create_album_taxonomies', 0 );

// create one taxonomy, categories for the post type "album"
function create_album_taxonomies() {

	// Add new taxonomy, make it hierarchical (like categories)
	$labels = array(
		'name' => _x( 'Artists', 'taxonomy general name' ),
		'singular_name' => _x( 'Artist', 'taxonomy singular name' ),
		'search_items' =>  __( 'Search Artists' ),
		'all_items' => __( 'All Artists' ),
		'parent_item' => __( 'Parent Artist' ),
		'parent_item_colon' => __( 'Parent Artist:' ),
		'edit_item' => __( 'Edit Artist' ),
		'update_item' => __( 'Update Artist' ),
		'add_new_item' => __( 'Add New Artist' ),
		'new_item_name' => __( 'New Artist' ),
	); 	

	register_taxonomy( 'artists', array( 'album' ), array(
		'hierarchical' => true,
		'labels' => $labels, /* NOTICE: Here is where the $labels variable is used */
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'artists' ),
	));
	
};

// live custom post type
function live_post() {
	$labels = array(
		'name'               => _x( 'Live', 'post type general name' ),
		'singular_name'      => _x( 'Live Item', 'post type singular name' ),
		'add_new'            => _x( 'Add New', 'live item' ),
		'add_new_item'       => __( 'Add New Live Item' ),
		'edit_item'          => __( 'Edit Live Item' ),
		'new_item'           => __( 'New Live Item' ),
		'all_items'          => __( 'All Live' ),
		'view_item'          => __( 'View Live Item' ),
		'search_items'       => __( 'Search Live' ),
		'not_found'          => __( 'No live found' ),
		'not_found_in_trash' => __( 'No live found in the Trash' ), 
		'parent_item_colon'  => '',
		'menu_name'          => 'Live'
	);
	$args = array(
		'labels'        => $labels,
		'description'   => 'Live',
		'public'        => true,
		'menu_position' => 5,
		'menu_icon' => '/wp-content/themes/naughtydog/images/custom/pin.png',
		'supports'      => array( 'title' ),
		'has_archive'   => true,
	);
	register_post_type( 'live', $args );	
}
add_action( 'init', 'live_post' );

// hook into the init action and call create_video_taxonomies() when it fires
add_action( 'init', 'create_bands_taxonomies', 0 );

// create one taxonomy, bands for the post type "live"
function create_bands_taxonomies() {

	// Add new taxonomy, make it hierarchical (like categories)
	$labels = array(
		'name' => _x( 'Bands', 'taxonomy general name' ),
		'singular_name' => _x( 'Band', 'taxonomy singular name' ),
		'search_items' =>  __( 'Search Bands' ),
		'all_items' => __( 'All Bands' ),
		'parent_item' => __( 'Parent Band' ),
		'parent_item_colon' => __( 'Parent Band:' ),
		'edit_item' => __( 'Edit Band' ),
		'update_item' => __( 'Update Band' ),
		'add_new_item' => __( 'Add New Band' ),
		'new_item_name' => __( 'New Band' ),
	); 	

	register_taxonomy( 'bands', array( 'live' ), array(
		'hierarchical' => true,
		'labels' => $labels, /* NOTICE: Here is where the $labels variable is used */
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'bands' ),
	));
	
};

// banner custom post type
function banner_post() {
	$labels = array(
		'name'               => _x( 'Home Banners', 'post type general name' ),
		'singular_name'      => _x( 'Home Banner', 'post type singular name' ),
		'add_new'            => _x( 'Add New', 'home banner' ),
		'add_new_item'       => __( 'Add New Home Banner' ),
		'edit_item'          => __( 'Edit Home Banner' ),
		'new_item'           => __( 'New Home Banner' ),
		'all_items'          => __( 'All Home Banners' ),
		'view_item'          => __( 'View Home Banner' ),
		'search_items'       => __( 'Search Home Banners' ),
		'not_found'          => __( 'No home banners found' ),
		'not_found_in_trash' => __( 'No home banners found in the Trash' ), 
		'parent_item_colon'  => '',
		'menu_name'          => 'Home Banners'
	);
	$args = array(
		'labels'        => $labels,
		'description'   => 'Home Banners',
		'public'        => true,
		'menu_position' => 5,
		'menu_icon' => '/wp-content/themes/naughtydog/images/custom/pin.png',
		'supports'      => array( 'title', 'editor', 'thumbnail' ),
		'has_archive'   => true,
	);
	register_post_type( 'banner', $args );	
}
add_action( 'init', 'banner_post' );

// song custom post type
function song_post() {
	$labels = array(
		'name'               => _x( 'Song', 'post type general name' ),
		'singular_name'      => _x( 'Song Item', 'post type singular name' ),
		'add_new'            => _x( 'Add New', 'song item' ),
		'add_new_item'       => __( 'Add New Song Item' ),
		'edit_item'          => __( 'Edit Song Item' ),
		'new_item'           => __( 'New Song Item' ),
		'all_items'          => __( 'All Songs' ),
		'view_item'          => __( 'View Song Item' ),
		'search_items'       => __( 'Search Songs' ),
		'not_found'          => __( 'No songs found' ),
		'not_found_in_trash' => __( 'No songs found in the Trash' ), 
		'parent_item_colon'  => '',
		'menu_name'          => 'Songs'
	);
	$args = array(
		'labels'        => $labels,
		'description'   => 'Songs',
		'public'        => true,
		'menu_position' => 5,
		'menu_icon' => '/wp-content/themes/naughtydog/images/custom/pin.png',
		'supports'      => array( 'title' ),
		'has_archive'   => true,
	);
	register_post_type( 'song', $args );	
}
add_action( 'init', 'song_post' );

// hook into the init action and call create_video_taxonomies() when it fires
add_action( 'init', 'create_song_taxonomies', 0 );

// create one taxonomy, bands for the post type "song"
function create_song_taxonomies() {

	// Add new taxonomy, make it hierarchical (like categories)
	$labels = array(
		'name' => _x( 'Release', 'taxonomy general name' ),
		'singular_name' => _x( 'Release', 'taxonomy singular name' ),
		'search_items' =>  __( 'Search Releases' ),
		'all_items' => __( 'All Releases' ),
		'parent_item' => __( 'Parent Release' ),
		'parent_item_colon' => __( 'Parent Release:' ),
		'edit_item' => __( 'Edit Release' ),
		'update_item' => __( 'Update Release' ),
		'add_new_item' => __( 'Add New Release' ),
		'new_item_name' => __( 'New Release' ),
	); 	

	register_taxonomy( 'release', array( 'song' ), array(
		'hierarchical' => true,
		'labels' => $labels, /* NOTICE: Here is where the $labels variable is used */
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'releases' ),
	));
	
};

// hook into the init action and call create_video_taxonomies() when it fires
add_action( 'init', 'create_searchterms_taxonomies', 0 );

// create one taxonomy, bands for the post type "song"
function create_searchterms_taxonomies() {

	// Add new taxonomy, make it hierarchical (like categories)
	$labels = array(
		'name' => _x( 'Search Terms', 'taxonomy general name' ),
		'singular_name' => _x( 'Search Term', 'taxonomy singular name' ),
		'search_items' =>  __( 'Search Search Terms' ),
		'all_items' => __( 'All Search Terms' ),
		'parent_item' => __( 'Parent Search Term' ),
		'parent_item_colon' => __( 'Parent Search Term:' ),
		'edit_item' => __( 'Edit Search Term' ),
		'update_item' => __( 'Update Search Term' ),
		'add_new_item' => __( 'Add New Search Term' ),
		'new_item_name' => __( 'New Search Term' ),
	); 	

	register_taxonomy( 'searchterm', array( 'song' ), array(
		'hierarchical' => false,
		'labels' => $labels, /* NOTICE: Here is where the $labels variable is used */
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'searchterms' ),
	));
	
};

// podcast custom post type
function podcast_post() {
	$labels = array(
		'name'               => _x( 'Podcasts', 'post type general name' ),
		'singular_name'      => _x( 'Podcast', 'post type singular name' ),
		'add_new'            => _x( 'Add New', 'podcast' ),
		'add_new_item'       => __( 'Add New Podcast' ),
		'edit_item'          => __( 'Edit Podcast' ),
		'new_item'           => __( 'New Podcast' ),
		'all_items'          => __( 'All Podcasts' ),
		'view_item'          => __( 'View Podcasts' ),
		'search_items'       => __( 'Search Podcasts' ),
		'not_found'          => __( 'No podcasts found' ),
		'not_found_in_trash' => __( 'No podcasts found in the Trash' ), 
		'parent_item_colon'  => '',
		'menu_name'          => 'Podcasts'
	);
	$args = array(
		'labels'        => $labels,
		'description'   => 'Podcasts',
		'public'        => true,
		'menu_position' => 5,
		'menu_icon' => '/wp-content/themes/naughtydog/images/custom/pin.png',
		'supports'      => array( 'title', 'editor', 'thumbnail' ),
		'has_archive'   => true,
	);
	register_post_type( 'podcast', $args );	
}
add_action( 'init', 'podcast_post' );

?>