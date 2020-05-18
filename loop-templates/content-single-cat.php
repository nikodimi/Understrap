<div class="card col-4 m-auto">
    <a href="<?php the_permalink(); ?>">
        <img class="card-img-top" src="<?php the_post_thumbnail(); ?>
        <div class="card-body">
            <h5>Name: <?php the_field('cats_name'); ?></h3>
            <p>Description: <?php the_field('cats_description'); ?></p>
            <p>Color: <?php the_field('cats_color'); ?></p>
            <p>Age: <?php the_field('cats_age'); ?></p>
            <p>Gender: <?php the_field('cats_gender'); ?></p>
            <p>Weight: <?php the_field('cats_weight'); ?></p>
            <p>Adopted: <?php the_field('cats_adopted'); ?></p>
        </div>
</div>