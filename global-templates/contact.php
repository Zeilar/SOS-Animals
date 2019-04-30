<?php
/**
 * Contact setup.
 *
 * @package myportfolio
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$contact = new WP_Query([
    'post_type' => 'sosa_contact',
    'posts_per_page' => 1,
]);

if ($contact->have_posts()) {

?>

	<div class="wrapper" id="wrapper-contact">

        <div class="container">

            <?php
                while ($contact->have_posts()) {
                        
                    $contact->the_post();

                    get_template_part('loop-templates/content', 'contact');
                }

                wp_reset_postdata(); // ALWAYS RESET POSTDATA
            ?>

        </div> <!-- container -->

    </div> <!-- wrapper -->
    
<?php } // end of if