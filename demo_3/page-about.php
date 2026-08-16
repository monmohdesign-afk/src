<?php get_header(); ?>

<div class="page-header">
    <div class="page-header_inner about-header_inner">
        <div class="page-header_ttl-area">
            <p class="page-header_ttl-ja">
                当院について
            </p>
            <p class="page-header_ttl-en">
                ABOUT OUR CLINIC
            </p>
        </div>
    </div>
</div>

<?php if (function_exists('bcn_display')): ?>
    <!-- breadcrumb -->
    <div class="breadcrumb">
        <?php bcn_display(); ?>
    </div><!-- /breadcrumb -->
<?php endif; ?>

<main>
    <section id="pol-fea" class="pol-fea common-sec01">
        <picture class="pol-fea_bg common-sec01_bg">
            <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/img/deco-pc.png">
            <img src="<?php echo get_template_directory_uri(); ?>/img/deco-sp.png" alt="Conceptの背景画像">
        </picture>

        <div class="sec-ttl">
            <h2>当院の3つのおすすめ</h2>
        </div>

        <div class="pol-fea_contents">
            <div class="pol-fea_wrap common-sec01_wrap">
                <div class="pol-fea_wrap01-left common-sec01_wrap-left">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/policy-img.png" alt="ポリシーのイメージ画像">
                </div>
                <div class="pol-fea_wrap01-right common-sec01_wrap-right">
                    <p class="pol-fea_wrap01_subttl common-sec01_subttl">POLICY</p>
                    <p class="pol-fea_wrap01_mainttl common-sec01_mainttl">
                        コミュニケーションから始まる最適な医療提供
                    </p>
                    <p class="pol-fea_wrap01_txt common-sec01_txt">
                        歯の治療において、小さな違和感は大きなストレスにつながります。私たちは常に快適な歯科医療技術の研究を行っております。<br>
                        また、「通いやすさ」も医院選びの重要なポイントと考え、2019年のリニューアルを期に更に駅の近くへ場所を移しました。<br>
                        <br>
                        朝から夜までお仕事をされている方のために診療時間を見直し、平日でもご利用いただけるようにいたしました。
                    </p>
                </div>
            </div>
            <div class="pol-fea_wrap common-sec01_wrap">
                <div class="pol-fea_wrap02-left common-sec01_wrap-left">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/feature-img.png" alt="特徴のイメージ画像">
                </div>
                <div class="pol-fea_wrap02-right common-sec01_wrap-right">
                    <p class="pol-fea_wrap02_subttl common-sec01_subttl">FEATURE</p>
                    <p class="pol-fea_wrap01_mainttl common-sec01_mainttl">
                        「医療技術の追求」と<br>「通いやすさ」
                    </p>
                    <p class="pol-fea_wrap02_txt common-sec01_txt">
                        歯の治療において、小さな違和感は大きなストレスにつながります。私たちは常に快適な歯科医療技術の研究を行っております。<br>
                        また、「通いやすさ」も医院選びの重要なポイントと考え、2019年のリニューアルを期に更に駅の近くへ場所を移しました。<br>
                        <br>
                        朝から夜までお仕事をされている方のために診療時間を見直し、平日でもご利用いただけるようにいたしました。
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="gallery" class="gallery common-sec03">
        <div class="inner">
            <div class="sec-ttl">
                <h2>院内の様子</h2>
            </div>

            <div class="gallery-cards common-sec03_cards">
                <div class="gallery_img">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/about-gallery1.png" alt="">
                </div>

                <div class="gallery_img">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/about-gallery2.png" alt="">
                </div>

                <div class="gallery_img">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/about-gallery3.png" alt="">
                </div>

                <div class="gallery_img">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/about-gallery4.png" alt="">
                </div>

                <div class="gallery_img">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/about-gallery5.png" alt="">
                </div>

                <div class="gallery_img">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/about-gallery6.png" alt="">
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>