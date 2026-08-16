<?php
function my_setup()
{
    add_theme_support('post-thumbnails');
    add_theme_support('automatic-feed-links');
    add_theme_support('title-tag');
    add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script'));
}
add_action("after_setup_theme", "my_setup");


// 固定ページに抜粋欄を追加
function add_excerpt_to_pages()
{
    add_post_type_support('page', 'excerpt');
}
add_action('init', 'add_excerpt_to_pages');


function my_script_init()
{
    wp_enqueue_style("swiper-css", "https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css", array(), null);
    wp_enqueue_script("swiper-js", "https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js", array(), null, true);
    wp_enqueue_style("reset-css", get_template_directory_uri() . "/css/reset.css", array(), filemtime(get_theme_file_path('css/reset.css')), "all");
    wp_enqueue_style("style-css", get_template_directory_uri() . "/css/style.css", array(), filemtime(get_theme_file_path('css/style.css')), "all");
    wp_enqueue_script("main-js", get_template_directory_uri() . "/js/main.js", array("jquery"), filemtime(get_theme_file_path('js/main.js')), true);

    if (is_home() or is_category() or is_single() or is_archive()) {
        wp_enqueue_style("home-page", get_template_directory_uri() . "/css/blog.css", array(), filemtime(get_theme_file_path('css/blog.css')), "all");
    } else if (is_front_page()) {
        wp_enqueue_style("front-page", get_template_directory_uri() . "/css/front-page.css", array(), filemtime(get_theme_file_path('css/front-page.css')), "all");
    } else if (is_page('about')) {
        wp_enqueue_style("about-page", get_template_directory_uri() . "/css/about.css", array(), filemtime(get_theme_file_path('css/about.css')), "all");
    } else if (is_page('medical')) {
        wp_enqueue_style("medical-page", get_template_directory_uri() . "/css/guide.css", array(), filemtime(get_theme_file_path('css/guide.css')), "all");
    } else if (is_page('staff')) {
        wp_enqueue_style("staff-page", get_template_directory_uri() . "/css/staff.css", array(), filemtime(get_theme_file_path('css/staff.css')), "all");
    } else if (is_page('contact') or is_page('reservation') or (is_page('thanks') && wp_get_post_parent_id(get_the_ID()) === get_page_by_path('contact')->ID) or (is_page('thanks') && wp_get_post_parent_id(get_the_ID()) === get_page_by_path('reservation')->ID)) {
        wp_enqueue_style("form-page", get_template_directory_uri() . "/css/form.css", array(), filemtime(get_theme_file_path('css/form.css')), "all");
    }
}
add_action("wp_enqueue_scripts", "my_script_init", 20);


function my_the_post_category($anchor = true)
{
    $category = get_the_category();
    if ($category[0]) {
        if ($anchor) {
            echo '<a href="' . get_category_link($category[0]->term_id) . '">' . $category[0]->cat_name . '</a>';
        } else {
            echo $category[0]->cat_name;
        }
    }
}


/*------------------------------------
 * メニュー
------------------------------------*/
// メニューを有効化
register_nav_menus([
    'header-nav' => 'ヘッダーナビ',
    'footer-nav' => 'フッターナビ',
]);

// ヘッダーメニュー
class Custom_Nav_Walker extends Walker_Nav_Menu
{

    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
    {

        // ① フロントページ（ホーム）
        if ($item->object === 'page' && (int)$item->object_id === (int)get_option('page_on_front')) {
            $slug = 'home';

            // ② 固定ページ
        } elseif ($item->object === 'page') {
            $slug = get_post_field('post_name', $item->object_id);

            // ③ カスタムリンク
        } elseif ($item->type === 'custom') {
            $slug = trim(basename(untrailingslashit($item->url)));

            // ④ その他
        } else {
            $slug = sanitize_title($item->title);
        }

        // ⑤ PC メニューだけ is-focus を付ける
        $focus_class = '';
        if (isset($args->is_pc_menu) && $args->is_pc_menu === true) {
            if ($item->current || $item->current_item_ancestor || $item->current_item_parent) {
                $focus_class = ' is-focus';
            }
        }

        // ⑥ 呼び出し側で渡すクラス名（PC or ドロワー）
        $base_class = isset($args->link_class) ? $args->link_class : '';

        // 出力
        $output .= '<li>';
        $output .= '<a href="' . esc_url($item->url) . '" class="'
            . esc_attr($base_class) . ' '
            . esc_attr($base_class . '-' . $slug)
            . $focus_class . '">';
        $output .= esc_html($item->title);
        $output .= '</a>';
        $output .= '</li>';
    }
}

class Footer_Nav_Walker extends Walker_Nav_Menu {

    private $is_medical_parent = false;
    private $term_groups = [];
    private $medical_terms = [];

    function __construct() {

        // medical_type のタームを動的に取得
        $terms = get_terms([
            'taxonomy'   => 'medical_type',
            'hide_empty' => false,
        ]);

        foreach ( $terms as $term ) {
            $this->medical_terms[$term->slug] = $term->name;
            $this->term_groups[$term->slug] = [];
        }
    }

    // 診療案内の子階層では UL を出さない（最重要）
    function start_lvl( &$output, $depth = 0, $args = null ) {
        if ( $this->is_medical_parent && $depth === 1 ) return;
        $output .= '<ul class="footer-nav_child">';
    }

    function end_lvl( &$output, $depth = 0, $args = null ) {
        if ( $this->is_medical_parent && $depth === 1 ) return;
        $output .= '</ul>';
    }

    function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {

        // 親メニュー
        if ( $depth === 0 ) {

            $this->is_medical_parent = ($item->title === '診療案内');

            $output .= '<li class="footer-nav_top">';

            // TOP だけリンク
            if ( (int)$item->object_id === (int)get_option('page_on_front') ) {
                $output .= '<a href="' . esc_url($item->url) . '">' . esc_html($item->title) . '</a>';
            } else {
                $output .= esc_html($item->title);
            }

            if ( $this->is_medical_parent ) {
                $output .= '<div class="footer-nav_child-wrap">';
            }

        // 子メニュー
        } else {

            if ( $this->is_medical_parent ) {

                // URL からタームスラッグを抽出（例：#general01 → general）
                if ( preg_match('/#([a-zA-Z0-9_-]+)/', $item->url, $m) ) {
                    $slug = preg_replace('/\d+$/', '', $m[1]); // general01 → general
                } else {
                    $slug = '';
                }

                // タクソノミーに存在するタームだけ分類
                if ( isset($this->term_groups[$slug]) ) {
                    $this->term_groups[$slug][] = $item;
                }

                return; // UL は後でまとめて出力
            }

            // 通常の子メニュー
            $output .= '<li><a href="' . esc_url($item->url) . '">' . esc_html($item->title) . '</a>';
        }
    }

    function end_el( &$output, $item, $depth = 0, $args = null ) {

        // 診療案内の親メニュー終了時に UL をまとめて出力
        if ( $depth === 0 && $this->is_medical_parent ) {

            foreach ( $this->medical_terms as $slug => $label ) {

                if ( !empty($this->term_groups[$slug]) ) {

                    $output .= '<ul class="footer-nav_child">';

                    foreach ( $this->term_groups[$slug] as $child ) {
                        $output .= '<li><a href="' . esc_url($child->url) . '">' . esc_html($child->title) . '</a></li>';
                    }

                    $output .= '</ul>';
                }
            }

            $output .= '</div></li>';

            // 初期化
            $this->is_medical_parent = false;
            $this->term_groups = [];

            return;
        }

        $output .= '</li>';
    }
}


/*------------------------------------
 * Breadcrumb NavXT：区切り文字の自動出力を無効化
------------------------------------*/
add_filter('bcn_show_separator', '__return_false');


/*------------------------------------
 * Breadcrumb NavXT：パンくずテンプレート統一
 * （区切り文字も自前で挿入）
------------------------------------*/
add_filter('bcn_breadcrumb_template', function ($template, $type) {

    // 現在のページ（リンクなし）
    if ($type === 'current-item') {
        return '<span class="current-item">%title%</span>';
    }

    // ホーム・中間階層（リンクあり）
    return '<span property="itemListElement" typeof="ListItem">'
        . '<a property="item" typeof="WebPage" href="%link%" class="%type%">'
        . '<span property="name">%title%</span></a>'
        . '<meta property="position" content="%position%" />'
        . '</span>'
        // ★ 区切り文字を自前で挿入（HTMLとして出る）
        . '<span class="breadcrumb-arrow">＞</span>';
}, 10, 2);


/*------------------------------------
 * Breadcrumb NavXT：最終出力の微調整
 * （最後の区切り文字を削除）
------------------------------------*/
add_filter('bcn_display_html', function ($html) {
    // 最後に余分に付く「＞」を削除
    return preg_replace(
        '/<span class="breadcrumb-arrow">＞<\/span>\s*$/',
        '',
        $html
    );
});


// 投稿ページのコンテンツのタグにクラス名を付ける
function customize_headings_and_paragraphs($content)
{
    // h2〜h4 に single-contents_ttl を追加（class の有無に関係なく対応）
    $content = preg_replace_callback(
        '/<(h[2-4])(.*?)>/',
        function ($matches) {
            $tag = $matches[1];
            $attrs = $matches[2];

            // class がある場合 → 追加
            if (preg_match('/class="([^"]*)"/', $attrs, $classMatch)) {
                $newClass = $classMatch[1] . ' single-contents_ttl';
                $attrs = preg_replace('/class="[^"]*"/', 'class="' . $newClass . '"', $attrs);
            } else {
                // class が無い場合 → 新規追加
                $attrs .= ' class="single-contents_ttl"';
            }

            return "<{$tag}{$attrs}>";
        },
        $content
    );

    // p タグにも single-contents_txt を追加
    $content = preg_replace_callback(
        '/<p(.*?)>/',
        function ($matches) {
            $attrs = $matches[1];

            if (preg_match('/class="([^"]*)"/', $attrs, $classMatch)) {
                $newClass = $classMatch[1] . ' single-contents_txt';
                $attrs = preg_replace('/class="[^"]*"/', 'class="' . $newClass . '"', $attrs);
            } else {
                $attrs .= ' class="single-contents_txt"';
            }

            return "<p{$attrs}>";
        },
        $content
    );

    // ul タグにも single-contents_ul を追加
    $content = preg_replace_callback(
        '/<ul(.*?)>/',
        function ($matches) {
            $attrs = $matches[1];

            if (preg_match('/class="([^"]*)"/', $attrs, $classMatch)) {
                $newClass = $classMatch[1] . ' single-contents_ul';
                $attrs = preg_replace('/class="[^"]*"/', 'class="' . $newClass . '"', $attrs);
            } else {
                $attrs .= ' class="single-contents_ul"';
            }

            return "<ul{$attrs}>";
        },
        $content
    );

    // ol タグにも single-contents_ol を追加
    $content = preg_replace_callback(
        '/<ol(.*?)>/',
        function ($matches) {
            $attrs = $matches[1];

            if (preg_match('/class="([^"]*)"/', $attrs, $classMatch)) {
                $newClass = $classMatch[1] . ' single-contents_ol';
                $attrs = preg_replace('/class="[^"]*"/', 'class="' . $newClass . '"', $attrs);
            } else {
                $attrs .= ' class="single-contents_ol"';
            }

            return "<ol{$attrs}>";
        },
        $content
    );

    return $content;
}
add_filter('the_content', 'customize_headings_and_paragraphs');


function redirect_blog_page_to_archive()
{
    if (is_page('blog')) {
        include get_template_directory() . '/archive.php';
        exit;
    }
}
add_action('template_redirect', 'redirect_blog_page_to_archive');


// CF7 の自動 <p> を完全に無効化する
add_filter('wpcf7_autop_or_not', '__return_false');


// 問い合わせページから送信完了ページへ遷移
function redirect_to_thanks_page()
{
    if (is_page('contact')) {
        echo <<<EOD
		<script>
		document.addEventListener( 'wpcf7mailsent', function() {
			window.location = '/contact/thanks/';
		});
		</script>
		EOD;
    }

    if (is_page('reservation')) {
        echo <<<EOD
		<script>
		document.addEventListener( 'wpcf7mailsent', function() {
			window.location = '/reservation/thanks/';
		});
		</script>
		EOD;
    }
}
add_action('wp_footer', 'redirect_to_thanks_page');


// 文字数カット
function get_flexible_title($number)
{
    $value = get_the_title();
    $value = wp_trim_words($value, $number, '…');
    return $value;
}
