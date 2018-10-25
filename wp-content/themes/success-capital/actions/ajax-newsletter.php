<?php
function ajax_add_to_newsletter()
{
  add_to_newsletter($_POST["email"]);
  wp_die();
}

add_action('wp_ajax_ajax_add_to_newsletter', 'ajax_add_to_newsletter');
add_action('wp_ajax_nopriv_ajax_add_to_newsletter', 'ajax_add_to_newsletter');

function add_to_newsletter($email)
{
  $curl = curl_init();

  curl_setopt_array($curl, array(
    CURLOPT_URL => "https://sarbacaneapis.com/v1/lists/ZWkbilUhRDaav1owPVoc9w/contacts",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => '{"email": "' . $email . '"}',
    CURLOPT_HTTPHEADER => array(
      "Content-Type: application/json",
      "accountId: 5aaa823b11ce621e9cf569e1",
      "apiKey: IYOnj1lvQhG7Mo5t40S6gw"
    ),
  ));

  $response = curl_exec($curl);
  $err = curl_error($curl);

  curl_close($curl);

  if ($err) {
    echo json_encode(array('status' => 'error', 'message' => $err));
  } else {
    echo json_encode(array('status' => 'success', 'message' => $response));
  }
}