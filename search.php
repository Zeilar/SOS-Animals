<?php
/**
 * The template for displaying search results pages.
 *
 * @package myportfolio
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

$container = get_theme_mod( 'myportfolio_container_type' );

?>

<div class="wrapper" id="search-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<?php get_template_part( 'global-templates/left-sidebar-check' ); ?>

				<?php if ( have_posts() ) : ?>

					<header class="page-header border mb-4">

							<h1 class="page-title pl-1 pr-1 mb-0">
								<?php
									printf(
										/* translators: %s: query term */
										esc_html__( 'Search Results for: %s', 'myportfolio' ),
										'<span>' . get_search_query() . '</span>'
									);
								?>
							</h1>

					</header><!-- .page-header -->

					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'loop-templates/content', 'search' ); ?>

					<?php endwhile; ?>

				<?php else : ?>

					<?php get_template_part( 'loop-templates/content', 'none' ); ?>

				<?php endif; ?>

			<?php myportfolio_pagination(); ?>

			<?php get_template_part( 'global-templates/right-sidebar-check' ); ?>

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #search-wrapper -->

<?php get_footer(); ?>
