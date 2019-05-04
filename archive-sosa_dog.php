<?php
/**
 *  Archive for dogs
 * 
 * @package myportfolio
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
$container = get_theme_mod( 'myportfolio_container_type' );
?>

<div class="wrapper" id="page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content">

		<div class="row justify-content-center">

			<div class="col-md col-lg-9 border content-area" id="primary">

				<main class="site-main" id="main" role="main">

					<?php while ( have_posts() ) : the_post(); ?>

					<?php endwhile; // end of the loop ?>

				</main> <!-- main -->

				<?php get_template_part( 'global-templates/dogs', 'archive' ); ?> <!-- dogs - for archive page only -->

			</div> <!-- primary -->

			<?php get_template_part( 'sidebar-templates/sidebar', 'right' ); ?>

		</div> <!-- row -->

	</div> <!-- content -->

</div> <!-- page-wrapper -->

<?php get_footer(); ?>