<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title><?php bloginfo('name'); ?></title>

    <!-- Link to our style.css file here-->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
    <!-- Skolar Latin Font -->
    <link rel="stylesheet" href="https://use.typekit.net/qxv7heo.css">
    <!-- Proxima Nova Font -->
    <link rel="stylesheet" href="https://use.typekit.net/qxv7heo.css">

    <?php wp_head(); ?>
</head>

<body>
  <header>
    <div class="container">
     <div class="row">
       <div class="three columns header logo">
         <?php if(get_header_image() == ''){?>
          <h1><a href="<?php $url = home_url('/'); echo $url; ?>"><?php bloginfo('name'); ?></a></h1><?php
        } else{?>
          <a href="<?php $url = home_url('/'); echo $url; ?>"><img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height;?>" width="<?php echo get_custom_header()->width; ?>" alt="Logo" /></a>
        <?php } ?>
       </div>

       <div class="nine columns">
         <?php wp_nav_menu(array (
           'theme_location' => 'header-menu',
           'container-class' => 'menu-header'
         ));
         ?>
     </div>
</header>
