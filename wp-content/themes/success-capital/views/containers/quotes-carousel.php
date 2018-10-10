<div class="quotes-carousel owl-theme container--main">
<?php

// check if the repeater field has rows of data
if( have_rows('quote') ):

     // loop through the rows of data

    while( have_rows('quote') ):
            the_row();
            ?>
            <div class="item">
                <h2 class="quotes-title"><?php the_sub_field('title') ?></h2> 
                <p class="quote"><?php the_sub_field('quote') ?></p> 
                <p class="author"><?php the_sub_field('author') ?></p> 
            </div>
            <?php
    endwhile;
endif;

?>
        

</div>