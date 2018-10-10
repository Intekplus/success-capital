<?php $properties_taxonomies = array(
    array(
        'name' => get_taxonomy( "budget" )->name,
        'label' => get_taxonomy( "budget" )->label,
        'value' => isset($_GET["budget"]) ? $_GET["budget"] : "" ,
    ),
    array(
        'name' => get_taxonomy( "location" )->name,
        'label' => get_taxonomy( "location" )->label,
        'value' => isset($_GET["location"]) ? $_GET["location"] : "" ,
    ),
    array(
        'name' => get_taxonomy( "room" )->name,
        'label' => get_taxonomy( "room" )->label,
        'value' => isset($_GET["room"]) ? $_GET["room"] : "" ,
    ),
);
?>
<form class="properties_filters">
  <?php foreach($properties_taxonomies as $taxonomy) { 
      $raw_terms = get_terms([
        'taxonomy' => $taxonomy["name"],
        'hide_empty' => false,
        'orderby' => 'id', 
        'order' => 'DESC', 
      ]);

      $terms_names = [];
      foreach($raw_terms as $raw_term) {
        $terms_names[] = $raw_term->name;
      }
      include( locate_template("./views/containers/transactions/dropdown.php"));
  } ?>
  
  <div class="search-button-wrapper">
    <a href="#" class="button bg-blue-left">
      Rechercher
</a>
  </div>
</form>
