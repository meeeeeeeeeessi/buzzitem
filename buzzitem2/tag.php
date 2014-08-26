<?php get_header(); ?>
			<div id="main">
				<div id="contents">
<?php $args = array(
	'posts_per_page' => 10,
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
					<div id="contents-osusume">
						<h1>オススメアイテム</h1>
<?php $myposts = get_posts( $args ); ?>
<?php foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
						<article class="osusume-post">
							<a href="<?php the_permalink(); ?>">
								<img src="<?php bloginfo('template_url')?>/images/logo.png" class="osusume-post-img">
							</a>
							<a href="<?php the_permalink(); ?>">
								<h2 clss="osusume-post-title"><?php the_title(); ?></h2>
							</a>
							<div class="osusume-post-footer">
								<p class="time"><?php echo $post->post_date; ?></p>
							</div>
						</article>
<?php endforeach; wp_reset_postdata(); ?>
					</div>
<?php $args2 = array(
	'posts_per_page' => 10,
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
					<div id="contents-latest">
						<h1>新着アイテム</h1>
<?php $myposts = get_posts( $args2 ); ?>
<?php foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
						<article class="latest-post">
							<a href="<?php the_permalink(); ?>">
								<img src="<?php bloginfo('template_url')?>/images/logo.png" class="latest-post-img">
								<p>
									<?php the_post_thumbnail('pickup_thumbnail', array('alt' => the_title_attribute('echo=0'), 'title' => the_title_attribute('echo=0'))); ?>
								</p>
							</a>
							<a href="<?php the_permalink(); ?>">
								<h2 clss="latest-post-title"><?php the_title(); ?></h2>
							</a>
							<div class="latest-post-footer">
								<p class="time"><?php echo $post->post_date; ?></p>
							</div>
						</article>
<?php endforeach; wp_reset_postdata(); ?>
					</div>
				</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>