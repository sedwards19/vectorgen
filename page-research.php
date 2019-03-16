<?php /*Template Name: Research Page Template*/?>

<?php get_header(); ?>

<div class="container">

<!--Hero Image Section-->
    <div class="row">
        <div class="twelve columns">
            <?php dynamic_sidebar('research-hero-image'); ?>
        </div>
    </div>

<!--Global Crisis Section-->
    <div class="row">
        <div class="twelve columns">
            <?php dynamic_sidebar('global-crisis'); ?>
        </div>
    </div>

<!--Icon Section-->
    <div class="row">
        <div class="twelve columns">
            <h3>Did You Know?</h3>
        </div>
    </div>

    <div class="row">
        <div class="three columns">
            <?php dynamic_sidebar('research-icon-one'); ?>
        </div>

        <div class="three columns">
            <?php dynamic_sidebar('research-icon-two'); ?>
        </div>

        <div class="three columns">
            <?php dynamic_sidebar('research-icon-three'); ?>
        </div>

        <div class="three columns">
            <?php dynamic_sidebar('research-icon-four'); ?>
        </div>
    </div>

<!--Large Image + Content Grid Section-->
    <div class="row">
        <div class="six columns">
            <?php dynamic_sidebar('research-combating-hiv'); ?>
        </div>

        <div class="six columns">
            <?php dynamic_sidebar('research-large-image-one'); ?>
        </div>
    </div>

    <div class="row">
        <div class="six columns">
            <?php dynamic_sidebar('research-large-image-two'); ?>
        </div>

        <div class="six columns">
            <?php dynamic_sidebar('research-vectorgen-approach'); ?>
        </div>
    </div>

<!--Future of Vectors and Gene Therapy Section-->
    <div class="row">
        <div class="twelve columns">
            <?php dynamic_sidebar('future'); ?>
        </div>
    </div>

</div>

<?php get_footer(); ?>
