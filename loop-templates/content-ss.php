
<div class="col d-none d-sm-none d-md-block rounded" style="background: url('<?php echo get_field('ss_background_image') . ' '; 
the_field('ss_background_image_url'); ?>'); background-size: 100% 100%;">

    <div class="ss-content container">

    <h1 class="ss-title text-center" style="height: 3rem;"><?php the_title(); ?></h1>

        <?php the_content(); ?>

    </div> <!-- ss-content -->
            
</div> <!-- col -->