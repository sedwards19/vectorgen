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

      <div class="row">
      <?php
      if(have_posts()){
          while(have_posts()){
              the_post();?>
              <div class="one-half column posts">
                  <?php the_post_thumbnail('thumb'); ?>
                  <p><?php echo "Published: " . get_the_date(); ?></p>
                  <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                  <?php the_excerpt(); ?>
              </div>
            <?php        }// this ends the while loop
      }// this ends the if statement
  ?>
    </div>

</div>

<?php get_footer(); ?>
