<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

wp_footer(); ?>
<div class="footer-wrapper container-fluid">
	<div class="top-container container--main">
		<div class="col logo">
			<div class="logo-wrapper">
				<a class="brand" href='/'>
					<img src="<?php the_field('logo', 'option'); ?>" alt="logo">
				</a>
			</div>
		</div>
		<div class="col">
			<h3 class="title">
				<?php _tr("Contact") ?>
		</h3>
			<span class="field"><i class="fas fa-map-marker-alt"></i><a target="_blank" href="http://maps.google.com/?q=<?php the_field('address', 'option'); ?>"><?php the_field('address', 'option'); ?></a></span>

			<span class="field"><i class="fas fa-phone"></i><a href="tel:<?php the_field('phone_number', 'option'); ?>"><?php the_field('phone_number', 'option'); ?></a></span>
      		<span class="field"><i class="fas fa-envelope"></i><a href="mailto:<?php the_field('email', 'option'); ?>"><?php the_field('email', 'option'); ?></a></span>
		</div>
		<div class="col page">
		<h3 class="title">
				<?php _tr("Page") ?>
		</h3>
		<nav class="footer-menu-wrapper">
			<?php
			if (has_nav_menu('footer_navigation'))
			wp_nav_menu(['theme_location' => 'footer_navigation', 'menu_class' => 'nav']);
			?>
		</nav>
		</div>
		<div class="col">
			<?php import("./views/components/newsletter.php") ?>
		</div>
	</div>
	<div class="bottom-container container--main">
		<div class="copyright">
			&copy; <?php _tr("2018 Tous droits réservés") ?>
		</div>
		<div class="social-wrapper">
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
		<nav class="legal-wrapper">
			<?php
			if (has_nav_menu('legal_navigation'))
			wp_nav_menu(['theme_location' => 'legal_navigation', 'menu_class' => 'nav']);
			?>
		</nav>
	</div>
</div>
</body>
</html>
