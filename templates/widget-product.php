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