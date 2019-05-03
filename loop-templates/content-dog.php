<div class="col d-flex justify-content-center">

    <div class="dog">

        <div class="card rounded-lg mt-4">

            <img class="card-image rounded-top" src="<?php 
            
            if (the_field('dog_thumbnail_frontpage_image')) {

                the_field('dog_thumbnail_frontpage_image');
            }

            elseif (the_field('dog_thumbnail_frontpage_image_url')) {

                the_field('dog_thumbnail_frontpage_image_url');
            } 
            
            ?>" alt="<?php _e('Dog image', 'myportfoolio'); ?>">

            <!-- End of card thumbnail -->

            <div class="card-body">

                <h2 class="card-title"><?php the_title(); ?></h2>

                <?php the_content(); ?>

                <a href="<?php the_permalink(); ?>" class="btn btn-primary"><?php _e('Read More', 'myportfolio'); ?></a>

            </div> <!-- card-body -->

        </div> <!-- card -->
                    
    </div> <!-- dog -->
    
</div> <!-- col -->