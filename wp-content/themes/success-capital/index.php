<?php

	// Exit if accessed directly.
if (!defined('ABSPATH')) {
	exit;
}

get_header(); ?>

	<div class="container-fluid">
		<div>
			<?php get_page_build(); ?>
	</div>
</div>

<?php get_footer(); ?>