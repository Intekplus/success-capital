<div class="dropdown-wrapper">
  <div class="dropdown-label">
    <?php echo $taxonomy["label"] ?>
  </div>
  <div class="dropdown-content">
    <ul>
      <?php foreach($terms_names as $term) { ?>
        <li class="dropdown-item">
          <label class="custom-checkbox">
          <input type="radio" name="<?php echo $taxonomy["name"] ?>" value="<?php echo $term ?>">
          <?php echo $term ?>
          <span class="checkmark"></span>
      </label>
        </li>
      <?php } ?>
    </ul>
  </div>
</div>


