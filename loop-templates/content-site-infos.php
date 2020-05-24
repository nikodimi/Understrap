<?php

/**
 * Template for the site-info box
 *
 * @package understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;
?>

<div class="site-info-container col-10 text-center m-auto ">
    <h1><?php the_title(); ?></h1><br>
    <p class="site-info-text"><?php the_content(); ?></h1>
</div>
<hr style="width: 88%;" />