<div class="three-boxes-banner-wrapper">
    <div class="three-boxes-banner">
        <div class="title text">
        <?php the_sub_field('title') ?>
        </div>
        <div class="boxes-wrapper container--main">
            <div class="box text">
                <?php $box = get_sub_field('box_1') ?>
                <img src="<?php echo $box['icon'] ?>">
                <?php echo $box['text'] ?>
            </div>
            <div class="box text">
            <?php $box = get_sub_field('box_2') ?>
                <img src="<?php echo $box['icon'] ?>">
                <?php echo $box['text'] ?>
            </div>
            <div class="box text">
                <?php $box = get_sub_field('box_3') ?>
                <img src="<?php echo $box['icon'] ?>">
                <?php echo $box['text'] ?>
            </div>
        </div>
    </div>
</div>