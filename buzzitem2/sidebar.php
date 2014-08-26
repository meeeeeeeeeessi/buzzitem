	<div id="sidebar">
		<div id="adsence">
			<p>adsence</p>
		</div>
		<div id="fb-likebox">
			<iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fbuzzitem&amp;width=280&amp;height=290&amp;colorscheme=light&amp;show_faces=true&amp;header=true&amp;stream=false&amp;show_border=true" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:280px; height:290px;" allowTransparency="true"></iframe>
		</div>
		<div id="ranking">
			<h1>　人気ランキング</h1>
<?php $args_sidebartop = array(
	'posts_per_page' => 10,
	'offset' => 0,
	'category' => '',
	'orderby' => '',
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
<?php $myposts = get_posts( $args_sidebartop ); ?>
<?php foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
			<a href="<?php the_permalink(); ?>">
				<div class="ranking-post">
					<img src="<?php bloginfo('template_url')?>/images/logo.png" class="ranking-post-img">
					<p class="ranking-post-title"><?php the_title(); ?></p>
				</div>
			</a>
<?php endforeach; wp_reset_postdata(); ?>
		</div><!-- #ranking end -->
		<div id="ranking-fb">
<?php
if (function_exists('get_like_ranking')) get_like_ranking (10, false, array(20, 20), null);
?>
		</div>
		<div id="ranking-view">
<?php wpp_get_mostpopular("range=daily&limit=10"); ?>
		</div>
		<div class="rakuten-ad ad">
			<!-- Rakuten Widget FROM HERE --><script type="text/javascript">rakuten_design="slide";rakuten_affiliateId="12fa5c80.4606b10c.12fa5c81.f2739c72";rakuten_items="ctsmatch";rakuten_genreId=0;rakuten_size="250x250";rakuten_target="_blank";rakuten_theme="gray";rakuten_border="on";rakuten_auto_mode="on";rakuten_genre_title="off";rakuten_recommend="on";</script><script type="text/javascript" src="http://xml.affiliate.rakuten.co.jp/widget/js/rakuten_widget.js"></script><!-- Rakuten Widget TO HERE -->
		</div>
		<div class="amazon-ad ad">
		</div>
	</div><!-- #sidebar end -->