<?php
/**
 * The template for displaying posts
 *
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="index-wrapper">

	<div class="<?php echo esc_attr( $container ); ?> col-10" id="content" tabindex="-1">

		<div class="row">
				
				<?php
				if ( have_posts() ) {
					// Start the Loop.
					while ( have_posts() ) {
						the_post();

						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'loop-templates/content', 'newspost');
					}
				} else {
					get_template_part( 'loop-templates/content', 'none' );
				}
				?>


			<!-- The pagination component -->
			<?php understrap_pagination(); ?>

		</div><!-- .row -->

	</div><!-- #container -->

</div><!-- wrapper -->

<?php
get_footer();
