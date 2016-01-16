

<div class="breadcrumb">
	<a href="/" rel="bookmark" title="Home">Back to Home</a>
</div>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<h2><?php the_title() ;?></h2>
	<?php the_category(); ?> 
	<?php the_post_thumbnail(); ?>
	<?php the_content(); ?>

<?php endwhile; else: ?>

	<p>Sorry, no posts to list</p>

<?php endif; ?>


<?php get_template_part('templates/widget-product'); ?>