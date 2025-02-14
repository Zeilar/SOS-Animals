<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package sosa
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$container = get_theme_mod( 'sosa_container_type' );

?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?> <!-- footer -->

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row">

			<div class="col">
				
				<footer class="site-footer" id="colophon">

					<div class="site-info">

						<!-- anything here will be placed under the widget-footer -->

					</div> <!-- site-info -->

				</footer> <!-- colophon -->

			</div> <!-- col -->

		</div> <!-- row -->

	</div> <!-- container -->

</div> <!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>
</html>