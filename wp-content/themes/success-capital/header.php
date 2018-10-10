<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<link rel="apple-touch-icon" sizes="180x180" href="<?= get_template_directory_uri() . '/assets/favicons' ?>/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="<?= get_template_directory_uri() . '/assets/favicons' ?>/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="<?= get_template_directory_uri() . '/assets/favicons' ?>/favicon-16x16.png">
		<link rel="manifest" href="<?= get_template_directory_uri() . '/assets/favicons' ?>/site.webmanifest">
		<link rel="mask-icon" href="<?= get_template_directory_uri() . '/assets/favicons' ?>/safari-pinned-tab.svg" color="#000000">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
		<meta name="msapplication-TileColor" content="#000000">
		<meta name="theme-color" content="#ffffff">
		<!--[if IE]>
			<link rel="stylesheet" href="//localhost:3000/wp-content/themes/intek-theme/assets/ie/ie-styles.min.css" />
		<![endif]-->
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
	<?php import("./views/partials/header.php"); ?>
