$(function() {
  function sendMail(fields, form) {
    $.ajax({
      url: WPURLS.ajaxurl,
      data: {
        action: 'ajax_send_contact_mail',
        fields,
      },
      method: 'POST',
      beforeSend: function(){
        form.html('<div class="loader-container"><img src="../../wp-content/themes/success-capital/assets/img/images/loader.gif"></div>');
      },
      success: function(data) {
        if(data === 'success'){
          form.html('<p>Message envoyé!</p>');
        } else {
          console.log('error')
        }
      },
      error: function(err) {
        console.log(err); // TODO: Error handling
      },
    });
  }

  $('.submit-button a').click(function(e) {
    e.preventDefault();
    const form = $(this).parents('form');
    let send = true;

    form.find('input, textarea').each(function() {
      if (!$(this).val()) {
        send = false;
        $(this).addClass('error');
      } else {
        $(this).removeClass('error');
      }
    });

    if (send) {
      sendMail(form.serializeArray(), form);
    }
  });
});
