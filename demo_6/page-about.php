<?php get_header(); ?>

<main>
    <div class="page-header">
        <div class="page-header_img">
            <picture>
                <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri() ?>/img/about/pc/mv.png">
                <img src="<?php echo get_template_directory_uri() ?>/img/about/sp/mv.png" alt="">
            </picture>
        </div>
        <div class="page-header_ttl-area">
            <div class="page-header_area_bg"></div>
            <h1 class="page-header_ttl">
                <p class="page-header_ttl-en">
                    <span class="font_fira-sans">
                        ABOUT US
                    </span>
                </p>
                <p class="page-header_ttl-ja">
                    <span>
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
        <span class="current-item">当社について</span>
    </div> -->
    <div class="breadcrumb">
        <?php if (function_exists('bcn_display')) {
            bcn_display();
        } ?>
    </div>
    <!-- /breadcrumb -->


    <section id="mission" class="mission about-top">
        <div class="mission-img about-top_img">
            <img src="<?php echo get_template_directory_uri() ?>/img/about/mission.jpg" alt="">
            <h2 class="about-top_img-ttl">
                <span class="about-top_img-ttl-en font_fira-sans">MISSION</span>
                <span class="about-top_img-ttl-ja">社会的使命</span>
            </h2>
        </div>
        <div class="mission-content about-top_wrap">
            <div class="about-top_content">
                <h3 class="about-top_content-ttl">
                    人財育成を通じて、<br class="hidden-sp">豊かな世界を創造する
                </h3>
                <p class="about-top_content-txt">
                    急速に広がったグローバル社会に対応できる人材を育成することで、文化・言語の垣根を越えたコミュニケーションを活発にし、一人でも多くの人が豊かに暮らせる世界を実現することを使命とする。
                </p>
            </div>
        </div>
    </section>

    <section id="vision" class="vision about-top">
        <div class="vision-img about-top_img">
            <img src="<?php echo get_template_directory_uri() ?>/img/about/vision.jpg" alt="">
            <h2 class="about-top_img-ttl">
                <span class="about-top_img-ttl-en font_fira-sans">
                    VISION
                </span>
                <span class="about-top_img-ttl-ja">企業理念</span>
            </h2>
        </div>
        <div class="vision-content about-top_wrap">
            <div class="about-top_content">
                <h3 class="about-top_content-ttl">
                    文化の垣根を越えた<br class="hidden-pc">人と人とのつながりが新しい価値を生む
                </h3>
                <p class="about-top_content-txt">
                    コミュニケーションスキル習得をサポートすることで一人でも多くのビジネスパーソンの視野を広げ、世界を舞台に新しい相乗効果を生む未来を創造する。文化の垣根を越えた人と人とのつながりが新しい価値を生むことを信念とする。
                </p>
            </div>
        </div>
    </section>

    <section id="summary" class="summary">
        <div class="summary_inner">
            <h2 class="about-sec-ttl summary-ttl">
                会社概要
            </h2>

            <dl class="summary-list">
                <dt>代表</dt>
                <dd>波瑠　慶太</dd>
                <dt>事業内容</dt>
                <dd>
                    ・ビジネス英会話教育事業<br>
                    ・異文化交流サポート事業<br>
                    ・ビジネス留学事業
                </dd>
                <dt>設立</dt>
                <dd>2012年10月03日</dd>
                <dt>所在地</dt>
                <dd>
                    〒550-1000<br>
                    大阪市西区土佐堀9-5-5
                </dd>
                <dt>TEL</dt>
                <dd>06-123-4567（代表）</dd>
                <dt>FAX</dt>
                <dd>06-123-4568（代表）</dd>
                <dt>E-mail</dt>
                <dd>globalstandard@example.com</dd>
            </dl>
        </div>
    </section>

    <section id="officer" class="officer">
        <div class="officer-inner">
            <h2 class="about-sec-ttl officer-ttl">
                役員紹介
            </h2>
            <ul class="officer-lists">
                <li class="officer-list">
                    <div class="officer-list_info">
                        <dl class="officer-list_info-head">
                            <div class="officer-list_name">
                                <span class="post">代表取締役社長</span>
                                <span class="name">波瑠　慶太</span>
                            </div>
                        </dl>
                        <p class="officer-list_txt">
                            20年間外資系企業に勤務し、世界17カ国でビジネスを展開。<br>
                            様々な文化に触れ、コミュニケーションスキルを磨き、同時にその必要性を実感する。<br>
                            自身も講師を務め、実体験から得られた知見を皆様に還元し、グローバルなビジネス展開をサポートいたします。
                        </p>
                        <div class="officer-list_sns">
                            <a class="sns_link" href="https://x.com/" target="_blank">
                                <img src="<?php echo get_template_directory_uri() ?>/img/about/icon-twitter.png" alt="Twitter">
                            </a>
                            <a class="sns_link" href="https://www.facebook.com/" target="_blank">
                                <img src="<?php echo get_template_directory_uri() ?>/img/about/icon-facebook.png" alt="Facebook">
                            </a>
                            <a class="sns_link" href="https://www.instagram.com/" target="_blank">
                                <img src="<?php echo get_template_directory_uri() ?>/img/about/icon-instagram.png" alt="Instagram">
                            </a>
                        </div>
                    </div>
                    <div class="officer-list_img">
                        <img src="<?php echo get_template_directory_uri() ?>/img/about/directors-1.png" alt="">
                    </div>
                </li>

                <li class="officer-list">
                    <div class="officer-list_info">
                        <dl class="officer-list_info-head">
                            <div class="officer-list_name">
                                <span class="post">取締役</span>
                                <span class="name">ジャック・スミス</span>
                            </div>
                        </dl>
                        <p class="officer-list_txt">
                            オーストラリア出身。<br>
                            英会話の講師として13年のキャリアがあります。<br>
                            翻訳業務も担当しており、外国映画の日本版DVDの字幕やテレビ番組の英語をヒヤリングなども行なっております。<br>
                            皆様に「より気持ちの伝わる英会話」を習得していただくサポートをいたします。
                        </p>
                        <div class="officer-list_sns">
                            <a class="sns_link" href="https://x.com/" target="_blank">
                                <img src="<?php echo get_template_directory_uri() ?>/img/about/icon-twitter.png" alt="Twitter">
                            </a>
                            <a class="sns_link" href="https://www.facebook.com/" target="_blank">
                                <img src="<?php echo get_template_directory_uri() ?>/img/about/icon-facebook.png" alt="Facebook">
                            </a>
                            <a class="sns_link" href="https://www.instagram.com/" target="_blank">
                                <img src="<?php echo get_template_directory_uri() ?>/img/about/icon-instagram.png" alt="Instagram">
                            </a>
                        </div>
                    </div>
                    <div class="officer-list_img">
                        <img src="<?php echo get_template_directory_uri() ?>/img/about/directors-2.png" alt="">
                    </div>
                </li>

                <li class="officer-list">
                    <div class="officer-list_info">
                        <dl class="officer-list_info-head">
                            <div class="officer-list_name">
                                <span class="post">取締役</span>
                                <span class="name">メアリー・ジャクソン</span>
                            </div>
                        </dl>
                        <p class="officer-list_txt">
                            アメリカ出身。<br>
                            メジャーリーグ球団「ニューヨークヤンキース」の通訳担当として7年間チームに在籍。<br>
                            数多くの契約交渉の経験を活かし、国際ビジネスにおけるコミュニケーションのマナーから応用までお伝えいたします。
                        </p>
                        <div class="officer-list_sns">
                            <a class="sns_link" href="https://x.com/" target="_blank">
                                <img src="<?php echo get_template_directory_uri() ?>/img/about/icon-twitter.png" alt="Twitter">
                            </a>
                            <a class="sns_link" href="https://www.facebook.com/" target="_blank">
                                <img src="<?php echo get_template_directory_uri() ?>/img/about/icon-facebook.png" alt="Facebook">
                            </a>
                            <a class="sns_link" href="https://www.instagram.com/" target="_blank">
                                <img src="<?php echo get_template_directory_uri() ?>/img/about/icon-instagram.png" alt="Instagram">
                            </a>
                        </div>
                    </div>
                    <div class="officer-list_img">
                        <img src="<?php echo get_template_directory_uri() ?>/img/about/directors-3.png" alt="">
                    </div>
                </li>
            </ul>
        </div>
    </section>
</main>

<?php get_footer(); ?>