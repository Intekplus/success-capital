<div class="dropdown-wrapper">
  <div class="dropdown-label">
    <?php echo $taxonomy["label"] ?>
  </div>
  <div class="dropdown-content">
    <ul>
      <?php foreach($terms_names as $term) { ?>
        <li class="dropdown-item">
          <label class="custom-checkbox">
          <input type="checkbox" name="<?php echo $taxonomy["name"] ?>" value="<?php echo $term['slug'] ?>">
          <?php echo $term['name'] ?>
          <span class="checkmark"></span>
      </label>
        
        </li>
      <?php } ?>
      <a href="#" class="reset-all">
      <label >
            <?php _tr('Effacer la sélection') ?>
        </label>
      </a>
    </ul>
  </div>
</div>


