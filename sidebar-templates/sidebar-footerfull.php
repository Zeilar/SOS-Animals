<?php
/**
 * Sidebar setup for footer full.
 *
 * @package sosa
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$container = get_theme_mod( 'sosa_container_type' );

?>

<?php if ( is_active_sidebar( 'footerfull' ) ) : ?>

	<!-- ******************* The Footer Full-width Widget Area ******************* -->

	<div class="wrapper" id="wrapper-footer-full">

		<div class="<?php echo esc_attr( $container ); ?>" id="footer-full-content" tabindex="-1">

			<div class="row text-md-left text-center">

				<?php dynamic_sidebar( 'footerfull' ); ?>

			</div>

		</div>

	</div> <!-- wrapper-footer-full -->

<?php endif; ?>
