<?php
/**
 *  Archive for dog taxonomy
 * 
 * @package myportfolio
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$dog_amount = get_field('amount_of_dogs_archive', 'option');

if (!$dog_amount) {
    $dog_amount = 6;
}

$dog = new WP_Query([
    'post_type' => 'sosa_dog',
    'paged' => (get_query_var( 'paged')) ? get_query_var( 'paged') : 1,
    'tax_query' => array(
		array(
			'taxonomy' => 'dog',
			'field'    => 'slug',
			'terms'    => 'female',
		),
	),
]);

get_header();
$container = get_theme_mod( 'myportfolio_container_type' );
?>

<div class="wrapper" id="wrapper-archive-dogs">

    <div class="container" id="content">

		<div class="row">

			<div class="col-md col-lg-9 content-area" id="primary">

            <?php if ($dog->have_posts()) { ?>

                <header class="page-header border">

                    <h1 class="page-title pl-1 pr-1"><?php _e('Dogs: Female', 'myportfolio'); ?></h1>

                </header>

                <div class="row">

                    <?php

                        while ($dog->have_posts()) {
                            
                            $dog->the_post();

                            get_template_part('loop-templates/content', 'dog-archive');
                        }

                        wp_reset_postdata(); // ALWAYS RESET POSTDATA
                        
                    ?>
                    
                </div> <!-- row -->

            <?php myportfolio_pagination(); ?>

            <?php } ?> <!-- if -->

			</div> <!-- primary -->

			<?php get_template_part( 'sidebar-templates/sidebar', 'right' ); ?>

		</div> <!-- row -->

	</div> <!-- content -->

</div> <!-- page-wrapper -->

<?php get_footer(); ?>