<?php
/**
 *  Archive for dogs
 * 
 * @package sosa
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
$container = get_theme_mod( 'sosa_container_type' );
?>

<div class="wrapper" id="wrapper-archive-dogs">

    <div class="<?php echo esc_attr( $container ); ?>" id="content">

		<div class="row">

			<div class="col-md col-lg-9 content-area" id="primary">

            <header class="page-header border">

                <h1 class="pl-1 pr-1"><?php _e('Dogs', 'sosa'); ?></h1>

            </header>

                <div class="row">

                    <?php if (have_posts()) : ?>

                    <?php 

                        while (have_posts()) {
                            
                            the_post();

                            get_template_part('loop-templates/content', 'dog-archive');
                        }
                        
                    ?>

                    <?php wp_reset_postdata();  // ALWAYS RESET POSTDATA ?>

                    <?php else : ?>

                        <?php get_template_part('loop-templates/content', 'none'); ?>

                    <?php endif; ?>
                    
                </div> <!-- row -->

			</div> <!-- primary -->

			<?php get_template_part( 'sidebar-templates/sidebar', 'right' ); ?>

        </div> <!-- row -->
        
        <?php sosa_pagination(); ?>

	</div> <!-- content -->

</div> <!-- wrapper -->

<?php get_footer(); ?>