<div class="partner-carousel owl-theme">
<?php

// check if the repeater field has rows of data
if( have_rows('partners', "options") ):

     // loop through the rows of data
     $index = 0;
    while( have_rows('partners', "options") ):
        
        echo "<div class='partners'>";

        while ( true ) : 
            the_row();
            ?>
            <div class="item"><img src="<?php the_sub_field('logo') ?>"></div>
            <?php
            $index++;
            if($index % 2 == 0 )
                break;
        endwhile;
        echo "</div>";
    endwhile;
endif;

?>
        

</div>