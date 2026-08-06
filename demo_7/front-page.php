<?php get_header(); ?>

<main>
    <div id="mv" class="mv">
        <div class="mv-slider">
            <!-- Slider main container -->
            <div id="js-mv-swiper" class="swiper mv-swiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">
                        <div class="swiper-slide_wrap">
                            <picture>
                                <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/img/mv-slide1-pc.png">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/mv-slide1-sp.png" alt="メインビジュアル画像１">
                            </picture>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="swiper-slide_wrap">
                            <picture>
                                <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/img/mv-slide2-pc.png">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/mv-slide2-sp.png" alt="メインビジュアル画像２">
                            </picture>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="swiper-slide_wrap">
                            <picture>
                                <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/img/mv-slide3-pc.png">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/mv-slide3-sp.png" alt="メインビジュアル画像３">
                            </picture>
                        </div>
                    </div>
                </div>

                <div class="mt-txt">
                    <picture>
                        <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/img/top-text-pc.png">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/top-text-sp.png" alt="テキスト：街の皆さまの笑顔を守るアットホームな歯医者さん">
                    </picture>
                </div>

                <!-- If we need pagination -->
                <div id="js-mv-pagination" class="swiper-pagination mv-pagination"></div>

                <!-- If we need navigation buttons -->
                <div id="js-mv-prev" class="swiper-button-prev mv-prev"></div>
                <div id="js-mv-next" class="swiper-button-next mv-next"></div>
            </div>
        </div>

        <div class="mv-info">
            <div class="mv-inner inner">
                <picture class="mv-timeschedule">
                    <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/img/medical-time-pc.png">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/medical-time-sp.png" alt="診察時間">
                </picture>

                <?php $news_id = get_page_by_path('news')->ID;
                $news_query = new WP_Query(
                    array(
                        'post_type' => 'post',
                        'posts_per_page' => 1
                    )
                );
                ?>
                <div class="mv-notice">
                    <div class="notice-top">
                        <div class="notice-top_left">
                            <h2>お知らせ</h2>
                            <span>NEWS</span>
                        </div>
                        <a class="notice-top_right" href="<?php echo get_the_permalink($news_id); ?>">過去のお知らせはこちら</a>
                    </div>
                    <?php if ($news_query->have_posts()) : ?>
                        <?php while ($news_query->have_posts()) : ?>
                            <?php $news_query->the_post(); ?>
                            <a class="notice-bottom" href="<?php the_permalink(); ?>">
                                <time class="notice-bottom_time" datetime="<?php the_time('c'); ?>"><?php the_time('Y.n.j'); ?>2021.01.01</time>
                                <p class="notice-bottom_txt"><?php the_title(); ?></p>
                            </a>
                        <?php endwhile; ?>
                    <?php else : ?>
                        <p class="notice-bottom_txt">投稿がありません。</p>
                    <?php endif; ?>
                    <?php wp_reset_postdata(); ?>
                </div>
            </div>
        </div>
    </div>

    <?php $about_id = get_page_by_path('about')->ID; ?>
    <section id="concept" class="concept common-sec01">
        <picture class="concept_bg common-sec01_bg">
            <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/img/deco-pc.png">
            <img src="<?php echo get_template_directory_uri(); ?>/img/deco-sp.png" alt="Conceptの背景画像">
        </picture>
        <div class="concept_wrap common-sec01_wrap">
            <div class="concept_wrap-left common-sec01_wrap-left">
                <img src="<?php echo get_template_directory_uri(); ?>/img/concept-img.png" alt="Conceptのイメージ画像">
            </div>
            <div class="concept_wrap-right common-sec01_wrap-right">
                <p class="concept_subttl common-sec01_subttl">concept</p>
                <p class="concept_mainttl common-sec01_mainttl">
                    健康的で素敵な笑顔あふれる<br>街づくりを目指して
                </p>
                <p class="concept_txt common-sec01_txt">
                    私たちは最新の医療技術を追求すると共に、患者様とのコミュニケーションを大事することで、気軽に通いやすく些細なことでも相談できる「街の掛かり付け医」を目指しております。<br>
                    お子様からご高齢の方まで、快適な空間で治療が受けられる場を作り、地域医療に貢献しきたいと考えております。
                </p>
                <div class="concept_btn common-sec01_btn">
                    <a class="btn" href="<?php echo get_the_permalink($about_id) ?>">当院について</a>
                </div>
            </div>
        </div>
    </section>

    <section id="recommend" class="recommend">
        <div class="inner">
            <div class="sec-ttl">
                <h2>当院の3つのおすすめ</h2>
            </div>

            <div class="recommend-steps">
                <div class="recommend-step">
                    <div class="recommend-step_ttl">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/recommend-1.png" alt="">
                    </div>

                    <div class="recommend-step_img">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/recommend-img1.png" alt="">
                    </div>

                    <div class="recommend-step_txt">
                        <p>
                            歯の治療において、小さな違和感は大きなストレスにつながります。<br>私たちは常に快適な歯科医療技術の研究を行っております。
                        </p>
                    </div>
                </div>

                <div class="recommend-step">
                    <div class="recommend-step_ttl">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/recommend-2.png" alt="">
                    </div>

                    <div class="recommend-step_img">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/recommend-img2.png" alt="">
                    </div>

                    <p class="recommend-step_txt">
                        「通いやすさ」も医院選びの重要なポイントと考え、2019年のリニューアルを期に更に駅の近くへ場所を移しました。
                    </p>
                </div>

                <div class="recommend-step">
                    <div class="recommend-step_ttl">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/recommend-3.png" alt="">
                    </div>

                    <div class="recommend-step_img">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/recommend-img3.png" alt="">
                    </div>

                    <div class="recommend-step_txt">
                        <p>
                            朝から夜までお仕事をされている方のために、診療時間を見直しました。
                        </p>
                        <p class="txt-red">
                            ※駆け込みでも対応可能ですが、事前にご連絡いただけるとスムーズです。
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="guide" class="guide common-sec02">
        <div class="guide_bg-top common-sec02_bg-top"></div>

        <div class="guide-wrap common-sec02_wrap">
            <div class="inner">
                <div class="guide-contents common-sec02_contents">
                    <div class="sec-ttl">
                        <h2>診療案内</h2>
                    </div>

                    <div class="guide-wrap_cards common-sec02_cards">
                        <a href="<?php echo home_url('/medical/#general-medical'); ?>" class="guide-wrap_card common-sec02_card">
                            <div class="guide-wrap_bg common-sec02_card-bg">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/guide-img1.png" alt="一般診療の画像">
                            </div>

                            <div class="guide-wrap_info common-sec02_card-info">
                                <p class="guide-wrap_info-ttl common-sec02_card-info-ttl">
                                    一般診療
                                </p>
                                <p class="guide-wrap_info-txt common-sec02_card-info-txt">
                                    虫歯・入れ歯・小児歯科
                                </p>
                            </div>
                        </a>

                        <a href="<?php echo home_url('/medical/#special-medical'); ?>" class="guide-wrap_card common-sec02_card">
                            <div class="guide-wrap_bg common-sec02_card-bg">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/guide-img2.png" alt="特殊診療の画像">
                            </div>

                            <div class="guide-wrap_info common-sec02_card-info">
                                <p class="guide-wrap_info-ttl common-sec02_card-info-ttl">
                                    特殊診療
                                </p>
                                <p class="guide-wrap_info-txt common-sec02_card-info-txt">
                                    インプラント・ホワイトニング<br>予防歯科・口腔外科・審美歯科
                                </p>
                            </div>
                        </a>
                    </div>

                    <div class="guide-contents_txt common-sec02_contents-txt">
                        <p>
                            当院では、患者さんの歯の健康状態や治療方針を丁寧にカウンセリングし、十分ご理解していただいた上で治療いたします。<br>痛みに配慮することと、可能な限り削らない・抜かない治療に努めております。
                        </p>
                        <p class="txt-red">
                            ※特殊性の高い矯正治療などは保険の適応外となります。 これらの治療を行う際は事前に詳細と費用のご説明いたします。
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="guide_bg-bottom common-sec02_bg-bottom"></div>
    </section>

    <?php
    $post_type_name = "blog";
    $post_type_obj = get_post_type_object($post_type_name);
    ?>
    <section id="blog" class="blog common-sec03">
        <div class="inner">
            <div class="sec-ttl">
                <h2>スタッフブログ</h2>
            </div>

            <?php $work_query = new WP_Query(
                array(
                    'post_type' => 'blog',
                    'posts_per_page' => 6
                )
            );
            ?>
            <?php if ($work_query->have_posts()) : ?>
                <div class="blog-cards common-sec03_cards">
                    <?php while ($work_query->have_posts()) : ?>
                        <?php $work_query->the_post(); ?>
                        <a class="blog-card common-sec03_card" href="<?php the_permalink(); ?>">
                            <div class="blog-card_img common-sec03_card-img">
                                <?php if (has_post_thumbnail()): ?>
                                    <?php the_post_thumbnail(); ?>
                                <?php else: ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/ogp-img.png" alt="">
                                <?php endif; ?>
                            </div>
                            <div class="blog-card_txt common-sec03_card-txt">
                                <p class="blog-card_tag common-sec03_card-tag">
                                    <?php echo get_the_terms(get_the_ID(), 'blog_category')[0]->name; ?>
                                </p>
                                <p class="blog-card_ttl common-sec03_card-ttl hidden-pc">
                                    <?php echo get_flexible_title(43); ?>
                                </p>
                                <p class="blog-card_ttl common-sec03_card-ttl hidden-sp">
                                    <?php echo get_flexible_title(26); ?>
                                </p>
                                <time class="blog-card_ymd common-sec03_card-ymd" datetime="<?php the_time('c'); ?>">
                                    <?php the_time('Y.n.j'); ?>
                                </time>
                            </div>
                        </a>
                    <?php endwhile; ?>
                </div>

                <div class="blog_btn common-sec03_btn">
                    <a class="btn" href="<?php echo get_post_type_archive_link($post_type_name) ?>">スタッフブログ一覧はこちら</a>
                </div>
            <?php else : ?>
                <p class="blog-card_ttl">投稿がありません。</p>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>