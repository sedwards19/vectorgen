<?php /*Template Name: Example Blog Post*/
get_header(); ?>

<div class="container">

<!-- Blog Text Block Section -->
    <div class="row">
        <div class="two-thirds column single">
            <?php dynamic_sidebar('blog-text'); ?>
        </div>
        <div class="one-third column sidebar single">
          <!-- sidebar -->
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>

  <!--RECOMMENDED FOR YOU-->
  <div class="row">
      <div class="twelve columns">
          <h3 class="blog-title">RECOMMENDED FOR YOU</h3>
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



<?php get_footer(); ?>
