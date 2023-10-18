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

    <?php if ( get_theme_mod('footer_calltoaction_visibility' )) { ?>
    <div class="footer-calltoaction text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-8 offset-md-2 overflow-hidden">
            <p class="sub-title"><?php echo wp_kses_post( get_theme_mod( 'footer_subheading', 'Join the course....' ) ); ?></p>
            <h2><?php echo wp_kses_post( get_theme_mod( 'footer_heading', 'Bootstrap to WordPress 2.0' ) ); ?></h2>
            <p class="fcta-desc"><?php echo wp_kses_post( get_theme_mod( 'footer_calltoaction_desc', 'Learn how to design and build custom, beautiful & responsive WordPress websites and themes for beginners in 2021 and beyond!' ) ); ?></p>
            <a href="<?php echo wp_kses_post( get_theme_mod( 'footer_cta_link', '#' ) ); ?>" class="btn btn-primary"><?php echo wp_kses_post( get_theme_mod( 'footer_calltoaction_button', 'Join now -&gt;' ) ); ?></a>
          </div>
        </div>
      </div>
    </div>
  <?php } ?>
    <div class="copyright text-center">
      <p>&copy; <?php echo wp_kses_post( get_theme_mod( 'footer_copyright', 'Propiedad de Adhentux' ) ); ?></p>
    </div>
  </footer>

  <?php wp_footer(); ?>

</body>

</html>