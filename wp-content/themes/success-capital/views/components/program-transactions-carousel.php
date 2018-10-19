<div class="transactions-program-carousel owl-theme owl-carousel">
  <?php if ($query->have_posts()) {
    while ($query->have_posts()) {
      $query->the_post();
      if ($is_transactions) {
        $image = get_field('images') ? get_field('images')[0]['image'] : '';
        $term = get_the_terms(get_the_ID(), 'location') ? get_the_terms(get_the_ID(), 'location')[0]->name : '';
      } else {
        $image = get_the_post_thumbnail_url();
        $term = get_the_terms(get_the_ID(), 'location') ? get_the_terms(get_the_ID(), 'location')[0]->name : '';
      }
      ?>
  <a href="<?= get_the_permalink() ?>">
    <div class="transaction-program" style="background-image: url(<?= $image ?>)">
      <div class="lower">
        <div class="price">
          <?php 
          if ($is_transactions) {
            echo number_format(get_field('price'), 0, ',', ' ') . ' €';
          } else {
            the_title();
          } ?>
        </div>
        <div class="region">
          <?= $term ?>
        </div>
        <div class="contact">
          <?php if ($is_transactions) {
            _tr('VOIR DÉTAILS DU BIEN');
          } else {
            _tr('VOIR DÉTAILS DU PROGRAMME');
          }
          ?>
        </div>
        
      </div>
    </div>
  </a>
  <?php 
} ?>
  <?php 
} ?>
</div>