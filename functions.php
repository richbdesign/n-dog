<?php 
/**
 * @package WordPress
 */

// drag and drop menu support
register_nav_menu( 'primary', 'Primary Menu' );
register_nav_menu( 'mobile', 'Mobile Menu' );


//widget support for a default sidebar
register_sidebar(array(
  'name' => 'Default SideBar',
  'id' => 'default-sidebar',
  'description' => 'Widgets in this area will be shown on the default pages.',
  'before_widget' => '<div id="%1$s">',
  'after_widget'  => '</div>',  
  'before_title' => '<h3>',
  'after_title' => '</h3>'
));

//widget support for a report sidebar
register_sidebar(array(
  'name' => 'Report SideBar',
  'id' => 'report-sidebar',
  'description' => 'Widgets in this area will be shown on the report area.',
  'before_widget' => '<div id="%1$s">',
  'after_widget'  => '</div>',  
  'before_title' => '<h3>',
  'after_title' => '</h3>'
));

//This theme uses post thumbnails
add_theme_support( 'post-thumbnails' );


//Apply do_shortcode() to widgets so that shortcodes will be executed in widgets
add_filter('widget_text', 'do_shortcode');


/**
 * MANAGE REMOVING OR ADDING STUFF (aka Function Snippets)
 * comment in or out what you want
 */

// remove stuff,  uncomment to enable
require_once( get_template_directory() . '/snippets/remove-stuff.php' );

// add stuff
require_once( get_template_directory() . '/snippets/add-stuff.php' );

// shortcodes
require_once( get_template_directory() . '/snippets/shortcodes.php' );

// custom posts
require_once( get_template_directory() . '/snippets/custom-posts.php' );
//
//


?>