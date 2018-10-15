<div class="flat-partners-wrapper" >  
    <div class="carousel-container container--main">
        <div class="carousel-title"><?php the_sub_field('title') ?></div>
        <div class="partner-carousel owl-theme">
            <?php
            // check if the repeater field has rows of data
            if( have_rows('partners', "options") ):

                // loop through the rows of data
                while( have_rows('partners', "options") ):
                    the_row();
                        ?>
                            <div class="item"><img src="<?php the_sub_field('logo') ?>"></div>
                        <?php
                endwhile;
            endif;
            ?>            
        </div>
    </div>
</div>