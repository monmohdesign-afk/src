<?php get_header(); ?>
<main>
    <div id="mv" class="mv">

        <!-- fade-img -->
        <div class="mv-slider">
            <div id="js-spots-swiper" class="swiper spots-swiper">
                <div class="swiper-wrapper spots-swiper__wrapper" id="js-spots-swiper-wrap">
                    <div class="swiper-slide spots-swiper__slide">
                        <picture>
                            <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri() ?>/img/front-page/mv/pc/mv-1.png">
                            <img src="<?php echo get_template_directory_uri() ?>/img/front-page/mv/sp/mv-1.png" alt="ファーストビュー背景画像１">
                        </picture>
                    </div>
                    <div class="swiper-slide spots-swiper__slide">
                        <picture>
                            <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri() ?>/img/front-page/mv/pc/mv-2.png">
                            <img src="<?php echo get_template_directory_uri() ?>/img/front-page/mv/sp/mv-2.png" alt="ファーストビュー背景画像２">
                        </picture>
                    </div>
                    <div class="swiper-slide spots-swiper__slide">
                        <picture>
                            <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri() ?>/img/front-page/mv/pc/mv-3.png">
                            <img src="<?php echo get_template_directory_uri() ?>/img/front-page/mv/sp/mv-3.png" alt="ファーストビュー背景画像３">
                        </picture>
                    </div>
                </div>
            </div>
        </div>

        <div class="mv-txt">
            <p class="mv-txt_en hidden-sp">
                <span class="font_fira-sans">YOU CAN</span><br>
                <span class="font_fira-sans">CHANGE</span><br>
                <span class="font_fira-sans">THE WORLD</span>
            </p>
            <p class="mv-txt_en hidden-pc">
                <span class="font_fira-sans">YOU CAN CHANGE</span><br>
                <span class="font_fira-sans">THE WORLD</span>
            </p>
            <p class="mv-txt_ja">
                <span>
                    世界で活躍できるグローバルな人材を育てる
                </span>
            </p>
        </div>
    </div>

    <section id="about" class="about">
        <div class="about-img_bg-pc-wrap hidden-pc">
            <div class="about-img_bg-pc"></div>
        </div>
        <div class="about-inner">
            <h2 class="about-ttl sec-ttl">
                <p class="sec-ttl_en font_fira-sans">ABOUT US</p>
                <p class="sec-ttl_ja">当社について</p>
            </h2>

            <div class="about-flex">
                <p class="about-txt">
                    急速に広がったグローバル社会に対応できる人材を育成することで、文化・言語の垣根を越えたコミュニケーションを活発にし、一人でも多くの人が豊かに暮らせる世界を実現することを使命とする。<br>
                    <br>
                    コミュニケーションスキル習得をサポートすることで一人でも多くのビジネスパーソンの視野を広げ、世界を舞台に新しい相乗効果を生む未来を創造する。<br>
                    <br>
                    文化の垣根を越えた人と人とのつながりが新しい価値を生むことを信念とする。
                </p>

                <div class="about-img">
                    <div class="about-img_main">
                        <img src="<?php echo get_template_directory_uri() ?>/img/front-page/about.png" alt="オフィスの写真">
                    </div>

                    <div class="about-img_bg-sp hidden-sp"></div>
                </div>

                <a href="<?php echo home_url('/about/'); ?>" class="view-btn_1 about-btn">
                    <p class="font_fira-sans">View more</p>
                    <div class="btn-icon"></div>
                </a>
            </div>
        </div>
    </section>

    <section id="service" class="service">
        <div class="service-inner">
            <h2 class="service-ttl">
                <p class="sec-ttl_en font_fira-sans">SERVICE</p>
                <p class="sec-ttl_ja">サービス</p>
            </h2>

            <ul class="service-list">
                <li class="service-item">
                    <div class="service_img-group">
                        <div class="service-item_num">
                            <img src="<?php echo get_template_directory_uri() ?>/img/front-page/service-num-1.png" alt="">
                        </div>
                        <div class="service-item_img">
                            <img src="<?php echo get_template_directory_uri() ?>/img/front-page/service-1.png" alt="ビジネス英語研修の画像">
                        </div>
                        <p class="service-item_img-ttl">
                            <span>ビジネス英語研修</span>
                        </p>
                    </div>
                    <p class="service-item_txt service-wrap">
                        ビジネス英会話はこれからの時代、すべてのビジネスパーソンが学ぶべき必須スキルと考えおります。海外にビジネス展開する際にはもちろんのこと、日本国内でも英会話コミュニケーションができることによってチャンスが掴める場面があります。
                    </p>
                </li>
                <li class="service-item">
                    <div class="service_img-group">
                        <div class="service-item_num">
                            <img src="<?php echo get_template_directory_uri() ?>/img/front-page/service-num-2.png" alt="">
                        </div>
                        <div class="service-item_img">
                            <img src="<?php echo get_template_directory_uri() ?>/img/front-page/service-2.png" alt="異文化コミュニケーション研修の画像">
                        </div>
                        <p class="service-item_img-ttl">
                            <span>異文化</span><br>
                            <span>コミュニケーション研修</span>
                        </p>
                    </div>
                    <p class="service-item_txt service-wrap">
                        急速にグローバル化が進んでおり、ビジネスの場面に限らず様々な文化的背景を持つ者同士の交流はもはや日常的な光景となりました。<br>
                        言語や文化が異なる相手を理解することで世界が広がり、新たなビジネスチャンスに巡り会うことは少なくありません。
                    </p>
                </li>
                <li class="service-item">
                    <div class="service_img-group">
                        <div class="service-item_num">
                            <img src="<?php echo get_template_directory_uri() ?>/img/front-page/service-num-3.png" alt="">
                        </div>
                        <div class="service-item_img">
                            <img src="<?php echo get_template_directory_uri() ?>/img/front-page/service-3.png" alt="ビジネス英語研修">
                        </div>
                        <p class="service-item_img-ttl">
                            <span>ビジネス留学</span><br>
                            <span>サポートプログラム</span>
                        </p>
                    </div>
                    <p class="service-item_txt service-wrap">
                        将来的に海外で働きたい方に向けた講座をご用意しております。一般的には3ヶ月〜1年の期間で基本的な英会話スキルと、海外でのビジネスマナー習得を目指します。<br>
                        通常の語学留学では得られないビジネスの場で通用するコミュニケーションスキル習得に重点をおいておりますので、海外でビジネス展開する際に自信を持って活動することができるようになります。
                    </p>
                </li>
            </ul>

            <a href="<?php echo home_url('/service/'); ?>" class="view-btn_2 service-btn">
                <p class="font_fira-sans">View more</p>
                <div class="btn-icon"></div>
            </a>
        </div>
    </section>

    <?php
    $post_type_name = "work";
    $post_type_obj = get_post_type_object($post_type_name);
    ?>
    <section id="case" class="case">
        <div class="case-inner">
            <h2 class="sec-ttl case-ttl">
                <p class="sec-ttl_en font_fira-sans">CASE STUDY</p>
                <p class="sec-ttl_ja">導入事例</p>
            </h2>
            <?php
            $work_query = new WP_Query(
                array(
                    'post_type' => 'case',
                    'posts_per_page' => 6
                )
            );
            ?>

            <?php
            $terms = get_the_terms(get_the_ID(), 'business'); // ← タクソノミー名は必要に応じて変更
            $term  = $terms[0] ?? null;
            ?>

            <?php if ($work_query->have_posts()) : ?>
                <ul class="case-list">
                    <?php while ($work_query->have_posts()) : ?>
                        <?php $work_query->the_post(); ?>
                        <li class="case-item">
                            <a class="case-item_link" href="<?php echo home_url('/cases/'); ?>#<?php echo rawurlencode(get_the_title()); ?>">

                                <div class="case-item_img">
                                    <?php if (has_post_thumbnail()): ?>
                                        <?php the_post_thumbnail(); ?>
                                    <?php else: ?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/no-img.png" alt="">
                                    <?php endif; ?>
                                </div>
                                <p class="case-item_nm"><?php the_title(); ?>　様</p>
                                <div class="case-item_tag">
                                    <p class="case-item_tag-nm">
                                        <?php echo get_the_terms(get_the_ID(), 'business')[0]->name; ?>
                                    </p>
                                    <div class="case-item_tag-icon">
                                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M11.4398 7.00293C11.9672 6.47559 12.832 6.47559 13.3594 7.00293L20.0672 13.7318C20.5805 14.2451 20.5945 15.0748 20.1094 15.6021L13.5 22.2326C13.2328 22.4998 12.8883 22.6334 12.5367 22.6334C12.1922 22.6334 11.8406 22.4998 11.5805 22.2396C11.0531 21.7123 11.0461 20.8545 11.5805 20.3201L17.1984 14.6178L11.4398 8.91543C10.9055 8.39512 10.9055 7.5373 11.4398 7.00293Z"
                                                fill="white" class="case-item_tag-icon-path" />
                                            <path
                                                d="M0 15C0 23.2861 6.71394 30 15 30C23.2861 30 30 23.2861 30 15C30 6.71394 23.2861 0 15 0C6.71394 0 0 6.71394 0 15ZM2.30769 15C2.30769 11.6106 3.6274 8.42308 6.02885 6.02885C8.42308 3.6274 11.6106 2.30769 15 2.30769C18.3894 2.30769 21.5769 3.6274 23.9712 6.02885C26.3726 8.42308 27.6923 11.6106 27.6923 15C27.6923 18.3894 26.3726 21.5769 23.9712 23.9712C21.5769 26.3726 18.3894 27.6923 15 27.6923C11.6106 27.6923 8.42308 26.3726 6.02885 23.9712C3.6274 21.5769 2.30769 18.3894 2.30769 15Z"
                                                fill="white" class="case-item_tag-icon-path" />
                                        </svg>
                                    </div>
                                </div>
                            </a>
                        </li>
                    <?php endwhile; ?>
                </ul>
            <?php else : ?>
                <p class="no-post-text">投稿がありません。</p>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>

            <a href="<?php echo home_url('/cases/'); ?>" class="view-btn_1 case-btn">
                <p class="font_fira-sans">View more</p>
                <div class="btn-icon"></div>
            </a>
        </div>
    </section>

    <?php $articles_id = get_page_by_path('news')->ID; ?>
    <section id="news" class="news">
        <div class="news-inner">
            <h2 class="sec-ttl news-ttl">
                <p class="sec-ttl_en font_fira-sans">NEWS</p>
                <p class="sec-ttl_ja">新着情報</p>
            </h2>
            <?php $articles_query = new WP_Query(
                array(
                    'post_type' => 'post',
                    'posts_per_page' => 3
                )
            );
            ?>

            <?php if ($articles_query->have_posts()) : ?>
                <div class="news-lists">
                    <?php while ($articles_query->have_posts()) : ?>
                        <?php $articles_query->the_post(); ?>
                        <a href="<?php the_permalink(); ?>" class="news-list news-link">
                            <div class="news-link_meta">
                                <div class="news-link_label">
                                    <?php
                                    $category = get_the_category();
                                    if (!empty($category)) {
                                        echo esc_html($category[0]->name);
                                    }
                                    ?>
                                </div>
                                <time class="news-link_date" datetime="<?php the_time('c'); ?>"><?php the_time('Y/n/j'); ?></time>
                            </div>
                            <h3 class="news-link_ttl news-pc">
                                <?php echo get_flexible_title(40); ?>
                            </h3>
                            <h3 class="news-link_ttl news-sp">
                                <?php echo get_flexible_title(20); ?>
                            </h3>
                        </a>
                    <?php endwhile; ?>
                </div>
            <?php else : ?>
                <p class="no-post-text">投稿がありません。</p>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>

            <a href="<?php echo home_url('/news/'); ?>" class="view-btn_2 news-btn">
                <p class="font_fira-sans">View more</p>
                <div class="btn-icon"></div>
            </a>
        </div>
    </section>
</main>

<?php get_footer(); ?>