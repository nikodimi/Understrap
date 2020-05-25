<?php

/**
 * The template for displaying the front-page
 *
 * @package understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();

$container = get_theme_mod('understrap_container_type');

?>

<?php get_template_part('global-templates/hero-front'); ?>


<div class="wrapper" id="front-wrapper">	

		<?php get_template_part('global-templates/site-infos'); ?>

		<?php get_template_part('global-templates/faqs'); ?>

		<?php get_template_part('global-templates/latest-cats'); ?>

		<?php get_template_part('global-templates/success-stories'); ?>

		<?php the_content(); ?>

</div><!-- #page-wrapper -->

<?php
get_footer();
