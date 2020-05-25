<?php

/**
 * Latest cats setup
 *
 * @package understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;


$latest_cats = new WP_Query([
    'post_type'         =>      'cats',
    'posts_per_page'    =>      3,
    'meta_key'          =>      'cats_adopted',
    'meta_value'        =>      'No',
    'orderby'           =>      'posted',
    'order'             =>      'DSC',
]);

?>

<div class="container">

    <?php if ($latest_cats->have_posts()) : ?>
        <h2 class="Latest-title text-center"><?php _e('Latest cats: ', 'kks') ?></h2><br>
    <?php endif; ?>

    <div class="row">

        <?php while ($latest_cats->have_posts()) : $latest_cats->the_post(); ?>

            <?php get_template_part('loop-templates/content', 'cats'); ?>

        <?php endwhile; ?>

    </div><!-- .row -->

</div><!-- #content -->

<?php wp_reset_postdata(); ?>