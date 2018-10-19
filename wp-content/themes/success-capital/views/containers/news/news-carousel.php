<?php 
$query = new WP_Query(array(
  'post_type' => 'post',
  'posts_per_page' => 10,
));
?>

<?php if ($query->have_posts()) { ?>
<div class="container--main">
  <?php echo '<h2>' . __tr('Découvrez également') . '</h2>'; ?>
</div>
<div class="container--main news-carousel-wrapper">
  <div class="news-carousel owl-theme owl-carousel">
    <?php while ($query->have_posts()) { ?>
    <?php $query->the_post() ?>
    <?php include(locate_template('./views/components/news-box.php')); ?>
    <?php 
  } ?>
  </div>
</div>
<?php 
} ?>