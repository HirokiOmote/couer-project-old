<?php include_once('images/common/btn_footer.svg'); ?>

<footer class="global-footer">
  <a class="btn-top" href="#" data-scroll></a>

  <ul class="map-content-list">
    <li>
      <p class="ttl">[金沢本社]</p>
      <div class="btn" data-accordion>Address&amp;Map</div>

      <div class="inner-content">
        <p>〒921-8802 石川県野々市市押野1丁目380番地<br>（お問い合わせ時間：平日10:00〜17:00）<br>Tel.076-246-5111　Fax.076-246-5113</p>
        <p><b>エステティック事業部</b><br><b>FC（フランチャイズ）事業部</b><br><b>コンサルティング事業部</b><br>Tel.076-246-5111　Fax.076-246-5113</p>
        <p><b>ビューティプロダクツ事業部</b><br>■ディーラーグループ■OEMグループ■PBグループ<br>Tel.076-246-2060　Fax.076-246-2061</p>
        <p><b><a href="http://www.jb-m.jp/" target="_blank"><span style="text-decoration: underline">JBマシナリー ブランドチーム</span></a></b><br>Free.0120-00-7980　Tel.076-248-2700　Fax.076-248-2730</p>
        <p><b>eコマース事業部</b><br>ココセレ<br>Free.0120-072-700　Tel.076-246-2060　Fax.076-246-2061<br>BtoBオンラインショップ<br>Free.0120-00-7980　Tel.076-248-2700　Fax.076-248-2730</p>
        <p><b>バイオヘルス事業部</b><br>Free.0120-20-3400　Tel.076-246-8803　Fax.076-246-8805</p>
      </div>

      <a href="https://goo.gl/maps/XnoYCtya9vD2" class="google-map" target="_blank" rel="nofollow">
        <div class="marker" data-lat="36.543608" data-lng="136.6161644"></div>
      </a>
    </li>

    <li>
      <p class="ttl">[東京支社]</p>
      <div class="btn" data-accordion>Address&amp;Map</div>

      <div class="inner-content">
        <p>〒104-0061 東京都中央区銀座5丁目9-12 ダイヤモンドビル4F<br>（お問い合わせ時間：平日10:00〜17:00）</p>
        <p>Free.0120-010-510<br>Tel.03-3572-4300<br>Fax.03-3572-4301</p>
        <p><b>海外事業部<br>コンサルティング事業部<br>FC（フランチャイズ）事業部<br>ビューティプロダクツ事業部<br>eコマース事業部<br>バイオヘルス事業部</b></p>
      </div>

      <a href="https://goo.gl/maps/HXBUffGV3vJ2" class="google-map" target="_blank" rel="nofollow">
        <div class="marker" data-lat="35.6698712" data-lng="139.7638618"></div>
      </a href="">
    </li>
  </ul>

  <nav class="footer-menu-wrap">
    <ul class="footer-menu">
			<li><a href="<?php echo home_url(); ?>">ホーム</a></li>
			<li>
				<a href="<?php echo home_url('guide'); ?>">事業案内</a>
				<ul class="sub-menu">
					<li><a href="<?php echo home_url('guide#chart'); ?>">組織図</a></li>
					<li><a href="<?php echo home_url('guide#depart'); ?>">事業部紹介</a></li>
				</ul>
			</li>
			<li>
				<a href="<?php echo home_url('policy'); ?>">企業理念</a>
				<ul class="sub-menu">
					<li><a href="<?php echo home_url('policy#philosophy'); ?>">企業理念</a></li>
					<li><a href="<?php echo home_url('policy#guideline'); ?>">指針</a></li>
					<li><a href="<?php echo home_url('policy#president'); ?>">社長プロフィール</a></li>
					<li><a href="<?php echo home_url('motojuku'); ?>">茂藤塾</a></li>
					<li><a href="<?php echo home_url('policy#interview'); ?>">取材記事</a></li>
					<li><a href="<?php echo home_url('policy#social'); ?>">社会貢献活動</a></li>
				</ul>
			</li>
			<li>
				<a href="<?php echo home_url('profile'); ?>">会社情報</a>
				<ul class="sub-menu">
					<li><a href="<?php echo home_url('profile#profile'); ?>">会社概要</a></li>
					<li><a href="<?php echo home_url('profile#history'); ?>">グループ沿革</a></li>
					<li><a href="<?php echo home_url('profile#mark'); ?>">登録商標</a></li>
				</ul>
			</li>
			<li>
				<a href="<?php echo home_url('media'); ?>">メディア</a>
				<ul class="sub-menu">
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
			<li><a href="<?php echo home_url('category/event'); ?>">イベント</a></li>
			<li>
				<a href="<?php echo home_url('recruit'); ?>">採用情報</a>
				<ul class="sub-menu">
					<li><a href="<?php echo home_url('recruit#1'); ?>">石川エリア</a></li>
					<li><a href="<?php echo home_url('recruit#2'); ?>">東京エリア</a></li>
					<li><a href="<?php echo home_url('recruit#4'); ?>">その他エリア</a></li>
				</ul>
			</li>
			<li>
				<a href="<?php echo home_url('contact'); ?>">お問い合わせ</a>
				<ul class="sub-menu">
					<li><a href="<?php echo home_url('contact#form'); ?>">お問い合わせフォーム</a></li>
					<li><a href="<?php echo home_url('contact#policy'); ?>">プライバシーポリシー</a></li>
					<li><a href="<?php echo home_url('contact#tel'); ?>">電話・FAXでのお問合せ</a></li>
				</ul>
			</li>
		</ul>
  </nav>

  <div class="btn-footer">
    <a href="<?php echo home_url(); ?>"><svg class="icon icon-btn_footer002"><use xlink:href="#icon-btn_footer001"></use></svg></a>
    <a href="https://weibo.com/u/6425397402" target="_blank" rel="nofollow"><svg class="icon icon-btn_footer002"><use xlink:href="#icon-btn_footer002"></use></svg></a>
  </div>

  <p class="copyright"><small>Copyright (C) 2002 - <?php echo date('Y'); ?> Coeur Project. All Rights Reserved.</small></p>
</footer>

<?php wp_footer(); ?>
</body>
</html>
