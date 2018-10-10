<?php 
/* Template Name: Component template
*/
?>


<?php

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header(); ?>

<div class="wrap">
	<div class="content">
		<?php get_page_build(); ?>
	</div>
	<!-- /.content -->
</div>
<!-- /.wrap -->

<?php get_footer(); ?>