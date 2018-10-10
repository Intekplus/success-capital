<?php

get_header();

if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 
?>

<div class="main-wrap container-fluid" role="document">
    <div class="content">
        <main class="main">
            <?php import("./views/containers/header-banner.php"); ?> 
            <div class="prestige__wrapper--top">
                <div class="prestige__container">
                    <?= get_field('new')['new_content'] ?>
                </div>
            </div>
        </main>
    </div>
</div>

<?php
	} // end while
} // end if
get_footer();

?>