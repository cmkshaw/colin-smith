<footer class="content-info">
  <div class="container">
    <?php dynamic_sidebar('sidebar-footer'); ?>
  </div>
  <?php 
   	if ( is_page_template('template-products.php') || is_singular('product')  ) {
  		get_template_part('templates/widget-product');
  	}
  ?>
  <div class="container copyright">
    &copy; Colin Smith Woodworking <?php echo date("Y"); ?>
    <a class="pull-right" href="/sitemap">Sitemap</a>
  </div>
</footer>
