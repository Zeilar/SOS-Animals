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
$container = get_theme_mod( 'sosa_container_type' );
?>

<div class="wrapper" id="single-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<?php get_template_part('global-templates/left-sidebar-check'); ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'loop-templates/content', 'single' ); ?>

					<div class="posts-links pl-1 pr-1">

						<span><?php next_post_link('&laquo; %link'); ?></span>

						<span class="float-right"><?php previous_post_link('%link &raquo;'); ?></span>

                	</div> <!-- posts-links -->

				<?php endwhile; // end of the loop. ?>

			<?php get_template_part( 'global-templates/right-sidebar-check' ); ?>

		</div> <!-- row -->

	</div> <!-- content -->

</div> <!-- single-wrapper -->

<?php get_footer(); ?>
