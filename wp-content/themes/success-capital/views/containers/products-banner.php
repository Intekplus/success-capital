<?php
function generateContent( $id ){


    if( have_rows($id) ){
      while ( have_rows($id) ) {
        the_row();
        switch ( get_row_layout() ) {
          case 'text':
          echo "<h2 class='product-title'>";
            the_sub_field('content');
          echo "</h2>";
          break;
          case 'product_box':
          include( locate_template("./views/components/product-box.php"));
          break;
        }
      }
    }
  }


?>

<div class="products-banner-wrapper <?php echo !get_sub_field('align_left')?'align-left':'align-right' ?> container--main">
    <div class="image" >
      <img class="img-container" src="<?php echo get_site_url(); ?>/wp-content/themes/success-capital/assets/img/images/BG.svg">
    </div>
    <div class="products-banner">
        <?php if(!empty(get_sub_field('title'))) { ?>
          <h2 class="banner-title"><?php the_sub_field('title') ?></h2>
        <?php } ?>
        <div class="boxes">
            <div class="box">
            <?php generateContent("box_1") ?>
            </div>
            <div class="box">
            <?php generateContent("box_2") ?>
            </div>
            <div class="box">
            <?php generateContent("box_3") ?>
            </div>
        </div>
    </div>
</div>