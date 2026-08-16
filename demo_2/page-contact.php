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
                        <!-- お問い合わせ -->
                         <?php the_title(); ?>
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
        <span class="current-item">お問い合わせ</span>
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
                <p class="contact-page_info">
                    研修のお申し込み、その他お問い合わせは、下記のフォームからお問い合わせ内容をご記入ください。<br>
                    2日以内に担当者からメールにてご連絡いたします。
                </p>

                <p class="contact-page_ttl">
                    お問い合わせ
                </p>

                <?php echo do_shortcode('[contact-form-7 id="639487b" html_class="contact-form" title="お問い合わせ"]'); ?>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>