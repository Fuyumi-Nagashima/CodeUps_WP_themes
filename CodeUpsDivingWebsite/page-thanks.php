<?php get_header(); ?>
<main>
      <section class="pagethanks-mv sub-mv">
        <div class="sub-mv__page-header">
          <h2 class="sub-mv__title">
            <span>contact</span>
          </h2>
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
      class="breadcrumb__list "
      itemprop="itemListElement"
      itemscope
      itemtype="https://schema.org/ListItem"
      >
      <a class="breadcrumb__list-link" itemprop="item" href="#">
          <span itemprop="name" class="breadcrumb__list-active">お問い合わせ</span>
      </a>
      <meta itemprop="position" content="2" />
      </li>

      <li
      class="breadcrumb__list"
      itemprop="itemListElement"
      itemscope
      itemtype="https://schema.org/ListItem"
      >
      <p class="breadcrumb__list-link" itemprop="item">
          <span itemprop="name">送信完了</span>
      </p>
      <meta itemprop="position" content="3" />
      </li>
  </ol>
  </nav>
  <!-- サンクスページ -->
  <section class="layout-page-thanks page-thanks">
    <div class="page-thanks__inner inner">
      <div class="page-thanks__container">
        <h2 class="page-thanks__title">お問い合わせ内容を送信完了しました。</h2>
        <div class="page-thanks__message">
          <p>このたびは、お問い合わせ頂き<br class="u-mobile">誠にありがとうございます。<br>お送り頂きました内容を確認の上、<br class="u-mobile">3営業日以内に折り返しご連絡させて頂きます。<br>また、ご記入頂いたメールアドレスへ、<br class="u-mobile">自動返信の確認メールをお送りしております。</p>
        </div>
      </div> 
    </div>   
  </section>
  </main>
<?php get_footer(); ?>