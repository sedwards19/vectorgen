<?php
//Adds widget areas
function blank_widgets_init(){
  //Header Widget
  register_sidebar( array(
    'name'          => ('Header Right'),
    'id'            => 'header-right',
    'description'   => 'Right widget area in the header',
    'before_widget' => '<div class="widget-header widget-right">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
  ));
}

add_action('widgets_init', 'blank_widgets_init');

//Add custom menus
function custom_menus(){
  register_nav_menus( array (
    'header-menu' => ('Header Menu'),
    'footer-menu' => ('Footer Menu')
  ));
}
add_action('init', 'custom_menus');

//Create a custom header
$custom_image_header = array(
  'width'   => 200,
  'height'  => 100,
  'uploads' => true,
);

add_theme_support('custom-header', $custom_image_header);
?>
