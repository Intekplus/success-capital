<?php 

$query = new WP_Query(array(
  'posts_per_page' => 10,
  'post_type' => 'programme'
));

$is_transactions = false;

$hide_address = true;

$data = [
  "images" => get_field('images'),
  "price" => number_format(get_field('price'), 0, ',', ' '),
  "location" => get_field('location'),
  "area" => get_field('area'),
  "title" => get_field('title'),
  "description" => get_field('text'),
  "files" => get_field('files'),
  "backlink" => get_home_url() . '/immobilier-neuf',
  "backlink_title" => __("Retourner aux programmes", "intek-theme"),
  "from" => true,
]
?>
<?php get_header(); ?>
<div class="wrap">
	<div class="content container-fluid">
    <?php include(locate_template("./views/containers/image-preview-banner.php")); ?>
    <?php include(locate_template("./views/containers/info-program.php")); ?>
    <div class="program-map">
      <?php include(locate_template("./views/containers/map-banner.php")); ?>
    </div>
    <?php include(locate_template("./views/containers/transactions/contact-modal.php")); ?>
    <?php include(locate_template("./views/components/program-carousel.php")); ?>
	</div>
</div>
<?php get_footer(); ?>