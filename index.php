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
      <div class="row">
      <?php
          if(have_posts()){
              while(have_posts()){
                  the_post();?>
                  <div class="one-half column one">
                      <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                      <?php the_post_thumbnail('thumb'); ?>
                      <?php the_excerpt(); ?>
                     <p><?php echo "Published: " . get_the_date(); ?></p>
                     <p><?php echo "Article written by: " . get_the_author(); ?></p>
                  </div>

                  <div class="one-half column two">
                      <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                      <?php the_post_thumbnail('thumb'); ?>
                      <?php the_excerpt(); ?>
                     <p><?php echo "Published: " . get_the_date(); ?></p>
                     <p><?php echo "Article written by: " . get_the_author(); ?></p>
                  </div>
  <?php        }// this ends the while loop
          }// this ends the if statement
      ?>
      </div>
  </div>

</div>

<?php get_footer(); ?>
