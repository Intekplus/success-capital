<?php
$data = [
  "title" => get_field('title'),
  "images" => get_field('images'),
  "price" => number_format(get_field('price'), 0, ',', ' '),
  "area" => get_field('area'),
  "rooms" => get_field('rooms'),
  "description" => get_field('description'),
  "description_2" => get_field('description_2'),
  "area" => get_field('area'),
  "id" => get_field('id'),
  "type" => get_field('type'),
  "budget" => get_the_terms(get_the_ID(), 'budget') ? get_the_terms(get_the_ID(), 'budget')[0]->name : '',
  "room" => get_the_terms(get_the_ID(), 'room') ? get_the_terms(get_the_ID(), 'room')[0]->name : '',
  "location" => get_field('location'),
  "location_tax" => get_the_terms(get_the_ID(), 'location') ?  get_the_terms(get_the_ID(), 'location')[0]->name : '',
  "bedrooms" => get_field('bedrooms'),
  "is_transaction" => true,
  "backlink" => __("/transactions", "intek-theme"),
  "backlink_title" => __("Retourner aux articles", "intek-theme"),
  "post_id" => get_the_ID(),
];


$hide_address = true;

get_header(); ?>

<div class="wrap">
	<div class="content container-fluid">
    <?php include(locate_template("./views/containers/image-preview-banner.php")); ?>
    <?php include(locate_template("./views/containers/header-info-transaction.php")); ?>
    <?php include(locate_template("./views/containers/transaction-agent.php")); ?>
    <?php include(locate_template("./views/containers/transaction-discover.php")); ?>
    <?php include(locate_template("./views/containers/transactions/contact-modal.php")); ?>
	</div>
</div>

<?php get_footer(); ?>