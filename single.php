<?php /*Template Name: Example Blog Post*/
get_header(); ?>

<div class="container">

<!--Hero Image Section-->
  <div class="row">
    <div class="twelve columns">
      <?php dynamic_sidebar('blog-hero-image'); ?>
    </div>
  </div>

  <!--Blog Topics Section-->
      <div class="blog-topics-container">
          <div class="square">
            <div class="content">
              <?php dynamic_sidebar('blog-left-topic-resource'); ?>
            </div>
          </div>

          <div class="square">
            <div class="content">
              <?php dynamic_sidebar('blog-middle-topic-resource'); ?>
            </div>
          </div>

          <div class="square">
            <div class="content">
              <?php dynamic_sidebar('blog-right-topic-resource'); ?>
            </div>
          </div>
      </div>


<?php get_sidebar(); ?>
<?php get_footer(); ?>
