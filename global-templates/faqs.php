<?php

/**
 * faqs setup
 *
 * @package understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;


$faqs = new WP_Query([
    'post_type'         =>      'faqs',
    'posts_per_page'    =>      3,
    'orderby'           =>      'post_title',
    'order'             =>      'ASC',
]);

?>

<div class="container">

    <?php if ($faqs->have_posts()) : ?>
        <h2 class="faqs-title text-center"><?php _e('How to adopt: ', 'kks') ?></h2><br>
    <?php endif; ?>

    <div class="row m-auto">

        <?php while ($faqs->have_posts()) : $faqs->the_post(); ?>

            <?php get_template_part('loop-templates/content', 'faqs'); ?>

        <?php endwhile; ?>

    </div><!-- .row -->

</div><!-- #content -->

<?php wp_reset_postdata(); ?>