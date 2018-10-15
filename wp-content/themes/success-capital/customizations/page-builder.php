<?php
 
function get_page_build(){
    $obj = get_queried_object();
  if( have_rows('content',$obj) ){
    // loop through the rows of data
    while ( have_rows('content',$obj) ) {
      the_row();
      switch ( get_row_layout() ) {
        case 'top_banner':
        include( locate_template("./views/containers/top-banner.php"));
        break;
        case 'stat_banner':
        include( locate_template("./views/containers/stat-banner.php"));
        break;
        case 'link_banner':
        include( locate_template("./views/containers/more-banner.php"));
        break;
        case 'banner_partner':
        include( locate_template("./views/containers/partner-banner.php"));
        break;
        case 'box_shadow':
        include( locate_template("./views/containers/shadow-container.php"));
        break;
        case 'quotes':
        include( locate_template("./views/containers/quotes-carousel.php"));
        break;
        case 'cta':
        include( locate_template("./views/containers/cta.php"));
        break;
        case 'text_banner':
        include( locate_template("./views/containers/text-banner.php"));
        break;
        case 'side_by_side':
        include( locate_template("./views/containers/side_by_side.php"));
        break;
        case 'staff_carousel':
        include( locate_template("./views/containers/global-carousel.php"));
        break;
        case 'three_column':
        include( locate_template("./views/containers/three-column.php"));
        break;
        case 'transaction_section':
        include( locate_template("./views/containers/transactions/index.php"));
        break;
        case 'doubleCol_banner':
        include( locate_template("./views/containers/doubleCol-banner.php"));
        break;
        case 'map_banner':
        include( locate_template("./views/containers/map-banner.php"));
        break;
        case 'products_banner':
        include( locate_template("./views/containers/products-banner.php"));
        break;
        case 'image_banner':
        include( locate_template("./views/containers/image-banner.php"));
        break;
        case 'two-boxes-banner':
        include( locate_template("./views/containers/two-boxes-banner.php"));
        break;
        case 'three-boxes-banner':
        include( locate_template("./views/containers/three-boxes-banner.php"));
        break;
        case 'avantages-banner':
        include( locate_template("./views/containers/avantages-banner.php"));
        break;
        case 'flat-partners':
        include( locate_template("./views/containers/flat-partners.php"));
        break;
        case 'heart-stroke-banner':
        include( locate_template("./views/containers/heart-stroke-banner.php"));
        break;
        case 'transactions':
        include( locate_template("./views/containers/transactions-banner.php"));
        break;
      }
    }
  }
}

 
function get_sub_page_build(){


  if( have_rows('subcontent') ){
    while ( have_rows('subcontent') ) {
      the_row();
      switch ( get_row_layout() ) {
        case 'accordion':
        include( locate_template("./views/components/accordion.php"));
        break;
        case 'contact_form':
        include( locate_template("./views/components/contact-form.php"));
        break;
      }
    }
  }
}