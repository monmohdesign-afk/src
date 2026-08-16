<?php get_header(); ?>

<div class="page-header">
    <div class="page-header_img">
        <picture>
            <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/img/news/pc/mv.png">
            <img src="<?php echo get_template_directory_uri(); ?>/img/news/sp/mv.png" alt="">
        </picture>
    </div>
    <div class="page-header_ttl-area">
        <div class="page-header_area_bg"></div>
        <h1 class="page-header_ttl">
            <p class="page-header_ttl-en">
                <span class="font_fira-sans">
                    NEWS
                </span>
            </p>
            <p class="page-header_ttl-ja">
                <span>
                    お知らせ
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

<div class="news-content">
    <div class="news-inner">
        <!-- TF-30 category.html -->
        <main id="primary">
            <h1 class="archive-title m_category">お知らせ</h1><!-- /archive-title -->

            <!-- entries -->
            <div class="entries m_horizontal">
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : ?>
                        <?php the_post(); ?>
                        <!-- entry-item -->
                        <a href="<?php the_permalink(); ?>" class="entry-item">
                            <!-- entry-item-img -->
                            <div class="entry-item-img">
                                <?php if (has_post_thumbnail()): ?>
                                    <?php the_post_thumbnail(); ?>
                                <?php else: ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/no-img.png" alt="">
                                <?php endif; ?>
                            </div>
                            <!-- /entry-item-img -->

                            <!-- entry-item-body -->
                            <div class="entry-item-body">
                                <div class="entry-item-meta">
                                    <div class="entry-item-tag">
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
                                    </div><!-- /entry-item-tag -->
                                    <time class="wpost-item-published" datetime="<?php echo get_the_date('Y-m-d'); ?>">
                                        <?php echo get_the_date('Y.m.d'); ?>
                                    </time>
                                </div><!-- /entry-item-meta -->
                                <h2 class="entry-item-title hidden-pc">
                                    <?php echo get_flexible_title(89); ?>
                                </h2>
                                <h2 class="entry-item-title hidden-sp">
                                    <?php echo get_flexible_title(41); ?>
                                </h2>
                                <!-- /entry-item-title -->
                            </div><!-- /entry-item-body -->
                        </a><!-- /entry-item -->
                    <?php endwhile; ?>
                <?php endif; ?>
            </div><!-- /entries -->


            <?php if (paginate_links()) : //ページが1ページ以上あれば以下を表示 
            ?>
                <!-- pagination -->
                <?php
                $pagination = paginate_links(array(
                    'end_size'  => 1,
                    'mid_size'  => 1,
                    'prev_next' => true,
                    'prev_text' => '<div class="page-prev_arrow"></div>',
                    'next_text' => '<div class="page-next_arrow"></div>',
                    'type'      => 'array', // ← ここが重要（配列で受け取る）
                ));

                if ($pagination) :
                ?>
                    <div class="pagination">
                        <?php foreach ($pagination as $page) : ?>
                            <?php
                            // current（現在ページ）
                            if (strpos($page, 'current') !== false) :
                                echo str_replace(
                                    'page-numbers',
                                    'page-box page-numbers',
                                    $page
                                );

                            // next / prev（矢印）
                            elseif (strpos($page, 'next') !== false) :
                                echo str_replace(
                                    'page-numbers',
                                    'page-box arrow-next',
                                    $page
                                );

                            elseif (strpos($page, 'prev') !== false) :
                                echo str_replace(
                                    'page-numbers',
                                    'page-box arrow-prev',
                                    $page
                                );

                            // 通常のページ番号
                            else :
                                echo str_replace(
                                    'page-numbers',
                                    'page-box page-numbers',
                                    $page
                                );
                            endif;
                            ?>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>

                <!-- /pagination -->
            <?php endif; ?>

        </main>
        <!-- TF-30 category.html -->

        <!-- TF-30 category.html -->
        <?php get_sidebar(); ?>
        <!-- TF-30 category.html -->
    </div>
</div>

<?php get_footer(); ?>