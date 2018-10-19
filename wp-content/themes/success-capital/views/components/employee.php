<div class="employee-container">
    <div class="employee-content">
        <img class="pic" alt="portrait" src="<?php the_field('image') ?>">
        <div class="employee-info">
            <h2 class="employee-name"><?php the_title() ?></h2>
            <h3 class="employee-title"><?php the_field('role') ?></h3>
        </div>
        <div class="employee-desc">
        <?php the_field('description') ?>
        </div>
        <div class="employee-email-container">
            <i class="fas fa-envelope"></i>
            <div class="employee-email"><?php the_field('email') ?></div>
        </div>
    </div>
</div>