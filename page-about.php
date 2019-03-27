<?php /*Template Name: About Page Template*/?>

<?php get_header(); ?>

<div class="container">

<!-- Image + About Info Section-->
    <div class="row">
        <div class="one-half column">
            <?php dynamic_sidebar('about-image'); ?>
        </div>

        <div class="one-half column about-text">
            <?php dynamic_sidebar('about-discover'); ?>
        </div>
    </div>

<!--Our Mission Section-->
    <div class="row">
        <div class="twelve columns">
          <?php dynamic_sidebar('our-mission'); ?>
        </div>
    </div>

<!--Our Executive Team Section-->
    <div class="row interior-pages exec-home">
      <div class="twelve columns">
          <h3 class="exec-h3">OUR EXECUTIVE TEAM</h3>
      </div>
    </div>

    <div class="row interior-pages">
      <div class="one-third column">
        <?php dynamic_sidebar('left-bio'); ?>
      </div>

      <div class="one-third column">
        <?php dynamic_sidebar('middle-bio'); ?>
      </div>

      <div class="one-third column">
        <?php dynamic_sidebar('right-bio'); ?>
      </div>
    </div>

<!--Our Core Values Section-->
        <div class="row">
            <div class="twelve columns">
              <?php dynamic_sidebar('our-values'); ?>
            </div>
        </div>

  </div>

  <?php get_footer(); ?>
