<?php
/**
 * Dogs on archive setup.
 *
 * @package myportfolio
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$dog_amount = get_field('amount_of_dogs_archive', 'option');

if (!$amount) {
    $dog_amount = 8;
}

$dog = new WP_Query([
    'post_type' => 'sosa_dog',
    'posts_per_page' => $dog_amount,
    'paged' => get_query_var('paged'),
]);

$taxonomy = 'dog';
$taxonomy_terms = get_terms($taxonomy, [
    'hide_empty' => 0,
    'fields' => 'ids'
]);
                 
//var_dump($query);

//var_dump($taxonomy_terms);

wp_reset_postdata();

if ($dog->have_posts()) {

?>

	<div class="wrapper" id="wrapper-archive-dogs">

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

        <?php myportfolio_pagination(); ?>

	</div> <!-- wrapper -->

<?php } // end of if