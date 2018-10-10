
    <div class="three-column-container container--main">
        <div class="group-content">
            <div class="group-column">
                <?php $column1 = get_sub_field('column1'); ?>
                <div class="img-title">
                    <img src="<?php echo $column1['image']; ?>"/>
                    <div class="title"><?php echo $column1 ['title'] ?></div>
                </div>
                <div class="content"><?php echo $column1['content'] ?></div>
                </div>
                <div class="group-column">
                <?php $column2 = get_sub_field('column2'); ?>
                <div class="img-title">
                    <img src="<?php echo $column2['image']; ?>"/>
                    <div class="title"><?php echo $column2 ['title'] ?></div>
                </div>
                <div class="content"><?php echo $column2['content'] ?></div>
            </div>    
            <div class="group-column">
                <?php $column3 = get_sub_field('column3'); ?>
                <div class="img-title">
                    <img src="<?php echo $column3['image']; ?>"/>
                    <div class="title"><?php echo $column3 ['title'] ?></div>
                </div>
                <div class="content"><?php echo $column3['content'] ?></div>
            </div>
        </div>
        <div class="under-content">
            <div class="under-box"><?php the_sub_field('under_box') ?></div>
            <a class="button bg-blue-left" href="<?php the_sub_field("button_link") ?>"><?php the_sub_field("button_text") ?></a>
        </div>
    </div>



