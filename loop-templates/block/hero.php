<div class="jumbotron jumbotron-fluid bg-danger" style="background: url(' <?php the_field('hero_background_image_url'); ?> '); background-size: 100% 100%;">

    <div class="container">

        <h1 class="display-3"><strong><?php the_field('hero_title'); ?></strong></h1>

        <p class="display-4"><strong><?php the_field('hero_text'); ?></strong></p>

        <?php if (get_field('hero_button_url')) { ?>

            <a class="btn btn-lg hero-button" href="<?php the_field('hero_button_url'); ?>">

                <p><?php the_field('hero_button_text') ?></p>

            </a> <!-- hero-button -->

        <?php } ?> <!-- end of if -->
            
    </div> <!-- container -->
        
</div> <!-- jumbotron -->

<style>

    .hero-button {

        background-color: <?php the_field('hero_button_background_color'); ?>;
        
        border-color: <?php the_field('hero_button_border_color'); ?>;

        color: <?php the_field('hero_button_text_color'); ?>;
    }

    .hero-button:hover {

        background-color: <?php the_field('hero_button_backround_hover_color'); ?>;

        text-decoration: none;
    }

    .hero-button p {
        margin: 0;
    }

    .hero-button p:hover {

        color: <?php the_field('hero_button_text_hover_color'); ?>;
    }

</style>