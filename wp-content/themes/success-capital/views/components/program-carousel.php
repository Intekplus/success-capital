<?php
$query = new WP_Query(array(
  'posts_per_page' => 10,
  'post_type' => 'programme'
));
?>

<div class="transactions-program-container">
  <div class="container--main">
    <div class="top">
      <div class="info">
        <h2>Découvrez également</h2>
      </div>
    </div>
    <?php include(locate_template('./views/components/program-transactions-carousel.php')) ?>
  </div>
</div>