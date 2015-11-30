<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <header>
      <h1 class="entry-title"><?php the_title(); ?></h1>
      <?php get_template_part('templates/entry-meta'); ?>
    </header>
    <div class="entry-content">
      <?php the_content(); ?>
    </div>
    <footer>
      <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
    </footer>
    <?php comments_template('/templates/comments.php'); ?>
  </article>
<?php endwhile; ?>

<?php query_posts( array(
     'post_type' => array( 'table', 'dresser', 'table' ),
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