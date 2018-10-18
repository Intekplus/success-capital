<div class="partner-banner-wrapper container-fluid">
    <div class="partner-banner" style="background-image:url('<?php echo get_site_url(); ?>/wp-content/uploads/2018/09/BG.svg')">
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
                    <a class="bg-white button" href="<?php the_sub_field("button_link") ?>">
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