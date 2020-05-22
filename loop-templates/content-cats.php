<?php $image = get_field('cats_image'); ?>


<div class="col-12 col-md-6 col-lg-4 mb-4">
  <div class="card text-center">
    <div class="image">
      <a href="<?php the_permalink(); ?>"><img src="<?php echo esc_url($image['url']); ?>" /></a>
    </div>
    <div class="card-inner">
      <div class="header">
        <h2><?php the_field('cats_name'); ?></h2>
      </div>
      <div class="content">
        <p><?php echo get_the_term_list($post->ID, 'gender') ?></p>
      </div>
    </div>
  </div>
</div>