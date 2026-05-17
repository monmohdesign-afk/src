<?php
/*
Template Name: Service Page
*/
?>

<?php get_header(); ?>

<main>
    <div class="page-header">
        <div class="page-header_img">
            <picture>
                <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/img/service/pc/mv.png">
                <img src="<?php echo get_template_directory_uri(); ?>/img/service/sp/mv.png" alt="">
            </picture>
        </div>
        <div class="page-header_ttl-area">
            <div class="page-header_area_bg"></div>
            <h1 class="page-header_ttl">
                <p class="page-header_ttl-en">
                    <span class="font_fira-sans">
                        SERVICE
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
    <div class="breadcrumb">
        <?php if (function_exists('bcn_display')) {
            bcn_display();
        } ?>
    </div>
    <!-- /breadcrumb -->

    <p class="service-info service-inner">
        世界で活躍できる<br>
        グローバルな人材を育てる<br class="hidden-sp">
        ３つの研修プログラム
    </p>

    <section id="programs" class="programs">
        <div class="service-inner">
            <div id="business-english-training" class="program">
                <div class="program-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/service/service-1.png" alt="">
                </div>
                <div class="program-info">
                    <div class="program-number font_fira-sans">01</div>
                    <h2 class="program-info_head">
                        <span class="program-info_head-ja">
                            ビジネス英語研修
                        </span>
                        <span class="program-info_head-en font_fira-sans">
                            Business English Training
                        </span>
                    </h2>

                    <p class="program-info_txt">
                        ビジネス英会話はこれからの時代、すべてのビジネスパーソンが学ぶべき必須スキルと考えおります。<br>
                        海外にビジネス展開する際にはもちろんのこと、日本国内でも英会話コミュニケーションができることによってチャンスが掴める場面があります。<br>
                        <br>
                        担当する講師は皆、豊富な海外ビジネス経験者であり、ティーチングスキル、コミュニケーションスキル、人間性に加えて採用後には厳しいトレーニング期間を設けているので、様々な職業や職種に合ったスキルまで身につけられます。<br>
                        また、必要に応じてマンツーマン形式のレッスンを行うことも可能なので、時間の限り話すことができ効率よく上達することができます。
                    </p>

                    <div class="program-info_tables">
                        <dl class="program-info_table">
                            <dt>
                                対象
                            </dt>
                            <dd>
                                ビジネスの中で使える英語コミュニケーション能力が必要な方
                            </dd>
                        </dl>
                        <dl class="program-info_table">
                            <dt>
                                費用
                            </dt>
                            <dd>
                                時間内容要相談
                            </dd>
                        </dl>
                    </div>

                    <a href="<?php echo home_url('/contact/'); ?>" class="program-btn">
                        <span class="program-btn_txt">
                            お申し込みはこちら
                        </span>
                        <div class="program-btn_arrow">
                            <svg width="20" height="14" viewBox="0 0 20 14" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12.7544 0.268056C12.4001 0.632613 12.4001 1.23778 12.7475 1.60962L16.9712 6.04992H0.896144C0.402917 6.04992 0 6.47281 0 6.99777C0 7.52273 0.402917 7.94562 0.896144 7.94562H16.9642L12.7405 12.3859C12.3932 12.7578 12.4001 13.3556 12.7475 13.7275C13.1018 14.092 13.6645 14.092 14.0188 13.7202L19.743 7.66856C19.8194 7.58106 19.8819 7.48628 19.9305 7.36962C19.9792 7.25296 20 7.12901 20 7.00506C20 6.75717 19.9097 6.52385 19.743 6.34157L14.0188 0.289933C13.6784 -0.0892101 13.1087 -0.0965004 12.7544 0.268056Z"
                                    fill="#023E78" class="program-btn_arrow-path" />
                            </svg>

                        </div>
                    </a>
                </div>
            </div>

            <div id="cross-cultural-communication" class="program">
                <div class="program-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/service/service-2.png" alt="">
                </div>
                <div class="program-info">
                    <div class="program-number font_fira-sans">02</div>
                    <h2 class="program-info_head">
                        <span class="program-info_head-ja">
                            異文化<br class="hidden-sp">コミュニケーション
                        </span>
                        <span class="program-info_head-en font_fira-sans">
                            Cross-cultural communication
                        </span>
                    </h2>

                    <p class="program-info_txt">
                        急速にグローバル化が進んでおり、ビジネスの場面に限らず様々な文化的背景を持つ者同士の交流はもはや日常的な光景となりました。<br>
                        言語や文化が異なる相手を理解することで世界が広がり、新たなビジネスチャンスに巡り会うことは少なくありません。<br>
                        多様な価値観を尊重しながら言葉の垣根を越え、コミュニケーションの力で他者を理解しようとする「異文化コミュニケーション」はこれからの時代、さらに重要となるスキルと言えます。<br>
                        <br>
                        コミュニケーションの基本となる日本語と英語の力を鍛えつつ、アプローチする国の文化を同時に学び、スムーズなビジネス展開をサポートいたします。
                    </p>

                    <div class="program-info_tables">
                        <dl class="program-info_table">
                            <dt>
                                対象
                            </dt>
                            <dd>
                                海外へのビジネス展開を検討されている方
                            </dd>
                        </dl>
                        <dl class="program-info_table">
                            <dt>
                                費用
                            </dt>
                            <dd>
                                時間内容要相談
                            </dd>
                        </dl>
                    </div>

                    <a href="<?php echo home_url('/contact/'); ?>" class="program-btn">
                        <span class="program-btn_txt">
                            お申し込みはこちら
                        </span>
                        <div class="program-btn_arrow">
                            <svg width="20" height="14" viewBox="0 0 20 14" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12.7544 0.268056C12.4001 0.632613 12.4001 1.23778 12.7475 1.60962L16.9712 6.04992H0.896144C0.402917 6.04992 0 6.47281 0 6.99777C0 7.52273 0.402917 7.94562 0.896144 7.94562H16.9642L12.7405 12.3859C12.3932 12.7578 12.4001 13.3556 12.7475 13.7275C13.1018 14.092 13.6645 14.092 14.0188 13.7202L19.743 7.66856C19.8194 7.58106 19.8819 7.48628 19.9305 7.36962C19.9792 7.25296 20 7.12901 20 7.00506C20 6.75717 19.9097 6.52385 19.743 6.34157L14.0188 0.289933C13.6784 -0.0892101 13.1087 -0.0965004 12.7544 0.268056Z"
                                    fill="#023E78" class="program-btn_arrow-path" />
                            </svg>
                        </div>
                    </a>
                </div>
            </div>

            <div id="business-study-abroad-program" class="program">
                <div class="program-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/service/service-3.png" alt="">
                </div>
                <div class="program-info">
                    <div class="program-number font_fira-sans">03</div>
                    <h2 class="program-info_head">
                        <span class="program-info_head-ja">
                            ビジネス留学<br class="hidden-sp">プログラム
                        </span>
                        <span class="program-info_head-en font_fira-sans">
                            Business study abroad program
                        </span>
                    </h2>

                    <p class="program-info_txt">
                        将来的に海外で働きたい方に向けた講座をご用意しております。一般的には3ヶ月〜1年の期間で基本的な英会話スキルと、海外でのビジネスマナー習得を目指します。<br>
                        通常の語学留学では得られないビジネスの場で通用するコミュニケーションスキル習得に重点をおいておりますので、海外でビジネス展開する際に自信を持って活動することができるようになります。<br>
                        <br>
                        お申し込みいただく際に綿密なヒアリングを行い、おすすめの留学先を複数ピックアップいたします。海外ビジネス経験豊富な講師が、留学後のキャリアプラン作成までお手伝いいたします。
                    </p>

                    <div class="program-info_tables">
                        <dl class="program-info_table">
                            <dt>
                                対象
                            </dt>
                            <dd>
                                英語コミュニケーション能力を習得し、将来的に海外で働きたい方
                            </dd>
                        </dl>
                        <dl class="program-info_table">
                            <dt>
                                費用
                            </dt>
                            <dd>
                                時間内容要相談
                            </dd>
                        </dl>
                    </div>

                    <a href="<?php echo home_url('/contact/'); ?>" class="program-btn">
                        <span class="program-btn_txt">
                            お申し込みはこちら
                        </span>
                        <div class="program-btn_arrow">
                            <svg width="20" height="14" viewBox="0 0 20 14" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12.7544 0.268056C12.4001 0.632613 12.4001 1.23778 12.7475 1.60962L16.9712 6.04992H0.896144C0.402917 6.04992 0 6.47281 0 6.99777C0 7.52273 0.402917 7.94562 0.896144 7.94562H16.9642L12.7405 12.3859C12.3932 12.7578 12.4001 13.3556 12.7475 13.7275C13.1018 14.092 13.6645 14.092 14.0188 13.7202L19.743 7.66856C19.8194 7.58106 19.8819 7.48628 19.9305 7.36962C19.9792 7.25296 20 7.12901 20 7.00506C20 6.75717 19.9097 6.52385 19.743 6.34157L14.0188 0.289933C13.6784 -0.0892101 13.1087 -0.0965004 12.7544 0.268056Z"
                                    fill="#023E78" class="program-btn_arrow-path" />
                            </svg>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="service-flow" class="service-flow">
        <div class="service-flow_inner service-inner">
            <h2 class="service-sec-ttl service-flow_ttl">
                導入の流れ
            </h2>
            <ul class="flow-steps">
                <li class="flow-step">
                    <div class="flow-step_number">
                        <span class="flow-step_number-step font_fira-sans">STEP</span>
                        <span class="flow-step_number-num font_fira-sans">01</span>
                    </div>

                    <div class="flow-step_flow">
                        <h3>お問い合わせ</h3>
                        <p>
                            お問い合わせフォームより必要事項を誤入力の上、お申し込みください
                        </p>
                    </div>
                </li>
                <li class="flow-step">
                    <div class="flow-step_number">
                        <span class="flow-step_number-step font_fira-sans">STEP</span>
                        <span class="flow-step_number-num font_fira-sans">02</span>
                    </div>

                    <div class="flow-step_flow">
                        <h3>ご提案</h3>
                        <p>
                            ご依頼の背景をお伺いし、必要なスキルと習得期間から最適なプランをご提案いたします
                        </p>
                    </div>
                </li>
                <li class="flow-step">
                    <div class="flow-step_number">
                        <span class="flow-step_number-step font_fira-sans">STEP</span>
                        <span class="flow-step_number-num font_fira-sans">03</span>
                    </div>

                    <div class="flow-step_flow">
                        <h3>日程調整</h3>
                        <p>
                            研修日数と開始日を調整し、今後の流れ全体の段取りをご提案いたします
                        </p>
                    </div>
                </li>
                <li class="flow-step">
                    <div class="flow-step_number">
                        <span class="flow-step_number-step font_fira-sans">STEP</span>
                        <span class="flow-step_number-num font_fira-sans">04</span>
                    </div>

                    <div class="flow-step_flow">
                        <h3>研修開始</h3>
                        <p>
                            研修当日はお約束のお時間の30分前に講師が伺います。<br>
                            <span>※キャンセルのご連絡は2日前までにお願いいたします</span>
                        </p>
                    </div>
                </li>
            </ul>
        </div>
    </section>

    <!-- 参考：CodeJump　番外編「アコーディオンメニュー」 -->
    <section id="service-faq" class="service-faq">
        <div class="service-inner">
            <h2 class="service-sec-ttl service-faq_ttl">
                よくある質問
            </h2>

            <div class="qa-boxes">
                <?php for ($i = 1; $i <= 8; $i++): ?>
                    <?php
                    $question = get_field('question' . $i);
                    $answer   = get_field('answer' . $i);
                    ?>

                    <?php if ($question && $answer): ?>
                        <div class="qa-box">
                            <button type="button" class="qa-box_head js-accordion">
                                <span class="qa-box_q-head">
                                    <?php echo esc_html($question); ?>
                                </span>
                            </button>

                            <div class="qa-box_body">
                                <div class="qa-box_a-text">
                                    <?php echo wp_kses_post($answer); ?>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>

                <?php endfor; ?>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>