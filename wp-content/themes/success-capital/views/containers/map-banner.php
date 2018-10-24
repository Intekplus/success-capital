<?php 
$location;
if (get_sub_field('localisation')) {
    $location = get_sub_field('localisation');
} else if (get_field('location')) {
    $location = get_field('location');
}
?>

<div class="map" style="height: 450px">
</div>
<div class="marker <?= isset($hide_address) ? 'hide' : '' ?>" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>">
    <div class="location icon-group">
        <span class="field"><i class="fas fa-map-marker-alt"></i>
            <p><?php the_field('address', 'option'); ?></p>
        </span>
    </div>
</div>