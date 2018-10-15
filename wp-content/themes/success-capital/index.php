<?php

	// Exit if accessed directly.
if (!defined('ABSPATH')) {
	exit;
}

get_header(); ?>

	<div class="container-fluid">
		<div class="container--main">
			<?php get_page_build(); ?>
	</div>
</div>

<?php get_footer(); ?>