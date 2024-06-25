<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="robots" content="noindex" />
    <?php wp_head(); ?>
  </head>
  <?php 
  $campaign = esc_url( home_url('/campaign/'));
  $aboutus = esc_url( home_url('/aboutus/'));
  $information = esc_url( home_url('/information/'));
  $blog = esc_url( home_url('/blog/'));
  $voice = esc_url( home_url('/voice/'));
  $price = esc_url( home_url('/price/'));
  $faq = esc_url( home_url('/faq/'));
  $contact = esc_url( home_url('/contact/'));
  ?>
  <body>
    <header class="layout-header header js-header">
      <div class="header__inner">
        <h1 class="header__logo">
          <a class="header__logo-link" href="<?php echo esc_url(home_url('/')); ?>">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/latest-logo.svg" alt="codeupsのロゴ画像"/>
          </a>
        </h1>
        <div class="header__hamburger hamburger u-mobile js-header-header__hamburger">
          <span></span>
          <span></span>
          <span></span>
        </div>
        <nav class="header__pc-nav pc-nav u-desktop">
          <ul class="pc-nav__items">
            <li class="pc-nav__item">
              <a class="pc-nav__link" href="<?php echo $campaign; ?>">campaign<span>キャンペーン</span></a>
            </li>
            <li class="pc-nav__item">
              <a class="pc-nav__link" href="<?php echo $aboutus; ?>">about&nbsp;us<span>私たちについて</span></a>
            </li>
            <li class="pc-nav__item">
              <a class="pc-nav__link" href="<?php echo $information; ?>">information<span>ダイビング情報</span></a>
            </li>
            <li class="pc-nav__item">
              <a class="pc-nav__link" href="<?php echo $blog; ?>">blog<span>ブログ</span></a>
            </li>
            <li class="pc-nav__item">
              <a class="pc-nav__link" href="<?php echo $voice; ?>">voice<span>お客様の声</span></a>
            </li>
            <li class="pc-nav__item">
              <a class="pc-nav__link" href="<?php echo $price; ?>">price<span>料金一覧</span></a>
            </li>
            <li class="pc-nav__item">
              <a class="pc-nav__link" href="<?php echo $faq; ?>">faq<span>よくある質問</span></a>
            </li>
            <li class="pc-nav__item">
              <a class="pc-nav__link" href="<?php echo $contact; ?>">contact<span>お問い合わせ</span></a>
            </li>
          </ul>
        </nav>
        <div class="header__drawer-menu drawer-menu u-mobile js-drawer">
          <div class="drawer-menu__inner">
            <div class="drawer-menu__content">
              <div class="drawer-menu__items">
                <div class="drawer-menu__item">
                  <p class="drawer-menu__heading"><a href="./page-campaign.html">キャンペーン</a></p>
                  <ul class="drawer-menu__navi">
                    <li><a href="#">ライセンス取得</a></li>
                    <li><a href="#">貸切体験ダイビング</a></li>
                    <li><a href="#">ナイトダイビング</a></li>
                  </ul>
                </div>
                <div class="drawer-menu__item">
                  <p class="drawer-menu__heading"><a href="./page-about.html">私たちについて</a></p>
                </div>
                <div class="drawer-menu__item">
                  <p class="drawer-menu__heading"><a href="./page-information.html">ダイビング情報</a></p>
                  <ul class="drawer-menu__navi">
                    <li><a href="page-information.html?id=tab1">ライセンス講習</a></li>
                    <li><a href="page-information.html?id=tab3">体験ダイビング</a></li>
                    <li><a href="page-information.html?id=tab2">ファンダイビング</a></li>
                  </ul>
                </div>
                <div class="drawer-menu__item">
                  <p class="drawer-menu__heading"><a href="./home.html">ブログ</a></p>
                </div>
              </div>

              <div class="drawer-menu__items">
                <div class="drawer-menu__item">
                  <p class="drawer-menu__heading"><a href="./page-voice.html">お客様の声</a></p>
                </div>
                <div class="drawer-menu__item">
                  <p class="drawer-menu__heading"><a href="./page-price.html">料金一覧</a></p>
                  <ul class="drawer-menu__navi">
                    <li><a href="#">ライセンス講習</a></li>
                    <li><a href="#">体験ダイビング</a></li>
                    <li><a href="#">ファンダイビング</a></li>
                  </ul>
                </div>
                <div class="drawer-menu__item">
                  <p class="drawer-menu__heading"><a href="./page-faq.html">よくある質問</a></p>
                </div>
                <div class="drawer-menu__item">
                  <p class="drawer-menu__heading"><a href="./page-privacy-policy.html">プライバシー<br>ポリシー</a></p>
                </div>
                <div class="drawer-menu__item">
                  <p class="drawer-menu__heading"><a href="./page-terms-of-service.html">利用規約</a></p>
                </div>
                <div class="drawer-menu__item">
                  <p class="drawer-menu__heading"><a href="./page-contact.html">お問い合わせ</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>