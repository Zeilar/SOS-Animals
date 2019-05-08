<?php
/**
 * Dogs on frontpage setup.
 *
 * @package myportfolio
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$ss_amount = get_field('amount_of_dogs_frontpage', 'option');

if (!$ss_amount) {
    $ss_amount = 6;
}

$ss = new WP_Query([
    'post_type' => 'sosa_ss',
    'posts_per_page' => 3
]);

if ($ss->have_posts()) {

?>

	<div class="wrapper" id="wrapper-ss">

        <div class="container">

            <div class="row">

                <?php

                    while ($ss->have_posts()) {
                        
                        $ss->the_post();

                        get_template_part('loop-templates/content', 'ss');
                    }

                    wp_reset_postdata(); // ALWAYS RESET POSTDATA
                    
                ?>
                
            </div> <!-- row -->

        </div> <!-- container -->

	</div> <!-- wrapper -->

<?php } // end of if