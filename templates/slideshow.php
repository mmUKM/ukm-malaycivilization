<?php
$query = new WP_Query(
  array(
    'post_type' => 'atma_slideshow',
    'posts_per_page'  => -1
) );
?>
<div class="uk-clearfix uk-slidenav-position" data-uk-slideshow="{animation:'slice-up-down', autoplay:true, autoplayInterval:7000}">
    <ul class="uk-slideshow">
      <?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
      <li>
        <a href="<?php echo get_post_meta( get_the_ID(),'_atma_slideshow_url', true ); ?>">
          <img src="<?php echo get_post_meta( get_the_ID(),'_atma_slideshow_image', true ); ?>" alt="<?php the_title(); ?>" style="width: 100%;">
        </a>
      </li>
      <?php endwhile; else: ?>
      <li><img src="<?php echo get_template_directory_uri() . '/img/placeholder-slideshow.jpg'; ?>" alt="Slideshow Placeholder Image" style="width: 100%;"></li>
      <?php endif; ?>
    </ul>
    <a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slideshow-item="previous"></a>
    <a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slideshow-item="next"></a>
</div>