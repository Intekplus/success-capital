<div class="transactions">
  <?php include( locate_template("./views/containers/transactions/filters.php")); ?>
  
  <div class="transactions--ajax">
    <?php filtered_properties(null, null, null); ?>
  </div>
</div>