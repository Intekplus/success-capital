<?php
$query = new WP_Query(array(
  'posts_per_page' => 10,
  'post_type' => 'programme'
));
?>

<div class="transactions-program-container no-bg">
  <div class="container--main">
    <div class="top">
      <div class="info">
        <?php if (is_single()) { ?>
        <h2><?= __tr('Découvrez également') ?></h2>
        <?php 
      } else { ?>
        <h2><?= get_sub_field('title') ?></h2>
      <?php 
    } ?>
      </div>
    </div>
    <?php include(locate_template('./views/components/program-transactions-carousel.php')) ?>
  </div>
</div>