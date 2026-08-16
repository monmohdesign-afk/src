        <aside id="secondary">
            <div class="widget-wrap">
                <!-- widget -->
                <div class="widget-card widget-intro">
                    <div class="widget-ttl widget-intro_ttl">
                        <p>クリニックの紹介</p>
                    </div>

                    <div class="widget-intro_img">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/sidebar-intro.png" alt="クリニックの紹介">
                    </div>

                    <div class="widget-intro_info">
                        <p class="widget-info_ttl">
                            みなみ歯科クリニック
                        </p>

                        <div class="widget-info_txt">
                            お子様からご高齢の方まで、快適な空間で治療が受けられる場を作り、地域医療に貢献しきたいと考えております。
                        </div>

                        <div class="widget-info_link">
                            <a href="<?php echo home_url('/about/'); ?>">当院について</a>
                        </div>
                    </div>
                </div><!-- /widget -->

                <!-- widget -->
                <div class="widget-card widget-article">
                    <div class="widget-ttl widget-article_ttl">
                        <p>新着記事</p>
                    </div>

                    <div class="widget-archives widget-archive_cards">
                        <!-- entry-item -->
                        <?php
                        // 現在の投稿タイプを取得
                        $current_post_type = get_post_type();

                        // 投稿タイプごとに切り替え
                        $recent_query = new WP_Query(array(
                            'post_type'      => $current_post_type, // ← ここがポイント
                            'posts_per_page' => 4,
                            'orderby'        => 'date',
                            'order'          => 'DESC',
                        ));
                        ?>

                        <?php if ($recent_query->have_posts()) : ?>
                            <?php while ($recent_query->have_posts()) : $recent_query->the_post(); ?>

                                <a href="<?php the_permalink(); ?>" class="widget-archive">

                                    <div class="widget-archive_img">
                                        <?php if (has_post_thumbnail()): ?>
                                            <?php the_post_thumbnail(); ?>
                                        <?php else: ?>
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/ogp-img.png" alt="">
                                        <?php endif; ?>
                                    </div>

                                    <div class="widget-archive_body">
                                        <p class="widget-archive_tag">
                                            <?php my_the_post_category(false); ?>
                                        </p>

                                        <p class="widget-archive_ttl"><?php the_title(); ?></p>

                                        <time class="widget-archive_ymd" datetime="<?php the_time('c'); ?>">
                                            <?php the_time('Y.n.j'); ?>
                                        </time>
                                    </div>

                                </a>

                            <?php endwhile; ?>
                        <?php endif; ?>
                        <?php wp_reset_postdata(); ?>

                        <?php $recent_query = new WP_Query(
                            array(
                                'post_type' => 'post',
                                'posts_per_page' => 4,
                                'orderby' => 'date',
                                'order' => 'DESC',
                            )
                        );
                        ?>
                        <?php if ($recent_query->have_posts()) : ?>
                            <?php while ($recent_query->have_posts()) : ?>
                                <?php $recent_query->the_post(); ?>
                                <!-- wpost-item -->
                                <a href="#" class="widget-archive">
                                    <!-- entry-item-img -->
                                    <div class="widget-archive_img">
                                        <?php if (has_post_thumbnail()): ?>
                                            <?php the_post_thumbnail(); ?>
                                        <?php else: ?>
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/ogp-img.png" alt="">
                                        <?php endif; ?>
                                    </div><!-- /entry-item-img -->

                                    <!-- entry-item-body -->
                                    <div class="widget-archive_body">
                                        <p class="widget-archive_tag"><?php my_the_post_category(false) ?></p>
                                        <p class="widget-archive_ttl">
                                            <?php the_title(); ?>
                                        </p>
                                        <time class="widget-archive_ymd" datetime="<?php the_time('c'); ?>">
                                            <?php the_time('Y.n.j'); ?>
                                        </time>
                                    </div><!-- /entry-item-body -->
                                </a>
                                <!-- /wpost-item -->
                            <?php endwhile; ?>
                        <?php endif; ?>
                        <?php wp_reset_postdata(); ?>
                        <!-- entry-item -->
                    </div>
                </div>

                <!-- widget -->
                <div class="widget-card widget_category">
                    <p class="widget-ttl widget-category_ttl">
                        カテゴリー
                    </p>
                    <ul class="widget-category_lists">
                        <?php
                        $categories = get_categories();
                        foreach ($categories as $category) :
                        ?>
                            <li>
                                <a href="<?php echo get_category_link($category->term_id); ?>">
                                    <?php echo esc_html($category->name); ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div><!-- /widget -->
            </div>
        </aside>