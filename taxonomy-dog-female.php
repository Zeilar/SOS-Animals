<?php
/**
 *  Archive for dogs
 * 
 * @package myportfolio
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$dog_amount = get_field('amount_of_dogs_archive', 'option');

if (!$dog_amount) {
    $dog_amount = 2;
}

$dog = new WP_Query([
    'post_type' => 'sosa_dog',
    'posts_per_page' => $dog_amount,
    'paged' =>  get_query_var( 'paged' ),
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

<div class="wrapper" id="taxonomy-female-wrapper">

    <div class="container" id="content">

		<div class="row justify-content-center">

			<div class="col-md col-lg-9 border content-area" id="primary">

                <?php

                if ($dog->have_posts()) {

                ?>

                    <div class="wrapper" id="wrapper-archive-dogs">

                        <div class="container">

                        <h1><?php _e('Dogs: Female', 'myportfolio'); ?></h1>

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

                        <?php myportfolio_pagination(); ?>

                    </div> <!-- wrapper -->

                <?php } ?> <!-- if -->

			</div> <!-- primary -->

			<?php get_template_part( 'sidebar-templates/sidebar', 'right' ); ?>

		</div> <!-- row -->

	</div> <!-- content -->

</div> <!-- page-wrapper -->

<?php get_footer(); ?>