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
            <?php
                if(have_posts()){
                    while(have_posts()){
                        the_post();?>
                        <div class="row featured one">
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <?php the_post_thumbnail('thumb'); ?>
                            <?php the_excerpt(); ?>
                           <p><?php echo "Published: " . get_the_date(); ?></p>
                           <p><?php echo "Article written by: " . get_the_author(); ?></p>
                        </div>

                        <div class="row featured two">
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
