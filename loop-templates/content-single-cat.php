<?php $image = get_field('cats_image'); ?>
    
<div class="image-container">
    <img class="cats-image" src="<?php echo esc_url($image['url']); ?>">
</div>
<div class="meta-box col-12">
    <h5>Name: <?php the_field('cats_name'); ?></h3>
    <p>Description: <?php the_field('cats_description'); ?></p>
    <p>Color: <?php the_field('cats_color'); ?></p>
    <p>Age: <?php the_field('cats_age'); ?></p>
    <p>Gender: <?php the_field('cats_gender'); ?></p>
    <p>Weight: <?php the_field('cats_weight'); ?></p>
    <p>Adopted: <?php the_field('cats_adopted'); ?></p>
</div>

