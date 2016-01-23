<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-56430108-1', 'auto');
  ga('send', 'pageview');

</script>
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

<?php 
  if ( is_page_template('template-products.php') || is_singular('product') ) {
?>
<div class="breadcrumb green show-mobile">
  <div class="wrap container">
   <a href="/" rel="bookmark" title="Home"> &lsaquo; Back to Home</a>
  </div>
</div>
<?php } ?>
