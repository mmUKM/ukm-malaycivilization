<?php
/**
 * @package ATMA
 * @subpackage malaycivilization
 */

get_header(); ?>

<div class="uk-clearfix wrapper">
  <article class="padding col">
    <h1><?php single_cat_title(); ?></h1>
    <div class="lg-3">
      <?php get_template_part( 'templates/nav', 'database' ); ?>
    </div>
    <div class="lg-9 padding-left">
    <?php
      $query = new WP_Query( array(
        'post_type'       => array( 'atma_buku', 'atma_resepi' ),
        'atma_database'   => get_query_var( 'atma_database' ),
        'posts_per_page'  => -1,
        'order'           => 'ASC'
      ));
    ?>
    <ul class="data-content-list">
    <?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
      <li class="col">
        <div class="lg-10"><?php the_title( '<h3>', '</h3>' ); ?></div>
        <div class="lg-2"><a class="data-content-detail-link" href="<?php echo get_permalink(); ?>"><?php _e( 'Detail', 'atma' ); ?></a></div>
      </li>
      <?php endwhile;else: ?>

      <?php endif; ?>
    </ul>
    </div>
  </article>
</div>

<?php get_footer(); ?>
