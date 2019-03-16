<?php /*Template Name: Main Blog Page - Resource Center*/

get_header(); ?>

<div class="container">

<!--Hero Image Section-->
  <div class="row">
    <div class="twelve columns">
      <?php dynamic_sidebar('resource-hero-image'); ?>
    </div>
  </div>


  <!--Topics Section-->
      <div class="row interior-pages">
          <div class="one-third column">
              <?php dynamic_sidebar('top-left-topic-resource'); ?>
          </div>

          <div class="one-third column">
              <?php dynamic_sidebar('top-middle-topic-resource'); ?>
          </div>

          <div class="one-third column">
              <?php dynamic_sidebar('top-right-topic-resource'); ?>
          </div>
      </div>

      <div class="row interior-pages">
          <div class="one-third column">
              <?php dynamic_sidebar('bottom-left-topic-resource'); ?>
          </div>

          <div class="one-third column">
              <?php dynamic_sidebar('bottom-middle-topic-resource'); ?>
          </div>

          <div class="one-third column">
              <?php dynamic_sidebar('bottom-right-topic-resource'); ?>
          </div>
      </div>

    </div>

<?php get_footer(); ?>
