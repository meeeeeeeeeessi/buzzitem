<?php get_header(); ?>
			<div id="main">
				<div id="contents">
					<div id="">
						<h1></h1>
<?php $args_pickup = array(
	'posts_per_page' => 20,
	'offset' => 0,
	'category' => '',
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
<?php $myposts = get_posts( $args_pickup ); ?>
<?php foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
						<article class="contents-post">
							<a href="<?php the_permalink(); ?>">
								<img src="<?php bloginfo('template_url')?>/images/logo.png" class="contents-post-img">
							</a>
							<a href="<?php the_permalink(); ?>">
								<p class="contents-post-title"><?php the_title(); ?></p>
							</a>
							<div class="contents-post-footer">
								<p class="contents-post-date"><?php echo $post->post_date; ?></p>
							</div>
						</article>
<?php endforeach; wp_reset_postdata(); ?>
<?php get_sidebar(); ?>
				<div id="frontpage-contents-margin"></div>
<?php get_footer(); ?>