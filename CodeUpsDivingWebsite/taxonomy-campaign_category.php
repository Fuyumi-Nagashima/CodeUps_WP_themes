<?php get_header(); ?>
<main>
  <?php
    // 現在のタームを取得
    $cat = get_queried_object();
    $title = 'Campaign'; // デフォルトタイトル

    // タームが存在する場合
    if ($cat && !is_wp_error($cat)) {
      // タイトルをターム名に設定
      $title = $cat->name;
    } else {
      // デバッグ用: タームが存在しない場合
      error_log('タームが存在しません');
    }
  ?>
  <section class="layout-page-campaign-mv sub-mv">
    <div class="sub-mv__page-header">
      <h2 class="sub-mv__title">
        <span><?php echo esc_html($title); ?></span>
      </h2>
    </div>
  </section>
  <div class="breadcrumb">
    <div class="breadcrumb__inner inner">
      <?php if (function_exists('bcn_display')) {
        bcn_display();
      } ?>
    </div>
  </div>
  <div class="layout-page-campaign page-campaign">
    <div class="page-campaign__inner inner">
      <div class="page-campaign__category-wrap category">
        <a href="<?php echo esc_url(get_post_type_archive_link('campaign')); ?>" class="category__item <?php echo is_post_type_archive('campaign') ? 'is-active' : ''; ?>" data-filter="all">all</a>
        <?php
        // campaign_categoryタクソノミーのタームを動的に取得
        $categories = get_terms(array(
          'taxonomy' => 'campaign_category',
          'hide_empty' => false,
        ));

        // 現在のタームを取得
        $current_term = get_queried_object();

        // タームをループしてリンクを生成
        if (!empty($categories) && !is_wp_error($categories)) {
          foreach ($categories as $category) {
            $term_link = get_term_link($category);
            if (!is_wp_error($term_link)) {
              $is_active = ($current_term && $current_term->slug === $category->slug) ? 'is-active' : '';
              echo '<a href="' . esc_url($term_link) . '" class="category__item ' . esc_attr($is_active) . '" data-filter="' . esc_attr($category->slug) . '">' . esc_html($category->name) . '</a>';
            }
          }
        }
        ?>
      </div>
      <ul class="page-campaign__cards page-campaign-cards">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <li class="page-campaign__card campaign-list" data-category="<?php echo get_the_terms(get_the_ID(), 'campaign_category')[0]->slug; ?>">
            <div class="campaign-list__link">
              <figure class="campaign-list__image campaign-list__image--sub-page">
                <?php the_post_thumbnail('full'); ?>
              </figure>
              <div class="campaign-list__body campaign-list__body--subpage">
                <span class="campaign-list__category"><?php echo get_the_terms(get_the_ID(), 'campaign_category')[0]->name; ?></span>
                <h3 class="campaign-list__title campaign-list__title--big"><?php the_title(); ?></h3>
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
                <div class="campaign-list__information-wrap">
                  <p class="campaign-list__information-text"><?php the_content(); ?></p>
                  <div class="campaign-list__btn">
                    <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn">
                      <span>view&nbsp;more</span><div class="btn__arrow"></div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </li>
        <?php endwhile; endif; ?>
      </ul>
      <div class="wp-pagenavi page-campaign__wp-pagenavi" role="navigation">
        <?php
        echo paginate_links(array(
          'total' => $wp_query->max_num_pages
        ));
        ?>
      </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>
