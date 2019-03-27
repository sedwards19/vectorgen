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
          <h2 class="additional-resources-two">DATA & INFORMATION</h2>
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

  <div class="row interior-pages resource-two">
      <div class="one-third column resource-two">
          <?php dynamic_sidebar('resource-left-topic-two'); ?>
      </div>

      <div class="one-third column resource-two">
          <?php dynamic_sidebar('resource-middle-topic-two'); ?>
      </div>

      <div class="one-third column resource-two">
          <?php dynamic_sidebar('resource-right-topic-two'); ?>
      </div>
  </div>

  <div class="container">
      <div class="row topics">
      <?php
          if(have_posts()){
              while(have_posts()){
                  the_post();?>
                  <div class="one-half column one">
                      <?php the_post_thumbnail('thumb'); ?>
                      <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                      <?php the_excerpt(); ?>
                     <p><?php echo "Published: " . get_the_date(); ?></p>
                     <?php dynamic_sidebar('button-widget-one'); ?>
                  </div>

                  <div class="one-half column two">
                      <?php the_post_thumbnail('thumb'); ?>
                      <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                      <?php the_excerpt(); ?>
                     <p><?php echo "Published: " . get_the_date(); ?></p>
                     <?php dynamic_sidebar('button-widget-two'); ?>
                  </div>
  <?php        }// this ends the while loop
          }// this ends the if statement
      ?>
      </div>
  </div>

</div>

<?php get_footer(); ?>
