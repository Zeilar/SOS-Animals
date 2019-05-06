<div class="col-sm-12 col-md-6 col-lg-4 d-flex justify-content-center">

    <article class="card rounded-lg mt-4">

        <img class="card-image rounded-top" src="<?php the_field('dog_image'); ?>">

        <div class="card-body">

            <h2 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

            <?php the_content(); ?>

            <a href="<?php the_permalink(); ?>" class="btn btn-primary"><?php _e('Read More &raquo;', 'myportfolio'); ?></a>

        </div> <!-- card-body -->

    </article> <!-- card -->
    
</div> <!-- col -->