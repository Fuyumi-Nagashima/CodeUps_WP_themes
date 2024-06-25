<?php get_header(); ?>
    <!-- 下層ページのmv -->
    <main>
      <section class="layout-sub-mv sub-mv page-sitemap">
        <div class="sub-mv__page-header">
          <h2 class="sub-mv__title page-sitemap__title"><span>site</span>&nbsp;<span>map</span></h2>
        </div>
      </section>
    <!-- パンくず -->
    <nav class="breadcrumb">
      <ol
      class="breadcrumb__lists inner"
      itemscope
      itemtype="https://schema.org/BreadcrumbList"
  >
      <li
      class="breadcrumb__list "
      itemprop="itemListElement"
      itemscope
      itemtype="https://schema.org/ListItem"
      >
      <a class="breadcrumb__list-link" itemprop="item" href="index.html">
          <span itemprop="name" class="breadcrumb__list-active">top</span>
      </a>
      <meta itemprop="position" content="1" />
      </li>

      <li
      class="breadcrumb__list"
      itemprop="itemListElement"
      itemscope
      itemtype="https://schema.org/ListItem"
      >
      <p class="breadcrumb__list-link" itemprop="item">
          <span itemprop="name">サイトマップ</span>
      </p>
      <meta itemprop="position" content="2" />
      </li>
  </ol>
  </nav>
  <!-- サイトマップ -->
  <div class="layout-site-map sitemap">
    <div class="sitemap__inner inner">
      <div class="sitemap__nav sitemap-nav footer-nav">
        <div class="sitemap-nav__content footer-nav__content">
          <div class="footer-nav__items item01">
            <div class="footer-nav__item">
              <a href="./page-campaign.html" class="sitemap-nav__heading footer-nav__heading"><span>キャンペーン</span></a>
              <ul class="sitemap-nav__list footer-nav__list">
                <li><a href="#">ライセンス取得</a></li>
                <li><a href="#">貸切体験ダイビング</a></li>
                <li><a href="#">ナイトダイビング</a></li>
              </ul>
            </div>
            <div class="footer-nav__item">
              <p class="sitemap-nav__heading footer-nav__heading"><a href="./page-about.html">私たちについて</a></p>
            </div>
          </div>

          <div class="footer-nav__items item02">
            <div class="footer-nav__item">
              <a href="./page-information.html" class="sitemap-nav__heading footer-nav__heading">ダイビング情報</a>
              <ul class="sitemap-nav__list footer-nav__list">
                <li><a href="page-information.html#tab1">ライセンス講習</a></li>
                <li><a href="page-information.html#tab3">体験ダイビング</a></li>
                <li><a href="page-information.html#tab2">ファンダイビング</a></li>
              </ul>
            </div>
            <div class="footer-nav__item">
              <p class="sitemap-nav__heading footer-nav__heading"><a href="./home.html">ブログ</a></p>
            </div>
          </div>

          <div class="footer-nav__items item03">
            <div class="footer-nav__item">
              <p class="sitemap-nav__heading footer-nav__heading"><a href="./page-voice.html">お客様の声</a></p>
            </div>
            <div class="footer-nav__item">
              <a href="./page-price.html" class="sitemap-nav__heading footer-nav__heading">料金一覧</a>
              <ul class="sitemap-nav__list footer-nav__list">
                <li><a href="#">ライセンス講習</a></li>
                <li><a href="#">体験ダイビング</a></li>
                <li><a href="#">ファンダイビング</a></li>
              </ul>
            </div>
          </div>
          <div class="footer-nav__items item04">
            <div class="footer-nav__item">
              <p class="sitemap-nav__heading footer-nav__heading"><a href="./page-faq.html">よくある質問</a></p>
            </div>
            <div class="footer-nav__item">
              <p class="sitemap-nav__heading footer-nav__heading"><a href="./page-privacy-policy.html">プライバシー<br class="u-mobile">ポリシー</a></p>
            </div>
            <div class="footer-nav__item">
              <p class="sitemap-nav__heading footer-nav__heading"><a href="./page-terms-of-service.html">利用規約</a></p>
            </div>
            <div class="footer-nav__item">
              <p class="sitemap-nav__heading footer-nav__heading"><a href="#">お問い合わせ</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php get_footer(); ?>