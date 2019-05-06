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

<div class="wrapper" id="wrapper-dog-single">

    <?php
    
        while (have_posts()) {
            
            the_post();
            
            get_template_part('global-templates/dog', 'single');
        }

        wp_reset_postdata(); // ALWAYS RESET POSTDATA

    ?>

</div> <!-- wrapper-dog-single -->

<?php get_footer(); ?>