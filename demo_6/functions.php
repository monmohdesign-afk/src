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

    if (is_home() or is_category()) {
        wp_enqueue_style("home-page", get_template_directory_uri() . "/css/news.css", array(), filemtime(get_theme_file_path('css/news.css')), "all");
    } else if (is_front_page()) {
        wp_enqueue_style("front-page", get_template_directory_uri() . "/css/front-page.css", array(), filemtime(get_theme_file_path('css/front-page.css')), "all");
    } else if (is_single()) {
        wp_enqueue_style("single-page", get_template_directory_uri() . "/css/page.css", array(), filemtime(get_theme_file_path('css/page.css')), "all");
    } else if (is_page('about')) {
        wp_enqueue_style("about-page", get_template_directory_uri() . "/css/about.css", array(), filemtime(get_theme_file_path('css/about.css')), "all");
    } else if (is_page('cases')) {
        wp_enqueue_style("cases-page", get_template_directory_uri() . "/css/case.css", array(), filemtime(get_theme_file_path('css/case.css')), "all");
    } else if (is_page('service')) {
        wp_enqueue_style("service-page", get_template_directory_uri() . "/css/service.css", array(), filemtime(get_theme_file_path('css/service.css')), "all");
    } else if (is_page('contact')) {
        wp_enqueue_style("contact-page", get_template_directory_uri() . "/css/contact.css", array(), filemtime(get_theme_file_path('css/contact.css')), "all");
    } else if (is_page('thanks') && wp_get_post_parent_id(get_the_ID()) === get_page_by_path('contact')->ID) {
        /* ▼ お問い合わせ完了ページ */
        wp_enqueue_style("contact-thanks-page", get_template_directory_uri() . "/css/contact-after.css", array(), filemtime(get_theme_file_path('css/contact-after.css')), "all");
    } else if (is_page('download')) {
        wp_enqueue_style("download-page", get_template_directory_uri() . "/css/download.css", array(), filemtime(get_theme_file_path('css/download.css')), "all");
    } else if (is_page('thanks') && wp_get_post_parent_id(get_the_ID()) === get_page_by_path('download')->ID) {
        /* ▼ 資料ダウンロード完了ページ */
        wp_enqueue_style("download-thanks-page", get_template_directory_uri() . "/css/download-after.css", array(), filemtime(get_theme_file_path('css/download-after.css')), "all");
    }
}
add_action("wp_enqueue_scripts", "my_script_init", 20);



function my_menu_init()
{
    register_nav_menus(
        array(
            'header-nav' => 'ヘッダーナビ',
            'drawer-nav' => 'ドロワーナビ'
        )
    );
}
add_action('init', 'my_menu_init');



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



add_action('template_redirect', function () {
    if (is_singular('case')) {
        wp_redirect(home_url('/case/'));
        exit;
    }
});



function my_download_link()
{
    return '<a href="' . home_url('/download/') . '" target="_blank">個人情報保護方針</a>';
}
add_shortcode('download_link', 'my_download_link');



add_filter('wpcf7_autop_or_not', '__return_false');

function redirect_to_thanks_page()
{
    if (is_page('contact')) {
?>
        <script>
            document.addEventListener('wpcf7mailsent', function() {
                window.location.href = "<?php echo home_url('/contact/thanks/'); ?>";
            });
        </script>
    <?php
    }

    if (is_page('download')) {
    ?>
        <script>
            document.addEventListener('wpcf7mailsent', function() {
                window.location.href = "<?php echo home_url('/download/thanks/'); ?>";
            });
        </script>
<?php
    }
}
add_action('wp_footer', 'redirect_to_thanks_page');




function get_flexible_title($number)
{
    $value = get_the_title();
    $value = wp_trim_words($value, $number, '…');
    return $value;
}
