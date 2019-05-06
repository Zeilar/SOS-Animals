<?php
/**
 * The right sidebar containing the main widget area.
 *
 * @package myportfolio
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! is_active_sidebar( 'right-sidebar' ) ) {
	return;
}

// when both sidebars turned on reduce col size to 3 from 4.
$sidebar_pos = get_theme_mod( 'myportfolio_sidebar_position' );
?>

<?php if ( 'both' === $sidebar_pos ) : ?>
	<div class="col-md-3 widget-area" id="right-sidebar" role="complementary">
<?php else : ?>
	<div class="col-md-3 pt-5 pb-5 d-none d-lg-block border widget-area" id="right-sidebar" role="complementary">
<?php endif; ?>
<?php dynamic_sidebar( 'right-sidebar' ); ?>

</div> <!-- right-sidebar -->
