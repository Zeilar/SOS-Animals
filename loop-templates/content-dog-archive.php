<?php 

$sexes = get_the_terms(get_the_ID(), 'sex');

?>

<div class="col-lg-4 col-md-6 mt-4 d-flex justify-content-center <?php

    foreach ($sexes as $sex) {

        echo lcfirst($sex->name);
    } 
    ?>">

    <article class="card rounded-lg">

        <img class="card-image rounded-top" src="<?php the_field('dog_image'); ?>" alt="<?php _e('Dog image', 'sosa'); ?>">

        <div class="card-body">

            <h2 class="card-title mb-0"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            
        </div> <!-- card-body -->

        <ul class="list-group list-group-flush">
            
            <li class="list-group-item">
                
                <?php foreach ($sexes as $sex) { ?>


                        <span class="taxonomy">
                    <a class="fa fa-tag" href="/sex/<?php echo lcfirst($sex->name); ?>"><?php _e($sex->name, 'sosa') ?></a> <!-- taxonomy link -->
</span>
                <?php } ?> <!-- foreach -->

            </li> <!-- list-group-item -->

        </ul> <!-- list-group -->

        <div class="card-body">

            <a href="<?php the_permalink(); ?>" class="btn btn-block btn-outline-danger"><?php _e('Read More &raquo;', 'sosa'); ?></a>

        </div> <!-- card-body -->

    </article> <!-- card -->
    
</div> <!-- col -->