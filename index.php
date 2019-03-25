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

  <div class="row interior-pages resource">
      <div class="one-third column resource">
          <?php dynamic_sidebar('resource-left-topic'); ?>
      </div>

      <div class="one-third column resource">
          <?php dynamic_sidebar('resource-middle-topic'); ?>
      </div>

      <div class="one-third column resource">
          <?php dynamic_sidebar('resource-right-topic'); ?>
      </div>
  </div>

  <div class="row interior-pages resource">
      <div class="one-third column resource">
          <?php dynamic_sidebar('resource-left-topic-two'); ?>
      </div>

      <div class="one-third column resource">
          <?php dynamic_sidebar('resource-middle-topic-two'); ?>
      </div>

      <div class="one-third column resource">
          <?php dynamic_sidebar('resource-right-topic-two'); ?>
      </div>
  </div>


<!-- Featured Posts -->
    <div class="row blog-topics-container">
          <div class="one-half column resource">
              <?php dynamic_sidebar('featured-post-one'); ?>
          </div>

          <div class="one-half column resource">
              <?php dynamic_sidebar('featured-post-two'); ?>
          </div>
    </div>
</div>

<?php get_footer(); ?>
