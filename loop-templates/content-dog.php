<div class="col-sm-12 col-md-6 col-lg-4 d-flex justify-content-center">

    <article class="card rounded-lg mt-4">

        <?php echo wp_get_attachment_image(get_field('dog_image'), 'dog-card'); ?>

        <a href="<?php the_permalink(); ?>" class="btn btn-outline-danger"><?php _e('Read More &raquo;', 'sosa'); ?></a>

    </article> <!-- card -->
    
</div> <!-- col -->