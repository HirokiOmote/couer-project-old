<?php
  get_header();
  // Template Name: 企業理念
?>

<main class="policy">
  <header class="header">
    <h1>
      <picture>
        <source media="(min-width: 768px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/images/pages/policy/ttl_header@pc.svg">
        <source media="(min-width: 320px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/images/pages/policy/ttl_header@sp.svg">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/pages/policy/ttl_header@pc.svg" alt="企業理念">
      </picture>
    </h1>
  </header>

  <div class="wrapper">
    <section class="section-philosophy">
      <header>
        <p>PHILOSOPHY</p>
        <h2>企業理念</h2>
      </header>

      <p>クールグループの社員は「エステティック」という業を通じて社会に貢献しようとする強固な意志で結ばれています。</p>

      <div class="image">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/pages/policy/img_philosophy.png" alt="">
      </div>
    </section>

    <section class="seciton-guideline">
      <header>
        <p>GUIDELINE</p>
        <h2>指針</h2>
      </header>

      <p class="txt-bold">「コアバリュー」「ビジョン」「ミッション」「ストラテジー」</p>
      <p>私たちは、これら4つのワードを指針に、自らの手によってエステティックの新しい時代を創造し続けます。</p>

      <div class="image">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/pages/policy/img_guideline.png" alt="">
      </div>
    </section>

    <section class="section-president">
      <header>
        <p>PRESIDENT’S PROFILE</p>
        <h2>社長プロフィール</h2>
      </header>

      <div class="inner">
        <figure class="head-shot">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/pages/policy/img_profile001.png" alt="茂藤雅彦">
          <p>1966年石川県生まれ。地元の大学（薬学部）を経て、医療機器販売会社、大手外資系保険会社（ファイナンシャルプランナー）に勤務。その後、2002年にエステティックサロンを経営する株式会社クールプロジェクトを設立。自らが主宰し登壇する新人教育セミナーは各方面から話題を集め、全国からエステオーナー達の見学が絶えない。</p>
        </figure>

        <section>
          <h3>エステティックの魔法の力</h3>
          <p>それは私にとって単なるビジネスではありません。<br>
          エステティックは私の中にあります。<br>
          エステティックは私の心の中にあります。<br>
          私は、エステティックがすべての女性に<br>
          身も心も満たされる価値をもたらすということに対して、揺るぎない確信、いえ、信念を持っています。<br>
          私は、私たちの行っていることが正しいと信じています。<br>
          すべての女性を幸せに導くという「エステティックの魔法の力」、そこには確固たる使命があるのです。<br>
          「エステティックの魔法の力」、私はこれを信じます。</p>

          <p><img class="align-right" src="<?php echo get_stylesheet_directory_uri(); ?>/images/pages/policy/img_profile002.png" alt="信頼">
          社名のcoeur（クール）はフランス語で「こころ」の意味です。<br>
          原点は、お客様を思いやる、こころ。<br>
          この思いを一心に、社名の“クール”にこめました。<br>
          創業当時から、“会社の規模ではなく、お客様の満足度で日本一を目指す”<br>
          という想いで美容産業の当該事業に携わってきました。<br>
          クールグループは<br>
          ①エステティック事業部<br>
          ②FC（フランチャイズ）事業部<br>
          ③コンサルティング事業部<br>
          ④ビューティプロダクツ事業部<br>
          ⑤eコマース事業部<br>
          ⑥バイオヘルス事業部<br>
          ⑦海外事業部<br>
          これら7つの事業部を横断的協業戦略で「顧客ファースト」に徹した最適化サービスを国内はもとよりアジアにも展開している社員数120名のトータルビューティソリューションカンパニーです。<br>
          グループの中核企業である株式会社クールプロジェクトは金沢に本社を、石川、富山、福井の北陸3県に実店舗のエステサロンを、東京・銀座、大阪・本町に事業所、富山市山室に研修センターを展開しています。美容産業の川上から川下にいたるまで、幅広い顧客にハード面（PB／OEM美容機器、化粧品の製造・販売）からソフト面（コンサルティング・エステティックサービス）までワンストップサービスを提供しています。今後も当該事業の国内外活動を通して社会貢献を果たし、企業市民として信頼の醸成に努めると共に、さらなる事業の発展に邁進して参る所存です。
          </p>
        </section>
      </div>
    </section>

    <section class="section-interview">
      <header>
        <p>INTERVIEW</p>
        <h2>取材記事</h2>
      </header>

      <?php if ( have_rows('pdf-links') ):  ?>
        <ul>
          <?php while ( have_rows('pdf-links') ): the_row(); ?>
            <?php
              $image = get_sub_field('image');
              $pdf = get_sub_field('pdf');
            ?>
              <li>
                <a href="<?php echo $pdf['url']; ?>" target="_blank">
                  <img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>">
                  <p><?php echo $image['caption']; ?></p>
                </a>
              </li>
          <?php endwhile; ?>
        </ul>
      <?php endif; ?>
    </section>

    <section class="section-social" id="social">
      <header>
        <p>SOCIAL CONTRIBUTION</p>
        <h2>社会貢献</h2>
      </header>

      <div class="summary">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/pages/policy/img_social001.jpg" alt="クールエステティックグループボランティアCSR 訪問エステ・美化清掃 地域奉仕活動">
        <p>企業市民として、エステティシャンとして、<br class="visible-sp">私たちに身近にできること。<br>
        福祉施設への〝訪問エステ〟奉仕活動と、<br class="visible-sp">周辺地域の〝環境美化〟活動に<br>
        全店スタッフ一丸となって<br class="visible-sp">取り組んでいます。</p>
      </div>

      <div class="description">
        <p>私共クールエステティックグループは、おかげさまで本年創業16周年を迎えます。富山県、石川県、福井県の北陸三県を中心に、東京・銀座、大阪市本町にても事業展開を行なっています。これまでオリコン「顧客満足度ランキング」全国エステサロン部門にて、3年連続（2010-2011-2012年度）「特別推奨サロン」に選ばれました。<br>
        これも地域の皆様のご愛顧、ご支援の賜物と感謝し、毎年6月第一月曜日を弊社グループの「ボランティア・デイ」と位置づけ、一企業市民として社会奉仕活動を実施しております。このCSR活動を通して「地域社会への貢献」、「社員のモラル向上」を図るとともに、「健康増進」にもつなげていきたいと考えております。<br>
        このたび、日頃身近にお世話になっております各店舗、各事業所の周辺地域の社会奉仕活動の一助にと、「環境美化清掃活動」、または「福祉施設へのエステサービス（訪問エステ）」を全社一丸となって行ないましたのでご報告申し上げます。</p>
        <div class="image">
          <a href="https://www.coeur-esthetique.jp/volunteer/" target="_blank" rel="nofollow"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/pages/policy/img_social002.jpg" alt=""></a>
        </div>
      </div>
    </section>
  </div>
</main>

<?php get_footer(); ?>
