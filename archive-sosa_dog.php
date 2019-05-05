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
    $dog_amount = 6;
}

$dog = new WP_Query([
    'post_type' => 'sosa_dog',
    'paged' => get_query_var( 'paged')
]);

get_header();
$container = get_theme_mod( 'myportfolio_container_type' );
?>

<div class="wrapper" id="wrapper">

    <div class="<?php echo esc_attr( $container ); ?>" id="content">

		<div class="row justify-content-center">

			<div class="col-md col-lg-9 content-area" id="primary">

                <?php

                if ($dog->have_posts()) {

                ?>

                    <div class="wrapper border" id="wrapper-archive-dogs">

                        <div class="container">

                        <h1><?php _e('Dogs', 'myportfolio'); ?></h1>

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

                    </div> <!-- wrapper-archive-dogs -->

                <?php } ?> <!-- if -->

			</div> <!-- primary -->

			<?php get_template_part( 'sidebar-templates/sidebar', 'right' ); ?>

		</div> <!-- row -->

	</div> <!-- content -->

</div> <!-- wrapper -->

<?php get_footer(); ?>