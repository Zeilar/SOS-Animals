<?php 

$taxomonies = get_the_terms(get_the_ID(), 'dog');

?>

<div class="col-lg-4 mb-4 d-flex justify-content-center <?php

    foreach ($taxomonies as $taxonomy) {

        echo lcfirst($taxonomy->name . ' ');
    } 

    ?>">

    <article class="card rounded-lg mt-4">

        <img class="card-image rounded-top" src="<?php the_field('dog_image'); ?>" alt="<?php _e('Dog image', 'myportfolio'); ?>">

        <div class="card-body">

            <h2 class="card-title mb-0"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            
        </div> <!-- card-body -->

        <ul class="list-group list-group-flush">

            
            <li class="list-group-item">
                
                <?php foreach ($taxomonies as $taxonomy) { ?>

                    <a class="pl-2 mr-3" href="/dog/<?php echo lcfirst($taxonomy->name); ?>"><?php _e($taxonomy->name, 'myportfolio') ?>

                        <span class="pl-2 pr-1 fa fa-tag"></span>

                    </a> <!-- taxonomy link -->

                <?php } ?>

            </li> <!-- list-group-item -->

        </ul> <!-- list-group -->

        <div class="card-body">

            <a href="<?php the_permalink(); ?>" class="btn btn-primary"><?php _e('Read More &raquo;', 'myportfolio'); ?></a>

        </div> <!-- card-body -->

    </article> <!-- card -->
    
</div> <!-- col -->