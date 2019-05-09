<?php
/**
 * The template for displaying all single posts.
 *
 * @package sosa
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
$container = get_theme_mod( 'myportfolio_container_type' );
?>

<div class="wrapper" id="single-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<?php get_template_part( 'global-templates/left-sidebar-check' ); ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'loop-templates/content', 'single' ); ?>

					<div class="posts-links">

						<?php if (!get_next_post() == '') { ?>

							<a class="pl-1 pr-1 float-left" id="newer" href="<?php echo get_next_post()->guid; ?>">&laquo; <?php echo get_next_post()->post_title; ?></a>

						<?php } ?> <!-- I found the correct method for next/previous post links, but this works so why change it -->
						
						<?php if (!get_previous_post() == '') { ?>

							<a class="pl-1 pr-1 float-right" id="older" href="<?php echo get_previous_post()->guid; ?>"><?php echo get_previous_post()->post_title; ?> &raquo;</a>

						<?php } ?>

					</div>

				<?php endwhile; // end of the loop. ?>

			<?php get_template_part( 'global-templates/right-sidebar-check' ); ?>

		</div> <!-- row -->

	</div> <!-- content -->

</div> <!-- single-wrapper -->

<?php get_footer(); ?>
