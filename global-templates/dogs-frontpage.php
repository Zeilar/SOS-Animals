<?php
/**
 * USPs setup.
 *
 * @package myportfolio
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$amount = get_field('amount_of_dogs_frontpage', 'option');

if (!$amount) {
    $amount = 8;
}

$dogs = new WP_Query([
    'post_type' => 'sosa_dog',
    'posts_per_page' => $amount,
]);

if ($dogs->have_posts()) {

?>

	<div class="wrapper" id="wrapper-dogs">

        <div class="container">

            <div class="row">

                <?php
                    while ($dogs->have_posts()) {
                        
                        $dogs->the_post();

                        get_template_part('loop-templates/content', 'dog');
                    }

                    wp_reset_postdata(); // ALWAYS RESET POSTDATA
                ?>
                
            </div> <!-- row -->

        </div> <!-- container -->

	</div> <!-- wrapper -->

<?php } // end of if