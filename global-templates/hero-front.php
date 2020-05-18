<?php 
/* 
* Hero for the front page
*/
?>

<?php 
    $image = get_field('hero_image');
    $bg_color = get_field('hero_background_color');
?>

<section id="front-page-hero" style="background-color: <?php echo $bg_color; ?> ">
    <div class="container">
        <h1><?php the_field('hero_title'); ?></h1>
        <h1><?php the_field('hero_subtitle'); ?></h1>

        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
    </div>
</section>