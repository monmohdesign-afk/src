<?php get_header(); ?>

<div class="page-header">
    <div class="page-header_inner blog-header_inner">
        <div class="page-header_ttl-area">
            <p class="page-header_ttl-ja">
                スタッフブログ
            </p>
            <p class="page-header_ttl-en">
                STAFF BLOG
            </p>
        </div>
    </div>
</div>

<!-- breadcrumb -->
<?php if (function_exists('bcn_display')): ?>
    <!-- breadcrumb -->
    <div class="breadcrumb">
        <?php bcn_display(); ?>
    </div><!-- /breadcrumb -->
<?php endif; ?>

<div class="blog-content">
    <div class="blog-inner inner">
        <main id="primary">
            <!-- entries -->
            <div class="entries m_horizontal">
                <!-- entry-item -->
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : ?>
                        <?php the_post(); ?>
                        <a href="<?php the_permalink(); ?>" class="entry-item">
                            <!-- entry-item-img -->
                            <div class="entry-item-img">
                                <?php if (has_post_thumbnail()): ?>
                                    <?php the_post_thumbnail(); ?>
                                <?php else: ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/ogp-img.png" alt="">
                                <?php endif; ?>
                            </div><!-- /entry-item-img -->

                            <!-- entry-item-body -->
                            <div class="entry-item-body">
                                <p class="entry-item-tag"><?php echo get_the_terms(get_the_ID(), 'blog_category')[0]->name; ?></p>
                                <p class="entry-item-title hidden-pc">
                                    <?php echo get_flexible_title(40); ?>
                                </p>
                                <p class="entry-item-title hidden-sp">
                                    <?php echo get_flexible_title(26); ?>
                                </p>
                                <time class="blog-card_ymd" datetime="<?php the_time('c'); ?>">
                                    <?php the_time('Y.n.j'); ?>
                                </time>
                            </div><!-- /entry-item-body -->
                        </a><!-- /entry-item -->
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>

            <!-- pagination -->
            <?php if (paginate_links()) : //ページが1ページ以上あれば以下を表示 
            ?>
                <?php
                $pages = paginate_links([
                    'type'      => 'array',
                    'mid_size'  => 1,
                    'prev_text' => '前へ',
                    'next_text' => '次へ'
                ]);

                if ($pages) : ?>
                    <div class="pagination">
                        <?php foreach ($pages as $p) :

                            // URL 抽出
                            preg_match('/href="([^"]+)"/', $p, $m);
                            $url = $m[1] ?? '#';

                            // 現在ページ
                            if (strpos($p, 'current') !== false) :
                                echo '<span class="page-box page-numbers current">' . strip_tags($p) . '</span>';

                            // 前へ
                            elseif (strpos($p, 'prev') !== false) :
                                echo '<a class="page-prev_arrow" href="' . esc_url($url) . '"><p>前へ</p></a>';

                            // 次へ
                            elseif (strpos($p, 'next') !== false) :
                                echo '<a class="page-next_arrow" href="' . esc_url($url) . '"><p>次へ</p></a>';

                            // 数字リンク
                            else :
                                echo '<a class="page-box page-numbers" href="' . esc_url($url) . '">' . strip_tags($p) . '</a>';

                            endif;

                        endforeach; ?>
                    </div>
                <?php endif; ?>

            <?php endif; ?>
            <!-- /pagination -->
        </main>

        <!-- sidebar -->
        <?php get_sidebar(); ?>
        <!-- /sidebar -->
    </div>
</div>

<?php get_footer(); ?>