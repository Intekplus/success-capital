<div class="avantages-banner-wrapper">
    <div class="avantages-banner" style="background-image:url('<?php the_sub_field('background_image') ?>')">
        <div class="title">
        <?php the_sub_field('title') ?>
        </div>
        <div class="boxes-wrapper container--main">
            <div class="box text">
                <?php $box = get_sub_field('box_1') ?>
                <img src="<?php echo $box['icon'] ?>">
                <div class="text"><?php echo $box['text'] ?></div>
            </div>
            <div class="box text">
            <?php $box = get_sub_field('box_2') ?>
                <img src="<?php echo $box['icon'] ?>">
                <div class="text"><?php echo $box['text'] ?></div>
            </div>
            <div class="box text">
            <?php $box = get_sub_field('box_3') ?>
                <img src="<?php echo $box['icon'] ?>">
                <div class="text"><?php echo $box['text'] ?></div>
            </div>
        </div>
        <div class="button-wrapper">
            <a class="button bg-blue-left" href="<?php the_sub_field('button_link') ?>"><?php the_sub_field('button_text') ?></a>
        </div>
    </div>
</div>