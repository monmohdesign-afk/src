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
                                            <?php
                                            $post_type = get_post_type();

                                            if ($post_type === 'post') {
                                                // 通常投稿 → category を表示
                                                $cat = get_the_category();
                                                if (!empty($cat)) {
                                                    echo esc_html($cat[0]->name);
                                                }
                                            } elseif ($post_type === 'blog') {
                                                // カスタム投稿タイプ blog → カスタムタクソノミー blog_category を表示
                                                $terms = get_the_terms(get_the_ID(), 'blog_category');
                                                if (!empty($terms) && !is_wp_error($terms)) {
                                                    echo esc_html($terms[0]->name);
                                                }
                                            } else {
                                                // その他の投稿タイプ
                                                echo '未分類';
                                            }
                                            ?>
                                        </p>

                                        <p class="widget-archive_ttl hidden-pc">
                                            <?php echo get_flexible_title(23); ?>
                                        </p>
                                        <p class="widget-archive_ttl hidden-sp">
                                            <?php echo get_flexible_title(26); ?>
                                        </p>

                                        <time class="widget-archive_ymd" datetime="<?php the_time('c'); ?>">
                                            <?php the_time('Y.n.j'); ?>
                                        </time>
                                    </div>

                                </a>

                            <?php endwhile; ?>
                        <?php endif; ?>
                        <?php wp_reset_postdata(); ?>
                        <!-- entry-item -->
                    </div>
                </div>

                <!-- widget -->
                <div class="widget-card widget_category">
                    <div class="widget-ttl widget-category_ttl">
                        <p>カテゴリー</p>
                    </div>

                    <ul class="widget-category_lists">
                        <?php
                        $post_type = get_post_type();

                        // 投稿（post）の場合 → category を取得
                        if ($post_type === 'post') {
                            $terms = get_categories();

                            // カスタム投稿（例：blog）の場合 → blog_category を取得
                        } elseif ($post_type === 'blog') {
                            $terms = get_terms(array(
                                'taxonomy'   => 'blog_category', // ← あなたのタクソノミー名に変更
                                'hide_empty' => false,
                            ));

                            // その他の投稿タイプ
                        } else {
                            $terms = array();
                        }

                        if (!empty($terms) && !is_wp_error($terms)) :
                            foreach ($terms as $term) :
                        ?>
                                <li>
                                    <a href="<?php echo get_term_link($term); ?>">
                                        <?php echo esc_html($term->name); ?>
                                    </a>
                                </li>
                        <?php
                            endforeach;
                        endif;
                        ?>
                    </ul>
                </div><!-- /widget -->
            </div>
        </aside>