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
    'posts_per_page' => $dog_amount,
    'paged' => (get_query_var( 'paged')) ? get_query_var( 'paged') : 1
]);

get_header();
$container = get_theme_mod( 'myportfolio_container_type' );
?>

<div class="wrapper" id="wrapper-archive-dogs">

    <div class="<?php echo esc_attr( $container ); ?>" id="content">

		<div class="row">

			<div class="col-md col-lg-9 content-area" id="primary">

                <h1 class="border px-2 pt-2 pb-2 mb-0"><span class="align-text-top"><?php _e('Dogs', 'myportfolio'); ?></span></h1>

                <div class="row">

                    <?php if (have_posts()) : ?>

                    <?php 

                        while (have_posts()) {
                            
                            the_post();

                            get_template_part('loop-templates/content', 'dog-archive');
                        }
                        
                    ?>

                    <?php wp_reset_postdata();  // ALWAYS RESET POSTDATA ?>

                    <?php else : ?>

                        <?php get_template_part('loop-templates/content', 'none'); ?>

                    <?php endif; ?>
                    
                </div> <!-- row -->

                <?php myportfolio_pagination(); ?>

			</div> <!-- primary -->

			<?php get_template_part( 'sidebar-templates/sidebar', 'right' ); ?>

		</div> <!-- row -->

	</div> <!-- content -->

</div> <!-- wrapper -->

<?php get_footer(); ?>