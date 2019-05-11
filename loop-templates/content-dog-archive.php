<?php 

$sexes = get_the_terms(get_the_ID(), 'sex');
$sizes = get_the_terms(get_the_ID(), 'size');
$countries = get_the_terms(get_the_ID(), 'country');

?>

<div class="col-lg-4 col-md-6 mt-4 d-flex justify-content-center">

    <article class="card rounded-lg">

        <img class="card-image rounded-top" src="<?php the_field('dog_image'); ?>" alt="<?php _e('Dog image', 'sosa'); ?>">

        <div class="card-body">

            <h2 class="card-title mb-0"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            
        </div> <!-- card-body -->

        <ul class="list-group list-group-flush">
            
            <li class="list-group-item">

            <?php if ($sexes) { ?>
                
                <?php foreach ($sexes as $sex) { ?>

                    <span class="card-taxonomy">
                    
                        <a class="fa fa-tag card-taxonomy-link" href="/sex/<?php echo lcfirst($sex->name); ?>">
                        
                            <?php _e($sex->name, 'sosa') ?>
                        
                        </a> <!-- taxonomy link -->
                    
                    </span> <!-- taxonomy -->

                <?php } ?> <!-- foreach -->

            <?php } ?> <!-- if -->

            <?php if ($sizes) { ?>

                <?php foreach ($sizes as $size) { ?>

                <span class="card-taxonomy">

                    <a class="fa fa-tag card-taxonomy-link" href="/size/<?php echo lcfirst($size->name); ?>">
                    
                        <?php _e($size->name, 'sosa') ?>
                    
                    </a> <!-- taxonomy link -->

                </span> <!-- taxonomy -->

                <?php } ?> <!-- foreach -->

            <?php } ?> <!-- if -->

            <?php if ($countries) { ?>

                <?php foreach ($countries as $country) { ?>

                <span class="card-taxonomy">

                    <a class="fa fa-tag card-taxonomy-link" href="/size/<?php echo lcfirst($country->name); ?>">
                    
                        <?php _e($country->name, 'sosa') ?>
                    
                    </a> <!-- taxonomy link -->

                </span> <!-- taxonomy -->

                <?php } ?> <!-- foreach -->

            <?php } ?> <!-- if -->

            </li> <!-- list-group-item -->

        </ul> <!-- list-group -->

        <div class="card-body">

            <a href="<?php the_permalink(); ?>" class="btn btn-block btn-outline-danger"><?php _e('Read More &raquo;', 'sosa'); ?></a>

        </div> <!-- card-body -->

    </article> <!-- card -->
    
</div> <!-- col -->