<?php /*Template Name: Main Blog Page - Resource Center*/ ?>

<?php get_header(); ?>

<div class="container">

<!--Hero Image Section-->
  <div class="row">
    <div class="twelve columns">
      <?php dynamic_sidebar('resource-hero-image'); ?>
    </div>
  </div>

  <div class="row">
      <div class="twelve columns">
          <h3 class="additional-resources-two">DATA & INFORMATION</h3>
      </div>
  </div>
  <!--Topics Section-->
      <div class="resource-topics-container">
          <div class="square">
            <div class="content">
              <?php dynamic_sidebar('top-left-topic-resource'); ?>
            </div>
          </div>

          <div class="square">
            <div class="content">
              <?php dynamic_sidebar('top-middle-topic-resource'); ?>
            </div>
          </div>

          <div class="square">
            <div class="content">
              <?php dynamic_sidebar('top-right-topic-resource'); ?>
            </div>
          </div>
      </div>

      <div class="resource-topics-container-two">
          <div class="square">
            <div class="content">
              <?php dynamic_sidebar('bottom-left-topic-resource'); ?>
            </div>
          </div>

          <div class="square">
            <div class="content">
              <?php dynamic_sidebar('bottom-middle-topic-resource'); ?>
            </div>
          </div>

          <div class="square">
            <div class="content">
              <?php dynamic_sidebar('bottom-right-topic-resource'); ?>
            </div>
          </div>
      </div>

<!-- Featured Posts -->
      <div class="row blog-topics-container">
        <div class="one-half column">
        <!--  <div class="blog-square"> -->
              <?php dynamic_sidebar('featured-post-one'); ?>
          </div>

          <div class="one-half column">
      <!--      <div class="post-content"> -->
              <?php dynamic_sidebar('featured-post-two'); ?>
          </div>
      </div>

</div>

<?php get_footer(); ?>
