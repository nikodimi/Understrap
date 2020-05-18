<div class="card col-12 col-md-6 col-lg-4">
    <a href="<?php the_permalink(); ?>">
    <img class="card-img-top" src="<?php the_post_thumbnail();?>">
  <div class="card-body col-4">
    <h5 class="card-title"><a id="cats-link-<?php the_ID(); ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
    <p class="card-text"><?php the_content(); ?></p>
  </div>
</div>