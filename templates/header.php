<header class="banner clearfix">
  <div class="container">
  <ul class="social header-social">
    <li class="social-instagram"><a href="http://instagram.com/colinsmithwoodworking">Instagram</a></li>
    <li class="social-facebook"><a href="https://www.facebook.com/colinsmithwoodworking">Facebook</a></li>
    <li class="social-email"><a href="mailto:info@colinsmithwoodworking.com">Email</a></li>
  </ul>
    <a class="brand" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
    <nav class="nav-primary">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
      endif;
      ?>
    </nav>
  </div>
</header>
