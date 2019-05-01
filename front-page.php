<?php
/**
 * The template for displaying the front page.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package myportfolio
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

$container = get_theme_mod( 'myportfolio_container_type' );

?>

<?php get_template_part( 'global-templates/hero' ); ?> <!-- hero -->

<?php get_template_part( 'global-templates/usps' ); ?> <!-- unique selling points -->

<?php get_template_part( 'global-templates/dogs', 'frontpage' ); ?> <!-- dogs - for frontpage only -->


<div class="wrapper" id="frontpage-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<main class="site-main" id="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'loop-templates/content', 'frontpage' ); ?>

				<?php endwhile; // end of the loop ?>

			</main> <!-- main -->

		</div> <!-- row -->

	</div> <!-- content -->

</div> <!-- wrapper -->
 
<?php get_footer(); ?>
