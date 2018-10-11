<?php 
  $description = "Mouna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.";
  $image = get_site_url() . "/wp-content/themes/success-capital/assets/img/images/1GillesNoreils.jpeg";
  $name = "Gilles Noreils";
?>

<div class="transaction-agent">
  <div class="transaction-agent-wrapper">
    <div class="employee-container transaction-agent-card">
      <div class="employee-content">
        <h1><?= __("Votre agent", "intek-theme") ?></h1>
        <img class="pic" alt="portrait" src="<?= $image ?>">
        <h2><?= $name ?></h2>
        <div class="employee-desc">
          <?= $description ?>
        </div>
        <a href="#" class="button bg-blue-left">
          <?= __("Contacter", "intek-theme") ?>
        </a>
      </div>
    </div>
  </div>
  <?php include( locate_template("./views/containers/map-banner.php")); ?>
</div>
