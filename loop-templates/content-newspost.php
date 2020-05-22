<div class="blog-info col-12 col-md-6 col-lg-6">
    <h1 class="text-center"><?php the_title(); ?></h1>
    <p><?php the_content(); ?></p><br>
    <p>
        <small>Posted on
            <?php the_time('l, F jS, Y') ?> at
            <?php the_time() ?>
        </small>
    </p>
</div>
<div class="img-container col-12 col-md-6 col-lg-6 text-right mt-3">
    <?php the_post_thumbnail('medium'); ?>
</div>
<hr style="width: 88%;" />