<?php /*Template Name: Invest Page Template*/?>
<?php get_header(); ?>

<div class="container">
<!--Hero Image Section-->
    <div class="row">
        <div class="twelve columns">
            <?php dynamic_sidebar('invest-hero-image'); ?>
        </div>
    </div>

<!--Vector Gen Approach Section-->
    <div class="row">
        <div class="twelve columns">
            <?php dynamic_sidebar('invest-vector-gen-approach'); ?>
        </div>
    </div>

<!--Investment Potential Section-->
    <div class="row">
        <div class="one-third column">
            <?php dynamic_sidebar('invest-left-icon'); ?>
        </div>

        <div class="one-third column">
            <?php dynamic_sidebar('invest-middle-icon'); ?>
        </div>

        <div class="one-third column">
            <?php dynamic_sidebar('invest-right-icon'); ?>
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
