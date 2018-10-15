$(function() {
  $('#news-content').on('click', '#filter-news', function(e) {
    e.preventDefault();
    var filters = [];

    $('#news-filters input[type=checkbox]:checked').each(function() {
      filters.push($(this).val());
    });

    var category = filters.length ? '?category=' + filters.join() : '';
    var link = `http://localhost:3000/actualites/${category}`;
    var params = category ? category : location.pathname;

    window.history.replaceState('', '', `${params}`);
    $('#news-content').html('Loading...');
    $('#news-content').load(link + ' #news-content>*');
  });
});
