<?php /*Template Name: Contact Page Template*/?>

<?php get_header(); ?>

<div class="container">

<!--Hero Image + Contact Form Section-->
    <div class="row">
        <div class="one-half column">
            <?php dynamic_sidebar('contact-hero-image'); ?>
        </div>

        <div class="one-half column">
            <?php dynamic_sidebar('contact-form'); ?>
        </div>
    </div>

<!--Newsletter Sign Up Section-->
    <div class="row">
        <div class="twelve columns">
            <?php dynamic_sidebar('newsletter-sign-up'); ?>
        </div>
    </div>

<!--Additional Resources Section-->
    <div class="row">
        <div class="twelve columns">
            <h3>ADDITIONAL RESOURCES</h3>
        </div>
    </div>

    <div class="row interior-pages">
        <div class="one-third column">
            <?php dynamic_sidebar('contact-left-topic'); ?>
        </div>

        <div class="one-third column">
            <?php dynamic_sidebar('contact-middle-topic'); ?>
        </div>

        <div class="one-third column">
            <?php dynamic_sidebar('contact-right-topic'); ?>
        </div>
    </div>

</div>

<?php get_footer(); ?>
