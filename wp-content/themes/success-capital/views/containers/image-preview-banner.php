<div class="image-preview-banner">
  <div class="image-section" style="background-image:url('<?= $data["images"][0]['image'] ?>')">
    <div class="image-preview-carousel owl-theme">
      <?php foreach ($data["images"] as $image) { ?>
        <img class="image-preview-item" src="<?= $image['image'] ?>">         
      <?php 
    } ?>
    </div>
  </div>
  <div class="info-section">
    <div class="infos">
      <ul>
        <?php if (isset($data["location"])) { ?>
          <li>
            <img src="<?php echo get_site_url(); ?>/wp-content/themes/success-capital/assets/img/images/map.svg">
            <?= $data["location"]['address'] ?>
          </li>
        <?php 
      } ?>
        <?php if (isset($data["rooms"])) { ?>
          <li>
          <img src="<?php echo get_site_url(); ?>/wp-content/themes/success-capital/assets/img/images/chambre.svg">
            <?= $data["rooms"] . __(" pièces", "intek-theme") ?>
          </li>
        <?php 
      } ?>
        <?php if (isset($data["bedrooms"])) { ?>
          <li>
          <img src="<?php echo get_site_url(); ?>/wp-content/themes/success-capital/assets/img/images/chambre.svg">
            <?= $data["bedrooms"] . __(" chambres", "intek-theme") ?>
          </li>
        <?php 
      } ?>
        <?php if (isset($data["area"])) { ?>
          <li>
          <img src="<?php echo get_site_url(); ?>/wp-content/themes/success-capital/assets/img/images/dimensions.svg">
            <?= $data["area"] ?>
          </li>
        <?php 
      } ?>
      </ul>
    </div>
    <div class="cta-price">
      
      <?php
      if (isset($data["from"])) {
        echo '<p>' . __tr('À partir de '). $data["price"] . ' €' . '</p>';
      } else {
        echo '<p>' . $data["price"] . ' €' . '</p>';
      }
      ?>
      <button data-modal="#modal" class="modal__trigger">
          <?php
          if (isset($data["is_transaction"])) {
            _e("Ce bien m'intéresse", "intek-theme");
          } else {
            _e("Ce programme m'intéresse", "intek-theme");
          }
          ?>
      </button>
    </div>
  </div>
</div>
