    <!-- サイドバー開始 -->
        <!-- ランキングセクション -->
        <div class="aside-wrapper__ranking aside-ranking">
            <h2 class="aside-wrapper__title"><span>人気記事</span></h2>
            <div class="aside-wrapper__ranking-content">
                <?php
                $args = array(
                    'post_type' => 'post',
                    'meta_key' => 'post_views_count',
                    'orderby' => 'meta_value_num',
                    'order' => 'DESC',
                    'posts_per_page' => 3
                );
                $popular_posts_query = new WP_Query($args);
                if ($popular_posts_query->have_posts()) :
                    while ($popular_posts_query->have_posts()) : $popular_posts_query->the_post(); ?>
                <a href="<?php the_permalink(); ?>" class="aside-wrapper__card card card--sidebar">
                    <figure class="card__image card__image--sidebar">
                        <picture>
                            <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('full'); ?>
                            <?php else : ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/noimage.png"
                                alt="No image available">
                            <?php endif; ?>
                        </picture>
                    </figure>
                    <div class="card__body card__body--sidebar">
                        <div class="card__meta card__meta--sidebar">
                            <time class="card__date" datetime="<?php the_time('c'); ?>"><?php the_time('Y.m.d'); ?></time>
                            <h3 class="card__title"><?php the_title(); ?></h3>
                        </div>
                    </div>
                </a>
                <?php endwhile;
                    wp_reset_postdata();
                else : ?>
                <p>人気記事はありません。</p>
                <?php endif; ?>
            </div>
        </div>

        <!-- 口コミセクション -->
        <div class="aside-wrapper__review aside-review">
            <h2 class="aside-wrapper__title"><span>口コミ</span></h2>
            <article class="aside-review__content">
                <?php
                $args = array(
                    'post_type'      => 'voice',
                    'posts_per_page' => 1,
                    'orderby'        => 'rand'
                );
                $the_query = new WP_Query($args);
                if ($the_query->have_posts()) :
                    while ($the_query->have_posts()) : $the_query->the_post(); ?>
                <figure class="aside-review__image">
                    <?php
                    if (has_post_thumbnail()) {
                        the_post_thumbnail('full');
                    } else {
                        echo '<img src="' . get_theme_file_uri() . '/assets/images/common/noimage.png" alt="No image available">';
                    }
                    ?>
                </figure>
                <div class="aside-review__textarea">
                    <p class="aside-review__profile">
                        <?php
                        $personalInfo = get_field('profile');
                        if ($personalInfo) :
                            echo esc_html($personalInfo['profile_age']) . '代(' . esc_html($personalInfo['profile_gender']) . ')';
                        endif;
                        ?>
                    </p>
                    <h3 class="aside-review__title"><?php the_field('title'); ?></h3>
                </div>
                <div class="aside-review__btn">
                    <a href="<?php the_permalink(); ?>" class="btn">
                        <span>view&nbsp;more </span>
                        <div class="btn__arrow"></div>
                    </a>
                </div>
                <?php
                    endwhile;
                    wp_reset_postdata();
                else : ?>
                <p><?php _e('No reviews found', 'textdomain'); ?></p>
                <?php endif; ?>
            </article>
        </div>

        <!-- キャンペーンセクション -->
        <div class="aside-wrapper__review aside-campaign">
            <h2 class="aside-wrapper__title"><span>キャンペーン</span></h2>
            <ul class="aside-campaign__wrapper aside-cards">
                <li class="aside-cards__card aside-card">
                    <a href="#">
                        <figure class="aside-card__image">
                            <picture>
                                <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign1.webp"
                                    type="image/webp" />
                                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign1.jpg"
                                    alt="カラフルな魚が泳いでいる様子" />
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
                </li>
                <li class="aside-cards__card aside-card">
                    <a href="#">
                        <figure class="aside-card__image">
                            <picture>
                                <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign2.webp"
                                    type="image/webp" />
                                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign2.jpg"
                                    alt="2隻のボートが海の上で浮いている様子" />
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
                </li>
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
            <h2 class="aside-wrapper__title"><span>アーカイブ</span></h2>
            <!-- アーカイブの中身 -->
            <div class="asideblog-archive__lists asideblog-lists">
                <?php
                global $wpdb;

                // 年ごとのアーカイブを取得
                $years = $wpdb->get_col("SELECT DISTINCT YEAR(post_date) FROM $wpdb->posts WHERE post_status = 'publish' AND post_type = 'post' ORDER BY post_date DESC");

                // 各年ごとのループ
                foreach ($years as $year) {
                    ?>
                    <div class="asideblog-lists__list asideblog-list">
                        <h3 class="asideblog-list__year js-asideblog-list__year"><?php echo $year; ?></h3>
                        <ul class="aideblog-list__container">
                            <?php
                            // 各年の各月ごとのアーカイブを取得
                            $months = $wpdb->get_col("SELECT DISTINCT MONTH(post_date) FROM $wpdb->posts WHERE post_status = 'publish' AND post_type = 'post' AND YEAR(post_date) = '$year' ORDER BY post_date DESC");

                            // 各月ごとのループ
                            foreach ($months as $month) {
                                // 各月の投稿数を取得
                                $post_count = $wpdb->get_var("
                                    SELECT COUNT(*) FROM $wpdb->posts
                                    WHERE post_status = 'publish' AND post_type = 'post'
                                    AND YEAR(post_date) = '$year' AND MONTH(post_date) = '$month'
                                ");
                                ?>
                                <li class="asideblog-list__month js-asideblog-list__month">
                                    <a href="<?php echo get_month_link($year, $month); ?>">
                                        <?php echo $month; ?>月 (<?php echo $post_count; ?>)
                                    </a>
                                </li>
                                <?php
                            }
                            ?>
                        </ul>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>



