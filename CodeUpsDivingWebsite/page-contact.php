<?php get_header(); ?>
<!-- 下層ページのmv -->
<main>
      <section class="layout-page-contact-mv sub-mv">
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
      class="breadcrumb__list"
      itemprop="itemListElement"
      itemscope
      itemtype="https://schema.org/ListItem"
      >
      <p class="breadcrumb__list-link" itemprop="item">
          <span itemprop="name">お問い合わせ</span>
      </p>
      <meta itemprop="position" content="2" />
      </li>
  </ol>
  </nav>
  <!-- コンタクトページ -->
  <div class="layout-page-contact page-contact">
    <div class="page-contact__inner inner">
            <div class="page-contact__form form">
                <form  method="post" action="#">
                  <dl class="form__items">
                    <dt class="form__label">お名前<span>必須</span></dt>
                    <dd class="form__input form-input">
                      <input type="text" name="name" placeholder="沖縄　太郎">
                    </dd>
                  </dl>
                  <dl class="form__items">
                    <dt class="form__label">メールアドレス<span>必須</span></dt>
                    <dd class="form__input form-input">
                      <input type="email" name="email" placeholder="aaa000@ggmail.com">
                    </dd>
                  </dl>
                  <dl class="form__items">
                    <dt class="form__label">電話番号<span>必須</span></dt>
                    <dd class="form__input form-input">
                      <input type="tel" name="tel" placeholder="000-0000-0000">
                    </dd>
                  </dl>
                    <dl class="form__items">
                        <dt class="form__label">お問い合わせ項目<span>必須</span></dt>
                        <dd class="form__checkbox form-checkbox">
                          <div class="form-checkbox__items">
                            <label for="diving"><input type="checkbox" name="diving" value="diving" id="diving">
                              <span>ダイビング講習について</span>
                            </label>
                            <label for="fundiving"><input type="checkbox" name="fundiving" value="fundiving" id="fundiving">
                              <span>ファンデイビングについて</span>
                            </label>
                            <label for="divingeexperience"><input type="checkbox" name="divingeexperience" value="divingeexperience" id="divingeexperience">
                              <span>体験ダイビングについて</span>
                            </label>
                          </div>
                        </dd>
                    </dl>
                    <dl class="form__items">
                      <dt class="form__label">キャンペーン</dt>
                      <dd class="form__select form-select">
                        <select size="1">
                          <option hidden>キャンペーン内容を選択</option>
                          <option value="diving">ダイビング講習について</option>
                          <option value="fun diving">ファンダイビングについて</option>
                          <option value="diving-experience">体験ダイビングについて</option>
                        </select>
                      </dd>
                    </dl>
                    <dl class="form__items form__items-textarea">
                      <dt class="form__label">お問い合わせ内容<span>必須</span></dt>
                      <dd class="form__textarea form-textarea">
                        <textarea name="message"></textarea>
                      </dd>
                    </dl>
                    <div class="form__submit">
                      <label for="check">
                        <input type="checkbox" id="check" name="check_policy">
                        <span>個人情報の取り扱いについて同意のうえ送信します。</span>
                      </label>
                      <div class="form__btn">
                        <div class="form__btn-submit">
                          <input type="submit" value="Send">
                          <div class="btn__arrow"></div>
                        </div>
                      </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
  </main>

