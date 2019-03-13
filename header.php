<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <tite><?php bloginfo('name'); ?></tite>

    <!-- Link to our style.css file -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />

    <?php wp_head(); ?>
</head>

<body>
  <header>
    <div class="container">
     <div class="row">
       <div class="three columns">
         <?php if(get_header_image() == ''){?>
          <h1><a href="<?php $url = home_url('/'); echo $url; ?>"><?php bloginfo('name'); ?></a></h1><?php
        } ?>










       </div>

       <div class="nine columns">
         <?php wp_nav_menu(array (
           'theme_location' => 'header-menu',
           'container-class' => 'menu-header'
         ));
         ?>
     </div>
</header>
