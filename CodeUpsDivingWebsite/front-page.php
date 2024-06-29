<?php get_header(); ?>
  <main>
  <div class="fv">
    <div class="fv__inner">
        <div class="swiper fv__swiper js-fv__swiper">
            <div class="swiper-wrapper fv__swiper-wrapper">
                <?php 
                // ACFからPC用画像とSP用画像を取得
                $pc_images = get_field('mv_img_pc');
                $sp_images = get_field('mv_img_sp');

                // 画像が存在する場合、ループで表示
                if ($pc_images && $sp_images) :
                  for ($i = 1; $i <= 4; $i++) : 
                    $pc_image = $pc_images["mv_pc_0$i"];
                    $sp_image = $sp_images["mv_sp_0$i"];
                    if ($pc_image && $sp_image) :
                      
                      // デバッグ用出力
                        echo '<pre>';
                        var_dump($pc_images);
                        var_dump($sp_images);
                        echo '</pre>';
                ?>
                <div class="swiper-slide fv__swiper-slide">
                  <picture>
                    <source srcset="<?php echo esc_url($sp_image['sizes']['medium_large']); ?>" media="(max-width:767px)" />
                      <img src="<?php echo esc_url($pc_image['sizes']['large']); ?>" alt="<?php echo esc_attr($pc_image['alt']); ?>" decoding="async" loading="lazy" />
                  </picture>
                </div>
                <?php 
                endif;
                  endfor;
                    endif;
                ?>
            </div>
            <div class="fv__title-wrap">
                <p class="fv__title-large">diving</p>
                <p class="fv__title-small">into&nbsp;the&nbsp;ocean</p>
            </div>
        </div>
    </div>
</div>
      <!-- campaign -->
      <section class="layout-campaign campaign">
        <div class="campaign__inner inner">
          <div class="campaign__section-title section-title">
            <p class="section-title__primary">campaign</p>
            <h2 class="section-title__sub">キャンペーン</h2>
          </div>
          <!-- ボタン -->
          <div class="campaign__btn-wrap">
            <div class="swiper-button-prev campaign__prev  js-campaign-arrow"></div>
            <div class="swiper-button-next campaign__next  js-campaign-arrow"></div>
          </div>
          <!-- スライド-->
          <div class="campaign__swiper campaign-swiper">
            <div class="swiper js-campaign-swiper">
              <ul class="swiper-wrapper campaign-swiper__wrapper ">
              <?php
              $args = array(
                'post_type' => 'campaign', 
                'orderby'        => 'date',
                'order' => 'DESC',
                'posts_per_page' => -1 
                );
                $the_query = new WP_Query( $args );
                ?>
                 <?php if ($the_query->have_posts()): while ($the_query->have_posts()): $the_query->the_post(); ?>
                <li class="swiper-slide campaign-swiper__slide page-campaign__card campaign-list" data-category="<?php echo get_the_terms(get_the_ID(), 'campaign_category')[0]->slug; ?>">
                  <div class="campaign-list__link">
                    <figure class="campaign-list__image campaign-list__image--sub-page">
                      <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('full'); ?>
                        <?php else : ?>
                          <img src="<?php echo esc_url(get_theme_file_uri("/assets/images/common/noimage.jpg")); ?>" alt="NoImage画像" loading="lazy">
                      <?php endif; ?>
                    </figure>
                    <div class="campaign-list__body campaign-list__body--subpage">
                      <span class="campaign-list__category">
                        <?php
                          $taxonomy_terms = get_the_terms(get_the_ID(), 'campaign_category');
                          if (!empty($taxonomy_terms)) {
                          foreach ($taxonomy_terms as $taxonomy_term) {
                          echo '<span>' . esc_html($taxonomy_term->name) . '</span>';
                          }
                          }
                        ?>
                      </span>
                      <h3 class="campaign-list__title "><?php the_title(); ?></h3>
                      <p class="campaign-list__text campaign-list__text--subpage">全部コミコミ(お一人様)</p>
                      <div class="campaign-list__price">
                        <?php
                        // SCFで追加したカスタムフィールドを取得
                          $regular_price = SCF::get('regular_price');
                          $discount_price = SCF::get('discount_price');
                          echo '<p class="campaign-list__number">¥' . number_format((float)$regular_price) . '</p>';
                          echo '<p class="campaign-list__discount-number">¥' . number_format((float)$discount_price) . '</p>';
                        ?>
                      </div>
                    </div>
                  </div>
                </li>
              <?php endwhile; ?>
              <?php wp_reset_postdata(); ?>
              <?php endif; ?>
              <!-- swiper動作確認用のスライド追加 -->
              </ul>          
            </div>
          </div>
          <div class="campaign__btn">
            <a href="<?php echo get_post_type_archive_link('campaign'); ?>" class="btn">
              <span>view&nbsp;more</span><div class="btn__arrow"></div>
            </a>
          </div>
        </div>
</section>
      <!-- About us -->
      <section class="layout-about about">
        <div class="about__inner inner">
          <div class="about__section-title section-title">
            <p class="section-title__primary">about&nbsp;<span>us</span></p>
            <h2 class="section-title__sub">私たちについて</h2>
          </div>
          <div class="about__container about-content">
            <div class="about-content__images">
              <figure class="about-content__image01">
                <picture>
                  <source
                    srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/aboutus-01.webp"
                    type="images/webp"
                  />
                  <img
                    src="<?php echo get_theme_file_uri(); ?>/assets/images/common/aboutus-01.jpg"
                    alt="屋根の上にシーサーが乗っている様子"
                  />
                </picture>
              </figure>
              <figure class="about-content__image02">
                <picture>
                  <source
                    srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/aboutus-02.webp"
                    type="images/webp"
                  />
                  <img
                    src="<?php echo get_theme_file_uri(); ?>/assets/images/common/aboutus-02.jpg"
                    alt="2匹の黄色熱帯魚が海で泳いでいる様子"
                  />
                </picture>
              </figure>
            </div>
            <div class="about-content__text-wrap">
              <h3 class="about-content__text-title">
                <span>dive</span>&nbsp;into<br>the&nbsp;<span>ocean</span>
              </h3>
              <div class="about-content__text-body">
                <p class="about-content__text">
                  ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキスト</p>
                <div class="about-content__btn">
                  <a href="./page-about.html" class="btn">
                    <span>view&nbsp;more</span>
                    <div class="btn__arrow"></div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Information -->
      <section class="layout-information information">
        <div class="information__inner inner">
          <div class="information__section-title section-title">
            <p class="section-title__primary">information</p>
            <h2 class="section-title__sub">ダイビング情報</h2>
          </div>
          <div class="information__container">
            <figure class="information__image color">
              <picture>
                <source
                  srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/top-information.webp"
                  type="images/webp"
                />
                <img
                  src="<?php echo get_theme_file_uri(); ?>/assets/images/common/top-information.jpg"
                  alt="黄色や水色の複数の熱帯魚が泳いでいる様子"
                />
              </picture>
            </figure>
            <div class="information__body">
              <div class="information__text-body">
                <h3 class="information__text-title">ライセンス講習</h3>
                <p class="information__text">
                  当店はダイビングライセンス（Cカード）世界最大の教育機関PADIの「正規店」として店舗登録されています。<br>正規登録店として、安心安全に初めての方でも安心安全にライセンス取得をサポート致します。
                </p>
              </div>
              <div class="information__btn">
                <a href="./page-information.html" class="btn">
                  <span>view&nbsp;more </span>
                  <div class="btn__arrow"></div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Blog -->
      <section class="layout-blog blog">
      <div class="blog__inner inner">
        <div class="blog__section-title section-title">
          <p class="section-title__primary section-title__primary--white">blog</p>
          <h2 class="section-title__sub section-title__sub--white">ブログ</h2>
        </div>
        <div class="blog__cards cards">
          <a href="./single.html" class="cards__item card">
            <figure class="card__image">
              <picture>
                <source
                  srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog-01.webp"
                  type="image/webp"
                />
                <img
                  src="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog-01.jpg"
                  alt="ピンクと赤色のサンゴ礁の写真"
                />
              </picture>
            </figure>
            <div class="card__body">
              <div class="card__meta">
                <time class="card__date" datetime="2023-11-17"
                  >2023/11/17</time
                >
                <h3 class="card__title">ライセンス取得</h3>
              </div>
              <div class="card__text-body">
                <p class="card__text">
                  ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
                </p>
              </div>
            </div>
          </a>
          <a href="#" class="cards__item card">
            <figure class="card__image">
              <picture>
                <source
                  srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog-02.webp"
                  type="image/webp"
                />
                <img
                  src="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog-02.jpg"
                  alt="ウミガメが海を泳いでいる様子"
                />
              </picture>
            </figure>
            <div class="card__body">
              <div class="card__meta">
                <time class="card__date" datetime="2023-11-17"
                  >2023/11/17</time
                >
                <h3 class="card__title">ウミガメと泳ぐ</h3>
              </div>
              <div class="card__text-body">
                <p class="card__text">
                  ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
                </p>
              </div>
            </div>
          </a>
          <a href="#" class="cards__item card">
            <figure class="card__image">
              <picture>
                <source
                  srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog-03.webp"
                  type="image/webp"
                />
                <img
                  src="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog-03.jpg"
                  alt="カクレクマノミがサンゴ礁の間に隠れている様子"
                />
              </picture>
            </figure>
            <div class="card__body">
              <div class="card__meta">
                <time class="card__date" datetime="2023-11-17"
                  >2023/11/17</time
                >
                <h3 class="card__title">カクレクマノミ</h3>
              </div>
              <div class="card__text-body">
                <p class="card__text">
                  ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
                </p>
              </div>
            </div>
          </a>
        </div>
        <div class="blog__btn">
          <a href="./home.html" class="btn">
            <span>view&nbsp;more </span>
            <div class="btn__arrow"></div>
          </a>
        </div>
      </div>
      </section>
      <!-- Voice -->
      <section class="layout-voice voice">
        <div class="voice__inner inner">
          <div class="voice__section-title section-title">
            <p class="section-title__primary">voice</p>
            <h2 class="section-title__sub">お客様の声</h2>
          </div>
          <div class="voice__cards voice-cards">
            <article class="voice-cards__item voice-card">
              <div class="voice-card__wrap">
                <div class="voice-card__head">
                    <p class="voice-card__profile">20代(女性)</p>
                    <span class="voice-card__category">ライセンス講習</span>
                  <h3 class="voice-card__title">ここにタイトルが入ります。ここにタイトル</h3>
                </div>
                <figure class="voice-card__image color">
                  <picture>
                    <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/voice-01.webp" type="image/webp"/>
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/voice-01.jpg" alt="麦わら帽子をかぶって微笑んでいる女性"/>
                  </picture>
                </figure>
              </div>
              <div class="voice-card__text-body">
                <p class="voice-card__text">
                  ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                  ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                  ここにテキストが入ります。ここにテキストが入ります。
                </p>
              </div>
            </article>
            <article class="voice-cards__item voice-card">
              <div class="voice-card__wrap">
                <div class="voice-card__head">
                  <p class="voice-card__profile">20代(男性)</p>
                  <span class="voice-card__category">ファンダイビング</span>
                  <h3 class="voice-card__title">ここにタイトルが入ります。ここにタイトル</h3>
                </div>
                <figure class="voice-card__image color">
                  <picture>
                    <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/voice-02.webp" type="image/webp"/>
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/voice-02.jpg" alt="紺色の長袖シャツを着た男性が親指を突き出している様子"/>
                  </picture>
                </figure>
              </div>
              <div class="voice-card__text-body">
                <p class="voice-card__text">
                  ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                  ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                  ここにテキストが入ります。ここにテキストが入ります。
                </p>
              </div>
            </article>
          </div>
          <div class="voice__btn">
            <a href="./page-voice.html" class="btn">
              <span>view&nbsp;more </span>
              <div class="btn__arrow"></div>
            </a>
          </div>
        </div>
    </section>
    <!-- Price -->
    <?php get_header(); ?>

<main>
  <!-- 他のセクション -->

  <!-- Price -->
  <section class="layout-price price">
    <div class="price__inner inner">
      <div class="price__section-title section-title">
        <p class="section-title__primary">price</p>
        <h2 class="section-title__sub">料金一覧</h2>
      </div>
      <div class="price__wrapper">
        <div class="price__image color">
          <picture> 
            <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/top-price-sp.webp" media="(max-width:767px)" type="image/webp" >
            <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/top-price-sp.jpg" media="(max-width:767px)">
            <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/top-price-pc.webp" type="image/webp" >
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/top-price-pc.jpg" alt="赤色の複数の熱帯魚が海の中で泳いでいる様子">
          </picture>
        </div>

        <div class="price__table price-table">
          <?php
            // 固定ページ「料金一覧」のIDを指定
            $page_id = 213;

            // SCFを使ってカスタムフィールドからプラン情報を取得
            $plans = [
              1 => [
                'title' => SCF::get('plan_1', $page_id),
                'courses' => SCF::get('course-1', $page_id)
              ],
              2 => [
                'title' => SCF::get('plan_2', $page_id),
                'courses' => SCF::get('course-2', $page_id)
              ],
              3 => [
                'title' => SCF::get('plan_3', $page_id),
                'courses' => SCF::get('course-3', $page_id)
              ],
              4 => [
                'title' => SCF::get('plan_4', $page_id),
                'courses' => SCF::get('course-4', $page_id)
              ],
            ];

            foreach ($plans as $plan_id => $plan) :
              if (!empty($plan['title'])) :
          ?>
          <div class="price-table__content">
            <h3 class="price-table__head"><?php echo esc_html($plan['title']); ?></h3>
            <dl class="price-table__item-wrap">
              <?php foreach ($plan['courses'] as $course) : ?>
              <div class="price-table__item">
                <dt class="price-table__course"><?php echo esc_html($course['course_' . $plan_id]); ?></dt>
                <dd class="price-table__price">&yen;<?php echo esc_html($course['price_' . $plan_id]); ?></dd>
              </div>
              <?php endforeach; ?>
            </dl>
          </div>
          <?php endif; endforeach; ?>
        </div>
      </div>
      <div class="price__btn">
        <a href="<?php echo get_permalink($page_id); ?>" class="btn">
          <span>view&nbsp;more </span>
          <div class="btn__arrow"></div>
        </a>
      </div>
    </div>
  </section> 

  <!-- 他のセクション -->

</main>

<?php get_footer(); ?>