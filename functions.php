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

  //Home-Hero Image Widget
  register_sidebar( array(
    'name'          => ('Hero Image'),
    'id'            => 'hero-image',
    'description'   => 'Hero Image on Home Page',
    'before_widget' => '<div class="hero-image-widget">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
  ));

  //Home-The Vector Gen Approach Text Block Widget
  register_sidebar( array(
    'name'          => ('Vector Gen Approach Text Block'),
    'id'            => 'vector-gen-approach',
    'description'   => 'Widget Area for Vector Gen Approach Section',
    'before_widget' => '<div class="vector-gen-approach">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
  ));

  //Home-Left Topic Widget
  register_sidebar( array(
    'name'          => ('Left Topic Home'),
    'id'            => 'left-topic-home',
    'description'   => 'Widget Area In The Left Topic Home Page',
    'before_widget' => '<div class="left-topic-home">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
  ));

  //Home-Middle Topic Widget
  register_sidebar( array(
    'name'          => ('Middle Topic Home'),
    'id'            => 'middle-topic-home',
    'description'   => 'Widget Area In The Middle Topic Home Page',
    'before_widget' => '<div class="middle-topic-home">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
  ));

  //Home-Right Topic Widget
  register_sidebar( array(
    'name'          => ('Right Topic Home'),
    'id'            => 'right-topic-home',
    'description'   => 'Widget Area In The Right Topic Home Page',
    'before_widget' => '<div class="right-topic-home">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
  ));

  //Newsletter Sign Up Widget
  register_sidebar( array(
    'name'          => ('Newsletter Sign Up'),
    'id'            => 'newsletter-sign-up',
    'description'   => 'Widget Area For Newsletter Sign Up',
    'before_widget' => '<div class="newsletter-sign-up">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
  ));

  //Home-Far Left Logo Widget
  register_sidebar( array(
    'name'          => ('Far Left Logo'),
    'id'            => 'far-left-logo',
    'description'   => 'Far Left Widget Area For Logo On Home Page',
    'before_widget' => '<div class="far-left-logo">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
  ));

  //Home-Left Logo Widget
  register_sidebar( array(
    'name'          => ('Left Logo'),
    'id'            => 'left-logo',
    'description'   => 'Left Widget Area For Logo On Home Page',
    'before_widget' => '<div class="left-logo">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
  ));

  //Home-Right Logo Widget
  register_sidebar( array(
    'name'          => ('Right Logo'),
    'id'            => 'right-logo',
    'description'   => 'Right Widget Area For Logo On Home Page',
    'before_widget' => '<div class="right-logo">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
  ));

  //Home-Far Right Logo Widget
  register_sidebar( array(
    'name'          => ('Far Right Logo'),
    'id'            => 'far-right-logo',
    'description'   => 'Far Right Widget Area For Logo On Home Page',
    'before_widget' => '<div class="far-right-logo">',
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
