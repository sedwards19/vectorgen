<footer>
  <div class="container">
    <div class="row">
      <div class="one-third column">
        <?php dynamic_sidebar('left-footer');?>
      </div>

      <div class="one-third column">
        <?php dynamic_sidebar('middle-footer');?>
      </div>

      <div class="one-third column">
        <?php wp_nav_menu(array (
          'theme_location' => 'footer-menu',
          'container-class' => 'menu-footer'
        ));
        ?>
      </div>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
