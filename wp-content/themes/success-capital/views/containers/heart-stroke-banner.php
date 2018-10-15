<div class="heart-stroke-wrapper" style="background-image:url('<?php the_sub_field('background_image') ?>')">
    <div class="heart-stroke container--main">
        <div class="header-button">
            <?php the_sub_field('header-content') ?>
            <a class="button bg-blue-left" href="<?php the_sub_field('button_link') ?>"><?php the_sub_field('button_text') ?></a>
            <div class="comp-title"> <?php _tr('Nos coups de coeur') ?></div>
        </div>
        <div class="column-wrapper">
            <div class="column">
                <?php $box = get_sub_field('stroke_1'); 
                include( locate_template("./views/components/heart-stroke-box.php"));
                ?>
            </div>
            <div class="column">
                <?php $box = get_sub_field('stroke_2');
                include( locate_template("./views/components/heart-stroke-box.php"));
                ?>
                <?php $box = get_sub_field('stroke_3');
                include( locate_template("./views/components/heart-stroke-box.php"));
                ?>
            </div>
        </div>
    </div>
</div>