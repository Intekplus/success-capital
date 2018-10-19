<div class="news-box" style="background-image: url(<?php the_post_thumbnail_url(); ?>)">
  <a href="<?= get_the_permalink() ?>">
  <div class="category"><?= get_the_terms(get_the_ID(), 'category') ? get_the_terms(get_the_ID(), 'category')[0]->name : ''; ?></div>
    <div class="info-container">
      <div class="info">
        <div class="date">
          <?php the_date(); ?>
        </div>
        <h3>
          <?php the_title(); ?>
        </h3>
        <p>
          <?= get_the_excerpt() ?>
        </p>
      </div>
      <div class="read-more">
        <span class="arrow">→</span>
          <?= __tr('Lire la suite') ?>
      </div>
    </div>
  </a>
</div>

<?php include(locate_template('./views/components/blog-categories.php')); ?>