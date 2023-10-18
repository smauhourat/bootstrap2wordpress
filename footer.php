<?php
/**
 * The Footer file
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bootstrap2wordpress
 * @since Bootstrap to WordPress 2.0
 */
?>

  <footer>
    <div class="footer-calltoaction text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-8 offset-md-2 overflow-hidden">
            <p class="sub-title"><?php echo wp_kses_post( get_theme_mod( 'pre_footer_title', 'Join the course....' ) ); ?></p>
            <h2>Bootstrap to WordPress 2.01</h2>
            <p>Learn how to design and build custom, beautiful & responsive WordPress websites and themes for beginners in 2021 and beyond!</p>
            <a href="#" class="btn btn-primary">Join now -&gt;</a>
          </div>
        </div>
      </div>
    </div>
    <div class="copyright text-center">
      <p>&copy; <?php echo wp_kses_post( get_theme_mod( 'footer_copyright', 'Propiedad de Adhentux' ) ); ?></p>
    </div>
  </footer>

  <?php wp_footer(); ?>

</body>

</html>