<div class="col">

    <div class="usp img-fluid">

        <div class="usp-icon d-flex flex-row justify-content-center">
            <i class="fas <?php the_field('usp_icon'); ?>"></i>
        </div>

        <h1 class="usp-title"><?php the_field('usp_title'); ?></h1>
        <p class="usp-text"><?php the_field('usp_text'); ?></p>
                    
    </div> <!-- usp -->
    
</div> <!-- col -->

<style>

    .usp {
        background-image: url("<?php the_field('usp_background_image_url'); ?>");
    }

</style>
