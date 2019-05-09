<?php
/**
 * The template for displaying the front page.
 *
 * @package sosa
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

$container = get_theme_mod( 'sosa_container_type' );

?>

<div class="wrapper" id="frontpage-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>-fluid" id="content" tabindex="-1">

		<div class="row">

			<main class="site-main" id="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'loop-templates/content', 'frontpage' ); ?>

				<?php endwhile; // end of the loop ?>

			</main> <!-- main -->

		</div> <!-- row -->

	</div> <!-- content -->

</div> <!-- wrapper -->

<?php get_template_part( 'global-templates/hero' ); ?> <!-- hero -->

<?php get_template_part( 'global-templates/usps' ); ?> <!-- unique selling points -->

<?php get_template_part( 'global-templates/dogs', 'frontpage' ); ?> <!-- dogs - for frontpage only -->
 
<?php get_footer(); ?>
