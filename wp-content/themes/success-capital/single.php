<?php

get_header();

if (have_posts()) {
    while (have_posts()) {
        the_post();
        ?>

<div class="container-fluid">
    <div>
        <div class="top-banner" style="background-image: url('<?= get_the_post_thumbnail_url() ?>')">
            <div class="white-overlay"></div>
            <div class="date">
                <?= get_the_date() ?>
            </div>
            <div class="title">
                <?php the_title() ?>
            </div>
            <div class="subtitle">
                <?= get_field('subtitle') ?>
            </div>
            <div class="shares">
                <span><?= __tr('Partager') ?></span>
                <a href="http://twitter.com/home?status=<?= get_the_title() ?>+<?= get_permalink() ?>"><i class="fab fa-twitter"></i></a>
                <a href="https://www.facebook.com/sharer/sharer.php?u=<?= get_permalink() ?>&t=<?= get_the_title() ?>"><i class="fab fa-facebook-f"></i></a>
            </div>
        </div>
        <div class="shadow-container container-fluid">
            <div class="content-box container--main">
                <div class="box">
                    <div class="header-description">
                        <a href="<?= get_permalink( get_option( 'page_for_posts' ) ); ?>">
                            <?php include( locate_template("./assets/img/images/Back_normal.svg")); ?>
                            <?= __tr('Retour aux articles') ?>
                        </a>
                    </div>
                    <?php get_news_build() ?>
                </div>
            </div>
        </div>
        <div class="content-box discover-news">
            <?php include(locate_template('./views/containers/news/news-carousel.php')) ?>
        </div>
    </div>
</div>


<?php

} // end while
} // end if

get_footer();

?>