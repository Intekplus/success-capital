<?php

get_header();

if (have_posts()) {
    while (have_posts()) {
        the_post();
        ?>

<div class="container-fluid">
    <div class="container--main">
        <?php the_content() ?>
    </div>
</div>

<?php

} // end while
} // end if

get_footer();

?>