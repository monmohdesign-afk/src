<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@500;700&display=swap" rel="stylesheet">

    <?php wp_head(); ?>
</head>

<body>
    <div class="wrapper">
        <header id="header js-header" class="header">
            <div class="header-bg">
                <div class="header-inner">

                    <!-- header-logo -->
                    <h1 class="header-logo">
                        <a href="<?php echo home_url('/'); ?>">
                            <img class="logo-blue" src="<?php echo get_template_directory_uri(); ?>/img/site-logo-blue.png" alt="">
                            <img class="logo-white" src="<?php echo get_template_directory_uri(); ?>/img/site-logo-white.png" alt="">
                        </a>
                    </h1>
                    <!-- header-logo -->

                    <!-- header-nav -->
                    <nav class="header-nav">
                        <ul class="header-nav_links">
                            <?php
                            wp_nav_menu([
                                'theme_location' => 'header-nav',
                                'container'      => false,
                                'items_wrap'     => '%3$s',
                                'walker'         => new Custom_Nav_Walker(),
                                'link_class'     => 'header-nav_link',
                                'is_pc_menu'     => true, // ← PC メニューだけ true
                            ]);
                            ?>
                        </ul>

                        <div class="header-nav_tel">
                            <p>〒166-0001 東京都杉並区阿佐谷北7-3-1</p>
                            <a href="tel:0312345678">03-1234-5678</a>
                        </div>
                    </nav>

                    <!-- hamburger -->
                    <div class="hamburger">
                        <button type="button" id="js-drawer-icon" class="drawer-icon">
                            <span class="drawer-icon_bar"></span>
                            <span class="drawer-icon_bar"></span>
                            <span class="drawer-icon_bar"></span>
                        </button>
                    </div>
                    <!-- hamburger -->
                </div>
            </div>
        </header>

        <!-- Drawer Content -->
        <div id="js-drawer-content" class="drawer-content">
            <nav class="drawer-content_menu" aria-label="ドロワーメニューナビゲーション">
                <ul class="drawer-nav_links">
                    <?php
                    wp_nav_menu([
                        'theme_location' => 'header-nav',
                        'container'      => false,
                        'items_wrap'     => '%3$s',
                        'walker'         => new Custom_Nav_Walker(),
                        'link_class'     => 'drawer-content_link',
                        'is_pc_menu'     => false, // ← ドロワーは false
                    ]);
                    ?>
                </ul>
            </nav>
        </div>
        <!-- Drawer Content -->

        <div class="fixed-bottom">
            <div class="fixed-bottom_tell">
                <a href="tel:0312345678">03-1234-5678</a>
                <p>(年中無休 AM9:00〜PM22:00)</p>
            </div>

            <div class="fixed-bottom_booking">
                <a href="<?php echo home_url('/reservation/'); ?>" class="btn">
                    <p class="btn_txt-top">WEB予約</p>
                    <p class="btn_txt-bottom">はこちら</p>
                </a>
            </div>
        </div>

        <div class="fixed-side">
            <a href="<?php echo home_url('/reservation/'); ?>" class="btn">
                <p>WEB予約<br>はこちら</p>
            </a>
        </div>