<?php
/**
 *  Single page for dogs
 * 
 * @package myportfolio
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
$container = get_theme_mod( 'myportfolio_container_type' );
?>

<div class="wrapper" id="taxonomy-female-wrapper">

    <div class="container" id="content">

		<div class="row justify-content-center">

			<div class="col-md col-lg-9 content-area" id="primary">

                <?php

                if (have_posts()) {

                ?>

                    <div class="wrapper border" id="wrapper-archive-dogs">

                        <div class="container">

                            <div class="row">

                                <?php
                                    while (have_posts()) {
                                        
										the_post();
										
                                        get_template_part('global-templates/dogs', 'single');
                                    }

                                    wp_reset_postdata(); // ALWAYS RESET POSTDATA
                                ?>
                                
                            </div> <!-- row -->

                        </div> <!-- container -->						

                    </div> <!-- wrapper -->

                <?php } ?> <!-- if -->

			</div> <!-- primary -->

			<?php get_template_part( 'sidebar-templates/sidebar', 'right' ); ?>

		</div> <!-- row -->

	</div> <!-- content -->

</div> <!-- page-wrapper -->

<?php get_footer(); ?>