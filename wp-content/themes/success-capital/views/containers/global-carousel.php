<div class="global-carousel-wrapper container--main-left">
    <div class="header">   
        <h3><?php the_sub_field('title') ?></h3>
        <p><?php the_sub_field('content') ?></p>
        <a class="button bg-blue-left" href="<?php the_sub_field('button_link') ?>"><?php the_sub_field('button_text') ?></a>
    </div>
    <div class="global-carousel owl-theme ">
    <?php

    // check if the repeater field has rows of data
    if( have_rows('carousel-elements') ):

        // loop through the rows of data

        while( have_rows('carousel-elements') ):
                the_row();
                ?>
                <div class="item">
                    <?php include(locate_template("./views/components/employee.php" )); ?>
                </div>
                <?php
        endwhile;
    endif;

    ?>
            

    </div>

</div>