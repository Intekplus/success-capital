<?php

	// Exit if accessed directly.
if (!defined('ABSPATH')) {
	exit;
}

get_header(); ?>

<?php
$cats = isset($_GET['category']) ? $_GET['category'] : '';
$current_page = max(1, get_query_var('paged'));
$query = new WP_Query(array(
	'category_name' => $cats,
	'posts_per_page' => 5,
	'paged' => $current_page
));
?>

	<div class="container-fluid">
		<div id="news-content" class="container--main">
			<?php get_page_build(); ?>

			<?php
		$first = true;
		if ($query->have_posts()) {
			while ($query->have_posts()) {
				$query->the_post();
				if ($first) {
					if ($current_page == 1) {
						echo '<div class="news-featured-container">';
						include(locate_template('./views/containers/news-box-featured.php'));
						echo '</div>';
						echo '<div class="news-container">';
					} else {
						echo '<div class="news-container">';
						include(locate_template('./views/components/news-box.php'));
					}
					$first = false;
				} else {
					include(locate_template('./views/components/news-box.php'));
				}
			}
			echo '</div>';
		}
		?>

			<!-- Start of the main loop. -->
			<?php
		$total_pages = $query->max_num_pages;

		if ($total_pages > 1) {
			echo '<div class="pagination-container">';
			echo '<nav class="pagination">';
			echo paginate_links(array(
				'base' => get_permalink(get_option('page_for_posts')) . '%_%',
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