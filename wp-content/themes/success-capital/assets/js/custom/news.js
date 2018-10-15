$(function() {
  $('#news-content').on('click', '#filter-news', function(e) {
    e.preventDefault();
    var filters = [];

    $('#news-filters input[type=checkbox]:checked').each(function() {
      filters.push($(this).val());
    });

    var category = filters.length ? '?category=' + filters.join() : '';
    var link = `${WPURLS.currenturl}/${category}`;
    var params = category ? category : location.pathname;

    window.history.replaceState('', '', `${params}`);
    $('#news-content').html('<div class="loader-container"><img src="../wp-content/themes/success-capital/assets/img/images/loader.gif"></div>');
    $('#news-content').load(link + ' #news-content>*');
  });
});
