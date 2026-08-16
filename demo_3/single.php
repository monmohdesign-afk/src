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

<?php if (function_exists('bcn_display')): ?>
    <!-- breadcrumb -->
    <div class="breadcrumb">
        <?php bcn_display(); ?>
    </div><!-- /breadcrumb -->
<?php endif; ?>

<div class="blog-content">
    <div class="blog-inner inner">
        <main id="primary">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : ?>
                    <?php the_post(); ?>
                    <div class="single-head">
                        <p class="single-head_ttl">
                            <?php the_title(); ?>
                        </p>

                        <div class="single-head_sub">
                            <time datetime="<?php the_time('c'); ?>" class="single-head_ymd">
                                <?php the_time('Y.n.j'); ?>
                            </time>
                            <p class="single-head_tag">
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
                        </div>
                    </div>

                    <div class="single-contents">
                        <?php the_content(); ?>
                        <?php
                        wp_link_pages(
                            array(
                                'before' => '<nav class="entry-links">',
                                'after' => '</nav>',
                                'link_before' => '',
                                'link_after' => '',
                                'next_or_number' => 'number',
                                'separator' => '',
                            )
                        );
                        ?>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>

            <!-- pagination -->
            <div class="single-pagination">

                <?php
                $prev = get_previous_post();
                if ($prev):
                ?>
                    <a class="single-prev_arrow" href="<?php echo get_permalink($prev); ?>">
                        <p>前の記事へ</p>
                    </a>
                <?php endif; ?>

                <a class="single-archive" href="<?php echo home_url('/category/other/'); ?>">
                    <p>記事一覧</p>
                </a>

                <?php
                $next = get_next_post();
                if ($next):
                ?>
                    <a class="single-next_arrow" href="<?php echo get_permalink($next); ?>">
                        <p>次の記事へ</p>
                    </a>
                <?php endif; ?>

            </div>
            <!-- /pagination -->
        </main>

        <!-- sidebar -->
        <?php get_sidebar(); ?>
        <!-- /sidebar -->
    </div>
</div>

<?php get_footer(); ?>