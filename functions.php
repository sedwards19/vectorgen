<?php

//Adds widget areas
function blank_widgets_init(){
    
  //HEADER WIDGETS
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

    
  //HOME WIDGETS
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

    
  //INVEST PAGE WIDGETS
  //Invest Hero Image Widget
  register_sidebar( array(
    'name'          => ('Invest Hero Image'),
    'id'            => 'invest-hero-image',
    'description'   => 'Hero image on invest page',
    'before_widget' => '<div class="invest-hero-image">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
  )); 
    
  //Invest - Vector Gen Approach Text Block Widget
  register_sidebar( array(
    'name'          => ('Invest Vector Gen Approach Text Block'),
    'id'            => 'invest-vector-gen-approach',
    'description'   => 'Widget Area for Vector Gen Approach Section on Invest Page',
    'before_widget' => '<div class="invest-vector-gen-approach">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
  ));
    
  //Invest - Left Investment Potential Widget
  register_sidebar( array(
    'name'          => ('Invest Left Icon'),
    'id'            => 'invest-left-icon',
    'description'   => 'Investment Potential Widget Area on The Left on Invest Page',
    'before_widget' => '<div class="invest-left-icon">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
  ));
    
  //Invest - Middle Investment Potential Widget
  register_sidebar( array(
    'name'          => ('Invest Middle Icon'),
    'id'            => 'invest-middle-icon',
    'description'   => 'Investment Potential Widget Area in The Middle on Invest Page',
    'before_widget' => '<div class="invest-middle-icon">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
  ));

  //Invest - Right Investment Potential Widget
  register_sidebar( array(
    'name'          => ('Invest Right Icon'),
    'id'            => 'invest-right-icon',
    'description'   => 'Investment Potential Widget Area on The Right on Invest Page',
    'before_widget' => '<div class="invest-right-icon">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
  ));
    
  //Invest - Budget & Timeline Text Block Widget
  register_sidebar( array(
    'name'          => ('Invest Budget and Timeline Text Block'),
    'id'            => 'budget-timelime',
    'description'   => 'Widget Area for Budget and Timeline Section on Invest Page',
    'before_widget' => '<div class="budget-timelime">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
  ));
    
  //Invest - Returns & Projections Text Block Widget
  register_sidebar( array(
    'name'          => ('Invest Returns and Projections Text Block'),
    'id'            => 'returns-projections',
    'description'   => 'Widget Area for Returns and Projections Section on Invest Page',
    'before_widget' => '<div class="returns-projections">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
  ));
    
  //Invest - Become an Investor Widget
  register_sidebar( array(
    'name'          => ('Become and Investor Button'),
    'id'            => 'become-investor',
    'description'   => 'Widget Area for Become and Investor Button on Invest Page',
    'before_widget' => '<div class="become-investor">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
  ));
    
  //FOOTER WIDGETS    
  //Left Footer Widget
  register_sidebar( array(
    'name'          => ('Left Footer'),
    'id'            => 'left-footer',
    'description'   => 'Left widget area in the footer',
    'before_widget' => '<div class="widget-footer widget-left">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
  ));

  //Middle Footer Widget
  register_sidebar( array(
    'name'          => ('Middle Footer'),
    'id'            => 'middle-footer',
    'description'   => 'Middle widget area in the footer',
    'before_widget' => '<div class="widget-footer widget-middle">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
  ));

  //Right Footer Widget
  register_sidebar( array(
    'name'          => ('Right Footer'),
    'id'            => 'right-footer',
    'description'   => 'Right widget area in the footer',
    'before_widget' => '<div class="widget-footer widget-right">',
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
