<?php $image = get_field('cats_image'); ?>

<div class="single-cat-view col-12 col-md-8 col-lg-8">
    <div class="image-container mb-3">
        <img class="cats-image" src="<?php echo esc_url($image['url']); ?>">
    </div>
    <div class="meta-box d-flex">
        <div class="meta-info col-3">
            <h5>Name: <?php the_field('cats_name'); ?></h5>
            <p>Color: <?php the_field('cats_color'); ?></p>
            <p>Birthdate: <?php the_field('cats_birthdate'); ?></p>
            <p>Gender: <?php echo get_the_term_list( $post->ID, 'gender') ?></p>
            <p>City: <?php echo get_the_term_list( $post->ID, 'city') ?></p>
            <p>Weight: <?php the_field('cats_weight'); ?> kg</p>
            <p>Adopted: <?php the_field('cats_adopted'); ?></p>
            <?php if ( get_field('cats_adopted_at') ) : ?>
                <p>Adopted at: <?php the_field('cats_adopted_at'); ?></p>
                <?php endif; ?>
        </div>
        <div class="meta-description col-9">
            <h5>Description:</h5>
            <p><?php the_field('cats_description'); ?></p>
        </div>
    </div>
</div>