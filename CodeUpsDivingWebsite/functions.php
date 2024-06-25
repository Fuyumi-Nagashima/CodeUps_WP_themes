<?php
// functions.phpのコード

// ファビコンの設定
add_action('wp_head', 'add_favicon');
function add_favicon() {
    echo '<link rel="icon" href="#" />';
}

// Googleフォントの設定
add_action('wp_enqueue_scripts', 'add_google_fonts');
function add_google_fonts() {
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Gotu&amp;family=Noto+Sans+JP:wght@100..900&amp;display=swap');
    wp_enqueue_style('google-fonts-lato', 'https://fonts.googleapis.com/css2?family=Lato:wght@700&amp;display=swap');
}

// CSSファイルの読み込み
add_action('wp_enqueue_scripts', 'add_custom_css');
function add_custom_css() {
    wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css');
    wp_enqueue_style('theme-style', get_theme_file_uri('/assets/css/style.css'));
}

// JavaScriptファイルの読み込み
add_action('wp_enqueue_scripts', 'add_custom_js');
function add_custom_js() {
    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.7.1.min.js', array(), false, true);
    wp_enqueue_script('jquery-inview', get_theme_file_uri('/assets/js/jquery.inview.min.js'), array(), false, true);
    wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), false, true);
    wp_enqueue_script('custom-script', get_theme_file_uri('/assets/js/script.js'), array(), false, true);
}

//アイキャッチ画像を表示させるための設定
function my_setup() {
	add_theme_support( 'post-thumbnails' ); /* アイキャッチ */
	add_theme_support( 'automatic-feed-links' ); /* RSSフィード */
	add_theme_support( 'title-tag' ); /* タイトルタグ自動生成 */
	add_theme_support(
		'html5',
		array( /* HTML5のタグで出力 */
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		)
	);
}
add_action( 'after_setup_theme', 'my_setup' );


//archive-campaignとarchive-voice(カスタム投稿)での記事表示件数を決める
function set_custom_post_type_posts_per_page($query) {
    if ($query->is_main_query() && !is_admin()) {
        // 'voice' はカスタム投稿タイプのスラッグ
        if (is_post_type_archive('voice')) {
            $query->set('posts_per_page', 6);
        }
        // 既存の 'campaign' カスタム投稿タイプの設定も保持する
        elseif (is_post_type_archive('campaign')) {
            $query->set('posts_per_page', 4);
        }
    }
}
add_action('pre_get_posts', 'set_custom_post_type_posts_per_page');


//WordPressの投稿の抜粋（excerpt）に表示される「続きを読む」リンクをカスタマイズするた
function twpp_change_excerpt_more( $more ) {
	$html = '<a href="' . esc_url( get_permalink() ) . '">[...続きを読む]</a>';
	return $html;
}
add_filter( 'excerpt_more', 'twpp_change_excerpt_more' );

function twpp_change_excerpt_length( $length ) {
    return 100; // 抜粋の文字数を100ワードに設定
}
add_filter( 'excerpt_length', 'twpp_change_excerpt_length', 999 );


//管理画面の投稿画面で本文入力部分を非表示にする
function remove_wysiwyg()
{
  remove_post_type_support('voice', 'editor');
  remove_post_type_support('campaign', 'editor');
}
add_action('init', 'remove_wysiwyg');


/**
 * @param string $page_title ページのtitle属性値
 * @param string $menu_title 管理画面のメニューに表示するタイトル
 * @param string $capability メニューを操作できる権限
 * @param string $menu_slug オプションページのスラッグ
 * @param string|null $icon_url メニューに表示するアイコンの URL
 * @param int $position メニューの位置
 */
SCF::add_options_page( 
    'ギャラリー画像',
    'ギャラリー画像', 
    'manage_options',
    'theme-options',
    'dashicons-format-gallery',
    11
);

function create_custom_post_type() {
    $labels = array(
        'name' => 'ギャラリー',
        'singular_name' => 'ギャラリー',
        'menu_name' => 'ギャラリー',
        'name_admin_bar' => 'ギャラリー',
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-format-gallery', // メニューアイコンの指定
        'supports' => array('title', 'editor', 'thumbnail'),
    );

    register_post_type('gallery', $args);
}

add_action('init', 'create_custom_post_type');




