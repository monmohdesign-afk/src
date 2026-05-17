<?php
/*
Template Name: Download Thanks Page
*/
?>

<?php get_header(); ?>

<main>
    <div class="page-header">
        <div class="page-header_img">
            <picture>
                <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/img/download/pc/mv.png">
                <img src="<?php echo get_template_directory_uri(); ?>/img/download/sp/mv.png" alt="">
            </picture>
        </div>
        <div class="page-header_ttl-area">
            <div class="page-header_area_bg"></div>
            <h1 class="page-header_ttl">
                <p class="page-header_ttl-en">
                    <span class="font_fira-sans">
                        DOWNLOAD
                    </span>
                </p>
                <p class="page-header_ttl-ja">
                    <span>
                        資料ダウンロード
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
        <span class="current-item">資料ダウンロード</span>
    </div> -->
    <div class="breadcrumb">
        <?php if (function_exists('bcn_display')) {
            bcn_display();
        } ?>
    </div>
    <!-- /breadcrumb -->

    <section id="download-page" class="download-page">
        <div class="download-page_inner">
            <div class="download-left">
                <p class="download-left_info">
                    世界で活躍できるグローバルな人材を育てる３つの研修プログラムをご用意しております。
                </p>
                <div class="download-left_img">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/download/pamphlet.png" alt="資料紹介">
                </div>
                <p class="download-left_txt">
                    急速にグローバルに活躍できる企業が生き残る時代と移り変わりました。<br>
                    ビジネス英語や経営学を効率よく学びながら、世界各国から集まるビジネスパーソンと交流し、世界レベルでの人脈を構築する研修をご用意しております。<br>
                    <br>
                    英語に苦手意識のある方でもご安心ください。<br>
                    ビジネスで必要なコミュニケーションが取れるようになるまで実績豊富な講師陣がサポートいたします。<br>
                    まずはこちらの資料をごらんください。
                </p>
            </div>

            <div class="download-right">
                <p class="download-right_ttl">
                    資料請求いただき<br>
                    ありがとうございました！
                </p>

                <p class="download-right_txt">
                    資料は以下のリンクよりダウンロードください。<br>
                    <br>
                    <a href="<?php echo home_url('/download/thanks/'); ?>">資料のダウンロードリンクはこちら</a>
                    <br>
                    また、ご入力いただいたメールアドレスの方へもダウンロードリンクを送付しておりますので、ご確認いただけますと幸いです。
                </p>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>