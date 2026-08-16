<?php get_header(); ?>

<div class="page-header">
    <div class="page-header_inner staff-header_inner">
        <div class="page-header_ttl-area">
            <p class="page-header_ttl-ja">
                スタッフ紹介
            </p>
            <p class="page-header_ttl-en">
                STAFF
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
    <section id="head" class="head">
        <div class="inner">
            <div class="sec-ttl">
                <h2>院長のあいさつ</h2>
            </div>

            <div class="head-wrap">
                <div class="head-info">
                    <p class="head-info_main-msg">
                        気軽に相談できる<br>街の歯医者さんでありたい。
                    </p>

                    <div class="head-info_msg-txt">
                        <p>
                            当院は治療はもちろん、予防歯科にも力を入れておりますので、お口に関する相談だけでもお越しいただきたいと考えております。
                        </p>
                        <p>
                            「患部を直すこと」より「未然に防ぐこと」が最も良い歯科医療と言えますので、些細なことでも気軽に話せる街の歯医者さんとして、明るい街づくりに貢献していきたいと考えております。
                        </p>
                    </div>

                    <p class="head-info_nm">
                        みなみ歯科クリニック<br>
                        院長　南 俊雄
                    </p>

                    <div class="head-info_img-sp hidden-sp">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/head.png" alt="">
                    </div>

                    <div class="head-info_his-wrap">
                        <p class="common_group-ttl">
                            経歴
                        </p>

                        <table class="head-info_his-tbl">
                            <tbody>
                                <tr>
                                    <th>2004年</th>
                                    <td>東京医科歯科大学歯学部 卒業</td>
                                </tr>
                                <tr>
                                    <th>2008年</th>
                                    <td>
                                        東京歯科大学歯学研究科大学院修了<br>博士(歯学)取得
                                    </td>
                                </tr>
                                <tr>
                                    <th>2012年</th>
                                    <td>みなみ歯科クリニック 開院</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="head-info_lic-wrap">
                        <p class="common_group-ttl">
                            資格
                        </p>

                        <div class="head-info_lic-tbl">
                            <p>歯科医師臨床研修指導歯科医</p>
                            <p>博士(歯学)</p>
                            <p>衛生検査技師</p>
                        </div>
                    </div>
                </div>

                <div class="head-info_img-pc hidden-pc">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/head.png" alt="院長の画像">
                </div>
            </div>
        </div>
    </section>

    <div class="staff-slider">
        <div id="js-staff-swiper" class="swiper staff-swiper">
            <div class="swiper-wrapper staff-swiper_wrapper" id="js-staff-swiper-wrap">
                <div class="swiper-slide staff-swiper_slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/staff-gallery1.png" alt="">
                </div>
                <div class="swiper-slide staff-swiper_slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/staff-gallery2.png" alt="">
                </div>
                <div class="swiper-slide staff-swiper_slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/staff-gallery3.png" alt="">
                </div>
                <div class="swiper-slide staff-swiper_slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/staff-gallery4.png" alt="">
                </div>
                <div class="swiper-slide staff-swiper_slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/staff-gallery5.png" alt="">
                </div>
            </div>
        </div>
    </div>

    <section id="staff-gallery" class="staff-gallery">
        <div class="inner">
            <div class="sec-ttl">
                <h2>スタッフ紹介</h2>
            </div>

            <div class="gallery-wrap">
                <?php
                $terms = get_terms([
                    'taxonomy'   => 'job',
                    'hide_empty' => false,
                ]);

                if (!empty($terms) && !is_wp_error($terms)) :
                    foreach ($terms as $term) :
                ?>
                        <div class="<?php echo esc_attr($term->slug); ?> gallery-group">
                            <p class="common_group-ttl">
                                <?php echo esc_html($term->name); ?>
                            </p>

                            <ul class="gallery-cards">
                                <?php
                                // 投稿取得
                                $posts = get_posts([
                                    'post_type' => 'staffs',
                                    'tax_query' => [
                                        [
                                            'taxonomy' => 'job',
                                            'field'    => 'slug',
                                            'terms'    => $term->slug,
                                        ]
                                    ],
                                    'posts_per_page' => -1,
                                ]);

                                $index = 1;

                                if ($posts) :
                                    foreach ($posts as $post) :
                                        setup_postdata($post);

                                        // ACFフィールドオブジェクト（ラベル取得用）
                                        $from_obj   = get_field_object('from');
                                        $hobby_obj   = get_field_object('hobby');
                                        $food_obj    = get_field_object('food');
                                ?>

                                        <li>
                                            <div class="gallery-card_img">
                                                <?php if (has_post_thumbnail()) : ?>
                                                    <img src="<?php echo esc_url(get_the_post_thumbnail_url()); ?>" alt="">
                                                <?php endif; ?>
                                            </div>

                                            <div class="gallery-card_nm-wrap">
                                                <p class="gallery-card_cml">
                                                    <?php echo esc_html($term->name); ?>
                                                </p>
                                                <p class="gallery-card_nm">
                                                    <?php the_title(); ?>
                                                </p>
                                            </div>

                                            <table class="gallery-card_tbl">
                                                <tbody>
                                                    <?php if (get_field('from')) : ?>
                                                        <tr>
                                                            <th>
                                                                <?php echo esc_html($from_obj['label']); ?>
                                                            </th>
                                                            <td>
                                                                <?php the_field('from'); ?>
                                                            </td>
                                                        </tr>
                                                    <?php endif; ?>

                                                    <?php if (get_field('hobby')) : ?>
                                                        <tr>
                                                            <th>
                                                                <?php echo esc_html($hobby_obj['label']); ?>
                                                            </th>
                                                            <td>
                                                                <?php the_field('hobby'); ?>
                                                            </td>
                                                        </tr>
                                                    <?php endif; ?>

                                                    <?php if (get_field('food')) : ?>
                                                        <tr>
                                                            <th>
                                                                <?php echo esc_html($food_obj['label']); ?>
                                                            </th>
                                                            <td>
                                                                <?php the_field('food'); ?>
                                                            </td>
                                                        </tr>
                                                    <?php endif; ?>
                                                </tbody>
                                            </table>
                                        </li>
                                <?php
                                        $index++;
                                    endforeach;
                                    wp_reset_postdata();
                                endif;
                                ?>
                            </ul>
                        </div>
                <?php
                    endforeach;
                endif;
                ?>

            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>