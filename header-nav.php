<?php
/**
 * The Header for our theme.
 *
 * Displays the navigation menu
 *
 * @package Flint
 * @sub-package Freshly Cut
 * @since 0.1
 */
?>

  <nav class="canvas navbar navbar-inverse navbar-fixed-top" role="navigation">
    <h1 class="screen-reader-text"><?php _e( 'Menu', 'flint' ); ?></h1>
    <div class="screen-reader-text skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'flint' ); ?>"><?php _e( 'Skip to content', 'flint' ); ?></a></div>
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand visible-xs" href="<?php echo esc_url( home_url() ); ?>"><?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?></a>
      </div><!-- .navbar-header -->
      
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse navbar-ex1-collapse">
        <?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => false, 'menu_class' => 'nav navbar-nav', 'fallback_cb' => false, 'walker' => new Flint_Bootstrap_Menu ) ); ?>
      </div><!-- .navbar-collapse -->
    </div><!-- .container -->
  </nav><!-- .navbar -->