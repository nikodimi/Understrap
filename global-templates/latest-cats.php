<?php
/**
 * Latest cats setup
 *
 * @package understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;


$succes_stories = new WP_Query([
    'post_type'         =>      'cats',
    'posts_per_page'    =>      3,
    'meta_key'          =>      'cats_adopted',
    'meta_value'        =>      'No',
    'orderby'           =>      'posted',
    'order'             =>      'DSC',
]);

?>

<div class="wrapper" id="wrapper-latest">

    <div class="container">
        
        <div class="row">

            <?php while ($succes_stories->have_posts()) : $succes_stories->the_post(); ?>

                <?php get_template_part('loop-templates/content', 'cats'); ?>

            <?php endwhile; ?>

        </div><!-- .row -->
        
    </div><!-- #content -->
    
</div><!-- #page-wrapper -->

<?php wp_reset_postdata(); ?>