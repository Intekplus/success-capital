<div class="categories">
  <h3>
    <?= __tr('Catégories') ?>
  </h3>
  <div id="news-filters" class="checkbox-container">
    <?php 
    $terms = get_terms(array(
      'taxonomy' => 'category',
      'hide_empty' => false,
    ));

    foreach ($terms as $term) {
      $label = $term->name;
      $value = $term->slug;
      $checked = !empty($cats) ? in_array($term->slug, explode(',', $cats)) : false;
      include(locate_template('./views/components/checkbox.php'));
    }
    ?>
  </div>
  <div class="filter-news-wrapper">
    <a id="filter-news" class="button bg-blue-left" href="#"><?= __tr('Filtrer') ?></a>
  </div>
  <div class="newsletter-container">
    <?php include(locate_template('./views/components/newsletter.php')) ?>
  </div>
</div>