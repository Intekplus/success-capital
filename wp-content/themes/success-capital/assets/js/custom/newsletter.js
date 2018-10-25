$(function() {
  $('.newsletter .send-btn').click(function(e) {
    e.preventDefault();
    const wrapper = $(this).parents('.newsletter-wrapper');
    const email = wrapper.find('#email').val();
    wrapper.fadeOut();
    $.ajax({
      url: WPURLS.ajaxurl,
      data: {
        action: 'ajax_add_to_newsletter',
        email,
      },
      method: 'POST',
      success: function(data) {
        const response = JSON.parse(data);
        if (response.status == 'success') {
          wrapper.html('Envoyé!');
          wrapper.fadeIn();
        } else {
          wrapper.html('Erreur');
          console.log(response.message);
        }
      },
      error: function(err) {
        console.log(err); // TODO: Error handling
      },
    });
  });
});
