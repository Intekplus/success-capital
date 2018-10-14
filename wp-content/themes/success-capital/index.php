<?php

// Exit if accessed directly.
if (!defined('ABSPATH')) {
	exit;
}

get_header(); ?>

	<div class="container-fluid">
	<div class="container--main">
		<?php get_page_build(); ?>

		<?php 
	if (have_posts()) {
		while (have_posts()) {
			the_post();
			echo '<p>' . get_the_title() . '</p>';
		}
	}
	?>

		<!-- Start of the main loop. -->
	<?php
$total_pages = $wp_query->max_num_pages;

if ($total_pages > 1) {
	$current_page = max(1, get_query_var('paged'));
	echo '<div class="pagination-container">';
	echo '<nav class="pagination">';
	echo paginate_links(array(
		'base' => get_pagenum_link(1) . '%_%',
		'format' => 'page/%#%',
		'current' => $current_page,
		'total' => $total_pages,
		'type' => 'list',
		'prev_text' => '&#8203;',
		'next_text' => '&#8203;',
	));
	echo '</nav>';
	echo '</div>';
}
?>
	</div>
	</div>

<?php get_footer(); ?>