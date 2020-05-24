<?php
/**
 * The template for displaying cat archives
 *
 * @package understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

// query_posts( array(
//     'post_type' => array( 'cats', ),
//     'posts_per_page' => 9,
//     'paged'=>$paged,
// ) );

get_header();

?>
<div class="container">
    <!-- Loop start	 -->'
    <div class="row">
        <?php if (have_posts()) : ?>
            <!-- Yay, we have posts  -->
            <?php while (have_posts()) : the_post(); ?>
            
                <!-- Get content -->
                <?php get_template_part('loop-templates/content', 'cats'); ?>

            <?php endwhile; ?>
        <?php else : ?>
            <?php get_template_part('loop-templates/content', 'none'); ?>
        <?php endif; ?>
        <!-- end of posts  -->
    </div>
    <?php understrap_pagination(); ?>
</div>


<?php
get_footer();
