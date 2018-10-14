<div class="news-box" style="background-image: url(<?php the_post_thumbnail_url(); ?>)">
  <div class="info-container">
  <div class="info">
    <div class="date"><?php the_date(); ?></div>
    <h3><?php the_title(); ?></h3>
    <p><?= get_the_excerpt() ?></p>
  </div>
  <div class="read-more">
        <span class="arrow">→</span>
        <a href="<?= get_the_permalink() ?>"><?= __tr('Lire la suite') ?></a>
      </div>
      </div>
</div>
<div class="categories">
  Categories
</div>