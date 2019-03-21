<?php /*Template Name: Example Blog Post*/
get_header(); ?>

<div class="container">

<Title-->
<div class="row">
    <div class="twelve columns">
        <h3 class="blog-title">TITLE</h3>
    </div>
</div>


<!-- SIDEBAR -->

    <div class="blog-topics-container">
        <?php dynamic_sidebar('sidebar'); ?>
    </div>


<!-- RECOMMENDED FOR YOU -->

<div class="row">
    <div class="twelve columns">
        <h3 class="blog-title">RECOMMENDED FOR YOU</h3>
    </div>
</div>
  <!--Blog Topics Section-->
      <div class="blog-topics-container">
          <div class="blog-square">
            <div class="blog-content">
              <?php dynamic_sidebar('blog-left-topic'); ?>
            </div>
          </div>

          <div class="blog-square">
            <div class="blog-content">
              <?php dynamic_sidebar('blog-middle-topic'); ?>
            </div>
          </div>

          <div class="blog-square">
            <div class="blog-content">
              <?php dynamic_sidebar('blog-right-topic'); ?>
            </div>
          </div>
      </div>




<?php get_footer(); ?>
