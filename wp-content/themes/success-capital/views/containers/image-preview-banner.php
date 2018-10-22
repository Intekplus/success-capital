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
            <div class="piece">
              <svg class="" viewBox="0 0 24 24">
                <path xmlns="http://www.w3.org/2000/svg" id="Tracé_389" data-name="Tracé 389" class="cls-1" d="M118.153,2.03a.394.394,0,0,0,.394-.394V.394A.394.394,0,0,0,118.153,0H100.306a.394.394,0,0,0-.394.394V18.24a.394.394,0,0,0,.394.394h17.846a.394.394,0,0,0,.394-.394V2.95a.394.394,0,1,0-.789,0V9.707h-1.566a.394.394,0,1,0,0,.789h1.566v7.35H106.491V15.938a.394.394,0,1,0-.789,0v1.908h-5V.789h5V13.1a.394.394,0,0,0,.789,0V10.5h7.02a.394.394,0,1,0,0-.789h-7.02V.789h11.267v.847A.394.394,0,0,0,118.153,2.03Z" transform="translate(-99.412 0.5)"/>
              </svg>
            </div>
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
