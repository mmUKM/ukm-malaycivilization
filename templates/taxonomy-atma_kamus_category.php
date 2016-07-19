<?php
/**
 * @package ATMA
 * @subpackage malaycivilization
 */

get_header(); ?>

<div class="wrapper">
  <article class="padding">
    <h1><?php single_cat_title(); ?></h1>
    <div class="large-3-12">
      <?php get_template_part( 'templates/nav', 'database' ); ?>
    </div>
    <div class="large-9-12">
    <?php
      $query = new WP_Query( array(
        'post_type'           => 'atma_kamus',
        'atma_kamus_category' => get_query_var( 'atma_kamus_category' ),
        'posts_per_page'      => -1,
        'order'               => 'ASC'
      ));
    ?>
    <ul class="kamus-list">
    <?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
      <li class="column">
        <div class="large-10-12"><?php the_title( '<h3>', '</h3>' ); ?></div>
        <div class="large-2-12"><a class="kamus-detail-link" href="<?php echo get_permalink(); ?>"><?php _e( 'Detail', 'atma' ); ?></a></div>
      </li>
      <?php endwhile;else: ?>

      <?php endif; ?>
    </ul>
    </div>
  </article>
</div>

<?php get_footer(); ?>
