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


<!-- RECOMMENDED FOR YOU -->

<div class="row">
    <div class="twelve columns">
        <h3 class="blog-title">RECOMMENDED FOR YOU</h3>
    </div>
</div>
  <!--Blog Topics Section-->
      <div class="row blog-topics">
            <div class="one-third column blog">
              <?php dynamic_sidebar('blog-left-topic'); ?>
            </div>


            <div class="one-third column blog">
              <?php dynamic_sidebar('blog-middle-topic'); ?>
            </div>



            <div class="one-third column blog">
              <?php dynamic_sidebar('blog-right-topic'); ?>
            </div>

      </div>




<?php get_footer(); ?>
