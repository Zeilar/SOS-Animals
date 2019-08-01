<?php
/**
 *  Archive for unspecified taxonomy
 * 
 * @package sosa
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
$container = get_theme_mod( 'sosa_container_type' );
?>

<div class="wrapper" id="wrapper-archive-taxonomy">

    <div class="container" id="content">

		<div class="row">

			<div class="col-md col-lg-9 content-area" id="primary">

            <?php if (have_posts()) : ?>

                <header class="page-header border">

                    <?php the_archive_title('<h1 class="page-title pl-1 pr-1">', '</h1>'); ?>

                </header>

                <div class="row">

                    <?php

                        while (have_posts()) {
                            
                            the_post();

                            get_template_part('loop-templates/content', get_post_format());
                        }

                        wp_reset_postdata(); // ALWAYS RESET POSTDATA
                        
                    ?>
                    
                </div> <!-- row -->

            <?php else : ?>

                <?php get_template_part('loop-templates/content', 'none'); ?>

            <?php endif; ?>

            <?php sosa_pagination(); ?>

			</div> <!-- primary -->

			<?php get_template_part( 'sidebar-templates/sidebar', 'right-dog' ); ?>

		</div> <!-- row -->

	</div> <!-- content -->

</div> <!-- page-wrapper -->

<?php get_footer(); ?>