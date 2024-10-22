<?php
/**
 * The template for displaying blog posts.
 *
 * @package sosa
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
$container = get_theme_mod( 'sosa_container_type' );
?>

<div class="wrapper" id="blog-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<?php get_template_part( 'global-templates/left-sidebar-check' ); ?>

			<header class="page-header border">

                <h1 class="pl-1 pr-1"><?php _e('Blog', 'sosa'); ?></h1>

            </header>

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'loop-templates/content', 'blog' ); ?>

				<?php endwhile; // end of the loop. ?>

			<?php get_template_part( 'global-templates/right-sidebar-check' ); ?>

        </div> <!-- row -->
        
        <?php sosa_pagination(); ?>

    </div> <!-- content -->

</div> <!-- blog-wrapper -->

<?php get_footer(); ?>
