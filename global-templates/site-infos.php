<?php

/**
 * site-infos setup
 *
 * @package understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;


$sp = new WP_Query([
    'post_type'         =>      'site_info',
    'posts_per_page'    =>      1,
    'orderby'           =>      'posted',
    'order'             =>      'ASC',
]);

?>

<div class="container">

    <div class="row m-auto">

        <?php while ($sp->have_posts()) : $sp->the_post(); ?>

            <?php get_template_part('loop-templates/content', 'site-infos'); ?>

        <?php endwhile; ?>

    </div><!-- .row -->

</div><!-- #content -->

<?php wp_reset_postdata(); ?>