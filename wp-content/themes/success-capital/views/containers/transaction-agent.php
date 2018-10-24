<div class="transaction-agent">
  <div class="transaction-agent-wrapper">
    <div class="employee-container transaction-agent-card">
      <div class="employee-content">
        <h1><?= __("Votre agent", "intek-theme") ?></h1>
        <img class="pic" alt="portrait" src="<?= get_field('image',get_field('agent')) ?>">
        <h2><?= get_the_title(get_field('agent')) ?></h2>
        <div class="employee-desc">
          <?= get_field('description',get_field('agent')) ?>
        </div>
        <a href="#" data-modal="#modal" class="button bg-blue-left modal__trigger">
          <?= __("Contacter", "intek-theme") ?>
        </a>
      </div>
    </div>
  </div>
  <?php include( locate_template("./views/containers/map-banner.php")); ?>
</div>
