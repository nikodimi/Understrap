<?php
/**
 * Template for single cat-cards
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<?php $image = get_field('cats_image'); ?>

<div class="col-12 col-md-10 col-lg-8 m-auto">
    <div class="card single-card">
        <img class="card-img-top single-img-top" src="<?php echo esc_url($image['url']); ?>" >
        <div class="row card-body single-card-body">
            <div class="card-text col-12 col-md-4 col-lg-4 single-card-text">
                <h5 class="card-title single-card-title"><strong><?php _e('Name:  ', 'kks') ?></strong><?php the_field('cats_name'); ?></h3>
                <p><strong><?php _e('Color:  ', 'kks') ?></strong><?php the_field('cats_color'); ?></p>
                <p><strong><?php _e('Born:  ', 'kks') ?></strong><?php the_field('cats_birthdate'); ?></p>
                <p><strong><?php _e('Gender:  ', 'kks') ?></strong><?php echo get_the_term_list($post->ID, 'gender') ?></p>
                <p><strong><?php _e('City:  ', 'kks') ?></strong><?php echo get_the_term_list($post->ID, 'city') ?></p>
                <p><strong><?php _e('Weight:  ', 'kks') ?></strong><?php the_field('cats_weight'); ?> kg</p>
                <p><strong><?php _e('Adopted:  ', 'kks') ?></strong><?php the_field('cats_adopted'); ?></p>
                <?php if (get_field('cats_adopted_at')) : ?>
                    <p><strong><?php _e('Cat adopted at:  ', 'kks') ?></strong><?php the_field('cats_adopted_at'); ?></p>
                <?php endif; ?>
            </div>
            <div class="card-text col-12 col-md-8 col-lg-8">
                <h5 class="card-descripton"><strong><?php _e('Description:  ', 'kks') ?></strong></h5><br>
                <p><?php the_field('cats_description'); ?></p>
            </div>
        </div>
    </div>
</div>