<?php /*Template Name: Home Page Template*/?>
<?php get_header(); ?>

<div class="container">
<!--Hero Image Section-->
  <div class="row">
    <div class="twelve columns">
      <?php dynamic_sidebar('hero-image'); ?>
    </div>
  </div>

<!--Icon Section-->

<!--Vector Gen Approach Section-->
  <div class="row">
    <div class="twelve columns">
      <?php dynamic_sidebar('vector-gen-approach'); ?>
    </div>
  </div>

<!--Topics Section-->
  <div class="row interior-pages">
    <div class="one-third column">
      <?php dynamic_sidebar('left-topic-home'); ?>
    </div>

    <div class="one-third column">
      <?php dynamic_sidebar('middle-topic-home'); ?>
    </div>

    <div class="one-third column">
      <?php dynamic_sidebar('right-topic-home'); ?>
    </div>

  </div>

  <!--Newsletter Sign Up Section-->
    <div class="row">
      <div class="twelve columns">
        <?php dynamic_sidebar('newsletter-sign-up'); ?>
      </div>
    </div>

  <!--Logos-->

</div>

<?php get_footer(); ?>
