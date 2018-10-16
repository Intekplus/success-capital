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
		<link rel="icon" type="image/png" href="<?= get_template_directory_uri() . '/assets/favicons' ?>/favicon.ico">
		<link rel="manifest" href="<?= get_template_directory_uri() . '/assets/favicons' ?>/site.webmanifest">
		<link rel="mask-icon" href="<?= get_template_directory_uri() . '/assets/favicons' ?>/safari-pinned-tab.svg" color="#000000">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
		<meta name="msapplication-TileColor" content="#000000">
		<meta name="theme-color" content="#ffffff">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		
		<!--[if IE]>
			<link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/ie/dist/ie-styles.css" />
		<![endif]-->
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
	<?php import("./views/partials/header.php"); ?>
