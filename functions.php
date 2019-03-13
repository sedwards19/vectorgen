<?php
//Add custom menus
function custom_menus(){
  register_nav_menus( array (
    'header-menu' => ('Header Menu'),
    'footer-menu' => ('Footer Menu')
  ));
}
add_action('init', 'custom_menus');

//Add Custom Logo
add_theme_support( 'custom-logo' );

//Adds widget areas

?>
