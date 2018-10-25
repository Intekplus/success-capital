$(function() {
  function sendMail(fields) {
    console.log(fields)
    $.ajax({
      url: WPURLS.ajaxurl,
      data: {
        action: 'ajax_send_contact_mail',
        fields,
      },
      method: 'POST',
      success: function(data) {
        if(data === 'success'){
          console.log('sent')
        } else {
          console.log('error')
        }
      },
      error: function(err) {
        console.log(err); // TODO: Error handling
      },
    });
  }

  $('.submit-button a').click(function() {
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
      sendMail(form.serializeArray());
    }
  });
});
