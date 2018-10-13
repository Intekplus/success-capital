<div class="header-info-transaction">
  <?php include(locate_template("./views/containers/header-description.php")); ?>
  <div class="header-specs">
    <h2><?= __("Caractéristiques", "intek-theme") ?></h2>

    <h3><?= __("Numéro de référence", "intek-theme") ?></h3>
    <p><?= $data["id"] ?></p>

    <h3><?= __("Type de bien", "intek-theme") ?></h3>
    <p><?= $data["type"] ?></p>

    <h3><?= __("Localisation", "intek-theme") ?></h3>
    <p><?= $data["location"]["address"] ?></p>

    <h3><?= __("Prix", "intek-theme") ?></h3>
    <p><?= $data["price"] . ' €' ?></p>
  </div>
</div>