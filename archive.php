<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package myportfolio
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

$container = get_theme_mod( 'myportfolio_container_type' );
?>

<div class="wrapper" id="archive-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<?php get_template_part('global-templates/left-sidebar-check'); ?>

				<?php if (have_posts()) : ?>

					<header class="page-header border">

						<?php

							the_archive_title( '<h1 class="page-title">', '</h1>' );

							the_archive_description( '<div class="taxonomy-description">', '</div>' );
							
						?>

					</header> <!-- page-header -->

					<?php while (have_posts()) : the_post(); ?>

						<?php get_template_part( 'loop-templates/content', get_post_format()); ?>

					<?php endwhile; ?>

				<?php else : ?>

					<?php get_template_part('loop-templates/content', 'none'); ?>

				<?php endif; ?>

			<?php get_template_part('global-templates/right-sidebar-check'); ?>

		</div> <!-- row -->

		<?php myportfolio_pagination(); ?>

	</div> <!-- content -->

</div> <!-- archive-wrapper -->

<?php get_footer(); ?>