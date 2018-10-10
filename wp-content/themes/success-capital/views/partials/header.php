<header class="banner">
<div class="menu-container">
  <div class="logo-wrapper">
    <a class="brand" href='/'>
      <img src="<?php the_field('logo', 'option'); ?>" alt="logo">
    </a>
    </div>
    <div class="menu-burger">
      <span></span>
      <span></span>
      <span></span>
		</div>
    <nav class="nav-primary">
    <?php
     if (has_nav_menu('primary_navigation'))
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']); 
      ?>
    <div class="info-wrapper">
      <span class="field"><i class="fas fa-phone"></i><a href="tel:<?php the_field('phone_number', 'option'); ?>"><?php the_field('phone_number', 'option'); ?></a></span>
      <span class="field"><i class="fas fa-envelope"></i><a href="mailto:<?php the_field('email', 'option'); ?>"><?php the_field('email', 'option'); ?></a></span>
</div>
    </nav>
    <div class="site-info-wrapper">
    
    <?php 
        if( have_rows('social_networks','option') ){
            while ( have_rows('social_networks','option') ) {
                the_row();
                ?>
        <a href="<?php the_sub_field('link') ?>" target="_blank" class="social-media-link">
            <i class="<?php the_sub_field('icon') ?>"></i>
        </a>
    <?php }
    } ?>

    </div>
  </div>
</header>
