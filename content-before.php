<header class="post-title">
  <?php while( have_posts() ) : the_post(); ?>
    <?php the_title( '<h1>', '</h1>' ); ?>
  <?php endwhile; ?>
</header>