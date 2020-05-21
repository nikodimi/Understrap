<div class="blog-info col-6">
    <h1 class="text-center"><?php the_title(); ?></h1>
    <p><?php the_content(); ?></p>
</div>
<div class="img-container col-6 text-right mt-3">
    <?php the_post_thumbnail('medium'); ?>
    <p>
        <small>Posted on
            <?php the_time('l, F jS, Y') ?> at
            <?php the_time() ?>
        </small>
    </p>
</div>
<hr style="width: 88%;" />