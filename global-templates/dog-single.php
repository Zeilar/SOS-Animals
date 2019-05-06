<div class="container" id="content">

    <div class="row justify-content-center">

        <div class="col content-area" id="primary">

            <article class="border">
                
                <h1 class="text-center border-bottom pb-2 pt-2"><?php the_title(); ?></h1>
                
                <img class="img-fluid dog-image mx-auto mb-3 mt-3 d-block" src="<?php the_field('dog_image'); ?>" alt="<?php _e('Dog image', 'myportfolio'); ?>">

                <footer class="entry-footer">

                <ul class="list-group list-group-flush border-top">

                    <li class="list-group-item px-0 pt-0 pb-0 d-flex flex-row">

                        <div class="append-area">

                            <p class="text-center dog-age border-right mb-0 px-3 pt-3 pb-3">Age</p>

                        </div>
                        
                        <div class="field-area">

                            <p class="text-left dog-age mb-0 px-3 pt-3 pb-3"><?php the_field('dog_age'); ?></p>

                        </div>

                    </li> <!-- list-group-item -->

                    <li class="list-group-item px-0 pt-0 pb-0 d-flex flex-row">

                        <div class="append-area">

                            <p class="text-center dog-withers border-right mb-0 px-3 pt-3 pb-3"><?php _e('Withers', 'myportfolio'); ?></p>

                        </div>
                        
                        <div class="field-area">

                            <p class="text-left dog-age mb-0 px-3 pt-3 pb-3"><?php the_field('dog_withers'); ?></p>

                        </div>

                    </li> <!-- list-group-item -->

                    <li class="list-group-item px-0 pt-0 pb-0 d-flex flex-row">

                        <div class="append-area">

                            <p class="text-center dog-weight border-right mb-0 px-3 pt-3 pb-3"><?php _e('Weight', 'myportfolio'); ?></p>

                        </div>
                        
                        <div class="field-area">

                            <p class="text-left dog-age mb-0 px-3 pt-3 pb-3"><?php the_field('dog_weight'); ?></p>

                        </div>

                    </li> <!-- list-group-item -->

                    <li class="list-group-item px-0 pt-0 pb-0 d-flex flex-row <?php 
                    
                        if (!get_field('dog_adoption_date')) {

                            echo 'd-none d-sm-none'; 
                        } 
                        ?>">

                        <div class="append-area">

                            <p class="text-center dog-age border-right mb-0 px-3 pt-3 pb-3"><?php _e('Adopted', 'myportfolio'); ?></p>

                        </div>
                        
                        <div class="field-area">

                            <p class="text-left dog-age mb-0 px-3 pt-3 pb-3"><?php echo the_field('dog_adoption_date'); ?></p>

                        </div>

                    </li> <!-- list-group-item -->

                </ul> <!-- list-group -->
    
            </article>

        </div> <!-- primary -->

    <?php get_template_part( 'sidebar-templates/sidebar', 'right' ); ?>

    </div> <!-- row -->

</div> <!-- content -->