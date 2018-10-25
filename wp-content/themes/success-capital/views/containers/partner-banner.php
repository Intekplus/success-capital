<div class="partner-banner-wrapper container-fluid">
    <div class="down-arrow-container">
        <a class="down-arrow" id="main-page-arrow">
            ↓
        </a>
    </div>
    <div class="partner-outer">
        <div class="partner-bg" style="background-image:url('<?php echo get_site_url(); ?>/wp-content/themes/success-capital/assets/img/images/texture.png')"></div>
        <div class="partner-banner">
            <div class="container--main">
                <div class="col">
                    <h1>
                        <?php the_sub_field("title") ?>
                    </h1>
                    <h3>
                        <?php the_sub_field("subtitle") ?>
                    </h3>
                    <p>
                        <?php the_sub_field("content") ?>
                    </p>
                    <div>
                        <a class="bg-white button" href="<?php the_sub_field(" button_link") ?>">
                            <?php the_sub_field("button_text") ?></a>
                    </div>
                </div>
                <div class="carousel-container">
                    <div class="carousel-title">
                        <?= __tr('Nos partenaires bancaires et immobiliers') ?>
                    </div>
                    <?php include(locate_template("./views/components/partner-carousel.php")); ?>
                </div>
            </div>
        </div>
    </div>
</div>