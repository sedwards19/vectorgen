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
        <div class="twelve columns">
            <?php dynamic_sidebar('invest-left-icon'); ?>
        </div>

        <div class="twelve columns">
            <?php dynamic_sidebar('invest-middle-icon'); ?>
        </div>

        <div class="twelve columns">
            <?php dynamic_sidebar('invest-right-icon'); ?>
        </div>
    </div>

<!--Budget & Timeline Section-->
    <div class="row">
        <div class="twelve columns">
            <?php dynamic_sidebar('budget-timelime'); ?>
        </div>
    </div>

<!--Returns & Projections Section-->
    <div class="row">
        <div class="twelve columns">
            <?php dynamic_sidebar('returns-projections'); ?>
        </div>
    </div>
    
<!--Become an Investor Section-->
    <div class="row">
        <div class="twelve columns">
            <?php dynamic_sidebar('become-investor'); ?>
        </div>
    </div>

</div>

<?php get_footer(); ?>