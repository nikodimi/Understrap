<div class="card-body col-4">
    <a id="cats-link-<?php the_ID(); ?>" href="<?php the_permalink(); ?>"><h1><?php the_title(); ?></h1></a>

    <?php the_excerpt(); ?>

    <?php $link = get_post_meta($post->ID, 'Link');
    if($link) : ?>
        <a href="<?php echo $link; ?>">Link to this project</a>
    <?php endif; ?>
</div>