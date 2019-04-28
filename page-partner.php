<?php /*Template Name: Partner Page Template*/?>

<?php get_header(); ?>

<div class="container">

<!-- Image + Partner Info Section-->
    <div class="row partner image">
        <div class="one-half column">
            <?php dynamic_sidebar('partner-image'); ?>
        </div>

        <div class="one-half column partner-right">
            <?php dynamic_sidebar('partner-text'); ?>
        </div>
    </div>

<!--Partner Logos-->
    <div class="row interior-pages logos-home">
      <div class="three columns logos">
        <?php dynamic_sidebar('far-left-logo'); ?>
      </div>

      <div class="three columns logos">
        <?php dynamic_sidebar('left-logo'); ?>
      </div>

      <div class="three columns logos">
        <?php dynamic_sidebar('right-logo'); ?>
      </div>

      <div class="three columns logos">
        <?php dynamic_sidebar('far-right-logo'); ?>
      </div>
    </div>

<!--Our Research Section-->
      <div class="row">
        <div class="twelve columns research-text">
          <?php dynamic_sidebar('our-research'); ?>
        </div>
      </div>

<!--Our Partner Bios Section-->
    <div class="row interior-pages partner-bios">
      <div class="twelve columns">
          <h3 class="partner-h3">OUR PARTNERS</h3>
      </div>
    </div>

    <div class="row interior-pages">
      <div class="one-half column">
        <?php dynamic_sidebar('left-partner-bio'); ?>
      </div>

      <div class="one-half column">
        <?php dynamic_sidebar('right-partner-bio'); ?>
      </div>
    </div>


<!--Ready To Join Section-->
      <div class="row">
        <div class="twelve columns ready-to-join">
          <?php dynamic_sidebar('ready-to-join'); ?>
        </div>
      </div>

  </div>

  <?php get_footer(); ?>
