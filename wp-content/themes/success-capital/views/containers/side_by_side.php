<div class="side_by_side-wrapper <?php echo get_sub_field('content_left')?'content-left container--main-left': 'content-right container--main-right' ?>">
    <div class="side_by_side content">
        <?php the_sub_field('content') ?> 
        <?php if(!empty(get_sub_field('button_link'))) { ?>
            <div class="btn-wrapper">
                <a class="button bg-blue-left" href="<?php the_sub_field('button_link') ?>"><?php the_sub_field('button_text') ?></a>
            </div>
        <?php } ?>
    </div>
    <div class="image-container">
        <div class="partner-banner" style="background-image:url('<?php echo get_site_url(); ?>/wp-content/themes/success-capital/assets/img/images/BG.svg')">
        </div>
        <img class="<?php echo get_sub_field('shadow_on_image')?'image-shadow':'' ?>" src="<?php the_sub_field('image') ?>">
    </div>
</div>