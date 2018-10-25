<?php 
function ajax_send_contact_mail()
{
  if (send_contact_mail($_POST["fields"])) {
    echo 'success';
  } else {
    echo 'failed';
  }

  wp_die();
}

function send_contact_mail($fields)
{
  $message = "";
  foreach ($fields as $field) {
    $message .= "<p>${field['value']}</p>";
  }
  return wp_mail( get_field('email', 'option'), 'Nouveau message', $message);
}

add_action('wp_ajax_ajax_send_contact_mail', 'ajax_send_contact_mail');
add_action('wp_ajax_nopriv_ajax_send_contact_mail', 'ajax_send_contact_mail');