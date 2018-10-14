<div class="news-box">
  <?php the_post_thumbnail(); ?>
  <div class="news-box-content">    
    <h3><?= get_the_title() ?></h3>
    <p><?= get_the_excerpt() ?></p>
    <div class="info">
      <div class="date">
        <?= get_the_date() ?>
      </div>
      <div class="read-more">
        <span class="arrow">→</span>
        <a href="<?= get_the_permalink() ?>"><?= __tr('Lire la suite') ?></a>
      </div>
    </div>
  </div>
</div>