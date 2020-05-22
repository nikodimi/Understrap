<?php
/**
 * Hero setup
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<?php 
    $image = get_field('hero_image');
    $bg_color = get_field('hero_background_color');
    $link = get_field('hero_link');
?>

<section id="front-page-hero" style="background-color: <?php echo $bg_color; ?> ">
    <div class="container">
        <h1><?php the_field('hero_title'); ?></h1>
        <h1><?php the_field('hero_subtitle'); ?></h1>
        <?php if(!empty($link)) : ?>
            <a class="btn" href="<?php echo $link['url']; ?>">Link</a>
        <?php endif; ?>

        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
    </div>
</section>