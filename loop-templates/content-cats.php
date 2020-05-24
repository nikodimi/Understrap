<?php
/**
 * Template for the cat-cards
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<?php $image = get_field('cats_image'); ?>

<div class="col-12 col-md-4 col-lg-4 mt-4 cat-card">
  <div class="card">
    <a href="<?php the_permalink(); ?>">
      <img class="card-img-top" src="<?php echo esc_url($image['url']); ?>" /></a>
    <div class="card-block text-center">
      <a href="<?php the_permalink(); ?>">
        <h4 class="card-title"><?php the_field('cats_name'); ?></h4>
      </a>
      <div class="card-text">
        <p class="card-gender"><?php echo get_the_term_list($post->ID, 'gender') ?></p>
      </div>
    </div>
    <div class="card-footer">
      <span class="float-right"><?php the_field('cats_adopted'); ?></span>
      <span>Adopted:</span>
    </div>
  </div>
</div>