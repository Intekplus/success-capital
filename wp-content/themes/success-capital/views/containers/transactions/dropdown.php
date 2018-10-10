<div class="dropdown-wrapper">
  <div class="dropdown-label">
    <?php echo $taxonomy["label"] ?>
  </div>
  <div class="dropdown-content">
    <ul>
      <?php foreach($terms_names as $term) { ?>
        <li class="dropdown-item">
          <input type="radio" name="<?php echo $taxonomy["name"] ?>" value="<?php echo $term ?>">
          <?php echo $term ?>
        </li>
      <?php } ?>
    </ul>
  </div>
</div>


