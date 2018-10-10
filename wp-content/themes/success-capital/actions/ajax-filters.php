<?php include( locate_template("./views/containers/transactions/list.php")); ?>

<?php 
function ajax_filtered_properties(){
    filtered_properties( $_POST["budget"], $_POST["location"], $_POST["room"]);
    wp_die();
  }

add_action('wp_ajax_ajax_filtered_properties', 'ajax_filtered_properties'); 
add_action('wp_ajax_nopriv_ajax_filtered_properties', 'ajax_filtered_properties');