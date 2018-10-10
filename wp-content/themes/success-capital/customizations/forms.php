<?php
add_action( 'wp_ajax_ajax_form', 'ajax_form' );
add_action( 'wp_ajax_nopriv_ajax_form', 'ajax_form' );

function ajax_form(){
    $name = $_POST['name'] ? $_POST['name']  : 'N/A';
    $email = $_POST['email'] ? $_POST['email']  : 'N/A';
    $message = $_POST['message'] ? $_POST['message']  : 'N/A';

    $data['name'] = $name;
    $data['email'] = $email;
    $data['message'] = $message;

    echo json_encode( send_email_form( $data ) );
    
    wp_die();
}

function send_email_form( $data ) {
    $to = get_field('email', 'option');
    $subject = __tr('Prestige Management - New message');
    $message = get_form_email( $data['name'], $data['email'], $data['message'] );

    $resp['status'] = 'error';
    $resp['message'] = __tr('Message could not be sent.');

    if( wp_mail( $to, $subject, $message ) ) {
        $resp['status'] = 'success';
        $resp['message'] = __tr('Thank you, message sent.');
    }

    return $resp;
}

function get_form_email( $name, $email, $message ){
    $blog = get_bloginfo('name');
    return "<!DOCTYPE html>
    <html xmlns='http://www.w3.org/1999/xhtml' xmlns:v='urn:schemas-microsoft-com:vml' xmlns:o='urn:schemas-microsoft-com:office:office'>
       <head>
          <title></title>
          <!--[if !mso]><!-- -->  
          <meta http-equiv='X-UA-Compatible' content='IE=edge'>
          <!--<![endif]-->
          <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
          <meta name='viewport' content='width=device-width, initial-scale=1.0'>
          <style type='text/css'>  #outlook a { padding: 0; }  .ReadMsgBody { width: 100%; }  .ExternalClass { width: 100%; }  .ExternalClass * { line-height:100%; }  body { margin: 0; padding: 0; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; }  table, td { border-collapse:collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; }  img { border: 0; height: auto; line-height: 100%; outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; }  p { display: block; margin: 13px 0; }</style>
          <!--[if !mso]><!-->
          <style type='text/css'>  @media only screen and (max-width:480px) {    @-ms-viewport { width:320px; }    @viewport { width:320px; }  }</style>
          <!--<![endif]--><!--[if mso]>
          <xml>
             <o:OfficeDocumentSettings>
                <o:AllowPNG/>
                <o:PixelsPerInch>96</o:PixelsPerInch>
             </o:OfficeDocumentSettings>
          </xml>
          <![endif]--><!--[if lte mso 11]>
          <style type='text/css'>  .outlook-group-fix {    width:100% !important;  }</style>
          <![endif]--><!--[if !mso]><!-->    
          <link href='https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
          <style type='text/css'>        @import url(https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700);    </style>
          <!--<![endif]-->
          <style type='text/css'>  @media only screen and (min-width:480px) {    .mj-column-per-100 { width:100%!important; }  }</style>
       </head>
       <body style='background: #FFFFFF;'>
          <div class='mj-container' style='background-color:#FFFFFF;'>
             <!--[if mso | IE]>      
             <table role='presentation' border='0' cellpadding='0' cellspacing='0' width='600' align='center' style='width:600px;'>
                <tr>
                   <td style='line-height:0px;font-size:0px;mso-line-height-rule:exactly;'>
                      <![endif]-->
                      <div style='margin:0px auto;max-width:600px;'>
                         <table role='presentation' cellpadding='0' cellspacing='0' style='font-size:0px;width:100%;' align='center' border='0'>
                            <tbody>
                               <tr>
                                  <td style='text-align:center;vertical-align:top;direction:ltr;font-size:0px;padding:9px 0px 9px 0px;'>
                                     <!--[if mso | IE]>      
                                     <table role='presentation' border='0' cellpadding='0' cellspacing='0'>
                                        <tr>
                                           <td style='vertical-align:top;width:600px;'>
                                              <![endif]-->
                                              <div class='mj-column-per-100 outlook-group-fix' style='vertical-align:top;display:inline-block;direction:ltr;font-size:13px;text-align:left;width:100%;'>
                                                 <table role='presentation' cellpadding='0' cellspacing='0' width='100%' border='0'>
                                                    <tbody>
                                                       <tr>
                                                          <td style='word-wrap:break-word;font-size:0px;padding:0px 20px 0px 20px;' align='left'>
                                                             <div style='cursor:auto;color:#000000;font-family:Ubuntu, Helvetica, Arial, sans-serif;font-size:11px;line-height:22px;text-align:left;'>
                                                                <h1 style='font-family: &apos;Cabin&apos;, sans-serif; line-height: 100%;'>New message from ${blog}.</h1>
                                                                <p>Name:&#xA0;<em>${name}</em></p>
                                                                <p>Email:&#xA0;<em>${email}</em></p>
                                                                <p>Message: <br/><em>${message}</em></p>
                                                             </div>
                                                          </td>
                                                       </tr>
                                                    </tbody>
                                                 </table>
                                              </div>
                                              <!--[if mso | IE]>      
                                           </td>
                                        </tr>
                                     </table>
                                     <![endif]-->
                                  </td>
                               </tr>
                            </tbody>
                         </table>
                      </div>
                      <!--[if mso | IE]>      
                   </td>
                </tr>
             </table>
             <![endif]-->
          </div>
       </body>
    </html>";
}