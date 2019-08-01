<?php 

$countries = get_the_terms(get_the_ID(), 'country');
$sexes = get_the_terms(get_the_ID(), 'sex');

$birth = get_field('dog_birth_date', false, false); 

$birth = new DateTime($birth);
$today = new DateTime($today);

$age = date_diff($today, $birth);

$years = $age->y;
$months = $age->m;
$days = $age->d;

// year pluralization
if ($age->y > 1) {
    $years .= ' years';

} elseif ($age->y == 1) {
    $years .= ' year';

} else {
    $years = null;
}

// month pluralization
if ($age->m > 1) {
    $months .= ' months ';

} elseif ($age->m == 1) {
    $months .= ' month ';

} else {
    $months = null;
}

// day pluralization
if ($age->d > 1) {
    $days .= ' days ';

} elseif ($age->d == 1) {
    $days .= ' day ';

} else {
    $days = null;
}

// some additional conditions for pluralization (it ain't much but it's honest work)
if ($years && $months && $days) {
    $age = sprintf(__('%s, %s and %s', 'sosa'), $years, $months, $days);

} elseif ($years && $months && !$days) {
    $age = sprintf(__('%s and %s', 'sosa'), $years, $months);

} elseif ($years && !$months && $days) {
    $age = sprintf(__('%s and %s', 'sosa'), $years, $days);

} elseif (!$years && $months && $days) {
    $age = sprintf(__('%s and %s', 'sosa'), $months, $days);

} elseif ($years && !$months && !$days) {
    $age = __($years, 'sosa');

} elseif (!$years && $months && !$days) {
    $age = __($months, 'sosa');

} elseif (!$years && !$months && $days) {
    $age = __($days, 'sosa');

} else {
    $age = sprintf(__('%s %s %s', 'sosa'), $years, $months, $days);
}

?>

<div class="container" id="content">

    <div class="row justify-content-center">

        <div class="col content-area" id="primary">

            <article class="border">
                
                <h1 class="text-center border-bottom pb-2 pt-2"><?php the_title(); ?></h1>
                
                <?php echo wp_get_attachment_image(get_field('dog_image'), 'dog-card'); ?>
                
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

                            <p class="dog-sex mb-0 px-2 pt-2 pb-2"><?php

                            if ($sexes) {
                            
                                foreach ($sexes as $sex) {

                                    echo $sex->name;
                                }

                            } else {

                                echo "N/A";
                            }
            
                            ?></p>

                            <div class="field-area">

                        </div> <!-- field-area -->

                    </li> <!-- list-group-item -->

                    <li class="list-group-item px-0 pt-0 pb-0 d-flex flex-row">

                        <div class="append-area border-right">

                            <p class="text-center dog-age mb-0 px-2 pt-2 pb-2"><?php _e('Country', 'sosa'); ?></p>

                        </div> <!-- append-area -->
                        
                        <div class="field-area">

                        <p class="dog-sex mb-0 px-2 pt-2 pb-2"><?php

                            if ($countries) {

                                foreach ($countries as $country) {

                                    echo $country->name;
                                }

                            } else {

                                echo "N/A";
                            }

                            ?></p>
                      
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

                    <li class="list-group-item px-0 pt-0 pb-0 d-flex flex-row">

                        <div class="append-area border-right">

                            <p class="text-center dog-age mb-0 px-2 pt-2 pb-2"><?php _e('Adopted', 'sosa');  ?></p>

                        </div> <!-- append-area -->
                        
                        <div class="field-area">

                            <p class="dog-age mb-0 px-2 pt-2 pb-2"><?php 
                            
                            if (get_field('dog_adoption_date')) { 
                            
                                _e(ucfirst(get_field('dog_adoption_date')), 'sosa');

                            } else {
                                
                                _e('Not adopted', 'sosa'); 
                            }
                            
                            ?></p> <!-- dog-age -->

                        </div> <!-- field-area -->

                    </li> <!-- list-group-item -->

                </ul> <!-- list-group -->

                <div class="posts-links pl-1 pr-1">

                    <span><?php next_post_link('&laquo; %link'); ?></span>

                    <span class="float-right"><?php previous_post_link('%link &raquo;'); ?></span>

                </div> <!-- posts-links -->
    
            </article> <!-- border -->

        </div> <!-- primary -->

    </div> <!-- row -->

</div> <!-- content -->