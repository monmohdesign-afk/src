<?php get_header(); ?>

<main>
    <div class="page-header">
        <div class="page-header_img">
            <picture>
                <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/img/case/pc/mv.png">
                <img src="<?php echo get_template_directory_uri(); ?>/img/case/sp/mv.png" alt="">
            </picture>
        </div>
        <div class="page-header_ttl-area">
            <div class="page-header_area_bg"></div>
            <h1 class="page-header_ttl">
                <p class="page-header_ttl-en">
                    <span class="font_fira-sans">
                        CASE STUDY
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

    <div class="case-info">
        <?php
        $terms = get_terms([
            'taxonomy'   => 'business', // ← CPT UI で作ったタクソノミーのスラッグ
            'hide_empty' => false,
        ]);

        if (!empty($terms) && !is_wp_error($terms)) :
            foreach ($terms as $term) :
        ?>
                <a class="case-info_link" href="#<?php echo esc_attr($term->slug); ?>">
                    <?php echo esc_html($term->name); ?>
                </a>
        <?php
            endforeach;
        endif;
        ?>
    </div>

    <section id="case-lists" class="case-lists">
        <div class="case-inner">
            <?php
            $terms = get_terms([
                'taxonomy'   => 'business', // ← タクソノミーのスラッグ
                'hide_empty' => false,
            ]);

            if (!empty($terms) && !is_wp_error($terms)) :
                foreach ($terms as $term) :
            ?>

                    <div id="<?php echo esc_attr($term->slug); ?>" class="case-list">

                        <h2 class="case-list_ttl">
                            <p class="case-list_ttl-ja"><?php echo esc_html($term->name); ?></p>
                            <p class="case-list_ttl-en font_fira-sans">
                                <?php echo esc_html($term->description); ?>
                            </p>
                        </h2>

                        <div class="case-list_cards">

                            <?php
                            $posts = get_posts([
                                'post_type' => 'case',
                                'tax_query' => [
                                    [
                                        'taxonomy' => 'business',
                                        'field'    => 'slug',
                                        'terms'    => $term->slug,
                                    ]
                                ],
                                'posts_per_page' => -1,
                            ]);

                            if ($posts) :
                                foreach ($posts as $post) :
                                    setup_postdata($post);

                                    // ACFフィールドオブジェクト（ラベル取得用）
                                    $business_obj = get_field_object('business_field');
                                    $before_obj   = get_field_object('before');
                                    $reason_obj   = get_field_object('reason');
                                    $after_obj    = get_field_object('after');
                            ?>

                                    <div id="<?php the_title(); ?>" class="case-list_card">

                                        <div class="case-list_card-head">
                                            <div class="case-list_card-head-txt">
                                                <p class="case-list_card-head-business">
                                                    <?php the_field('business_field'); ?>
                                                </p>
                                                <h3 class="case-list_card-head-name">
                                                    <?php the_title(); ?><span>様</span>
                                                </h3>
                                            </div>

                                            <div class="case-list_card-head-img">
                                                <?php if (has_post_thumbnail()) : ?>
                                                    <img src="<?php echo esc_url(get_the_post_thumbnail_url()); ?>" alt="">
                                                <?php endif; ?>
                                            </div>
                                        </div>

                                        <div class="case-list_card-inner">

                                            <h4 class="case-list_course">
                                                <p class="case-list_course-label">
                                                    研修コース：
                                                </p>
                                                <p class="case-list_course-name">
                                                    <?php echo esc_html($term->name); ?>
                                                </p>
                                            </h4>

                                            <div class="case-list_course-contents">

                                                <div class="case-list_course-content">
                                                    <p class="case-list_course-content-ttl">
                                                        <?php echo esc_html($before_obj['label']); ?>
                                                    </p>
                                                    <p class="case-list_course-content-txt">
                                                        <?php the_field('before'); ?>
                                                    </p>
                                                </div>

                                                <div class="case-list_course-content">
                                                    <p class="case-list_course-content-ttl">
                                                        <?php echo esc_html($reason_obj['label']); ?>
                                                    </p>
                                                    <p class="case-list_course-content-txt">
                                                        <?php the_field('reason'); ?>
                                                    </p>
                                                </div>

                                                <div class="case-list_course-content">
                                                    <p class="case-list_course-content-ttl">
                                                        <?php echo esc_html($after_obj['label']); ?>
                                                    </p>
                                                    <p class="case-list_course-content-txt">
                                                        <?php the_field('after'); ?>
                                                    </p>
                                                </div>

                                            </div>
                                        </div>

                                    </div>

                            <?php
                                endforeach;
                                wp_reset_postdata();
                            endif;
                            ?>

                        </div>

                        <div class="case-btn">
                            <a href="<?php echo home_url('/service/'); ?>#<?php echo esc_attr($term->slug); ?>" class="case-btn">
                                <span class="case-btn_txt"><?php echo esc_html($term->name); ?>の詳細</span>
                                <div class="case-btn_arrow">
                                    <svg width="20" height="14" viewBox="0 0 20 14" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12.7544 0.268056C12.4001 0.632613 12.4001 1.23778 12.7475 1.60962L16.9712 6.04992H0.896144C0.402917 6.04992 0 6.47281 0 6.99777C0 7.52273 0.402917 7.94562 0.896144 7.94562H16.9642L12.7405 12.3859C12.3932 12.7578 12.4001 13.3556 12.7475 13.7275C13.1018 14.092 13.6645 14.092 14.0188 13.7202L19.743 7.66856C19.8194 7.58106 19.8819 7.48628 19.9305 7.36962C19.9792 7.25296 20 7.12901 20 7.00506C20 6.75717 19.9097 6.52385 19.743 6.34157L14.0188 0.289933C13.6784 -0.0892101 13.1087 -0.0965004 12.7544 0.268056Z"
                                            fill="#023E78" class="case-btn_arrow-path" />
                                    </svg>

                                </div>
                            </a>
                        </div>

                    </div>

            <?php
                endforeach;
            endif;
            ?>


        </div>
    </section>
</main>

<?php get_footer(); ?>