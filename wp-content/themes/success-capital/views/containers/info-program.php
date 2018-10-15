<div class="header-info-transaction">
  <div class="header-description">
    <a href="<?= $data["backlink"] ?>">
      <?php include(locate_template("./assets/img/images/Back_normal.svg")); ?>
      <?= $data["backlink_title"] ?>
    </a>
    <p class="small-title">
      <?= __("Type de bien et localisation", "intek-theme") ?>
    </p>
    <h1 class="title"><?= $data["title"] ?></h1>
    <div class="description-program">
      <p><?= $data["description"] ?></p>
    </div>
  </div>
  <div class="header-specs program">
    <h2><?= __("Informations", "intek-theme") ?></h2>
    <?php
    foreach ($data["files"] as $file) {
      ?>
      <p>        
        <a href="<?= $file['file'] ?>">
          <?php include(locate_template("./assets/img/images/PDF_Normal.svg")); ?>
          <span><?= $file['filename'] ?><span>
        </a>
      </p>
      <?php 
    } ?>
  </div>
</div>