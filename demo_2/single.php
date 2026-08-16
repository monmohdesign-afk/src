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

<div class="page-content">
    <div class="page-inner">
        <!-- TF-30 category.html -->

        <main id="primary">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : ?>
                    <?php the_post(); ?>
                    <div class="page-item-meta">
                        <div class="page-item-tag">
                            <span>
                                <?php
                                $cat = get_the_category();
                                if (!empty($cat)) {
                                    echo esc_html($cat[0]->name);
                                }
                                ?>
                            </span>
                        </div>
                        <!-- /entry-item-tag -->
                        <time class="page-item-published" datetime="<?php the_time('c'); ?>">
                            <?php the_time('Y/n/j'); ?>
                        </time><!-- /entry-item-published -->
                    </div><!-- /entry-item-meta -->
                    <h1 class="page-ttl"><?php the_title(); ?></h1><!-- /archive-title -->

                    <div class="page-item_img">
                        <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail(); ?>
                        <?php else : ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/no-img.png" alt="">
                        <?php endif; ?>
                        <!-- <img src="./img/news/post-1.png" alt=""> -->
                    </div>

                    <!-- entry-body -->
                    <div class="entry-body">
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
                    <!-- /entry-body -->
                <?php endwhile; ?>
            <?php endif; ?>


            <!-- page-pagination -->
            <?php
            $prev = get_previous_post();
            $next = get_next_post();
            $total_posts = wp_count_posts()->publish;

            if ($total_posts <= 1) {
                return;
            }
            ?>

            <div class="page-pagination">

                <?php if (!$prev && $next) : ?>
                    <div class="next-btn">
                        <?php next_post_link('%link', '次の記事へ >'); ?>
                    </div>

                <?php elseif ($prev && !$next) : ?>
                    <div class="prev-btn">
                        <?php previous_post_link('%link', '< 前の記事へ'); ?>
                    </div>

                <?php elseif ($prev && $next) : ?>
                    <div class="prev-btn">
                        <?php previous_post_link('%link', '< 前の記事へ'); ?>
                    </div>

                    <div class="next-btn">
                        <?php next_post_link('%link', '次の記事へ >'); ?>
                    </div>

                <?php endif; ?>

            </div>
        </main>
        <!-- TF-30 category.html -->

        <!-- TF-30 category.html -->
        <?php get_sidebar(); ?>
        <!-- TF-30 category.html -->
    </div>
</div>

<?php get_footer(); ?>