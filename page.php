<?php get_header(); ?>

<div class="wrapper">
  <article class="padding">
    <?php while( have_posts() ) : the_post(); ?>

    <?php the_title( '<h1>', '</h1>' ); ?>

    <?php the_content(); ?>

    <?php endwhile; ?>
  </article>
</div>

<?php get_footer(); ?>