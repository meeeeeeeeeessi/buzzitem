<?php get_header(); ?>
			<div id="main">
				<div id="contents">
<?php $post_id = the_ID(); ?>
<?php $gtc = get_the_category($post_id); ?>
<?php $category_id = $gtc->term_id; ?>
<?php echo $category_id; ?>
<?php echo $gtc->name; ?>
<?php $args = array(
	'posts_per_page' => 10,
	'offset' => 0,
	'category' => $category_id,
	'orderby' => 'post_date',
	'order' => 'DESC',
	'include' => '',
	'exclude' => '',
	'meta_key' => '',
	'meta_value' => '',
	'post_type' => 'post',
	'post_mime_type'   => '',
	'post_parent' => '',
	'post_status' => 'publish',
	'suppress_filters' => true ); ?>
					<div id="contents-category-archive">
						<h1><?php echo $gtc->name; ?>一覧</h1>
<?php $myposts = get_posts( $args ); ?>
<?php foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
						<article class="category-archive-post">
							<a href="<?php the_permalink(); ?>">
							<?php the_title(); ?>
							</a>
						</article>
<?php endforeach; wp_reset_postdata(); ?>
					</div>
				</div>
<?php get_sidebar(); ?>
			</div>
<?php get_footer(); ?>
