<div class="partner-banner-wrapper container-fluid" >
    <div class="partner-banner" style="background-image:url('<?php echo get_site_url(); ?>/wp-content/uploads/2018/09/BG.svg')">    
        <div class="col container--main">
            <h1><?php the_sub_field("title") ?></h1>
            <h3><?php the_sub_field("subtitle") ?></h3>
            <p><?php the_sub_field("content") ?></p>
            <a class="bg-white button" href="<?php the_sub_field("button_link") ?>"><?php the_sub_field("button_text") ?></a>
        </div>
        <div class="carousel-container">
            <div class="carousel-title">Nos partenaires bancaires et immobiliers</div>
            <?php 
            include( locate_template("./views/components/partner-carousel.php"));
            ?>
        </div>
    </div>

</div>