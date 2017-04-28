<header class="banner">
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">
          <img src="<?= get_template_directory_uri(); ?>/assets/images/logo.png" alt="">
        </a>
      </div>
      <?php
        $main_menu = array(
          'menu_class' => 'nav navbar-nav',
          'theme_location' => 'gssweb-primery-menu'
        );
        if ( has_nav_menu( 'gssweb-primery-menu' ) ) { wp_nav_menu( $main_menu ); }
        else { wp_nav_menu(); }
      ?>
    </div>
  </nav>
</header>
