<div class="item transaction-card">
  <a href="<?php echo $data['link'] ?>">
    <div class="transaction">
      <?php
      $images = get_field('images');
      if (sizeof($images)) {
        ?>
          <img class="transaction-image" src="<?= $images[0]['image']; ?>">
        <?php 
      } ?>
    </div>
    <div class="card-footer">
    <h3 class="title"><?php echo $data['title'] ?></h3>
    <span class="price"><?php echo $data['price'] ?>‎€</span>
      <div class="informations">
        <ul>
          <li>
            <img src="<?php echo get_site_url(); ?>/wp-content/themes/success-capital/assets/img/images/map.svg">
            <?php echo $data['location'] ?>
          </li>
          <li>
          <img src="<?php echo get_site_url(); ?>/wp-content/themes/success-capital/assets/img/images/chambre.svg">
            <?php echo $data['rooms'];
            echo " ";
            _tr('chambres') ?>
          </li>
          <li>
          <img src="<?php echo get_site_url(); ?>/wp-content/themes/success-capital/assets/img/images/dimensions.svg">
            <?php echo $data['area'] ?>m2
          </li>
        </ul>
      </div>
    </div>
  </a>
</div>