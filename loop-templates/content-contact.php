<?php

/**
 * Contact form
 */


$contact_form_id = get_field('contact_form_id');

if (!$contact_form_id) {
    return;
}

?>

<section id="contact-section">

    <div class="container">

        <h2 class="font-weight-bold text-center my-4"><?php the_field('contact_form_title'); ?></h2>

        <div class="wrapper" id="contact-form-wrapper">

            <?php __(the_field('contact_form_shortcode'), 'myportfolio'); ?>

        </div> <!-- wrapper -->

    </div> <!-- container -->

</section> <!-- contact-section -->
