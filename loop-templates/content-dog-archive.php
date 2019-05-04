<?php 

$taxomonies = get_the_terms(get_the_ID(), 'dog');

foreach ($taxomonies as $taxonomy) {

    $sex = $taxonomy->name;
}

?>

<div class="col-lg-4 d-flex justify-content-center <?php echo lcfirst($sex); ?>">

    <div class="card rounded-lg mt-4">

        <img class="card-image rounded-top" src="<?php 
            
        if (the_field('dog_thumbnail_frontpage_image')) {

            the_field('dog_thumbnail_frontpage_image');
        }

        elseif (the_field('dog_thumbnail_frontpage_image_url')) {

            the_field('dog_thumbnail_frontpage_image_url');
        } 
            
        ?>" alt="<?php _e('Dog image', 'myportfoolio'); ?>">

        <!-- end of img -->

        <div class="card-body">

            <h3 class="card-title mb-0"><?php the_title(); ?></h3>

        </div> <!-- card-body -->

        <ul class="list-group list-group-flush">

            <li class="list-group-item">

                <a class="pl-2" href="/dog/<?php echo lcfirst($sex); ?>"><?php _e($sex, 'myportfolio') ?>

                    <span class="pl-2 pr-1 fa fa-tag">

                    </span>

                </a> <!-- taxonomy link -->

            </li> <!-- list-group-item -->

        </ul> <!-- list-group -->

        <div class="card-body">

            <a href="<?php the_permalink(); ?>" class="btn btn-secondary"><?php _e('Read More &raquo;', 'myportfolio'); ?></a>

        </div> <!-- card-body -->

    </div> <!-- card -->
    
</div> <!-- col -->