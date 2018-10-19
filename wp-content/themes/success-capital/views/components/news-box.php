<div class="news-box">
  <a href="<?= get_the_permalink() ?>">
    <div class="category"><?= get_the_terms(get_the_ID(), 'category') ? get_the_terms(get_the_ID(), 'category')[0]->name : ''; ?></div>
    <?php the_post_thumbnail(); ?>
    <div class="news-box-content">  
      <div class="text">  
        <h3><?= get_the_title() ?></h3>
        <p><?= get_the_excerpt() ?></p>
      </div>  
      <div class="info">
        <div class="date">
          <?= get_the_date() ?>
        </div>
        <div class="read-more">
          <span class="arrow">→</span>
        <?= __tr('Lire la suite') ?>
        </div>
      </div>
    </div>
  </a>
</div>