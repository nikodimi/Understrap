<?php
/**
 * Template for faqs
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<div class="col-12 col-md-4 col-lg-4 ">
    <div class="faqs-box text-center">
        <div class="title">
            <h3 class="card-title"><?php the_title(); ?></h3>
        </div>
        <div class="text">
            <p><?php the_content(); ?></p>
        </div>
    </div>
</div>