<?php get_header(); ?>
<!-- 下層ページのmv -->
<main>
      <div class="page-404">
    <!-- パンくず -->
    <nav class="breadcrumb page-404-breadcrumb">
      <ol
      class="page-404-breadcrumb__lists breadcrumb__lists inner"
      itemscope
      itemtype="https://schema.org/BreadcrumbList"
  >
      <li
      class="breadcrumb__list breadcrumb__list--white"
      itemprop="itemListElement"
      itemscope
      itemtype="https://schema.org/ListItem"
      >
      <a class="breadcrumb__list-link breadcrumb__list-link--white" itemprop="item" href="index.html">
          <span itemprop="name" class="breadcrumb__list-active">top</span>
      </a>
      <meta itemprop="position" content="1" />
      </li>

      <li
      class="breadcrumb__list breadcrumb__list--white"
      itemprop="itemListElement"
      itemscope
      itemtype="https://schema.org/ListItem"
      >
      <p class="breadcrumb__list-link breadcrumb__list-link--white" itemprop="item">
          <span itemprop="name">404</span>
      </p>
      <meta itemprop="position" content="2" />
      </li>
  </ol>
  </nav>
  <!-- page-404 -->
  <section class="layout-page-404">
    <div class="page-404__inner inner">
      <h1 class="page-404__title">404</h1>
      <p class="page-404__text">申し訳ありません。<br>お探しのページが見つかりません。</p>
      <div class="page-404__btn">
        <a href="./index.html" class="btn btn--white">
          <span>page&nbsp;<span class="page-404__btn-text">top</span></span>
          <div class="btn__arrow btn__arrow--green"></div>
        </a>
      </div>
    </div>
  </section>
  </div>
  </main>
<?php get_footer(); ?>