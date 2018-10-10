<div class="doubleCol-banner-wrapper container--main">
    <div class="col">
        <h2><?php the_sub_field('title') ?></h2>
        <p><?php the_sub_field('text') ?></p>
        <a class="button bg-blue-left" href="<?php the_sub_field('button_link') ?>"><?php the_sub_field('button_text') ?></a>
    </div>
    <div class="col image">
        <img src="<?php the_sub_field('image') ?>">
    </div>

</div>