<?php
/**
 * USPs setup.
 *
 * @package myportfolio
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$usp_amount = get_field('amount_of_usps_frontpage', 'option');

if (!$usp_amount) {
    $usp_amount = 3;
}

$usp = new WP_Query([
    'post_type' => 'sosa_usp',
    'posts_per_page' => $usp_amount,
]);

if ($usp->have_posts()) {

?>

	<div class="wrapper" id="wrapper-usps">

        <div class="container">

            <div class="row justify-content-center">

                <?php

                    while ($usp->have_posts()) {
                        
                        $usp->the_post();

                        get_template_part('loop-templates/content', 'usp');
                    }

                    wp_reset_postdata(); // ALWAYS RESET POSTDATA

                ?>
                
            </div> <!-- row -->

        </div> <!-- container -->

	</div> <!-- wrapper -->

<?php } // end of if