<?php
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size(90, 90, true);
add_image_size('small_thumbnail', 61, 61, true );
add_image_size('large_thumbnail', 120, 120, true );
add_image_size('category_image', 658, 113, true );
add_image_size('pickup_thumbnail', 302, 123, true );
?>

<?php
function search_template_redirect() {
	global $wp_query;
	$wp_query ->is_search = true;
	$wp_query ->is_home = false;
	if (file_exists(TEMPLATEPATH . '/search.php')) {
		include(TEMPLATEPATH . '/search.php');
	}
	exit;
}

if (isset($_GET['s']) && $_GET['s'] == false) {
	add_action('template_redirect', 'search_template_redirect');
}

function comments_allow_only_column($open, $post_id) {
	if (!in_category('column')) {
		$open = false;
	}
	return $open;
}
add_filter('comments_open', 'comments_allow_only_column', 10, 2);
?>