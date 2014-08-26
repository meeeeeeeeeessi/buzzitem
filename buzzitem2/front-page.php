<?php get_header(); ?>
			<div id="main">
				<div id="contents">
					<div id="contents-pickup">
						<h1>　注目アイテム</h1>
<?php $args_pickup = array(
	'posts_per_page' => 6,
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
						<div class="abc">
							<a href="<?php the_permalink(); ?>">
								<img src="<?php bloginfo('template_url')?>/images/logo.png" class="contents-post-img">
							</a>
							<a href="<?php the_permalink(); ?>">
								<p class="contents-post-title"><?php the_title(); ?></p>
							</a>
							<div class="contents-post-footer">
								<p class="contents-post-date"><?php echo $post->post_date; ?></p>
							</div>
						</div>
<?php endforeach; wp_reset_postdata(); ?>
//						<div id="contents-pickup-tuduki"><a href=""><p>続きを見る</p></a></div>
					</div>
					<div id="frontpage-contents-margin"></div>
					<div id="contents-latest">
						<h1>　新着アイテム</h1>
<?php $args_latest = array(
	'posts_per_page' => 6,
	'offset' => 0,
	'category' => '',
	'orderby' => 'post_date',
	'order' => 'DESC',
	'include' => '',
	'exclude' => '',
	'meta_key' => '',
	'meta_value' => '',
	'post_type' => 'page',
	'post_mime_type'   => '',
	'post_parent' => '',
	'post_status' => 'publish',
	'suppress_filters' => true ); ?>
<?php $myposts = get_posts( $args_latest ); ?>
<?php foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
						<div class="abc">
							<a href="<?php the_permalink(); ?>">
								<img src="<?php bloginfo('template_url')?>/images/logo.png" class="contents-post-img">
							</a>
							<a href="<?php the_permalink(); ?>">
								<p class="contents-post-title"><?php the_title(); ?></p>
							</a>
							<div class="contents-post-footer">
								<p class="contents-post-date"><?php echo $post->post_date; ?></p>
							</div>
						</div>
<?php endforeach; wp_reset_postdata(); ?>
						<div id="contents-latest-tuduki"><p><a href="">続きを見る</a></p></div>
					</div>
				</div>
<?php get_sidebar('top'); ?>
			</div>
			<div id="frontpage-contents-margin"></div>
<?php get_footer(); ?>