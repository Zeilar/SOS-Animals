<?php 

$taxomonies = get_the_terms(get_the_ID(), 'dog');

foreach ($taxomonies as $taxonomy) {

    $sex = $taxonomy->name;
}

?>

<div class="col d-flex justify-content-center <?php echo $sex ?>">

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

                <h2 class="card-title"><?php the_title(); ?></h2>

                <div class="card-text"><?php the_content(); ?></div>

            </div>


            <ul class="list-group list-group-flush">

                <li class="list-group-item"><?php _e($sex, 'myportfolio') ?></li>

            </ul>

            <div class="card-body">

                <a href="<?php the_permalink(); ?>" class="btn btn-primary"><?php _e('Read More', 'myportfolio'); ?></a>

            </div> <!-- card-body -->

        </div> <!-- card -->
    
</div> <!-- col -->