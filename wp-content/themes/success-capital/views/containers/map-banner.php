<div class="map" style="height: 450px">
    <?php $location = get_sub_field('localisation'); ?>
    
</div>
<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>">
    <div class="location icon-group">
        <span class="field"><i class="fas fa-map-marker-alt"></i>
        <a>
            <?php the_field('address', 'option'); ?>
        </a>
        </span>

    </div>
</div>