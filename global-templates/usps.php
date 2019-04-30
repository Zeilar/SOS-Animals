<?php
/**
 * USPs setup.
 *
 * @package myportfolio
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$usps = new WP_Query([
    'post_type' => 'mp_usp',
    'posts_per_page' => 3,
]);

if ($usps->have_posts()) {

?>

	<div class="wrapper" id="wrapper-usps">

        <div class="container">

            <div class="row">

                <?php
                    while ($usps->have_posts()) {
                        
                        $usps->the_post();

                        get_template_part('loop-templates/content', 'usp');
                    }

                    wp_reset_postdata(); // ALWAYS RESET POSTDATA
                ?>
                
            </div> <!-- row -->

        </div> <!-- container -->

	</div> <!-- wrapper -->

<?php } // end of if