<?php
function get_news_build()
{
  if (have_rows('page')) {

    // loop through the rows of data
    while (have_rows('page')) {
      the_row();
      switch (get_row_layout()) {
        case 'text':          
          include(locate_template('./views/containers/news/text.php'));
          break;
        case 'twitter':
          include(locate_template('./views/containers/news/twitter.php'));
          break;
        case 'media':
          include(locate_template('./views/containers/news/video.php'));
          break;
        case '2_cols':
          include(locate_template('./views/containers/news/2-cols.php'));
          break;
      }
    }
  }
}