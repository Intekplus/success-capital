<?php

$args = [
  'post_type' => 'property',
  'posts_per_page' => 10,
  'post__not_in' => array($data["post_id"]),
  'meta_query' => array(),
  'tax_query' => array(
    'relation' => 'AND',
  ),
];

$args["tax_query"][] =
  array(
  'taxonomy' => 'location',
  'field' => 'name',
  'terms' => $data["location_tax"],
);


$property = new WP_Query($args);

if ($property->have_posts()) :
  echo '<div class="discover-carousel-container">';
echo '<h2>' . __tr('Découvrez également') . '</h2>';
echo '<div class="discover-carousel owl-theme owl-carousel">';
while ($property->have_posts()) :
  $property->the_post();
$data = [
  "title" => get_field('title'),
  "images" => get_field('images'),
  "price" => number_format(get_field('price'), 0, ',', ' '),
  "area" => get_field('area'),
  "rooms" => get_field('rooms'),
  "description" => get_field('description'),
  "budget" => get_the_terms(get_the_ID(), 'budget') ? get_the_terms(get_the_ID(), 'budget')[0]->name : '',
  "room" => get_the_terms(get_the_ID(), 'room') ? get_the_terms(get_the_ID(), 'room')[0]->name : '',
  "location" => get_the_terms(get_the_ID(), 'location') ? get_the_terms(get_the_ID(), 'location')[0]->name : '',
  "link" => get_permalink(),
];
include(locate_template("./views/containers/transactions/item.php"));
endwhile;
echo '</div>';
echo '</div>';
wp_reset_postdata();
endif;

