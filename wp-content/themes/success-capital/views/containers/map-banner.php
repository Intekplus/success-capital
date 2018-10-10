<div class="map" style="height: 450px">
    <?php $location = get_sub_field('localisation'); ?>
    
</div>
<div class="marker" address="test" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>">
    <div class="location">
        test
    </div>
</div>