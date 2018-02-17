<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0">
	<title><?php meta_title(); ?></title>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="global-header">
	<div class="logo">
		<img srcset="<?php echo get_stylesheet_directory_uri();?>/images/common/logo.png, <?php echo get_stylesheet_directory_uri();?>/images/common/logo@2x.png 2x" src="<?php echo get_stylesheet_directory_uri();?>/images/common/logo.png" alt="">
	</div>

	<a class="menu-trigger" href="#" data-menu-trigger>
	  <span></span>
	  <span></span>
	  <span></span>
	</a>

	<nav class="global-navigation" data-navigation>
		<ul class="main-menu">
			<li><a href="<?php echo home_url(); ?>">ホーム</a></li>
			<li><a href="<?php echo home_url('guide'); ?>">事業案内</a></li>
			<li><a href="<?php echo home_url('policy'); ?>">企業理念</a></li>
			<li data-navigation-sub-mouseover>
				<a href="<?php echo home_url('profile'); ?>">会社情報</a>
				<button class="sub-trigger" data-navigation-sub-trigger>
					<span></span>
					<span></span>
				</button>
				<ul class="sub-menu" data-navigation-submenu>
					<li><a href="<?php echo home_url('profile#profile'); ?>">会社概要</a></li>
					<li><a href="<?php echo home_url('profile#history'); ?>">グループ沿革</a></li>
					<li><a href="<?php echo home_url('profile#mark'); ?>">登録商標</a></li>
				</ul>
			</li>
			<li><a href="<?php echo home_url('media'); ?>">メディア</a></li>
			<li><a href="<?php echo home_url('recruit'); ?>">採用情報</a></li>
			<li><a href="<?php echo home_url('contact'); ?>">お問い合わせ</a></li>
		</ul>

		<ul class="lang-menu">
			<li class="active"><a href="">日本語</a></li>
			<li><a href="">中文</a></li>
			<li><a href="">English</a></li>
		</ul>
	</nav>
</header>
