<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package sosa
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

$container = get_theme_mod( 'sosa_container_type' );
?>

<div class="wrapper" id="error-404-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<div class="col-md-12 content-area" id="primary">

				<section class="error-404 not-found">

					<header class="page-header">

						<h1 class="page-title"><?php esc_html_e( 'Oops 404', 'sosa' ); ?></h1>

					</header> <!-- page-header -->

					<div class="page-content">

						<p><?php _e('The page could not be found.', 'sosa'); ?></p>

						<div class="widget widget_categories">

						</div> <!-- widget -->

					</div> <!-- page-content -->

				</section> <!-- error-404 -->

			</div> <!-- primary -->

		</div> <!-- row -->

	</div> <!-- content -->

</div> <!-- error-404-wrapper -->

<?php get_footer(); ?>