<?php get_header();  ?>
    <!-- 下層ページのmv -->
    <main>
      <section class="layout-home-mv sub-mv">
        <div class="sub-mv__page-header">
          <div class="sub-mv__title">
            <span>blog</span>
          </div>
        </div>
      </section>
      <!-- パンくず -->
      <div class="breadcrumb">
        <div class="breadcrumb__inner inner">
          <?php if ( function_exists('bcn_display') ) {
            bcn_display();
            } ?>
        </div>
      </div>
      <!-- ブログ一覧ページ -->
      <section class="two-column layout-two-column">
        <div class="two-column__inner inner">
          <div class="two-column__flex">
            <div class="two-column__main">
              <div class="two-column__article single-body">
                <?php 
                if ( have_posts() ) : 
                  while ( have_posts() ) : the_post(); 
                ?>
                  <time class="card__date" datetime="<?php the_time('c'); ?>"><?php the_time('Y/m/d') ?></time>
                  <h1 class="single-body__title"><?php the_title(); ?></h1>
                  <figure class="single-body__thumbnail">
                    <?php the_post_thumbnail('full'); ?>
                  </figure>
                  <div class="single-body__content">
                    <?php the_content(); ?>
                  </div>
                <?php 
                  endwhile; 
                endif; ?>
              </div><!-- two-column__article single-body -->
              
              <?php 
                    $prev = get_previous_post(); // 直前の投稿の情報を取得
                    $prev_url = $prev ? get_permalink($prev->ID) : null; // 直前の投稿のパーマリンク（URL）を取得
                    $next = get_next_post(); // 次の投稿の情報を取得
                    $next_url = $next ? get_permalink($next->ID) : null; // 次の投稿のパーマリンク（URL）を取得
                ?>
                <div class="two-column__wp-pagenavi wp-pagenavi" role="navigation">
                  <?php if($prev): ?>
                    <a class="previouspostslink" rel="prev" href="<?php echo $prev_url; ?>"></a>
                  <?php endif; ?>
                  <?php if($next): ?>
                    <a class="nextpostslink" rel="next" href="<?php echo $next_url; ?>"></a>
                  <?php endif; ?>
                </div>
            </div> <!-- two-column__main -->
              
              <!-- ここからサイドバー -->
              <aside class="two-column__side aside-wrapper">
                <!-- ランキングセクション -->
                <div class="aside-wrapper__ranking aside-ranking">
                  <h2  class="aside-wrapper__title"><span>人気記事</span></h2>
                  <div class="aside-wrapper__ranking-content">
                    <a href="#" class="aside-wrapper__card card card--sidebar">
                      <figure class="card__image card__image--sidebar ">
                        <picture>
                          <source
                            srcset="./assets/images/common/blog-04.webp"
                            type="image/webp"
                          />
                          <img
                            src="./assets/images/common/blog-04.jpg"
                            alt="黄色の熱帯魚が海の中を泳いでいる様子"
                          />
                        </picture>
                      </figure>
                      <div class="card__body card__body--sidebar">
                        <div class="card__meta card__meta--sidebar">
                          <time class="card__date" datetime="2023-11-17"
                            >2023/11/17</time
                          >
                          <h3 class="card__title">ライセンス取得</h3>
                        </div>
                      </div>
                    </a>
                    <a href="#" class="aside-wrapper__card card card--sidebar">
                      <figure class="card__image card__image--sidebar ">
                        <picture>
                          <source
                            srcset="./assets/images/common/blog-02.webp"
                            type="image/webp"
                          />
                          <img
                            src="./assets/images/common/blog-02.jpg"
                            alt="ウミガメが海の中を泳いでいる様子"
                          />
                        </picture>
                      </figure>
                      <div class="card__body card__body--sidebar">
                        <div class="card__meta card__meta--sidebar">
                          <time class="card__date" datetime="2023-11-17"
                            >2023/11/17</time
                          >
                          <h3 class="card__title">ウミガメと泳ぐ</h3>
                        </div>
                      </div>
                    </a>
                    <a href="#" class="aside-wrapper__card card card--sidebar">
                      <figure class="card__image card__image--sidebar ">
                        <picture>
                          <source
                            srcset="./assets/images/common/blog-03.webp"
                            type="image/webp"
                          />
                          <img
                            src="./assets/images/common/blog-03.jpg"
                            alt="カクレクマノミがサンゴ礁の間に隠れている様子"
                          />
                        </picture>
                      </figure>
                      <div class="card__body card__body--sidebar">
                        <div class="card__meta card__meta--sidebar">
                          <time class="card__date" datetime="2023-11-17"
                            >2023/11/17</time
                          >
                          <h3 class="card__title">カクレクマノミ</h3>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
                <!-- 口コミセクション -->
                <div class="aside-wrapper__review aside-review">
                  <h2  class="aside-wrapper__title"><span>口コミ</span></h2>
                <article class="aside-review__content">
                  <figure class="aside-review__image">
                    <picture>
                      <source srcset="./assets/images/common/voice-05.webp" type="image/webp"/>
                      <img src="./assets/images/common/voice-05.jpg" alt="麦わら帽子をかぶって微笑んでいる女性"/>
                      </picture>
                  </figure>
                  <div class="aside-review__textarea">
                    <p class="aside-review__profile">30代(カップル)</p>
                    <h3 class="aside-review__title">ここにタイトルが入ります。ここにタイトル</h3>
                  </div>
                  <div class="aside-review__btn">
                    <a href="./page-voice.html" class="btn">
                      <span>view&nbsp;more </span>
                      <div class="btn__arrow"></div>
                    </a>
                  </div>
                </article>
                </div>
                <!-- キャンペーンセクション -->
                <div class="aside-wrapper__review aside-campaign">
                  <h2  class="aside-wrapper__title"><span>キャンペーン</span></h2>
                  <ul class="aside-campaign__wrapper aside-cards">
                    <li class="aside-cards__card aside-card">
                      <a href="#">
                        <figure class="aside-card__image">
                          <picture>
                            <source srcset="./assets/images/common/campaign1.webp" type="image/webp"/>
                            <img src="./assets/images/common/campaign1.jpg" alt="カラフルな魚が泳いでいる様子"/>
                          </picture>
                        </figure>
                        <div class="aside-card__body">
                            <h3 class="aside-card__title">ライセンス取得</h3>
                            <p class="aside-card__text">全部コミコミ(お一人様)</p>
                          <div class="aside-card__price">
                              <p class="aside-card__number">¥56,000</p>
                              <p class="aside-card__discount-number">¥46,000</p>
                          </div>
                        </div>
                      </a>
                    </li><!-- スライド1終わりここまで -->
                    <li class="aside-cards__card aside-card">
                      <a href="#">
                        <figure class="aside-card__image">
                          <picture>
                            <source srcset="./assets/images/common/campaign2.webp" type="image/webp"/>
                            <img src="./assets/images/common/campaign2.jpg" alt="2隻のボートが海の上で浮いている様子"/>
                          </picture>
                        </figure>
                        <div class="aside-card__body">
                            <h3 class="aside-card__title">貸切体験ダイビング</h3>
                            <p class="aside-card__text">全部コミコミ(お一人様)</p>
                          <div class="aside-card__price">
                              <p class="aside-card__number">¥24,000</p>
                              <p class="aside-card__discount-number">¥18,000</p>
                          </div>
                        </div>
                      </a>
                    </li><!-- スライド2終わりここまで -->
                  </ul>
                  <div class="aside-campaign__btn">
                    <a href="./page-campaign.html" class="btn">
                      <span>view&nbsp;more </span>
                      <div class="btn__arrow"></div>
                    </a>
                  </div>
                </div>
                <!-- アーカイブセクション -->
                <div class="aside-wrapper__archive asideblog-archive">
                  <h2  class="aside-wrapper__title"><span>アーカイブ</span></h2>
                  <!-- アーカイブの中身 -->
                  <div class="asideblog-archive__lists asideblog-lists">
                    <div class="asideblog-lists__list asideblog-list">
                          <h3 class="asideblog-list__year js-asideblog-list__year">2023</h3>
                          <ul class="aideblog-list__container">
                            <li class="asideblog-list__month js-asideblog-list__month">3月
                              <ul>
                                <li>4月の記事だよ</li>
                                <li>4月の記事だよ</li>
                                <li>4月の記事だよ</li>
                              </ul>
                            </li>
                            <li class="asideblog-list__month js-asideblog-list__month">2月
                              <ul>
                                <li>3月の記事だよ</li>
                                <li>3月の記事だよ</li>
                                <li>3月の記事だよ</li>
                              </ul>
                            </li>
                            <li class="asideblog-list__month js-asideblog-list__month">1月
                              <ul>
                                <li>2月の記事だよ</li>
                                <li>2月の記事だよ</li>
                                <li>2月の記事だよ</li>
                              </ul>
                            </li>
                          </ul>
                        </div><!--asideblog-list 2023年終わり-->
                        <!--asideblog-list 2022年-->
                        <div class="asideblog-lists__list asideblog-list asideblog-list--hide">
                          <h3 class="asideblog-list__year js-asideblog-list__year">2022</h3>
                          <ul class="aideblog-list__container">
                            <li class="asideblog-list__month">3月
                              <ul>
                                <li>4月の記事だよ</li>
                                <li>4月の記事だよ</li>
                                <li>4月の記事だよ</li>
                              </ul>
                            </li>
                            <li class="asideblog-list__month">2月
                              <ul>
                                <li>3月の記事だよ</li>
                                <li>3月の記事だよ</li>
                                <li>3月の記事だよ</li>
                              </ul>
                            </li>
                            <li class="asideblog-list__month">1月
                              <ul>
                                <li>2月の記事だよ</li>
                                <li>2月の記事だよ</li>
                                <li>2月の記事だよ</li>
                              </ul>
                            </li>
                          </ul>
                        </div><!--list-item終わり-->
                </div><!--asideblog-lists-->
              </div>
            </aside>
          </div><!--flex-->
        </div><!--inner-->
      </section>
    </main>
<?php get_footer();  ?>