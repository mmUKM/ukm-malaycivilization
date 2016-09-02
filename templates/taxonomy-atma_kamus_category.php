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
      $paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
      $query = new WP_Query( array(
        'post_type'           => 'atma_kamus',
        'atma_kamus_category' => get_query_var( 'atma_kamus_category' ),
        'posts_per_page'      => 20,
        'paged'               => $paged,
        'order'               => 'ASC'
      ));
    ?>
    <ul class="data-content-list">
    <?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
      <li class="col padding">
        <div class="lg-10">
          <?php the_title( '<h3>', '</h3>' ); ?>
          <div class="kamus-category-description">
            <em><?php echo get_post_meta( get_the_ID(), '_atma_kamus_es_desc', true ); ?></em>
          </div>
        </div>
        <div class="lg-2"><a class="data-content-detail-link" href="<?php echo get_permalink(); ?>"><?php _e( 'Detail', 'atma' ); ?></a></div>
      </li>
      <?php endwhile;else: ?>

      <?php endif; ?>
    </ul>
      <div class="uk-clearfix padding">
        <?php
        global $wp_query;

        $big = 999999999; // need an unlikely integer
        echo paginate_links( array(
            'base'    => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'format'  => '?paged=%#%',
            'current' => max( 1, get_query_var('paged') ),
            'total'   => $wp_query->max_num_pages,
        ) );
        ?>
      </div>
    </div>
  </article>
</div>

<?php get_footer(); ?>