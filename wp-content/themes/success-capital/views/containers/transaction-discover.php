<?php

$args = [
  'post_type'   => 'property',
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
    'field'    => 'name',
    'terms'    => $data["location_tax"],
  );

        
$property = new WP_Query( $args );

if( $property->have_posts() ) :
  while( $property->have_posts() ) :
    $property->the_post();
    $data = [
      "title" => get_field('title'),
      "images" => get_field('images'),
      "price" => get_field('price'),
      "area" => get_field('area'),
      "rooms" => get_field('rooms'),
      "description" => get_field('description'),
      "budget" => get_the_terms( get_the_ID(), 'budget' )[0]->name,
      "room" => get_the_terms( get_the_ID(), 'room' )[0]->name,
      "location" => get_the_terms( get_the_ID(), 'location' )[0]->name,
      "link" => get_permalink(),
      ];
    include( locate_template("./views/containers/transactions/item.php"));
  endwhile;
  wp_reset_postdata();
endif;

