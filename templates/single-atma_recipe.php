<?php
/**
 * @package ATMA
 * @subpackage malaycivilization
 */

get_header(); ?>

<div class="uk-clearfix wrapper">
  <?php get_template_part( 'content', 'before' ); ?>
  <article class="padding col">
    <div class="lg-3">
      <?php get_template_part( 'templates/nav', 'database' ); ?>
    </div>
    <div class="lg-9 padding-left">
    <?php while( have_posts() ) : the_post(); ?>
    <div id="padat-ba-content">
      <img src="<?php echo get_post_meta( get_the_ID(), '_atma_recipe_thumbnail', true ); ?>" width="200" alt="">
      <table class="data-content">
        <tr>
          <td><strong>Title</strong></td>
          <td><?php the_title(); ?></td>
        </tr>
        <tr>
          <td><strong>Author</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_recipe_author', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Database</strong></td>
          <td><?php echo get_the_term_list( $post->ID, 'atma_database', '', ', ','' ); ?></td>
        </tr>
        <tr>
          <td><strong>Source</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_recipe_source', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Type of cuisine</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_recipe_cuisine', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Accession No</strong></td>
          <td><?php echo get_post_meta( get_the_ID(), '_atma_recipe_accession_no', true ); ?></td>
        </tr>
        <tr>
          <td><strong>Category</strong></td>
          <td><?php echo get_the_term_list( $post->ID, 'atma_recipe_category', '', '<br>', '' ); ?></td>
        </tr>
        <tr>
          <td><strong>Ingredients</strong></td>
          <td><?php echo wpautop ( get_post_meta( get_the_ID(), '_atma_recipe_bahan', true ) ); ?></td>
        </tr>
        <tr>
          <td><strong>Instruction</strong></td>
          <td><?php echo wpautop ( get_post_meta( get_the_ID(), '_atma_recipe_cara', true ) ); ?></td>
        </tr>
      </table>
    </div>
    <?php endwhile; ?>
    </div>
  </article>
</div>
<?php get_template_part( 'content', 'after' ); ?>
<?php get_footer(); ?>
