<?php
  get_header();
  // Template Name: 採用情報
?>

<main class="recruit">
  <header class="header">
    <h1>
      <picture>
        <source media="(min-width: 768px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/images/pages/recruit/ttl_header@pc.svg">
        <source media="(min-width: 320px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/images/pages/recruit/ttl_header@sp.svg">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/pages/recruit/ttl_header@pc.svg" alt="採用情報">
      </picture>
    </h1>
  </header>

  <section class="section-recruit" id="1">
    <header>
      <p>ISHIKAWA AREA</p>
      <h2>石川エリア</h2>
    </header>

    <?php if ( have_rows('ishikawa') ): while ( have_rows('ishikawa') ): the_row(); ?>
      <table>
        <?php if ( have_rows('table') ): ?>
          <tbody>
            <?php while ( have_rows('table') ): the_row(); ?>
              <tr>
                <th><?php the_sub_field('left') ?></th>
                <td><?php the_sub_field('right') ?></td>
              </tr>
            <?php endwhile; ?>
          </tbody>
        <?php endif; ?>
      </table>
    <?php endwhile; else: ?>
      <p>※現在、募集は行っておりません。</p>
    <?php endif; ?>
  </section>

  <section class="section-recruit" id="2">
    <header>
      <p>TOKYO AREA</p>
      <h2>東京エリア</h2>
    </header>

    <?php if ( have_rows('tokyo') ): while ( have_rows('tokyo') ): the_row(); ?>
      <table>
        <?php if ( have_rows('table') ): ?>
          <tbody>
            <?php while ( have_rows('table') ): the_row(); ?>
              <tr>
                <th><?php the_sub_field('left') ?></th>
                <td><?php the_sub_field('right') ?></td>
              </tr>
            <?php endwhile; ?>
          </tbody>
        <?php endif; ?>
      </table>
    <?php endwhile; else: ?>
      <p>※現在、募集は行っておりません。</p>
    <?php endif; ?>
  </section>
<!--
  <section class="section-recruit" id="3">
    <header>
      <p>OSAKA AREA</p>
      <h2>大阪エリア</h2>
    </header>

    <?php if ( have_rows('osaka') ): ?>
      <div class="table-wrap">
        <?php while ( have_rows('osaka') ): the_row(); ?>
          <table>
            <caption><?php the_sub_field('caption'); ?></caption>
            <?php if ( have_rows('table') ): ?>
              <tbody>
                <?php while ( have_rows('table') ): the_row(); ?>
                  <tr>
                    <th><?php the_sub_field('left') ?></th>
                    <td><?php the_sub_field('right') ?></td>
                  </tr>
                <?php endwhile; ?>
              </tbody>
            <?php endif; ?>
          </table>
        <?php endwhile; ?>
      </div>
    <?php else: ?>
      <p>※現在、募集は行っておりません。</p>
    <?php endif; ?>
  </section>
-->
  <section class="section-recruit-bottom" id="4">
    <header>
      <p>OTHERS</p>
      <h2>その他募集</h2>
    </header>

    <div class="staff">
      <p class="title">エステスタッフ募集（富山県 / 石川県 / 福井県）</p>
      <p>【クールエステティック、クールフェイシャルボーテ、クールグランボディ】<br>のサロンにて、働いていただけるエステスタッフを募集中です。<br>詳しくは「クールエステティック」サイト内の採用情報をご覧ください。</p>

      <p><a href="https://coeur-esthetique.jp/" target="_blank">クールエステティックのサイトへ</a></p>
    </div>

    <div class="seminar">
      <p class="title">クールエステ塾（富山県 / 石川県 / 福井県）</p>
      <p>エステティシャンのための「実践！現場 学び塾」です。<br>リアル店舗で働きながらお給料をもらえて学べる《クールエステ塾》は<br>短期1年コース／中期3年コース／長期5年コース</p>

      <p><a href="https://coeur-project.jp/wp-content/uploads/2018/06/esthejuku.pdf" target="_blank">くわしくはこちら</a></p>
    </div>
  </section>
</main>

<?php get_footer(); ?>
