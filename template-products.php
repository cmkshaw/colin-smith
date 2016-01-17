<?php
/**
 * Template Name: Products Template
 */
?>
<div class="page-header">
	<h1><?php the_title() ;?></h1>
</div>

	<?php 

	$productCategory = get_field('product_category');

	$loop = new WP_Query( array( 'post_type' => 'product', 'posts_per_page' => -1, 'category_name' => $productCategory ) ); ?>
	<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
	
		<h2><?php the_title() ;?></h2>
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
<?php endwhile; wp_reset_query(); ?>

<?php get_template_part('templates/widget-product'); ?>