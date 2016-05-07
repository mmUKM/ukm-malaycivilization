<?php get_header(); ?>

<div class="uk-container uk-margin-top">
  <article class="uk-article">
    <?php while( have_posts() ) : the_post(); ?>

    <?php the_title( '<h1 class="uk-article-title">', '</h1>' ); ?>

    <?php the_content(); ?>

    <?php endwhile; ?>
  </article>
</div>

<?php get_footer(); ?>