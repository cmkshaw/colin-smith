
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="page-header">
		<h1><?php the_title() ;?></h1>
	</div>
	<div class="clearfix"></div>

	<?php
		$image = get_field('product_image_main');
		$image1 = get_field('secondary_product_image_1');
		$image2 = get_field('secondary_product_image_2');
	?>

	<div class="product-image image-main">
		<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
		<?php the_content(); ?>
	</div>

	<div class="product-image image-second">
		<img src="<?php echo $image1['url']; ?>" alt="<?php echo $image1['alt']; ?>" />
		<img src="<?php echo $image2['url']; ?>" alt="<?php echo $image2['alt']; ?>" />
	</div>

	<div class="clearfix"></div>
	<p><?php echo $additonal; ?></p>


<?php endwhile; else: ?>

	<p>Sorry, no posts to list</p>

<?php endif; ?>
