<?php
/**
 * Template Name: Magazine Homepage
 *
 * Description: A custom page template for displaying the magazine homepage widgets.
 *
 * @package zeeDynamic
 */

get_header();

// Get Theme Options from Database.
$theme_options = zeedynamic_theme_options();
?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		// Display Slider.
		if ( true === $theme_options['slider_magazine'] ) :

			get_template_part( 'template-parts/post-slider' );

		endif;

		// Display Magazine Homepage Widgets.
		zeedynamic_magazine_widgets();
		?>

		</main><!-- #main -->
	</section><!-- #primary -->

	<?php get_sidebar(); ?>

<?php get_footer(); ?>
