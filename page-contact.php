<?php /*Template Name: Contact Page Template*/?>

<?php get_header(); ?>

<div class="container">
    
<!--Hero Image Section-->
    <div class="row">
        <div class="twelve columns">
            <?php dynamic_sidebar('contact-hero-image'); ?>
        </div>
    </div>

<!--Contact Form Section-->
    <div class="row">
        <div class="twelve columns">
            <?php dynamic_sidebar('contact-form'); ?>
        </div>
    </div>

<!--Additional Resources Section-->
    <div class="row interior-pages">
        <div class="twelve columns">
            <?php dynamic_sidebar('left-topic-contact'); ?>
        </div>

        <div class="twelve columns">
            <?php dynamic_sidebar('middle-topic-contact'); ?>
        </div>

        <div class="twelve columns">
            <?php dynamic_sidebar('right-topic-contact'); ?>
        </div>
    </div>

<!--Newsletter Sign Up Section-->
    <div class="row">
        <div class="twelve columns">
            <?php dynamic_sidebar('newsletter-sign-up'); ?>
        </div>
    </div>

</div>

<?php get_footer(); ?>