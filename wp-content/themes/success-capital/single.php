<?php

get_header();

if (have_posts()) {
    while (have_posts()) {
        the_post();
        ?>

<div class="container-fluid">
    <div class="container--main">
        <div class="preparer-sa-retraite" style="background-image: url('<?= get_the_post_thumbnail_url() ?>')">
            <div class="retraite-text">
                <?php the_title() ?>
            </div>
        </div>
        <div class="shadow-container container-fluid">
            <div class="content-box container--main">
                <div class="box">
                    <?php get_news_build() ?>
                </div>
            </div>
        </div>
    </div>
</div>


<?php

} // end while
} // end if

get_footer();

?>