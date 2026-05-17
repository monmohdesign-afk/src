        <!-- TF-30 category.html -->
        <aside id="secondary">
            <!-- widget -->
            <div class="widget widget_recent">
                <div class="widget-title">新着情報</div>

                <div class="wpost-items">
                    <?php $recent_query = new WP_Query(
                        array(
                            'post_type' => 'post',
                            'posts_per_page' => 4,
                            'orderby' => 'date',
                            'order' => 'DESC',
                            'category_name'  => 'new',
                        )
                    );
                    ?>
                    <?php if ($recent_query->have_posts()) : ?>
                        <?php while ($recent_query->have_posts()) : ?>
                            <?php $recent_query->the_post(); ?>
                            <!-- wpost-item -->
                            <a class="wpost-item" href="<?php the_permalink(); ?>">
                                <div class="wpost-item-img">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail(); ?>
                                    <?php else : ?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/no-img.png" alt="">
                                    <?php endif; ?>
                                </div>

                                <div class="wpost-item-body">

                                    <div class="wpost-item-meta">
                                        <div class="wpost-item-tag">
                                            <span>
                                                <?php
                                                $category = get_the_category();
                                                if (!empty($category)) {
                                                    echo esc_html($category[0]->name);
                                                } else {
                                                    echo '未分類';
                                                }
                                                ?>
                                            </span>
                                        </div>

                                        <time class="wpost-item-published" datetime="<?php echo get_the_date('Y-m-d'); ?>">
                                            <?php echo get_the_date('Y.m.d'); ?>
                                        </time>
                                    </div><!-- /wpost-item-meta -->

                                    <div class="wpost-item-title hidden-pc">
                                        <?php echo get_flexible_title(37); ?>
                                    </div>
                                    <div class="wpost-item-title hidden-sp">
                                        <?php echo get_flexible_title(41); ?>
                                    </div>

                                </div><!-- /wpost-item-body -->
                            </a><!-- /wpost-item -->
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <?php wp_reset_postdata(); ?>
                </div><!-- /wpost-items -->
            </div><!-- /widget -->

            <div class="widget widget_archive">
                <div class="widget-title">カテゴリ</div>
                <ul class="widget_archive_lists">
                    <ul class="widget_archive_lists">
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

                        <!-- <li><a href="#">新着記事</a></li>
                        <li><a href="#">受講の声</a></li>
                        <li><a href="#">セミナー</a></li>
                        <li><a href="#">研修プログラム</a></li> -->
                    </ul>
            </div>
            <!-- /widget -->
        </aside>
        <!-- TF-30 category.html -->