<?php
/**
 * The template for displaying the front-page
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );

?>

<?php get_template_part( 'global-templates/hero-front' ); ?>

<?php get_template_part( 'global-templates/site-infos' ); ?>

<div class="wrapper" id="page-wrapper">
	
	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">
		
		<div class="row">
			
			<main class="site-main" id="main">
				
				<?php get_template_part( 'global-templates/faqs' ); ?>
				
				<?php get_template_part( 'global-templates/latest-cats' ); ?>
				
				<?php get_template_part( 'global-templates/success-stories' ); ?>

			</main><!-- #main -->

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #page-wrapper -->

<?php
get_footer();
