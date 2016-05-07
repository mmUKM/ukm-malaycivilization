<?php
$query = new WP_Query(
  array(
    'post_type' => 'mcv_slideshow',
    'posts_per_page'  => -1
) );
?>
<div class="uk-slidenav-position" data-uk-slideshow>
    <ul class="uk-slideshow">
      <?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
      <li><img src="<?php echo get_post_meta( get_the_ID(),'_mcv_slideshow_image', true ); ?>" alt="<?php the_title(); ?>" style="width: 100%;"></li>
      <?php endwhile; else: ?>
      <li><img src="<?php echo get_template_directory_uri() . '/img/placeholder-slideshow.jpg'; ?>" alt="Slideshow Placeholder Image" style="width: 100%;"></li>
      <?php endif; ?>
    </ul>
    <a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slideshow-item="previous"></a>
    <a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slideshow-item="next"></a>
</div>