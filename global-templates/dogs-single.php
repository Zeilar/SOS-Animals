<?php
/**
 * Dogs on frontpage setup.
 *
 * @package myportfolio
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

//if ($dog->have_posts()) {

?>

	<div class="wrapper" id="wrapper-dogs-frontpage">

        <div class="container">

            <div class="row">

                <?php
                    while (have_posts()) {
                        
                        the_post();

                        get_template_part('loop-templates/content', 'dog-single');
                    }

                    wp_reset_postdata(); // ALWAYS RESET POSTDATA
                ?>
                
            </div> <!-- row -->

        </div> <!-- container -->

	</div> <!-- wrapper -->

<?php //} // end of if