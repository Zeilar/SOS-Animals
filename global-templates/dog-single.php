<?php 

$birth = get_field('dog_birth_date', false, false); 

$birth = new DateTime($birth);
$today = new DateTime($today);

$age = date_diff($today, $birth);

$years = $age->y;
$months = $age->m;
$days = $age->d;

// strings formatting based on singular & plural

if ($age->y > 1) {

    $years = $years . ' years ';

} elseif ($age->y == 1) {

    $years = $years . ' year ';

} else {

    $years = null;
}

if ($age->m > 1) {

    $months = $months . ' months ';

} elseif ($age->m == 1) {

    $months = $months . ' month ';

} else {

    $months = null;
    
}

if ($age->d > 1) {

    $days = $days . ' days ';

} elseif ($age->d == 1) {

    $days = $days . ' day ';

} else {

    $days = null;
}

// now the strings are prepared for the conditions below

$age = $years . $months . $days;

?>

<div class="container" id="content">

    <div class="row justify-content-center">

        <div class="col content-area" id="primary">

            <article class="border">
                
                <h1 class="text-center border-bottom pb-2 pt-2"><?php the_title(); ?></h1>
                
                <img class="img-fluid dog-image px-2 px-md-0 mx-md-auto mb-2 mt-2 d-block" src="<?php the_field('dog_image'); ?>" alt="<?php _e('Dog image', 'sosa'); ?>">
                
                <div class="dog-single-content px-2 pt-2 pb-2">
                    
                    <?php the_content(); ?>

                </div> <!-- dog-single-content -->

                <footer class="entry-footer">

                <ul class="list-group list-group-flush border-top">

                    <li class="list-group-item px-0 pt-0 pb-0 d-flex flex-row">

                        <div class="append-area border-right">

                            <p class="text-center dog-age mb-0 px-2 pt-2 pb-2"><?php _e('Sex', 'sosa'); ?></p>

                        </div> <!-- append-area -->
                        
                        <div class="field-area">

                            <p class="dog-age mb-0 px-2 pt-2 pb-2"><?php _e(ucfirst(get_field('dog_sex')), 'sosa'); ?></p>

                        </div> <!-- field-area -->

                    </li> <!-- list-group-item -->

                    <li class="list-group-item px-0 pt-0 pb-0 d-flex flex-row">

                        <div class="append-area border-right">

                            <p class="text-center dog-age mb-0 px-2 pt-2 pb-2"><?php _e('Age', 'sosa'); ?></p>

                        </div> <!-- append-area -->
                        
                        <div class="field-area">

                            <p class="dog-age mb-0 px-2 pt-2 pb-2"><?php _e($age, 'sosa'); ?> (<?php _e(the_field('dog_birth_date'), 'sosa'); ?>)</p>
                      
                        </div> <!-- field-area -->

                    </li> <!-- list-group-item -->

                    <li class="list-group-item px-0 pt-0 pb-0 d-flex flex-row">

                        <div class="append-area border-right">

                            <p class="text-center dog-withers mb-0 px-2 pt-2 pb-2"><?php _e('Withers', 'sosa'); ?></p>

                        </div> <!-- append-area -->
                        
                        <div class="field-area">

                            <p class="dog-age mb-0 px-2 pt-2 pb-2"><?php echo strtolower(get_field('dog_withers')) . 'cm'; ?></p>

                        </div> <!-- field-area -->

                    </li> <!-- list-group-item -->

                    <li class="list-group-item px-0 pt-0 pb-0 d-flex flex-row">

                        <div class="append-area border-right">

                            <p class="text-center dog-weight mb-0 px-2 pt-2 pb-2"><?php _e('Weight', 'sosa'); ?></p>

                        </div> <!-- append-area -->
                        
                        <div class="field-area">

                            <p class="dog-age mb-0 px-2 pt-2 pb-2"><?php echo strtolower(get_field('dog_weight')) . 'kg'; ?></p>

                        </div> <!-- field-area -->

                    </li> <!-- list-group-item -->

                    <li class="list-group-item px-0 pt-0 pb-0 d-flex flex-row" style="<?php 
                    
                        if (!get_field('dog_adoption_date')) {

                            echo 'display: none !important;'; 
                        } 
                        ?>">

                        <div class="append-area border-right">

                            <p class="text-center dog-age mb-0 px-2 pt-2 pb-2"><?php _e('Adopted', 'sosa'); ?></p>

                        </div> <!-- append-area -->
                        
                        <div class="field-area">

                            <p class="dog-age mb-0 px-2 pt-2 pb-2"><?php _e(ucfirst(get_field('dog_adoption_date')), 'sosa'); ?></p>

                        </div> <!-- field-area -->

                    </li> <!-- list-group-item -->

                </ul> <!-- list-group -->

                <div class="category-list pl-1 pr-1">

                    <?php _e('Categories: ', 'myporfolio'); ?><?php the_category(', '); ?>

                </div> <!-- category-list -->

                <div class="tags-list pl-1 pr-1">

                    <?php __(the_tags(), 'sosa'); ?>

                </div> <!-- tags-list -->

                <div class="posts-links pl-1 pr-1">

                    <span><?php next_post_link('&laquo; %link'); ?></span>

                    <span class="float-right"><?php previous_post_link('%link &raquo;'); ?></span>

                </div> <!-- posts-links -->
    
            </article> <!-- border -->

        </div> <!-- primary -->

    <?php get_template_part( 'sidebar-templates/sidebar', 'right-dog' ); ?> <!-- can be removed if you want -->

    </div> <!-- row -->

</div> <!-- content -->