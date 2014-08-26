<!DOCTYPE HTML>
<html dir="ltr" lang="ja">
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>
<?php
	global $page, $paged;
	if (is_search()) {
		wp_title('', true, 'left');
		echo ' | ';
	} else {
		wp_title('|', true, 'right')	;
	}
	bloginfo('name');
	if (is_front_page()) {
		echo ' | ';
		bloginfo('description');
	}
	if ($paged >= 2 || $page >= 2) {
		echo ' | ' . sprintf('%sページ', max($paged, $page));
	}
?>
	</title>
	<!--OGPここから-->
<meta property='og:locale' content='ja_JP'>
<meta property="fb:app_id" content="681595301906523" />
<?php if ( is_single() ) { //投稿記事 ?>
<meta property='og:type' content='article'>
    <meta property='og:title' content='<?php the_title() ?>'>
    <meta property='og:url' content='<?php the_permalink() ?>'>
    <meta property='og:description' content='<?php echo mb_substr(get_the_excerpt(), 0, 100) ?>'>
<?php } else { //ホーム・カテゴリー・固定ページなど ?>
<meta property='og:type' content='website'>
    <meta property='og:title' content='<?php bloginfo('name') ?>'>
    <meta property='og:url' content='<?php bloginfo('url') ?>'>
    <meta property='og:description' content='<?php bloginfo('description') ?>'>
<?php } ?>
<meta property='og:site_name' content='<?php bloginfo('name'); ?>'>
<?php
if ( is_single() or is_page() ) { //投稿記事か固定ページ
    if ( has_post_thumbnail() ) { //アイキャッチ画像がある場合
        $image_id = get_post_thumbnail_id();
        $image = wp_get_attachment_image_src($image_id, 'full');
        echo '<meta property="og:image" content="'.$image[0].'">';echo "\n";
    } elseif ( preg_match( '/<img.*?src=(["\'])(.+?)\1.*?>/i', $post->post_content, $imgurl ) && !is_archive() ) { //アイキャッチ以外の画像がある場合
        echo '<meta property="og:image" content="'.$imgurl[2].'">';echo "\n";
    } else { //画像が1つも無い場合
        echo '<meta property="og:image" content="'; echo bloginfo('template_url'); echo '/images/logo.png">';echo "\n";
    }
} else { //ホーム・カテゴリーページなど
	echo '<meta property="og:image" content="'; echo bloginfo('template_url'); echo '/images/logo.png">';echo "\n";
}
?>
	<!--OGPここまで-->
	<link rel="apple-touch-icon" href="./images/touch-icon.png" />
	<link rel="shortcut icon" href="./images/favicon.ico" />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); echo '?' . filemtime( get_stylesheet_directory() . '/style.css'); ?>" type="text/css" />	
	<!--[if lt IE 9]>
	<meta http-equiv="Imagetoolbar" content="no" />
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div id="wrap">
		<div id="container">
			<header id="header">
				<div id="logo" data-beacon='{"p":{"mnid":"logo","mlid":"masthead"}}' >
						<a href="<?php bloginfo('template_url')/front-page.php ?>">buzzitem</a>
				</div>
				<div id="global-navi">
					<ul id="navi-wrap">
						<li class="global-navi" id="nav1"><a href="">オモシロ</a></li>
						<li class="global-navi" id="nav2"><a href="">コダワリ</a></li>
						<li class="global-navi" id="nav3"><a href="">オドロキ</a></li>
						<li class="global-navi" id="nav4"><a href="">カワイイ</a></li>
						<li class="global-navi" id="nav5"><a href="">オイシイ</a></li>
						<li class="global-navi" id="nav6"><a href="">キモコワ</a></li>
					</ul>
				</div>
			</header>