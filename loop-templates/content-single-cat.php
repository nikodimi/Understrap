<?php $image = get_field('cats_image'); ?>


<div class="col-10">
    <img class="cats-image" src="<?php echo esc_url($image['url']); ?>">
</div>
<div class="col-6">
    <h5>Description:</h5>
    <p><?php the_field('cats_description'); ?></p>
</div>
<div class="col-4 text-right">
    <h5>Name: <?php the_field('cats_name'); ?></h5>
    <p>Color: <?php the_field('cats_color'); ?></p>
    <p>Birthdate: <?php the_field('cats_birthdate'); ?></p>
    <p>Gender: <?php echo get_the_term_list($post->ID, 'gender') ?></p>
    <p>City: <?php echo get_the_term_list($post->ID, 'city') ?></p>
    <strong>
        <p>Weight:
    </strong><?php the_field('cats_weight'); ?> kg</p>
    <p>Adopted: <?php the_field('cats_adopted'); ?></p>
    <?php if (get_field('cats_adopted_at')) : ?>
        <p>Adopted at: <?php the_field('cats_adopted_at'); ?></p>
    <?php endif; ?>
</div>

