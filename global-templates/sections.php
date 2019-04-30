<?php
/**
 * Sections setup.
 *
 * @package myportfolio
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$sections = new WP_Query([
    'post_type' => 'mp_sections',
    'posts_per_page' => 3,
]);

if ($sections->have_posts()) {

?>

	<div class="wrapper" id="wrapper-sections">

        <?php
            while ($sections->have_posts()) {
                            
                $sections->the_post();

                get_template_part('loop-templates/content', 'section');
            }

            wp_reset_postdata(); // ALWAYS RESET POSTDATA
        ?>
        
	</div> <!-- wrapper -->

<?php } // end of if