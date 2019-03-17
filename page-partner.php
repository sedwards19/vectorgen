<?php /*Template Name: Partner Page Template*/?>

<?php get_header(); ?>

<div class="container">

<!-- Image + Partner Info Section-->
    <div class="row">
        <div class="one-half column">
            <?php dynamic_sidebar('partner-image'); ?>
        </div>

        <div class="one-half column">
            <?php dynamic_sidebar('partner-text'); ?>
        </div>
    </div>

<!--Partner Logos-->
    <div class="row interior-pages">
      <div class="three columns">
        <?php dynamic_sidebar('far-left-logo'); ?>
      </div>

      <div class="three columns">
        <?php dynamic_sidebar('left-logo'); ?>
      </div>

      <div class="three columns">
        <?php dynamic_sidebar('right-logo'); ?>
      </div>

      <div class="three columns">
        <?php dynamic_sidebar('far-right-logo'); ?>
      </div>
    </div>

<!--Our Research Section-->
      <div class="row">
        <div class="twelve columns">
          <?php dynamic_sidebar('our-research'); ?>
        </div>
      </div>

<!--Our Partner Bios Section-->
    <div class="row interior-pages">

      <div class="one-third column">
        <?php dynamic_sidebar('left-partner-bio'); ?>
      </div>

      <div class="one-third column">
        <?php dynamic_sidebar('right-partner-bio'); ?>
      </div>
    </div>

<!--Ready To Join Section-->
      <div class="row">
        <div class="twelve columns">
          <?php dynamic_sidebar('ready-to-join'); ?>
        </div>
      </div>

  </div>

  <?php get_footer(); ?>
