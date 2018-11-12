<?php
  get_header();
  // Template Name: お問い合わせ
?>

<main class="contact">
  <header class="header">
    <h1>
      <picture>
        <source media="(min-width: 768px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/images/pages/contact/ttl_header@pc.svg">
        <source media="(min-width: 320px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/images/pages/contact/ttl_header@sp.svg">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/pages/contact/ttl_header@pc.svg" alt="採用情報">
      </picture>
    </h1>
  </header>

  <div class="wrapper">
    <section class="section-form" id="form">
      <header>
        <p>INQUIRY FORM</p>
        <h2>お問い合わせフォーム</h2>
      </header>

      <?php echo do_shortcode('[mwform_formkey key="91"]'); ?>
    </section>

    <section class="section-privacy" id="policy">
      <header>
        <p>PRIVACY POLICY</p>
        <h2>プライバシーポリシー</h2>
      </header>

      <p>株式会社 クールプロジェクト（以下「当社」）は、以下のとおり個人情報保護方針を定め、個人情報保護の仕組みを構築し、全従業員に個人情報保護の重要性の認識と取組みを徹底させることにより、個人情報の保護を推進致します。</p>

      <section>
        <h3>個人情報の管理</h3>
        <p>当社は、お客さまの個人情報を正確かつ最新の状態に保ち、個人情報への不正アクセス・紛失・破損・改ざん・漏洩などを防止するため、セキュリティシステムの維持・管理体制の整備・社員教育の徹底等の必要な措置を講じ、安全対策を実施し個人情報の厳重な管理を行ないます。</p>
      </section>

      <section>
        <h3>個人情報の利用目的</h3>
        <p>お客さまからお預かりした個人情報は、当社からのご連絡や業務のご案内やご質問に対する回答として、電子メールや資料のご送付に利用いたします。</p>
      </section>

      <section>
        <h3>個人情報の第三者への開示・提供の禁止</h3>
        <p>当社は、お客さまよりお預かりした個人情報を適切に管理し、次のいずれかに該当する場合を除き、個人情報を第三者に開示いたしません。</p>

        <ul>
          <li>お客さまの同意がある場合</li>
          <li>お客さまが希望されるサービスを行なうために当社が業務を委託する業者に対して開示する場合</li>
          <li>法令に基づき開示することが必要である場合</li>
        </ul>
      </section>

      <section>
        <h3>個人情報の安全対策</h3>
        <p>当社は、個人情報の正確性及び安全性確保のために、セキュリティに万全の対策を講じています。</p>
      </section>

      <section>
        <h3>ご本人の照会</h3>
        <p>お客さまがご本人の個人情報の照会・修正・削除などをご希望される場合には、ご本人であることを確認の上、対応させていただきます。</p>
      </section>

      <section>
        <h3>法令、規範の遵守と見直し</h3>
        <p>当社は、保有する個人情報に関して適用される日本の法令、その他規範を遵守するとともに、本ポリシーの内容を適宜見直し、その改善に努めます。</p>
      </section>

      <section>
        <h3>お問い合せ</h3>
        <p>当社の個人情報の取扱に関するお問い合せは下記までご連絡ください。<br>
        株式会社 クールプロジェクト<br>
        〒921-8802 石川県野々市市押野1-380 クールセントラルビル<br>
        Tel.076-246-5111 Fax.076-246-5113<br>
        Mail:info@coeur-project.jp</p>
      </section>
    </section>

    <section class="section-profile" id="tel">
      <header>
        <p>TEL &amp; FAX</p>
        <h2>電話・FAXでのお問い合わせ</h2>
      </header>

      <div class="flex-column">
        <div class="half-column">
          <section class="project">
            <h3>株式会社クールプロジェクト</h3>
            <p><b>［金沢本社 / 管理部］ </b><br>
            〒921-8802 石川県野々市市押野1-380<br>
            クールセントラルビル<br>
            Tel.076-246-5111 Fax.076-246-5113</p>
            <p><b>［東京支社］</b><br>
            〒104-0061 東京都中央区銀座5-9-12<br>
            ダイヤモンドビル4Ｆ<br>
            Free.0120-010-510  Tel.03-3572-4300<br>
            Fax.03-3572-4301</p>
          </section>

          <section class="esthetique">
            <h3>エステティック事業部</h3>
            <p><b>［金沢本社 / 代表］</b><br>
            〒921-8802 石川県野々市市押野1-380 クールセントラルビル
            Tel.076-246-5111 Fax.076-246-5113</p>
          </section>

          <section class="fc">
            <h3>FC(フランチャイズ)事業部</h3>
            <p><b>［金沢本社/国内FC］</b><br>
            〒921-8802 石川県野々市市押野1-380 クールセントラルビル<br>
            Tel.076-246-5111 Fax.076-246-5113</p>
            <p><b>［東京支社/海外FC］</b><br>
            〒104-0061 東京都中央区銀座5-9-12 ダイヤモンドビル4Ｆ<br />
            Free.0120-010-510 Tel.03-3572-4300 Fax.03-3572-4301</p>
          </section>

          <section class="consulting">
            <h3>コンサルティング事業部</h3>
            <p><b>［金沢本社/国内コンサルティング］</b><br />
              〒921-8802 石川県野々市市押野1-380 クールセントラルビル<br>
            Tel.076-246-5111 Fax.076-246-5113</p>
            <p><b>［東京支社/海外コンサルティング］</b><br>
            〒104-0061 東京都中央区銀座5-9-12 ダイヤモンドビル4Ｆ<br />
            Free.0120-010-510 Tel.03-3572-4300 Fax.03-3572-4301</p>
          </section>

          <section class="overseas">
            <h3>海外事業部</h3>
            <p><b>［東京支社］</b><br>
            〒104-0061 東京都中央区銀座5-9-12 ダイヤモンドビル4Ｆ<br>
            Free.0120-010-510  Tel.03-3572-4300 Fax.03-3572-4301</p>
            <p><b>［クールエステティック富山研修センター］</b><br>
            〒939-8015 富山県富山市中川原382-5</p>
          </section>
        </div>

        <div class="half-column">
          <section class="products">
            <h3>ビューティプロダクツ事業部</h3>

            <section>
              <h4>●PB(プライベートブランド)グループ</h4>
              <p><b>［金沢本社 / JBマシナリー］ </b><br>
              〒921-8802 石川県野々市市押野1-380 クールセントラルビル<br>
              Free.0120-00-7980 Tel.076-248-2700 Fax.076-248-2730</p>
              <p><b>［東京支社］</b><br>
              〒104-0061 東京都中央区銀座5-9-12 ダイヤモンドビル4Ｆ<br>
              Free.0120-010-510  Tel.03-3572-4300 Fax.03-3572-4301</p>
            </section>

            <section>
              <h4>●OEMグループ</h4>
              <p><b>［金沢本社］</b><br>〒921-8802 石川県野々市市押野1-380 クールセントラルビル
               Tel.076-246-2060 Fax.076-246-2061</p>
            </section>

            <section>
              <h4>●ディーラーグループ</h4>
              <p><b>［金沢本社］</b><br>〒921-8802 石川県野々市市押野1-380 クールセントラルビル
               Tel.076-246-2060 Fax.076-246-2061</p>
            </section>
          </section>

          <section class="ec">
            <h3>eコマース事業部</h3>
            <p><b>［金沢本社］</b><br>〒921-8802 石川県野々市市押野1-380 クールセントラルビル
             Tel.076-246-2060 Fax.076-246-2061</p>
          </section>

          <section class="bio">
            <h3>バイオヘルス事業部</h3>
            <p><b>［金沢本社］</b><br>〒921-8802 石川県野々市市押野1-380 クールセントラルビル
             Free.0120-20-3400 Tel.076-248-2700 Fax.076-248-2730</p>
          </section>
        </div>
      </div>
    </section>
  </div>
</main>

<?php get_footer(); ?>
