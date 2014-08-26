<?php get_header(); ?>
			<div id="main">
				<div id="contents">
<?php echo 'page'; ?>
<?php
if (have_posts()) {
	while (have_posts()) {
		the_post();
		the_content();
	}
}
?>
				</div>
<?php get_sidebar(); ?>
			</div>
<?php get_footer(); ?>