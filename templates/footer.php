<footer class="content-info">

  
  <?php 
   	if ( is_page_template('template-products.php') || is_singular('product')  ) {
  		get_template_part('templates/widget-product');
  	}
  ?>
  <div class="container copyright">
    <ul class="social social-footer show-mobile">
      <li class="social-instagram"><a href="http://instagram.com/colinsmithwoodworking">Instagram</a></li>
      <li class="social-facebook"><a href="https://www.facebook.com/colinsmithwoodworking">Facebook</a></li>
      <li class="social-email"><a href="mailto:info@colinsmithwoodworking.com">Email</a></li>
    </ul>
    &copy; Colin Smith Woodworking <?php echo date("Y"); ?>
    <a class="pull-right hide-mobile" href="/sitemap">Sitemap</a>
  </div>
</footer>
