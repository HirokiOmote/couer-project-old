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
	<a class="logo" href="<?php echo home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri();?>/images/common/logo.svg" alt="クールプロジェクト"></a>

	<a class="menu-trigger" href="#" data-menu-trigger>
	  <span></span>
	  <span></span>
	  <span></span>
	</a>

	<nav class="global-navigation" data-navigation>
		<ul class="main-menu">
			<li><a href="<?php echo home_url(); ?>">ホーム</a></li>
			<li data-navigation-sub-mouseover>
				<a href="<?php echo home_url('guide'); ?>">事業案内</a>
				<button class="sub-trigger" data-navigation-sub-trigger>
					<span></span>
					<span></span>
				</button>
				<ul class="sub-menu" data-navigation-submenu>
					<li><a href="<?php echo home_url('guide#chart'); ?>">組織図</a></li>
					<li><a href="<?php echo home_url('guide#depart'); ?>">事業部紹介</a></li>
				</ul>
			</li>
			<li data-navigation-sub-mouseover>
				<a href="<?php echo home_url('policy'); ?>">企業理念</a>
				<button class="sub-trigger" data-navigation-sub-trigger>
					<span></span>
					<span></span>
				</button>
				<ul class="sub-menu" data-navigation-submenu>
					<li><a href="<?php echo home_url('policy#philosophy'); ?>">企業理念</a></li>
					<li><a href="<?php echo home_url('policy#guideline'); ?>">指針</a></li>
					<li><a href="<?php echo home_url('policy#president'); ?>">社長プロフィール</a></li>
					<li><a href="<?php echo home_url('motojuku'); ?>">茂藤塾</a></li>
					<li><a href="<?php echo home_url('policy#interview'); ?>">取材記事</a></li>
					<li><a href="<?php echo home_url('policy#social'); ?>">社会貢献活動</a></li>
				</ul>
			</li>
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
			<li data-navigation-sub-mouseover>
				<a href="<?php echo home_url('media'); ?>">メディア</a>
				<button class="sub-trigger" data-navigation-sub-trigger>
					<span></span>
					<span></span>
				</button>
				<ul class="sub-menu" data-navigation-submenu>
					<?php
						$media_page_id = get_page_by_path('media')->ID;
						$counter = 1;
					?>
					<?php if ( have_rows('media', $media_page_id) ): ?>
				    <?php while ( have_rows('media', $media_page_id) ): the_row(); ?>
							<li><a href="<?php echo home_url('media') . '/#' . $counter++; ?>"><?php echo the_sub_field('title') ?></a></li>
						<?php endwhile; ?>
					<?php endif ?>
				</ul>
			</li>
			<li data-navigation-sub-mouseover>
				<a href="<?php echo home_url('recruit'); ?>">採用情報</a>
				<button class="sub-trigger" data-navigation-sub-trigger>
					<span></span>
					<span></span>
				</button>
				<ul class="sub-menu" data-navigation-submenu>
					<li><a href="<?php echo home_url('recruit#1'); ?>">石川エリア</a></li>
					<li><a href="<?php echo home_url('recruit#2'); ?>">東京エリア</a></li>
					<li><a href="<?php echo home_url('recruit#3'); ?>">大阪エリア</a></li>
					<li><a href="<?php echo home_url('recruit#4'); ?>">その他エリア</a></li>
				</ul>
			</li>
			<li data-navigation-sub-mouseover>
				<a href="<?php echo home_url('contact'); ?>">お問い合わせ</a>
				<button class="sub-trigger" data-navigation-sub-trigger>
					<span></span>
					<span></span>
				</button>
				<ul class="sub-menu" data-navigation-submenu>
					<li><a href="<?php echo home_url('contact#form'); ?>">お問い合わせフォーム</a></li>
					<li><a href="<?php echo home_url('contact#policy'); ?>">プライバシーポリシー</a></li>
					<li><a href="<?php echo home_url('contact#tel'); ?>">電話・FAXでのお問合せ</a></li>
				</ul>
			</li>
		</ul>

		<ul class="lang-menu">
			<?php if (is_page('lang-ch')): ?>
				<li><a href="<?php echo home_url(); ?>">日本語</a></li>
				<li class="active">中文</li>
			<?php else: ?>
				<li class="active"><a>日本語</a></li>
				<li><a href="<?php echo home_url("/lang-ch/"); ?>">中文</a></li>
			<?php endif; ?>
			<li><a>English</a></li>
		</ul>
	</nav>
</header>
