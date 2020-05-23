<?php

/**
 * Hero setup
 *
 * @package understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;
?>

<?php
$image = get_field('hero_image');
$bg_color = get_field('hero_background_color');
$link = get_field('hero_link');

?>

<section id="front-page-hero" style="background-color: <?php echo $bg_color; ?>; background-image: url('<?php echo $image['url']; ?>'); ">
    <div class="container d-flex h-100">
        <div class="hero-content justify-content-center align-self-center">
            <h1><?php the_field('hero_title'); ?></h1>
            <h2><?php the_field('hero_subtitle'); ?></h2>
            <?php if (!empty($link)) : ?>
                <a class="btn front-hero-btn" href="<?php echo $link['url']; ?>"><?php echo $link['title']; ?></a>
            <?php endif; ?>
        </div>
    </div>
</section>