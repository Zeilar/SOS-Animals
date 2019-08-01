<?php
/**
 * Dogs on frontpage setup.
 *
 * @package sosa
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$dog_amount = get_field('amount_of_dogs_frontpage', 'option');

if (!$dog_amount) {
    $dog_amount = 6;
}

$dog = new WP_Query([
    'post_type' => 'sosa_dog',
    'posts_per_page' => $dog_amount,
]);

if ($dog->have_posts()) {

?>

	<div class="wrapper" id="wrapper-dogs-frontpage">

        <div class="container">

            <div class="row">

                <?php

                    while ($dog->have_posts()) {
                        
                        $dog->the_post();

                        get_template_part('loop-templates/content', 'dog-archive');
                    }

                    wp_reset_postdata(); // ALWAYS RESET POSTDATA
                    
                ?>
                
            </div> <!-- row -->

        </div> <!-- container -->

	</div> <!-- wrapper -->

<?php } // end of if