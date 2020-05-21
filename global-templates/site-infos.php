<?
$sp = new WP_Query([
    'post_type'         =>      'site_info',
    'posts_per_page'    =>      1,
    'orderby'           =>      'posted',
    'order'             =>      'ASC',
    ]);

    ?>
    
<div class="wrapper" id="wrapper-faqs">

        <div class="container">
            
            <div class="row m-auto">
        
            <?php while($sp->have_posts()) : $sp->the_post(); ?>

            <?php get_template_part('loop-templates/content', 'site-infos'); ?>

<?php endwhile; ?>
<?php wp_reset_postdata();
?>