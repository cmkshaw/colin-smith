

<div class="breadcrumb">
	<?php 
	// if there is a parent, display the link
	$parent_title = get_the_title( $post->post_parent );
	if ( $parent_title != the_title( ' ', ' ', false ) ) {
		echo '<a href="' . get_permalink( $post->post_parent ) . '" title="' . $parent_title . '">' . $parent_title . '</a> » ';
	} 
	// then go on to the current page link
	?>
	<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
	<?php the_title(); ?></a> »
</div>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<h2><?php the_title() ;?></h2>
	<?php the_category(); ?> 
	<?php the_post_thumbnail(); ?>
	<?php the_content(); ?>

<?php endwhile; else: ?>

	<p>Sorry, no posts to list</p>

<?php endif; ?>


<?php query_posts( array(
     'post_type' => array( 'product' ),
     'showposts' => 3,
     'orderby' => 'rand' )
     ); ?>
		<?php while ( have_posts() ) : the_post(); ?>

		<div class="post_type">
	
		</div>

		<a href="<?php the_permalink(); ?> "><?php the_title(); ?></a>

		<div class="excerpt">
		<?php echo get_the_excerpt(); ?>
		</div>

<?php endwhile; ?>