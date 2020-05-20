<?php $image = get_field('cats_image'); ?>

<!-- <div class="card col-12 col-md-6 col-lg-4">
    <img class="card-img-top" src="<?php echo esc_url($image['url']); ?>">
  <div class="card-body">
    <h5 class="card-title"><a id="cats-link-<?php the_ID(); ?>" href="<?php the_permalink(); ?>"><?php the_field('cats_name'); ?></a></h5>
    <p class="card-text"><?php the_field('cats_gender'); ?></p>
  </div>
</div> -->

<div class="col-sm-4">
  <div class="card text-center">
    <div class="image">
      <a href="<?php the_permalink(); ?>"><img src="<?php echo esc_url($image['url']); ?>" /></a>
    </div>
    <div class="card-inner">
      <div class="header">
        <h2><?php the_field('cats_name'); ?></h2>
      </div>
      <div class="content">
        <p><?php the_field('cats_gender'); ?></p>
    </div>
      </div>
  </div>
</div>