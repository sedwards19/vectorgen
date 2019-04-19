<?php

//Add featured images to posts
    add_theme_support('post-thumbnails');

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

  //Home-Far Left Icon Widget
  register_sidebar( array(
    'name'          => ('Far Left Icon'),
    'id'            => 'far-left-icon',
    'description'   => 'Far Left Widget Area For Icon On Home Page',
    'before_widget' => '<div class="far-left-icon">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
  ));

  //Home-Left Icon Widget
  register_sidebar( array(
    'name'          => ('Left Icon'),
    'id'            => 'left-icon',
    'description'   => 'Left Widget Area For Icon On Home Page',
    'before_widget' => '<div class="left-icon">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
  ));

  //Home-Right Icon Widget
  register_sidebar( array(
    'name'          => ('Right Icon'),
    'id'            => 'right-icon',
    'description'   => 'Right Widget Area For Icon On Home Page',
    'before_widget' => '<div class="right-icon">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
  ));

  //Home-Far Right Icon Widget
  register_sidebar( array(
    'name'          => ('Far Right Icon'),
    'id'            => 'far-right-icon',
    'description'   => 'Far Right Widget Area For Icon On Home Page',
    'before_widget' => '<div class="far-right-icon">',
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
    'before_title'  => '<h3 class="widget-title-vector-gen-approach">',
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


  //ABOUT WIDGETS
  register_sidebar( array(
    'name'          => ('About Image Widget'),
    'id'            => 'about-image',
    'description'   => 'Left image on about page',
    'before_widget' => '<div class="about-image">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
  ));

  //Discover Section Widget
  register_sidebar( array(
    'name'          => ('Discover Section Widget'),
    'id'            => 'about-discover',
    'description'   => 'Discover section on about page',
    'before_widget' => '<div class="about-discover">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
  ));

  //Mission Section Widget
  register_sidebar( array(
    'name'          => ('Our Mission Widget'),
    'id'            => 'our-mission',
    'description'   => 'Our mission section on about page',
    'before_widget' => '<div class="our-mission">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
  ));

  //Left Bio Widget
  register_sidebar( array(
    'name'          => ('Left Bio About'),
    'id'            => 'left-bio',
    'description'   => 'Left Bio widget area on about page',
    'before_widget' => '<div class="left-bio">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
  ));

  //Middle Bio Widget
  register_sidebar( array(
    'name'          => ('Middle Bio About'),
    'id'            => 'middle-bio',
    'description'   => 'Middle Bio widget area on about page',
    'before_widget' => '<div class="middle-bio">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
  ));

  //Right Bio Widget
  register_sidebar( array(
    'name'          => ('Right Bio About'),
    'id'            => 'right-bio',
    'description'   => 'Right Bio widget area on about page',
    'before_widget' => '<div class="right-bio">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
  ));

  //Core Values Section Widget
  register_sidebar( array(
    'name'          => ('Our Core Values Widget'),
    'id'            => 'our-values',
    'description'   => 'Our core values section on about page',
    'before_widget' => '<div class="our-values">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
  ));

  //RESEARCH WIDGETS - ABOUT SUBHEADER
  //Research - Hero Image Widget
  register_sidebar( array(
    'name'          => ('Research Hero Image'),
    'id'            => 'research-hero-image',
    'description'   => 'Hero image on research page',
    'before_widget' => '<div class="research-hero-image">',
    'after_widget'  => '</div>',
    'before_title'  => '<h1 class="widget-title">',
    'after_title'   => '</h1>'
  ));

  //Research - Global Crisis Text Block Widget
  register_sidebar( array(
    'name'          => ('Research Global Crisis Text Block'),
    'id'            => 'global-crisis',
    'description'   => 'Widget Area for Global Crisis Section on Research Page',
    'before_widget' => '<div class="global-crisis">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
  ));

  //Research - Did You Know First Icon Widget
  register_sidebar( array(
    'name'          => ('Research Icon One'),
    'id'            => 'research-icon-one',
    'description'   => 'Did You Know First Icon on Research Page',
    'before_widget' => '<div class="research-icon-one">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
  ));

  //Research - Did You Know Second Icon Widget
  register_sidebar( array(
    'name'          => ('Research Icon Two'),
    'id'            => 'research-icon-two',
    'description'   => 'Did You Know Second Icon on Research Page',
    'before_widget' => '<div class="research-icon-two">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
  ));

  //Research - Did You Know Third Icon Widget
  register_sidebar( array(
    'name'          => ('Research Icon Three'),
    'id'            => 'research-icon-three',
    'description'   => 'Did You Know Third Icon on Research Page',
    'before_widget' => '<div class="research-icon-three">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
  ));

  //Research - Did You Know Fourth Icon Widget
  register_sidebar( array(
    'name'          => ('Research Icon Four'),
    'id'            => 'research-icon-four',
    'description'   => 'Did You Know Fourth Icon on Research Page',
    'before_widget' => '<div class="research-icon-four">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
  ));

  //Research - Image Content Grid Widget - Text Block 1 Combating HIV
  register_sidebar( array(
    'name'          => ('Combating HIV on Image Content Grid'),
    'id'            => 'research-combating-hiv',
    'description'   => 'Image Content Grid Widget - Combating HIV on Research Page Grid',
    'before_widget' => '<div class="research-combating-hiv">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
  ));

  //Research - Image Content Grid Widget - Image 1
  register_sidebar( array(
    'name'          => ('Image 1 on Image Content Grid'),
    'id'            => 'research-large-image-one',
    'description'   => 'Image Content Grid Widget - Image 1 on Research Page Grid',
    'before_widget' => '<div class="research-large-image-one">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
  ));

  //Research - Image Content Grid Widget - Image 2
  register_sidebar( array(
    'name'          => ('Image 2 on Image Content Grid'),
    'id'            => 'research-large-image-two',
    'description'   => 'Image Content Grid Widget - Image 2 on Research Page Grid',
    'before_widget' => '<div class="research-large-image-two">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
  ));

  //Research - Image Content Grid Widget - Text Block 2 VectorGen Approach
  register_sidebar( array(
    'name'          => ('VectorGen Approach on Image Content Grid'),
    'id'            => 'research-vectorgen-approach',
    'description'   => 'Image Content Grid Widget - VectorGen Approach on Research Page Grid',
    'before_widget' => '<div class="research-vectorgen-approach">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
  ));

  //Research - Future of Vectors and Gene Therapy Quote Carousel Widget
  register_sidebar( array(
    'name'          => ('Research Quote Carousel'),
    'id'            => 'future',
    'description'   => 'Widget Area for Quote Carousel on Research Page',
    'before_widget' => '<div class="future">',
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
    'before_title'  => '<h1 class="widget-title">',
    'after_title'   => '</h1>'
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

  //Invest - Budget Text Block Widget
  register_sidebar( array(
    'name'          => ('Invest Budget Text Block'),
    'id'            => 'budget-timelime',
    'description'   => 'Widget Area for Budget and Timeline Section on Invest Page',
    'before_widget' => '<div class="budget-timelime">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
  ));

  //Invest - Timeline Text Block Widget
  register_sidebar( array(
    'name'          => ('Invest Timeline Text Block'),
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


  //PARTNER WIDGETS
  //Partner Image Widget
  register_sidebar( array(
    'name'          => ('Partner Image Widget'),
    'id'            => 'partner-image',
    'description'   => 'Left image on partner page',
    'before_widget' => '<div class="partner-image">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
  ));

  //Partner Text Widget
  register_sidebar( array(
    'name'          => ('Partner Text Section Widget'),
    'id'            => 'partner-text',
    'description'   => 'Partner text on partner page',
    'before_widget' => '<div class="partner-text">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
  ));

  //Our Research Facilities Section Widget
  register_sidebar( array(
    'name'          => ('Our Research Facilities Widget'),
    'id'            => 'our-research',
    'description'   => 'Our research facilities on partner page',
    'before_widget' => '<div class="our-research">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
  ));

  //Left Bio Widget
  register_sidebar( array(
    'name'          => ('Left Bio Partner'),
    'id'            => 'left-partner-bio',
    'description'   => 'Left Bio widget area on partner page',
    'before_widget' => '<div class="left-partner-bio">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
  ));

  //Right Bio Widget
  register_sidebar( array(
    'name'          => ('Right Bio Parter'),
    'id'            => 'right-partner-bio',
    'description'   => 'Right Bio widget area on partner page',
    'before_widget' => '<div class="right-partner-bio">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
  ));

  //Ready To Join Section Widget
  register_sidebar( array(
    'name'          => ('Ready To Join Widget'),
    'id'            => 'ready-to-join',
    'description'   => 'Ready to join on partner page',
    'before_widget' => '<div class="ready-to-join">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
  ));

  //Partner-Far Left Logo Widget
  register_sidebar( array(
    'name'          => ('Far Left Logo'),
    'id'            => 'far-left-logo',
    'description'   => 'Far Left Widget Area For Logo On Partner Page',
    'before_widget' => '<div class="far-left-logo">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
  ));

  //Partner-Left Logo Widget
  register_sidebar( array(
    'name'          => ('Left Logo'),
    'id'            => 'left-logo',
    'description'   => 'Left Widget Area For Logo On Partner Page',
    'before_widget' => '<div class="left-logo">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
  ));

  //Partner-Right Logo Widget
  register_sidebar( array(
    'name'          => ('Right Logo'),
    'id'            => 'right-logo',
    'description'   => 'Right Widget Area For Logo On Partner Page',
    'before_widget' => '<div class="right-logo">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
  ));

  //Partner-Far Right Logo Widget
  register_sidebar( array(
    'name'          => ('Far Right Logo'),
    'id'            => 'far-right-logo',
    'description'   => 'Far Right Widget Area For Logo On Partner Page',
    'before_widget' => '<div class="far-right-logo">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
  ));


  //PRESS WIDGETS INSERT HERE
  register_sidebar( array(
    'name'          => ('Press Hero Image'),
    'id'            => 'press-hero-image',
    'description'   => 'Hero image on press page',
    'before_widget' => '<div class="press-hero-image">',
    'after_widget'  => '</div>',
    'before_title'  => '<h1 class="widget-title">',
    'after_title'   => '</h1>'
  ));

  register_sidebar( array(
    'name'          => ('Press Inquiry Content'),
    'id'            => 'press-inquiry-content',
    'description'   => 'Press inquiry content',
    'before_widget' => '<div class="press-inquiry-content">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
  ));

  register_sidebar( array(
    'name'          => ('Featured Publications'),
    'id'            => 'featured-publications',
    'description'   => 'Featured publications text widget',
    'before_widget' => '<div class="featured-publications">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
  ));

  //CONTACT WIDGETS
  //Contact Hero Image Widget
  register_sidebar( array(
    'name'          => ('Contact Hero Image'),
    'id'            => 'contact-hero-image',
    'description'   => 'Hero image on contact page',
    'before_widget' => '<div class="contact-hero-image">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
  ));

  //Contact Form Widget
  register_sidebar( array(
    'name'          => ('Contact Form Widget'),
    'id'            => 'contact-form',
    'description'   => 'Contact form on contact page',
    'before_widget' => '<div class="contact-form">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
  ));

  //Newsletter Sign Up Widget - same as widget on Home Page, see above

  //Contact - Left Topic Widget
  register_sidebar( array(
    'name'          => ('Left Topic Contact'),
    'id'            => 'contact-left-topic',
    'description'   => 'Widget Area In The Left Topic Contact Page',
    'before_widget' => '<div class="contact-left-topic">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
  ));

  //Contact - Middle Topic Widget
  register_sidebar( array(
    'name'          => ('Middle Topic Contact'),
    'id'            => 'contact-middle-topic',
    'description'   => 'Widget Area In The Middle Topic Contact Page',
    'before_widget' => '<div class="contact-middle-topic">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
  ));

  //Contact - Right Topic Widget
  register_sidebar( array(
    'name'          => ('Right Topic Contact'),
    'id'            => 'contact-right-topic',
    'description'   => 'Widget Area In The Right Topic Contact Page',
    'before_widget' => '<div class="contact-right-topic">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
  ));


  //RESOURCE CENTER WIDGETS
  //Resource Center- Hero Image Widget
  register_sidebar( array(
    'name'          => ('Resource Hero Image'),
    'id'            => 'resource-hero-image',
    'description'   => 'Hero image on resource page',
    'before_widget' => '<div class="resource-hero-image">',
    'after_widget'  => '</div>',
    'before_title'  => '<h1 class="widget-title">',
    'after_title'   => '</h1>'
  ));

  //Resource Center - Left Topic Widget
  register_sidebar( array(
    'name'          => ('Left Topic Resource'),
    'id'            => 'resource-left-topic',
    'description'   => 'Widget Area In The Left Topic Resource Page',
    'before_widget' => '<div class="resource-left-topic">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
  ));

  //Resource Center - Middle Topic Widget
  register_sidebar( array(
    'name'          => ('Middle Topic Resource'),
    'id'            => 'resource-middle-topic',
    'description'   => 'Widget Area In The Middle Topic Resource Page',
    'before_widget' => '<div class="resource-middle-topic">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
  ));

  //Resource Center - Right Topic Widget
  register_sidebar( array(
    'name'          => ('Right Topic Resource'),
    'id'            => 'resource-right-topic',
    'description'   => 'Widget Area In The Right Topic Resource Page',
    'before_widget' => '<div class="resource-right-topic">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
  ));

  //Resource Center - Left Topic Widget Two
  register_sidebar( array(
    'name'          => ('Left Topic Resource Two'),
    'id'            => 'resource-left-topic-two',
    'description'   => 'Second Widget Area In The Left Topic Resource Page',
    'before_widget' => '<div class="resource-left-topic-two">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
  ));

  //Resource Center - Middle Topic Widget Two
  register_sidebar( array(
    'name'          => ('Middle Topic Resource Two'),
    'id'            => 'resource-middle-topic-two',
    'description'   => 'Second Widget Area In The Middle Topic Resource Page',
    'before_widget' => '<div class="resource-middle-topic-two">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
  ));

  //Resource Center - Right Topic Widget Two
  register_sidebar( array(
    'name'          => ('Right Topic Resource Two'),
    'id'            => 'resource-right-topic-two',
    'description'   => 'Second Widget Area In The Right Topic Resource Page',
    'before_widget' => '<div class="resource-right-topic-two">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
  ));

  register_sidebar( array(
    'name'          => ('Button Widget One'),
    'id'            => 'button-widget-one',
    'description'   => 'Button widget one',
    'before_widget' => '<div class="button-widget-one">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
  ));

  register_sidebar( array(
    'name'          => ('Button Widget Two'),
    'id'            => 'button-widget-two',
    'description'   => 'Button widget two',
    'before_widget' => '<div class="button-widget-two">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
  ));

  //RESOURCE PAGE FEATURED POST WIDGET ONE
    register_sidebar( array(
      'name'          => ('Featured Post One'),
      'id'            => 'featured-post-one',
      'description'   => 'Featured post widget area in the blog page',
      'before_widget' => '<div class="featured-post-one">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>'
    ));

//RESOURCE PAGE FEATURED POST WIDGET TWO
    register_sidebar( array(
      'name'          => ('Featured Post Two'),
      'id'            => 'featured-post-two',
      'description'   => 'Featured post widget area in the blog page',
      'before_widget' => '<div class="featured-post-two">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>'
    ));

  //Single Post Blog Page-Bottom Right Topic Widget
  register_sidebar( array(
    'name'          => ('Blog Text'),
    'id'            => 'blog-text',
    'description'   => 'Text widget area on the single blog page',
    'before_widget' => '<div class="blog-text">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
  ));

  register_sidebar( array(
    'name'          => ('Button Blog'),
    'id'            => 'button-blog',
    'description'   => 'Button widget for single blog page',
    'before_widget' => '<div class="button-blog">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
  ));

  register_sidebar( array(
    'name'          => ('Button Blog Two'),
    'id'            => 'button-blog-two',
    'description'   => 'Button widget two for single blog page',
    'before_widget' => '<div class="button-blog-two">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
  ));

  //SIDEBAR
  register_sidebar( array(
    'name'          => ('Sidebar'),
    'id'            => 'sidebar',
    'description'   => 'Sidebar widget area in the blog post page',
    'before_widget' => '<div class="widget-sidebar">',
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


//CUSTOMIZATION AREAS
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
