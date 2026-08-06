<?php get_header(); ?>

<div class="page-header">
    <div class="page-header_inner guide-header_inner">
        <div class="page-header_ttl-area">
            <p class="page-header_ttl-ja">
                診療案内
            </p>
            <p class="page-header_ttl-en">
                MEDICAL
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
    <section class="tags">
        <div class="inner">

            <?php
            $terms = get_terms([
                'taxonomy'   => 'medical_type',
                'hide_empty' => false,
            ]);

            if (!empty($terms) && !is_wp_error($terms)) :
                foreach ($terms as $term) :
            ?>

                    <div class="tags-wrap">

                        <div class="tags-group">
                            <p class="tags-group_ttl"><?php echo esc_html($term->name); ?></p>

                            <?php if ($term->slug === 'general') : ?>
                                <p class="tags-group_tag general-tag">保険対象</p>
                            <?php else : ?>
                                <p class="tags-group_tag special-tag">実費</p>
                            <?php endif; ?>
                        </div>

                        <ul class="tags-lists">

                            <?php
                            // 投稿取得
                            $posts = get_posts([
                                'post_type' => 'plan',
                                'tax_query' => [
                                    [
                                        'taxonomy' => 'medical_type',
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

                                    // general01 / special01 のようなIDを生成
                                    $anchor_id = $term->slug . sprintf('%02d', $index);
                            ?>

                                    <li>
                                        <a href="#<?php echo esc_attr($anchor_id); ?>">
                                            <?php echo esc_html(get_the_title()); ?>
                                        </a>
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
    </section>

    <?php
    $terms = get_terms([
        'taxonomy'   => 'medical_type',
        'hide_empty' => false,
    ]);

    if (!empty($terms) && !is_wp_error($terms)) :
        foreach ($terms as $term) :
    ?>

            <section id="<?php echo esc_attr($term->slug); ?>-medical" class="medical common-sec02">

                <div class="medical_bg-top common-sec02_bg-top"></div>

                <div class="medical-wrap common-sec02_wrap">
                    <div class="inner">
                        <div class="common-sec02_contents">

                            <div class="sec-ttl">
                                <h2><?php echo esc_html($term->name); ?></h2>
                            </div>

                            <div class="medical-cards">
                                <?php
                                $posts = get_posts([
                                    'post_type' => 'plan',
                                    'tax_query' => [
                                        [
                                            'taxonomy' => 'medical_type',
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
                                ?>

                                        <div id="<?php echo esc_attr($term->slug . sprintf('%02d', $index)); ?>" class="medical-card <?php echo esc_attr($term->slug); ?>-card">

                                            <div class="medical-card_head">
                                                <p class="medical-card_head-mainttl">
                                                    <?php the_title(); ?>
                                                </p>

                                                <p class="medical-card_head-subttl">
                                                    <?php the_field('worry'); ?>
                                                </p>
                                            </div>

                                            <div class="medical-card_bottom">

                                                <div class="medical-card_bottom-left">
                                                    <?php echo nl2br( get_field('summary') ); ?>
                                                </div>

                                                <div class="medical-card_bottom-right">
                                                    <?php if (has_post_thumbnail()) : ?>
                                                        <img src="<?php echo esc_url(get_the_post_thumbnail_url()); ?>" alt="">
                                                    <?php endif; ?>
                                                </div>

                                            </div>

                                        </div>

                                <?php
                                        $index++;
                                    endforeach;
                                    wp_reset_postdata();
                                endif;
                                ?>

                            </div>

                        </div>
                    </div>
                </div>

                <div class="guide_bg-bottom common-sec02_bg-bottom"></div>

            </section>

    <?php
        endforeach;
    endif;
    ?>
</main>

<?php get_footer(); ?>