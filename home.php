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

<div class="wrapper" id="blog-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<?php get_template_part( 'global-templates/left-sidebar-check' ); ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'loop-templates/content', 'blog' ); ?>

				<?php endwhile; // end of the loop. ?>

			</main> <!-- #main -->

			<?php get_template_part( 'global-templates/right-sidebar-check' ); ?>

        </div> <!-- row -->
        
        <?php myportfolio_pagination(); ?>

    </div> <!-- content -->

</div> <!-- blog-wrapper -->

<?php get_footer(); ?>
