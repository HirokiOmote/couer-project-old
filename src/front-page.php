<?php
get_header();
// Template Name: トップページ
?>

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

  <?php
    $images = get_field('gallery');
    if ( $images ):
  ?>
    <ul data-infinite-slide>
      <?php foreach( $images as $image ): ?>
        <li>
          <a href="<?php echo $image['description'] ?>" target="_blank">
            <img src="<?php echo $image['sizes']['policy_thumbnail']; ?>" alt="<?php echo $image['alt']; ?>">
            <p><?php echo $image['caption']; ?></p>
          </a>
        </li>
      <?php endforeach; ?>
    </ul>
  <?php endif; ?>
</section>

<section class="sec-new" data-aos="fade">
  <header>
    <h2>WHAT’S NEW</h2>
    <p>最新情報</p>
  </header>

  <?php
    $args = array (
      'post_type' => 'post',
      'posts_per_page' => 5
    );
    $the_query = new WP_Query( $args );
  ?>

  <?php if ( $the_query->have_posts() ): ?>
    <ul class="slick" data-top-news>
  		<?php while ( $the_query->have_posts() ): $the_query->the_post(); ?>
        <li>
          <a class="sec-new-post-link" href="<?php the_permalink(); ?>">
            <section class="sec-new-post">
              <?php the_post_thumbnail('topics_thumbnail'); ?>
              <header>
                <h3><?php the_title(); ?></h3>
                <p><time datetime="the_time('Y-m-d');"><?php the_time('Y.m.d'); ?></time></p>
              </header>
              <p><?php the_excerpt(); ?></p>
            </section>
          </a>
        </li>
      <?php endwhile; ?>
    </ul>
  <?php endif; ?>

  <a class="sec-new-btn" href="<?php echo home_url('/news/') ?>">
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
