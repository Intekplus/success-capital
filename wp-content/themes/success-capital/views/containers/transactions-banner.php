<?php
$query = new WP_Query(array(
  'posts_per_page' => 10,
  'post_type' => 'property'
));

$is_transactions = true;
?>

<div class="transactions-program-container">
    <div class="top container--main">
      <div class="info">
        <h2><?php the_sub_field('title') ?></h2>
        <p><?php the_sub_field('description') ?></p>
        <div class="btn-container">
          <a class="button bg-blue-left" href="./transactions"><?= __tr('En savoir plus') ?></a>
        </div>
      </div>
      <div class="arrow">
        <?= __tr('Nos coups de cœur') ?>
      </div>
    </div>
    <?php include(locate_template('./views/components/program-transactions-carousel.php')) ?>
</div>