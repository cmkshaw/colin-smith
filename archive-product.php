<div class="page-header">
<h1>Woodworking</h1>
</div>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php
		$category = get_the_category(); 
		$cat = $category[0]->cat_name;
		$catlink = strtolower($cat) .'s';
	?>
	<a href="/<?php echo $catlink; ?>"><h2><?php the_title() ;?></h2></a>
	<?php the_content(); ?>
	

<?php endwhile; else: ?>

	<p>Sorry, no posts to list</p>

<?php endif; ?>
