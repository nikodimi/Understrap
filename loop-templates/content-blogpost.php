<?php
/**
 * Template for the posts
 *
 * @package understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;
?>

<?php if (has_post_thumbnail($post->ID)) : ?>
    <div class="img-container post-img col-12">
        <?php the_post_thumbnail('medium'); ?>
    </div>
<?php endif; ?>

<div class="blog-info col-12 col-md-12 col-lg-10 m-auto">
    <h1 class="text-center"><?php the_title(); ?></h1>
    <p class="blog-content"><?php the_content(); ?></p>
    <p class="post-date">
        <small>Posted on
            <?php the_time('l, F jS, Y') ?> at
            <?php the_time() ?>
        </small>
    </p>
</div>
<hr style="width: 88%;" />