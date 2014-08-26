<?php get_header(); ?>
			<div id="main">
				<div id="contents">
					<div id="single-article">
<?php echo 'single'; ?>
<?php
if (have_posts()) {
	while (have_posts()) {
		the_post();
?>
						<div id="single-meta">
							<div><p class="single-title"><?php the_title(); ?></p></div>
							<div><p class="single-date"><?php the_date(); ?></p></div>
							<div><p class="single-category"><?php the_category(); ?></p></div>
							<div><p class="single-tag"></p></div>
						</div>
						<div id="single-img"><img src="<?php bloginfo('template_url') ?>/images/logo.png" class="single-img"></div>
<?php
		the_content();
?>
<?php
	}
}
?>
						<div id="singlepage-article-margin"></div>
						<div class="share-area">
							<a id="share_fb" href="http://www.facebook.com/share.php?u=<?php the_permalink(); ?>"onclick="window.open(this.href, 'FBwindow', 'width=650, height=450, menubar=no, toolbar=no, scrollbars=yes'); return false;">Facebookでシェア</a>
							<a id="share_tw" href="https://twitter.com/share?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>&via=@を省いたアカウント名" target="blank">Twitterでシェア</a>
							<a id="share_line" href="http://line.naver.jp/R/msg/text/?LINE%E3%81%A7%E9%80%81%E3%82%8B%0D%0Ahttp%3A%2F%2Fline.naver.jp%2F">LINEで送る</a>
							<a id="share_hatena" href="http://b.hatena.ne.jp/add?mode=confirm&url=<?php the_permalink() ?>&title=<?php echo urlencode( the_title( "" , "" , 0 ) ) ?>%20%2d%20No%2e1026" target="_blank">はてなブックマーク</a>
						</div>
					</div>
					<div id="singlepage-contents-margin"></div>
					<div id="single-article-footer">
						<div id="fb-comment">plugin</div>
						<div id="article-footer-ad">
							<div class="adsence ad"></div>
							<div class="adsence ad"></div>
						</div>
						<div id="recommend-item">
							<p>plugin</p>
						</div>
					</div>
				</div>
<?php get_sidebar(); ?>
			</div>
			<div id="frontpage-contents-margin"></div>
<?php get_footer(); ?>