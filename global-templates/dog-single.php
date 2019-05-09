<?php 

$birth = get_field('dog_birth_date', false, false); 

$birth = new DateTime($birth);
$today = new DateTime($today);

$age = date_diff($today, $birth);

if ($age->y >= 1) {
    
    $age = $age->y . ' years';

} elseif ($age->m >= 1) {

    $age = $age->m . ' months';

} else {

    $age = $age->d . ' days';
}

?>

<div class="container" id="content">

    <div class="row justify-content-center">

        <div class="col content-area" id="primary">

            <article class="border">
                
                <h1 class="text-center border-bottom pb-2 pt-2"><?php the_title(); ?></h1>
                
                <img class="img-fluid dog-image mx-auto mb-3 mt-3 d-block" src="<?php the_field('dog_image'); ?>" alt="<?php _e('Dog image', 'myportfolio'); ?>">
                
                <div class="dog-single-content">
                    
                    <?php the_content(); ?>

                </div> <!-- dog-single-content -->

                <footer class="entry-footer">

                <ul class="list-group list-group-flush border-top">

                    <li class="list-group-item px-0 pt-0 pb-0 d-flex flex-row">

                        <div class="append-area">

                            <p class="text-center dog-age border-right mb-0 px-3 pt-3 pb-3"><?php _e('Sex', 'myportfolio'); ?></p>

                        </div> <!-- append-area -->
                        
                        <div class="field-area">

                            <p class="text-left dog-age mb-0 px-3 pt-3 pb-3"><?php _e(ucfirst(get_field('dog_sex')), 'myportfolio'); ?></p>

                        </div> <!-- field-area -->

                    </li> <!-- list-group-item -->

                    <li class="list-group-item px-0 pt-0 pb-0 d-flex flex-row">

                        <div class="append-area">

                            <p class="text-center dog-age border-right mb-0 px-3 pt-3 pb-3"><?php _e('Age', 'myportfolio'); ?></p>

                        </div> <!-- append-area -->
                        
                        <div class="field-area">

                            <p class="text-left dog-age mb-0 px-3 pt-3 pb-3"><?php _e($age, 'myportfolio'); ?> (<?php _e(the_field('dog_birth_date'), 'myportfolio'); ?>)</p>
                      
                        </div> <!-- field-area -->

                    </li> <!-- list-group-item -->

                    <li class="list-group-item px-0 pt-0 pb-0 d-flex flex-row">

                        <div class="append-area">

                            <p class="text-center dog-withers border-right mb-0 px-3 pt-3 pb-3"><?php _e('Withers', 'myportfolio'); ?></p>

                        </div> <!-- append-area -->
                        
                        <div class="field-area">

                            <p class="text-left dog-age mb-0 px-3 pt-3 pb-3"><?php echo strtolower(get_field('dog_withers')) . 'cm'; ?></p>

                        </div> <!-- field-area -->

                    </li> <!-- list-group-item -->

                    <li class="list-group-item px-0 pt-0 pb-0 d-flex flex-row">

                        <div class="append-area">

                            <p class="text-center dog-weight border-right mb-0 px-3 pt-3 pb-3"><?php _e('Weight', 'myportfolio'); ?></p>

                        </div> <!-- append-area -->
                        
                        <div class="field-area">

                            <p class="text-left dog-age mb-0 px-3 pt-3 pb-3"><?php echo strtolower(get_field('dog_weight')) . 'kg'; ?></p>

                        </div> <!-- field-area -->

                    </li> <!-- list-group-item -->

                    <li class="list-group-item px-0 pt-0 pb-0 d-flex flex-row" style="<?php 
                    
                        if (!get_field('dog_adoption_date')) {

                            echo 'display: none !important;'; 
                        } 
                        ?>">

                        <div class="append-area">

                            <p class="text-center dog-age border-right mb-0 px-3 pt-3 pb-3"><?php _e('Adopted', 'myportfolio'); ?></p>

                        </div> <!-- append-area -->
                        
                        <div class="field-area">

                            <p class="text-left dog-age mb-0 px-3 pt-3 pb-3"><?php _e(ucfirst(get_field('dog_adoption_date')), 'myportfolio'); ?></p>

                        </div> <!-- field-area -->

                    </li> <!-- list-group-item -->

                </ul> <!-- list-group -->

                <div class="category-list pl-1 pr-1">

                    <?php _e('Categories: ', 'myporfolio'); ?><?php the_category(', '); ?>

                </div>

                <div class="tags-list pl-1 pr-1">

                    <?php __(the_tags(), 'myportfolio'); ?>

                </div>
    
            </article> <!-- border -->

        </div> <!-- primary -->

    <?php get_template_part( 'sidebar-templates/sidebar', 'right' ); ?>

    </div> <!-- row -->

</div> <!-- content -->