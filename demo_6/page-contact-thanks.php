<?php
/*
Template Name: Contact Thanks Page
*/
?>
<?php get_header(); ?>

<main>
    <div class="page-header">
        <div class="page-header_img">
            <picture>
                <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/img/contact/pc/mv.png">
                <img src="<?php echo get_template_directory_uri(); ?>/img/contact/sp/mv.png" alt="">
            </picture>
        </div>
        <div class="page-header_ttl-area">
            <div class="page-header_area_bg"></div>
            <h1 class="page-header_ttl">
                <p class="page-header_ttl-en">
                    <span class="font_fira-sans">
                        CONTACT
                    </span>
                </p>
                <p class="page-header_ttl-ja">
                    <span>
                        お問い合わせ
                    </span>
                </p>
            </h1>
        </div>
    </div>

    <!-- breadcrumb -->
    <!-- <div class="breadcrumb">
        <span property="itemListElement" typeof="ListItem">
            <a property="item" typeof="WebPage" href="/" class="home"><span property="name">トップ</span></a>
            <meta property="position" content="1">
        </span>
        <span class="breadcrumb-arrow">＞</span>
        <span property="itemListElement" typeof="ListItem">
            <a property="item" typeof="WebPage" href="/" class="home"><span property="name">お問い合わせ</span></a>
            <meta property="position" content="1">
        </span>
        <span class="breadcrumb-arrow">＞</span>
        <span class="current-item">お問い合わせ完了</span>
    </div> -->
    <div class="breadcrumb">
        <?php if (function_exists('bcn_display')) {
            bcn_display();
        } ?>
    </div>
    <!-- /breadcrumb -->

    <section id="contact-page" class="contact-page">
        <div class="contact-page_inner">
            <div class="contact-page_contents">
                <p class="contact-page_txt">
                    お問い合わせありがとうございました。<br>
                    2日以内に担当者からメールにてご連絡いたしますので、しばらくお待ちいただけますと幸いです。
                </p>

                <a class="contact-page_link" href="<?php echo home_url('/'); ?>">トップへ戻る</a>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>