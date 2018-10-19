<div class="global-carousel-wrapper container--main-left">
    <div class="header">   
        <h3><?php the_sub_field('title') ?></h3>
        <p><?php the_sub_field('content') ?></p>
        <a class="button bg-blue-left" href="<?php the_sub_field('button_link') ?>"><?php the_sub_field('button_text') ?></a>
    </div>
    <div class="global-carousel owl-theme ">
    <?php
$query = new WP_Query(array(
  'posts_per_page' => 10,
  'post_type' => 'employe'
));

?>

        <?php if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post();
                ?>
                    <div class="item">
                    <?php include(locate_template("./views/components/employee.php" )); ?>
                    </div>
                <?php
                }
        }

    ?>
            

    </div>

</div>