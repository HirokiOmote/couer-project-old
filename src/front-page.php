<?php get_header(); ?>

<video class="bg-video" autoplay muted loop>
  <source src="<?php echo get_stylesheet_directory_uri();?>/images/pages/front-page/bg_main.webm" type="video/webm">
  <source src="<?php echo get_stylesheet_directory_uri();?>/images/pages/front-page/bg_main.mp4" type="video/mp4">
</video>

<header class="main-visual" data-aos="fade">
  <h1>エステティックの<br>新たな可能性を切り拓く<br>クールプロジェクト</h1>
</header>

<section class="sec-project" data-aos="fade">
  <header>
    <h2>OUR PROJECT</h2>
    <p>事業案内</p>
  </header>

  <ul>
    <li data-aos="fade-down">
      <a href="<?php echo home_url("guide/#esthetique"); ?>">
        <p>エステティック<br>事業部</p>
        <img src="<?php echo get_stylesheet_directory_uri();?>/images/pages/front-page/img_project001.svg" alt="">
      </a>
    </li>
    <li data-aos="fade-down">
      <a href="<?php echo home_url("guide/#fc"); ?>">
        <p>FC事業部</p>
        <img srcset="<?php echo get_stylesheet_directory_uri();?>/images/pages/front-page/img_project002.png, <?php echo get_stylesheet_directory_uri();?>/images/pages/front-page/img_project002@2x.png 2x" src="<?php echo get_stylesheet_directory_uri();?>/images/pages/front-page/img_project002.png" alt="">
      </a>
    </li>
    <li data-aos="fade-down">
      <a href="<?php echo home_url("guide/#consulting"); ?>">
        <p>コンサルティング事業部</p>
        <img srcset="<?php echo get_stylesheet_directory_uri();?>/images/pages/front-page/img_project003.png, <?php echo get_stylesheet_directory_uri();?>/images/pages/front-page/img_project003@2x.png 2x" src="<?php echo get_stylesheet_directory_uri();?>/images/pages/front-page/img_project003.png" alt="">
      </a>
    </li>
    <li data-aos="fade-down">
      <a href="<?php echo home_url("guide/#products"); ?>">
        <p>ビューティ<br>プロダクツ<br>事業部</p>
        <img srcset="<?php echo get_stylesheet_directory_uri();?>/images/pages/front-page/img_project004.png, <?php echo get_stylesheet_directory_uri();?>/images/pages/front-page/img_project004@2x.png 2x" src="<?php echo get_stylesheet_directory_uri();?>/images/pages/front-page/img_project004.png" alt="">
      </a>
    </li>
    <li data-aos="fade-down">
      <a href="<?php echo home_url("guide/#ec"); ?>">
        <p>eコマース<br>事業部</p>
        <img srcset="<?php echo get_stylesheet_directory_uri();?>/images/pages/front-page/img_project005.png, <?php echo get_stylesheet_directory_uri();?>/images/pages/front-page/img_project005@2x.png 2x" src="<?php echo get_stylesheet_directory_uri();?>/images/pages/front-page/img_project005.png" alt="">
      </a>
    </li>
    <li data-aos="fade-down">
      <a href="<?php echo home_url("guide/#bio"); ?>">
        <p>バイオヘルス<br>事業部</p>
        <img srcset="<?php echo get_stylesheet_directory_uri();?>/images/pages/front-page/img_project006.png, <?php echo get_stylesheet_directory_uri();?>/images/pages/front-page/img_project006@2x.png 2x" src="<?php echo get_stylesheet_directory_uri();?>/images/pages/front-page/img_project006.png" alt="">
      </a>
    </li>
    <li data-aos="fade-down">
      <a href="<?php echo home_url("guide/#overseas"); ?>">
        <p>海外<br>事業部</p>
        <img srcset="<?php echo get_stylesheet_directory_uri();?>/images/pages/front-page/img_project007.png, <?php echo get_stylesheet_directory_uri();?>/images/pages/front-page/img_project007@2x.png 2x" src="<?php echo get_stylesheet_directory_uri();?>/images/pages/front-page/img_project007.png" alt="">
      </a>
    </li>
  </ul>
</section>

<section class="sec-people" data-aos="fade-down">
  <header>
    <h2>OUR PROFILE</h2>
    <p>会社紹介</p>
  </header>

  <ul>
    <li data-aos="fade-down">
      <a href="<?php echo home_url("policy"); ?>">
        <p>企業理念</p>
        <img srcset="<?php echo get_stylesheet_directory_uri();?>/images/pages/front-page/img_profile001.png, <?php echo get_stylesheet_directory_uri();?>/images/pages/front-page/img_profile001@2x.png 2x" src="<?php echo get_stylesheet_directory_uri();?>/images/pages/front-page/img_profile001.png" alt="">
      </a>
    </li>

    <li data-aos="fade-down">
      <a href="<?php echo home_url("profile"); ?>">
        <p>会社情報</p>
        <img srcset="<?php echo get_stylesheet_directory_uri();?>/images/pages/front-page/img_profile002.png, <?php echo get_stylesheet_directory_uri();?>/images/pages/front-page/img_profile002@2x.png 2x" src="<?php echo get_stylesheet_directory_uri();?>/images/pages/front-page/img_profile002.png" alt="">
      </a>
    </li>

    <li data-aos="fade-down">
      <a href="<?php echo home_url("media"); ?>">
        <p>メディア</p>
        <img srcset="<?php echo get_stylesheet_directory_uri();?>/images/pages/front-page/img_profile003.png, <?php echo get_stylesheet_directory_uri();?>/images/pages/front-page/img_profile003@2x.png 2x" src="<?php echo get_stylesheet_directory_uri();?>/images/pages/front-page/img_profile003.png" alt="">
      </a>
    </li>

    <li data-aos="fade-down">
      <a href="<?php echo home_url("recruit"); ?>">
        <p>採用情報</p>
        <img srcset="<?php echo get_stylesheet_directory_uri();?>/images/pages/front-page/img_profile004.png, <?php echo get_stylesheet_directory_uri();?>/images/pages/front-page/img_profile004@2x.png 2x" src="<?php echo get_stylesheet_directory_uri();?>/images/pages/front-page/img_profile004.png" alt="">
      </a>
    </li>

    <li data-aos="fade-down">
      <a href="<?php echo home_url("policy/#social"); ?>">
        <p>社会貢献</p>
        <img srcset="<?php echo get_stylesheet_directory_uri();?>/images/pages/front-page/img_profile005.png, <?php echo get_stylesheet_directory_uri();?>/images/pages/front-page/img_profile005@2x.png 2x" src="<?php echo get_stylesheet_directory_uri();?>/images/pages/front-page/img_profile005.png" alt="">
      </a>
    </li>

    <li data-aos="fade-down">
      <a href="<?php echo home_url("contact"); ?>">
        <p>お問い合わせ</p>
        <img srcset="<?php echo get_stylesheet_directory_uri();?>/images/pages/front-page/img_profile006.png, <?php echo get_stylesheet_directory_uri();?>/images/pages/front-page/img_profile006@2x.png 2x" src="<?php echo get_stylesheet_directory_uri();?>/images/pages/front-page/img_profile006.png" alt="">
      </a>
    </li>
  </ul>
</section>

<section class="sec-topics" data-aos="fade">
  <header>
    <h2>FEATURED TOPICS</h2>
    <p>クールグループのトピックス</p>
  </header>

  <ul data-infinite-slide>
    <li><a href=""><img src="<?php echo get_stylesheet_directory_uri();?>/images/pages/dummy/img_topics001.png" alt=""></a></li>
    <li><a href=""><img src="<?php echo get_stylesheet_directory_uri();?>/images/pages/dummy/img_topics002.png" alt=""></a></li>
    <li><a href=""><img src="<?php echo get_stylesheet_directory_uri();?>/images/pages/dummy/img_topics003.png" alt=""></a></li>
    <li><a href=""><img src="<?php echo get_stylesheet_directory_uri();?>/images/pages/dummy/img_topics004.png" alt=""></a></li>
    <li><a href=""><img src="<?php echo get_stylesheet_directory_uri();?>/images/pages/dummy/img_topics005.png" alt=""></a></li>
    <li><a href=""><img src="<?php echo get_stylesheet_directory_uri();?>/images/pages/dummy/img_topics007.jpg" alt=""></a></li>
    <li><a href=""><img src="<?php echo get_stylesheet_directory_uri();?>/images/pages/dummy/img_topics008.jpg" alt=""></a></li>
    <li><a href=""><img src="<?php echo get_stylesheet_directory_uri();?>/images/pages/dummy/img_topics009.jpg" alt=""></a></li>
  </ul>
</section>

<section class="sec-new" data-aos="fade">
  <header>
    <h2>WHAT’S NEW</h2>
    <p>最新情報</p>
  </header>

  <ul class="slick" data-top-news>
    <li>
      <a class="sec-new-post-link" href="">
        <div class="sec-new-post">
          <img src="<?php echo get_stylesheet_directory_uri();?>/images/pages/dummy/img_001.jpg" alt="">
          <p><time>2017.08.28</time></p>
          <p>クールプロジェクトはビューティーワールドジャパン大阪2017（10/16～10/18インテックス大阪会場）に出展します。</p>
        </div>
      </a>
    </li>

    <li>
      <a class="sec-new-post-link" href="">
        <div class="sec-new-post">
          <img src="<?php echo get_stylesheet_directory_uri();?>/images/pages/dummy/img_002.jpg" alt="">
          <p><time>2017.08.21</time></p>
          <p>クールプロジェクトは中国(広州）国際美博会（9/3～9/5）に出展しました。</p>
        </div>
      </a>
    </li>

    <li>
      <a class="sec-new-post-link" href="">
        <div class="sec-new-post">
          <img src="<?php echo get_stylesheet_directory_uri();?>/images/pages/dummy/img_003.jpg" alt="">
          <p><time>2017.06.05</time></p>
          <p>クールエステティックグループは毎年6月第1週目に「ボランティアデイ」を設け、企業市民として、身近にお世話になっております各店の…</p>
        </div>
      </a>
    </li>

    <li>
      <a class="sec-new-post-link" href="">
        <div class="sec-new-post">
          <img src="<?php echo get_stylesheet_directory_uri();?>/images/pages/dummy/img_004.jpg" alt="">
          <p><time>2017.05.17</time></p>
          <p>JBマシナリー事業部＆コンサルティング事業部は、ビューティーワールドジャパン東京(2017.5.15～5.17東京ビックサイト)に出…</p>
        </div>
      </a>
    </li>

    <li>
      <a class="sec-new-post-link" href="">
        <div class="sec-new-post">
          <img src="<?php echo get_stylesheet_directory_uri();?>/images/pages/dummy/img_005.jpg" alt="">
          <p><time>2017.04.10</time></p>
          <p>弊社東京支社移転のご案内です。</p>
        </div>
      </a>
    </li>
  </ul>

  <a class="sec-new-btn" href="">
    <img src="<?php echo get_stylesheet_directory_uri();?>/images/pages/front-page/btn_news.svg" alt="READ MORE">
  </a>
</section>

<section class="sec-brand" data-aos="fade">
  <header>
    <h2>OUR SERVICE BLAND</h2>
    <p>商品ブランド</p>
  </header>

  <ul>
    <li>
      <a href="https://www.coeur-esthetique.jp/" target="_blank" rel="nofollow">
        <p>トータルビューティ<br>クールエステティック</p>
        <img srcset="<?php echo get_stylesheet_directory_uri();?>/images/pages/front-page/img_brand001.png, <?php echo get_stylesheet_directory_uri();?>/images/pages/front-page/img_brand001@2x.png 2x" src="<?php echo get_stylesheet_directory_uri();?>/images/pages/front-page/img_brand001.png" alt="">
      </a>
    </li>
    <li>
      <a href="https://www.coeur-esthetique.jp/" target="_blank" rel="nofollow">
        <p>痩身専門サロン<br>クールグランボディ</p>
        <img srcset="<?php echo get_stylesheet_directory_uri();?>/images/pages/front-page/img_brand002.png, <?php echo get_stylesheet_directory_uri();?>/images/pages/front-page/img_brand002@2x.png 2x" src="<?php echo get_stylesheet_directory_uri();?>/images/pages/front-page/img_brand002.png" alt="">
      </a>
    </li>
    <li>
      <a href="https://www.coeur-esthetique.jp/" target="_blank" rel="nofollow">
        <p>フェイシャル専門サロン<br>クールフェイシャルボーテ</p>
        <img srcset="<?php echo get_stylesheet_directory_uri();?>/images/pages/front-page/img_brand003.png, <?php echo get_stylesheet_directory_uri();?>/images/pages/front-page/img_brand003@2x.png 2x" src="<?php echo get_stylesheet_directory_uri();?>/images/pages/front-page/img_brand003.png" alt="">
      </a>
    </li>
    <li>
      <a href="http://www.jb-m.jp/motojuku.html" target="_blank" rel="nofollow">
        <p>勝ち組サロン経営術<br>茂藤塾<br>（もとうじゅく）</p>
        <img srcset="<?php echo get_stylesheet_directory_uri();?>/images/pages/front-page/img_brand004.png, <?php echo get_stylesheet_directory_uri();?>/images/pages/front-page/img_brand004@2x.png 2x" src="<?php echo get_stylesheet_directory_uri();?>/images/pages/front-page/img_brand004.png" alt="">
      </a>
    </li>
    <li>
      <a href="https://coeur-movie.jp/" target="_blank" rel="nofollow">
        <p>エステティシャン<br>新人研修・幹部会議<br>動画配信サイト<br>クールムービー</p>
        <img srcset="<?php echo get_stylesheet_directory_uri();?>/images/pages/front-page/img_brand005.png, <?php echo get_stylesheet_directory_uri();?>/images/pages/front-page/img_brand005@2x.png 2x" src="<?php echo get_stylesheet_directory_uri();?>/images/pages/front-page/img_brand005.png" alt="">
      </a>
    </li>
    <li>
      <a>
        <p>お役立ち<br>脱毛テクニック<br>セミナー</p>
        <img srcset="<?php echo get_stylesheet_directory_uri();?>/images/pages/front-page/img_brand014.png, <?php echo get_stylesheet_directory_uri();?>/images/pages/front-page/img_brand014@2x.png 2x" src="<?php echo get_stylesheet_directory_uri();?>/images/pages/front-page/img_brand014.png" alt="">
      </a>
    </li>
    <li>
      <a href="http://www.jb-m.jp/" target="_blank" rel="nofollow">
        <p>国産美容器・化粧品<br>ジェイ・ビー・マシナリー</p>
        <img srcset="<?php echo get_stylesheet_directory_uri();?>/images/pages/front-page/img_brand006.png, <?php echo get_stylesheet_directory_uri();?>/images/pages/front-page/img_brand006@2x.png 2x" src="<?php echo get_stylesheet_directory_uri();?>/images/pages/front-page/img_brand006.png" alt=""></a></li>
    <li>
      <a href="http://www.jb-m.jp/picodonna.html" target="_blank" rel="nofollow">
        <p>デリケートゾーンケア<br>オーガニックコスメ<br>ピコドンナ<br>シリーズ</p>
        <img srcset="<?php echo get_stylesheet_directory_uri();?>/images/pages/front-page/img_brand007.png, <?php echo get_stylesheet_directory_uri();?>/images/pages/front-page/img_brand007@2x.png 2x" src="<?php echo get_stylesheet_directory_uri();?>/images/pages/front-page/img_brand007.png" alt="">
      </a>
    </li>
    <li>
      <a href="http://www.jb-m.jp/nudist.html" target="_blank" rel="nofollow">
        <p>バスタイム<br>ボディケアコスメ<br>ピコドンナ・ヌーディスト<br>シリーズ</p>
        <img srcset="<?php echo get_stylesheet_directory_uri();?>/images/pages/front-page/img_brand008.png, <?php echo get_stylesheet_directory_uri();?>/images/pages/front-page/img_brand008@2x.png 2x" src="<?php echo get_stylesheet_directory_uri();?>/images/pages/front-page/img_brand008.png" alt="">
      </a>
    </li>
    <li>
      <a href="http://www.jb-m.jp/et.html" target="_blank" rel="nofollow">
        <p>美容器専用美容液<br>（ボディ・バスト・フェイス）<br>エット・シリーズ</p>
        <img srcset="<?php echo get_stylesheet_directory_uri();?>/images/pages/front-page/img_brand009.png, <?php echo get_stylesheet_directory_uri();?>/images/pages/front-page/img_brand009@2x.png 2x" src="<?php echo get_stylesheet_directory_uri();?>/images/pages/front-page/img_brand009.png" alt="">
      </a>
    </li>
    <li>
      <a href="http://www.jb-m.jp/beaute.html" target="_blank" rel="nofollow">
        <p>プライベートブランド<br>コスメ<br>ボーテ・ド・クール</p>
        <img srcset="<?php echo get_stylesheet_directory_uri();?>/images/pages/front-page/img_brand010.png, <?php echo get_stylesheet_directory_uri();?>/images/pages/front-page/img_brand010@2x.png 2x" src="<?php echo get_stylesheet_directory_uri();?>/images/pages/front-page/img_brand010.png" alt="">
      </a>
    </li>
    <li>
      <a href="http://www.cocosele.jp/" target="_blank" rel="nofollow">
        <p>一般美容商品<br>ECサイト<br>ココセレ</p>
        <img srcset="<?php echo get_stylesheet_directory_uri();?>/images/pages/front-page/img_brand011.png, <?php echo get_stylesheet_directory_uri();?>/images/pages/front-page/img_brand011@2x.png 2x" src="<?php echo get_stylesheet_directory_uri();?>/images/pages/front-page/img_brand011.png" alt="">
      </a>
    </li>
    <li>
      <a href="http://jbm-shop.jp/" target="_blank" rel="nofollow">
        <p>業務用美容商品<br>ECサイト<br>クールBtoB<br>オンラインショップ</p>
        <img srcset="<?php echo get_stylesheet_directory_uri();?>/images/pages/front-page/img_brand012.png, <?php echo get_stylesheet_directory_uri();?>/images/pages/front-page/img_brand012@2x.png 2x" src="<?php echo get_stylesheet_directory_uri();?>/images/pages/front-page/img_brand012.png" alt="">
      </a>
    </li>
    <li>
      <a href="http://hokuchuso.jp/" target="_blank" rel="nofollow">
        <p>バイオ冬虫夏草<br>北虫草<br>（ほくちゅうそう）</p>
        <img srcset="<?php echo get_stylesheet_directory_uri();?>/images/pages/front-page/img_brand013.png, <?php echo get_stylesheet_directory_uri();?>/images/pages/front-page/img_brand013@2x.png 2x" src="<?php echo get_stylesheet_directory_uri();?>/images/pages/front-page/img_brand013.png" alt="">
      </a>
    </li>
    <li>
      <a>
        <p>クール<br>日本フェイシャル<br>エステティック</p>
        <img srcset="<?php echo get_stylesheet_directory_uri();?>/images/pages/front-page/img_brand015.png, <?php echo get_stylesheet_directory_uri();?>/images/pages/front-page/img_brand015@2x.png 2x" src="<?php echo get_stylesheet_directory_uri();?>/images/pages/front-page/img_brand015.png" alt="">
      </a>
    </li>
  </ul>
</section>

<?php get_footer(); ?>
