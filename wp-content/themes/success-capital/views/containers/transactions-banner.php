<?php
$query = new WP_Query(array(
  // 'category_name' => $cats,
  'posts_per_page' => 10,
  'post_type' => 'property'
));
?>

<div class="transactions-container">
  <div class="container--main">
    <div class="top">
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
    <div class="transactions-carousel owl-theme owl-carousel">
      <?php if ($query->have_posts()) {
        while ($query->have_posts()) {
          $query->the_post();
          $image = sizeOf(get_field('images')) ? get_field('images')[0]['image'] : '';
          $term = sizeOf(get_the_terms(get_the_ID(), 'location')) ? get_the_terms(get_the_ID(), 'location')[0]->name : '';
          ?>
          <a href="<?= get_the_permalink() ?>">
            <div class="transaction" style="background-image: url(<?= $image ?>)">
              <div class="lower">
                <div class="price">
                  <?= number_format(get_field('price'), 0, ',', ' ') . ' €' ?>
                </div>
                <div class="region">
                  <?= $term ?>
                </div>
              </div>
            </div>
          </a>
          <?php 
        } ?>
      <?php 
    } ?>
    </div>
  </div>
</div>